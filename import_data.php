<?php
  require_once 'core/secure.php';
	require_once 'core/admin.php';

  require_once MODELS . 'User.class.php';

  if($_GET['action'] == 'import') {
      // open the file, fd = file descriptor
      $fd = fopen('data.txt', 'r');

    if($fd != null) {
        $line = null;
        while(($line = fgets($fd, 80)) != null) {
            /*
             * Parts:
             * 0: firstname
             * 1: lastname
             * 2: gender ('M' or 'F')
             * 3: hometown
             * 4: location
             * 5: dob (date)
             * // rest is not valid for our schema
             */
            $parts = explode(',', $line);

            foreach($parts as &$part)
                $part = mysql_escape_string(trim($part));

            $user = array();
            $user['name'] = '\'' . ucfirst($parts[0]) . ' ' . ucfirst($parts[1]) . '\'';
            $user['email'] = '\'' . $parts[0] . '.' . $parts[1] . '@test.com' . '\'';
            $user['hashedPassword'] = '\'' . md5('dummyDataPerson') . '\'';
            $user['birthdate'] = '\'' . $parts[5] . '\'';
            $user['hometown'] =  '\'' . $parts[3] . '\'';
            $user['currentLocation'] = '\'' . $parts[4] . '\'';
            if($parts[2] == 'M') {
                $user['gender'] = '\'' . '0' . '\'';
            }
            else {
                $user['gender'] = '\'' . '1' . '\'';
            }

            $sql = 'INSERT INTO Users(name, email, hashedPassword, birthdate, hometown, currentLocation, gender, createdAt) VALUES ('.
            $sql .= $user['name'] . ', ';
            $sql .= $user['email'] . ', ';
            $sql .= $user['hashedPassword'] . ', ';
            $sql .= $user['birthdate'] . ', ';
            $sql .= $user['hometown'] . ', ';
            $sql .= $user['currentLocation'] . ', ';
            $sql .= $user['gender'] . ', ';
            $sql .= 'NOW());';

            $db = new Database();

            $id = $db->insert($sql);

            $sql = null;
            $sql = 'INSERT INTO PersonalInfo(userID) VALUES(' . $id . ');';
            $db->insert($sql);

            $sql = null;
        }
        echo 'Done<br />';
        fclose($fd);
      }
      else {
          var_dump('Couldn\'t Open File');
      }
  }
  else if($_GET['action'] == 'friend') {
    /*
     * Should be run like so to get the 1,000,000 users
     * import_data.php?action=friend&start=1
     *
     *
     *  SELECT COUNT( * ) /2 AS count FROM `Friends`
     */
    $db = new Database();

    $userCount = User::getNumberOfUsers();

    $totalFriendCount = 0;
    for($i = 1; ($i <= $userCount && $totalFriendCount < 1500000); $i++) {
        // select 100 users that the user is not friends with
        $friendIDs = $db->select('SELECT Friends.friendID FROM Friends WHERE Friends.userID = \'' . $i . '\'');
        $friendIDList = array();
        foreach($friendIDs as $friendID) {
            $friendIDList[] = $friendID['friendID'];
        }
        if(count($friendIDList) == 0) {
            $sql = 'SELECT Users.id FROM Users WHERE Users.id <> \'' . $i . '\' ORDER BY RAND() LIMIT 100';
        }
        else {
            $sql = 'SELECT Users.id FROM Users WHERE Users.id NOT IN(' . implode(', ', $friendIDList) . ') AND Users.id <> \'' . $i . '\' ORDER BY RAND() LIMIT 100';
        }
        $ids = $db->select($sql);

        $inserts = array();
        // for each user in users build an insert into values
        $count = 0;
        foreach($ids as $id) {
            $inserts[] = '( \'' . $i . '\', \'' . $id['id'] . '\', NOW())';
            $inserts[] = '( \'' . $id['id'] . '\', \'' . $i . '\', NOW())';
            if($count == 100) {
                break;
            }
            $count++;
        }
        $totalFriendCount += $count;

        // combine all of the insert into values statement and execute query
        $sql = 'INSERT INTO Friends(userID, friendID, friendedOn) VALUES ';

        if(count($inserts) > 0) {
            $sql .= implode(', ', $inserts);
            $db->query($sql);
        }
    }
    echo 'Done!<br />';
  }
  else {
      echo 'Invalid or no action specified';
  }
  
?>
