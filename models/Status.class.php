<?php

class Status {
    public $id;
    public $userID;
    public $message;
    public $createdOn;

    function getLatestMessage($uid) {
        $db = new DataBase();

        $sql = 'SELECT * FROM Status WHERE userID = \'' . $uid . '\' ORDER BY createdAt DESC LIMIT 1';

        $message = $db->select($sql);

        if($message) {
            $status = new Status();
            $status->id = $message['id'];
            $status->userID = $message['userID'];
            $status->message = $message['message'];
            $status->createdOn = $message['createdAt'];
            return $status;
        }
        else {
            return null;
        }
    }

    /**
     * Updates the status message
     * @param <type> $uid
     * @param <type> $message
     */
    function updateMessage($uid, $message) {
        $db = new DataBase();

        $data = array();
        $data[] = '\'' . $uid . '\'';
        $data[] = '\'' . $message . '\'';

        $dataStr = implode(', ', $data);

        $sql = 'INSERT INTO Status(userID, message, createdAt) VALUES ( ' . $dataStr . ', NOW())';
        $id = $db->insert($sql);

        if($id) {
            $status = Status::getLatestMessage($uid);
            return $status->message;
        }
        else {
            return null;
        }
    }

    /**
     *
     * @param Integer $userID
     * @param Integer $limit (Optional, defaults to 50)
     * @return $results Array
     */
    function getFriendStatuses($userID, $limit = 50) {
        $sql = 'SELECT Status.*, 
                       Users.name,
                       Users.id AS userID
                FROM Status
                LEFT OUTER JOIN Friends ON Friends.friendID = Status.userID
                LEFT OUTER JOIN Users ON Friends.friendID = Users.id
                WHERE Friends.userID = \'' . $userID . '\'
                ORDER BY Status.createdAt DESC
                LIMIT ' . $limit;
        $db = new DataBase();
        $results = $db->select($sql);
        return $results;
    }
}
?>
