<?php
class PersonalInfo {
	public $id;
	public $userID;
	public $interests;
	public $music;
	public $shows;
	public $movies;
	public $books;

  function update($data) {
      $db = new DataBase();

      $set = array();
      $set[] = 'interests = \''. br2nl($data['interests']) .'\'';
      $set[] = 'music = \''. br2nl($data['music']) .'\'';
      $set[] = 'shows = \''. br2nl($data['shows']) .'\'';
      $set[] = 'movies = \''. br2nl($data['movies']) .'\'';
      $set[] = 'books = \''. br2nl($data['books']) .'\'';

      $sql = 'UPDATE PersonalInfo SET ' .  implode(', ', $set) . ' WHERE userID = \'' . $data['uid'] . '\' LIMIT 1;';

      //echo $sql;
      //exit;

      $db->query($sql);
  }
}
?>