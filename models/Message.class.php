<?php

class Message {

    public $mID;
    public $message;
    public $sentTo;
    public $sentBy;
    public $sentAt;

    function __construct($id='') {
        if(strlen($id) > 0) {
			$this->id = $id;
			$this->messageLoad();
		}
    }

    function createMessage($data){
        $errors = Message::validate($data);

        if($errors == null){
            $message = $data['message'];
            $sentTo = $data['sentTo'];
            $sentBy = $data['sentBy'];
            $sentAt = $data['sentAt'];

            $sql = 'INSERT INTO Messages(fromUserID, toUserID, message, sentAt) VALUE('.
                '\'' . $sentBy . '\', ' .
                '\'' . $sentTo . '\', ' .
                '\'' . $message . '\', ' .
                '\'' . $sentAt . '\', NOW())';
            $mID = $db->insert($sql);
            return $mID;
        }
        else {
			return $errors;
		}
    }

    function getMessage($mID){
        $message = new Message($mID);
        return $message;
    }

    function messageLoad($userID){
        $db = new Database();
        $sql = 'SELECT Messages.*, Users.name
                FROM Messages
                LEFT OUTER JOIN Users on Users.id = Messages.fromUserID
                WHERE Messages.toUserID = \'' . $userID . '\'
                ORDER BY sentAt DESC';
        $messages = $db->select($sql);
        return $messages;
    }
}

?>
