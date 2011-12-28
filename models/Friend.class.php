<?php
require_once MODELS . 'User.class.php';

class Friend {

    function __construct() {
    }

    /**
     * Return the number of friends in the system
     * Number of records/2 (since we store a directed graph of the friendship
     * @return numOfFriends
     */
    function numberOfFriendships() {
        $numOfFriends = 0;

        $db = new Database();

        $sql = 'SELECT COUNT(*) as count FROM Friends';

        $result = $db->select($sql);

        $numOfFriends = $result['count'] / 2;

        return $numOfFriends;
    }

    /**
     * 
     * @param Integer $userID
     * @param Integer $limit (Optional, Default=25)
     */
    function getUserFriends($userID, $limit = 25) {
        $db = new DataBase();

        $sql = 'SELECT Users.id, Users.name
                FROM Users
                LEFT OUTER JOIN Friends ON Friends.friendID = Users.id
                WHERE Friends.userID = \'' . $userID . '\'
                ORDER BY RAND() LIMIT ' . $limit;
        $results = $db->select($sql);
        return $results;
    }

    /**
     * Browse Friends with pagination
     * @param <type> $userID
     * @param <type> $page
     * @param <type> $limit
     */
    function browseUserFriends($userID, $page = 1, $limit = 25) {
        $selectFrom = ($page - 1) * $limit;
        $sql = 'SELECT Users.id, Users.name
                FROM Users
                LEFT OUTER JOIN Friends On Friends.friendID = Users.id
                WHERE Friends.userID = \'' . $userID . '\'
                ORDER BY Users.name
                LIMIT ' . $selectFrom . ', ' . $limit;
        $db = new Database();
        $results = $db->select($sql);
        return $results;
    }

    /**
     * Find out how many friends a particular user has
     * @param <type> $userID
     * @return <type>
     */
    function getUserFriendCount($userID) {
        $sql = 'SELECT COUNT(*) as count FROM Friends WHERE userID = \'' . $userID . '\'';
        $db = new Database();
        $result = $db->select($sql);
        return $result['count'];
    }

    /**
     *
     * @param Integer $userID
     * @param Integer $limit
     * @return $results Array
     */
    function getRecommendations($userID, $limit = 50) {
        $db = new DataBase();

        // I tried this as a nested query and it took 20 minutes, lol
        // 20111228 - The better way to do this would have been to periodically generate the recommendations and 
        // store them in their own table.
        $sql = 'SELECT F.friendID FROM Friends F WHERE F.userID = \'' . $userID . '\'';
        $friendIDs = $db->select($sql);
        $ids = array();
        foreach($friendIDs as $key => $friendID) {
            $ids[] = $friendID['friendID'];
        }

        if(count($ids) > 0) {
            $ids = implode(', ', $ids);
            $sql = 'SELECT Users.*, COUNT(Users.id) AS FriendedCount
                    FROM Users
                    LEFT OUTER JOIN Friends ON Friends.friendID = Users.id
                    LEFT OUTER JOIN Friends AS MyFriends ON MyFriends.friendID = Friends.userID
                    WHERE MyFriends.userID = \''. $userID .'\' AND
                          Users.id <> \'' . $userID . '\' AND
                          Users.id NOT IN(' . $ids . ')
                    GROUP BY Users.id
                    ORDER BY FriendedCount DESC
                    LIMIT ' . $limit;
            $results = $db->select($sql);
        }
        else {
            $results = array();
        }
        return $results;
    }

    /**
     * Checks to see if a user is friendable (i.e. Not friends already)
     * @param Integer $user1ID user
     * @param Integer $user2ID potential friend
     * @return Boolean
     */
    function friendable($user1ID, $user2ID) {
        if($user1ID == $user2ID) {
            return false;
        }
        $db = new DataBase();

        $sql = 'SELECT COUNT(*) as count FROM Friends WHERE userID = \'' . $user1ID . '\' AND friendID = \'' . $user2ID . '\'';
        $result = $db->select($sql);

        if($result['count'] == 0) {
            return true;
        }

        return false;
    }

    /**
     * Create a friendship
     * @param <type> $userID
     * @param <type> $newFriendID
     * @return <type>
     */
    function createFriendship($userID, $newFriendID) {
        if(Friend::friendable($userID, $newFriendID)) {
            $db = new DataBase();
            $sql = 'INSERT INTO Friends VALUES ( \'' . $userID . '\', \'' . $newFriendID . '\', NOW()), ( \'' . $newFriendID . '\', \'' . $userID . '\', NOW())';
            if($result = $db->query($sql)) {
                return true;
            }
            else {
                return false;
            }
        }
        return false;
    }

    /**
     * End a friendship
     * @param <type> $userID
     * @param <type> $friendID
     * @return <type>
     */
    function removeFriendship($userID, $friendID) {
        $db = new Database();
        $sql = 'DELETE FROM Friends WHERE (userID = \'' . $userID . '\' AND friendID = \'' . $friendID . '\') OR
                                          (userID = \''. $friendID . '\' AND friendID = \'' . $userID . '\') LIMIT 2';
        if($result = $db->query($sql)) {
            return true;
        }
        else {
            return false;
        }
        return false;
    }
}
?>
