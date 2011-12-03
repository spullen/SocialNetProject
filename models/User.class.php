<?php
require_once MODELS . 'ProfilePicture.class.php';
require_once MODELS . 'PersonalInfo.class.php';

class User {
	// user 
	public $id;
	public $name;
	public $email;
	public $createdAt;
	public $isAdmin;
	public $birthdate;
	public $hometown;
    public $currentLocation;
	public $gender; 
	
	// associated objects
	public $personalInfo;
	public $profilePicture;
	
	private $hashedPassword;

	function __construct($id='') {
		if(strlen($id) > 0) {
			$this->id = $id;
			$this->load();
		}
	}
	
	function createUser($data) {
		//validation
		$errors = User::validate($data);
		
		// if there are no errors then insert the record
		if($errors == null) {
			$email = $data['email'];
			$name = $data['name'];
			$gender = $data['gender'];
			$hometown = $data['hometown'];
            $date = mktime(0, 0, 0, $data['birthdate_mo'], $data['birthdate_day'], $data['birthdate_yr']);
            $birthdate = date('Y-m-d', $date);
			$hashedPassword = md5($data['password']);
			
			$sql = 'INSERT INTO Users(email, gender, hometown, birthdate, hashedPassword, name, createdAt) VALUE(' .
					'\'' . $email . '\', ' .
					'\'' . $gender . '\', ' .
					'\'' . $hometown . '\', ' .
					'\'' . $birthdate . '\', ' .
					'\'' . $hashedPassword . '\', ' .
					'\'' . $name . '\', NOW())';
					
			$db = new Database();
			if($id = $db->insert($sql)) {
                // insert a new record for the personal info
                $sql = 'INSERT INTO PersonalInfo(userID) VALUES( \'' . $id . '\')';
                $db->insert($sql);
			}
                return $id;
        }
        else {
			return $errors;
		}
	}

  /**
   * User basic information
   * @param <type> $data
   */
  function updateUser($data) {
      if(User::validateName($data['name'])) {
          $uid = $data['uid'];
          $name = $data['name'];
          $currentLocation = $data['currentLocation'];

          $set = array();
          $set[] = 'name = \'' . $name . '\'';
          $set[] = 'currentLocation = \'' . $currentLocation . '\'';

          $db = new DataBase();

          $sql = 'UPDATE Users SET ' . implode(', ', $set) . ' WHERE id = \'' . $uid . '\' LIMIT 1';

          $db->query($sql);
      }
  }

  /**
   * Get the count of the number of users
   */
  function getNumberOfUsers() {
      $db = new DataBase();

      $sql = 'SELECT COUNT(*) AS count FROM Users';
      $result = $db->select($sql);
      return reset($result);
  }

  /**
   *
   * @param <type> $gender false = male
   */
  function getNumberOfUsersByGender($gender=false) {
      $db = new DataBase();

      $genderStr = '0';
      if($gender) {
        $genderStr = '1';
      }

      $sql = 'SELECT COUNT(*) AS count FROM Users WHERE gender = \'' . $genderStr . '\'';
      $result = $db->select($sql);
      return reset($result);
  }

  /**
   *
   * @param Integer $limit
   * @return array
   */
  function popularUsers($limit=10) {
    $db = new DataBase();

    $sql = 'SELECT Users.id, Users.email, COUNT(Friends.friendID) AS FriendCount
            FROM Friends
            LEFT OUTER JOIN Users ON Users.id = Friends.friendID
            GROUP BY Friends.friendID
            ORDER BY FriendCount DESC
            LIMIT ' . $limit;

    $results = $db->select($sql);
    return $results;
  }
	
	/**
	 * Validate all of the user information
	 * @return 
	 * @param array $data
	 */
	function validate($data) {
		$errors = array();
		
		// validate email
		if(!User::validateEmail($data['email'])) {
			$errors[] = 'Email Invalid';
		}
		
		// validate email uniqueness
		if(!User::validateEmailUniqueness($email)) {
			$errors[] = 'Email Already Taken';
		}
		
		// validate name
		if(!User::validateName($data['name'])) {
			$errors[] = 'Name Required';
		}
		
		// validate password
		if(!User::validatePassword($data['password'], $data['passwordConfirmation'])) {
			$errors[] = 'Password Mismatch';
		}
		
		if(!strlen($data['gender'])) {
			$errors[] = 'Please Specify Gender';
		}

        // check to see the date is valid
        if(isset($data['birthdate_mo']) && isset($data['birthdate_day']) && isset($data['birthdate_yr'])) {
            $date = mktime(0, 0, 0, $data['birthdate_mo'], $data['birthdate_day'], $data['birthdate_yr']);
            if(!$date) {
                $errors[] = 'Birthdate Required2';
            }
            else {
                $birthdate = date('Y-m-d', $date);
            }
        }
        else {
            $errors[] = 'Birthdate Required';
        }
		
		if(!strlen($data['hometown'])) {
			$errors[] = 'You need to specify your hometown';
		}
		
		if(count($errors)) {
			return $errors;
		}
		else {
			return null;
		}
    }
	
	/**
	 * 
	 * @return 
	 * @param string $email
	 */
	function validateEmail($email) {
		if(strlen($email)) {
			if(eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,}$', $email)) {
				return true;
			}	
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}
	
	/**
	 * 
	 * @return 
	 * @param string $email
	 */
	function validateEmailUniqueness($email) {
		$db = new Database();
		$sql = 'SELECT COUNT(*) AS userCount FROM Users WHERE email = \'' . $email . '\'';
		$rs = $db->select($sql);
		if($rs['userCount'] > 0) {
			return false;
		} 
		else {
			return true;
		}
	}
	
	/**
	 * 
	 * @return 
	 * @param string $password
	 * @param string $passwordConfirmation
	 */
	function validatePassword($password, $passwordConfirmation) {
		if(strlen($password) && strlen($passwordConfirmation)) { 
			if($password == $passwordConfirmation) {
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}
	
	function validateName($name) {
		if(strlen($name)) {
			return true;
		}
		else {
			return false;
		}
	}
	
	/**
	 * Authenticate user
	 * @return false, or $used_id
	 * @param object $email
	 * @param object $password
	 */
	function authenticate($email, $password) {
		$hashedPassword = md5($password);
		
		$sql = 'SELECT id, hashedPassword FROM Users WHERE email = \'' . $email . '\' LIMIT 1';
		
		$db = new Database();
		$user = $db->select($sql);
		
		if($user['hashedPassword'] != $hashedPassword) {
			return false;
		}
		else {
			return $user['id'];
		}
	}
	
	/**
	 * 
	 * @return 
	 * @param object $id
	 */
	function getUser($id) {
		$user = new User($id);
		return $user;
	}
	
	function load() {
		$db = new Database();
		$sql = 'SELECT Users.*, 
                   PersonalInfo.id AS piID,
                   PersonalInfo.interests,
                   PersonalInfo.music,
                   PersonalInfo.movies,
                   PersonalInfo.shows,
                   PersonalInfo.books
            FROM Users
            LEFT OUTER JOIN PersonalInfo ON PersonalInfo.userID = Users.id
            WHERE Users.id = \'' . $this->id . '\'
            LIMIT 1';
		$user = $db->select($sql);
		$this->name = $user['name'];
		$this->email = $user['email'];
		$this->createdAt = $user['createdAt'];
		$this->hashedPassword = $user['hashedPassword'];
		$this->isAdmin = $user['isAdmin'];
		$this->birthdate = $user['birthdate'];
		$this->hometown = $user['hometown'];
		$this->gender = $user['gender'];
        $this->currentLocation = $user['currentLocation'];
		
    // load the personal information
    $this->personalInfo = new PersonalInfo();
    $this->personalInfo->id = $user['piID'];
    $this->personalInfo->interests = $user['interests'];
    $this->personalInfo->movies = $user['movies'];
    $this->personalInfo->books = $user['books'];
    $this->personalInfo->music = $user['music'];
    $this->personalInfo->shows = $user['shows'];

    // get the latest photo
    $sql = 'SELECT * 
            FROM ProfilePictures
            WHERE userID = \'' . $this->id . '\' AND
                  isCurrent = \'1\'
            ORDER BY uploadedOn DESC
            LIMIT 1';

    $photo = $db->select($sql);

		// load the profile picture
		$this->profilePicture = new ProfilePicture();
		$this->profilePicture->id = $photo['id'];
		$this->profilePicture->userID = $photo['userID'];
		$this->profilePicture->filename = $photo['filename'];
		$this->profilePicture->isCurrent = $photo['isCurrent'];
		$this->profilePicture->uploadedOn = $photo['uploadedOn'];
	}


    function searchUsers($data, $page = 1, $limit = 25){
        $selectFrom = ($page - 1) * $limit;

        $db = new Database();
        $user_array = array();
        $conditions = array();
        foreach($data as $key => $value){
            if(strlen($value)){
                if($key == 'name')
                    $conditions[] = 'Users.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'email')
                    $conditions[] = 'Users.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'gender')
                    $conditions[] = 'Users.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'hometown')
                    $conditions[] = 'Users.'.$key . ' LIKE \'%' . $value . '%\'';
                    
                else if($key == 'interests')
                    $conditions[] = 'PersonalInfo.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'music')
                    $conditions[] = 'PersonalInfo.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'tv')
                    $conditions[] = 'PersonalInfo.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'movies')
                    $conditions[] = 'PersonalInfo.'.$key . ' LIKE \'%' . $value . '%\'';
                else if($key == 'books')
                    $conditions[] = 'PersonalInfo.'.$key . ' LIKE \'%' . $value . '%\'';
           }
            
        }

        $sql = 'SELECT Users.*
                 FROM Users
                 LEFT OUTER JOIN PersonalInfo on PersonalInfo.userID = Users.id
                 WHERE ' . implode(' OR ', $conditions) . '
                 LIMIT ' . $selectFrom . ', ' . $limit;

        $users = $db->select($sql);
        foreach($users as $user){
            $tmp_user = new User;
            $tmp_user->id = $user['id'];
            $tmp_user->name = $user['name'];
            $tmp_user->email = $user['email'];
            $user_array[] = $tmp_user;
        }

        $sql = 'SELECT COUNT(*) AS total
                 FROM Users
                 LEFT OUTER JOIN PersonalInfo on PersonalInfo.userID = Users.id
                 WHERE ' . implode(' OR ', $conditions);

        $result = $db->select($sql);
        $totalReturned = $result['total'];
        $numberOfPages = ceil($totalReturned/$limit);

        return array($user_array, $numberOfPages);
    }
}
?>