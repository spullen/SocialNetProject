<?php
class ProfilePicture {
	public $id;
	public $userID;
	public $filename;
	public $isCurrent;
	public $uploadedOn;
	
	function getUserPictures($userID) {
		$db = new Database();
		
		$sql = 'SELECT * FROM ProfilePictures WHERE userID = \'' . $userID . '\' ORDER BY uploadedOn';
		$pictures = $db->select($sql, false);
		
		$pictureObjs = array();
		// for each of the rows create a new object
		foreach($pictures as $picture) {
			$pic = new ProfilePicture();
			$pic->id = $picture['id'];
			$pic->userId = $picture['userID'];
			$pic->filename = $picture['filename'];
			$pic->isCurrent = $picture['isCurrent'];
			$pic->uploadedOn = $picture['uploadedOn'];
			$pictureObjs[] = $pic;
		}
		return $pictureObjs;
	}

    function setCurrentPicture($pictureID, $userID) {
        $db = new Database();

        $sql = 'UPDATE ProfilePictures SET isCurrent = 0 WHERE userID = \'' . $userID . '\'';
        $db->query($sql);

        $sql = 'UPDATE ProfilePictures SET isCurrent = 1 WHERE id = \'' . $pictureID . '\' LIMIT 1';
        $r = $db->query($sql);
    }
}
?>