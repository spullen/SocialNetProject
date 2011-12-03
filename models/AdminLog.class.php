<?php
class AdminLog {
    public $id;
    public $userID;
    public $remoteAddr;
    public $requestURI;
    public $queryString;
    public $requestMethod;
    public $referer;
    public $createdAt;

    /**
     * Get the latest admin log entries
     */
    public function getLatest() {
        $db = new DataBase();

        $sql = 'SELECT * FROM AdminLog ORDER BY createdAt DESC LIMIT 100';

        $results = $db->select($sql);

        $adminLogs = array();
        foreach($results as $result) {
            $adminLog = new AdminLog();
            $adminLog->id = $result['id'];
            $adminLog->userID = $result['userID'];
            $adminLog->remoteAddr = $result['remoteAddr'];
            $adminLog->requestURI = $result['requestURI'];
            $adminLog->queryString = $result['queryString'];
            $adminLog->requestMethod = $result['requestMethod'];
            $adminLog->referer = $result['referer'];
            $adminLog->createdAt = $result['createdAt'];
            $adminLogs[] = $adminLog;
        }

        return $adminLogs;
    }
}
?>
