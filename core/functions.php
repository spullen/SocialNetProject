<?php

    function br2nl($string) {
        return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
    }

    function logRequest() {
        $db = new DataBase();

        // assemble the data
        $log = array();
        $log[] = 'NULL';
        if(isset($_SESSION['user_id']))
            $log[] = '\'' . $_SESSION['user_id'] . '\'';
        else
            $log[] = 'NULL';
        $log[] = '\'' . $_SERVER['REMOTE_ADDR'] . '\'';
        $log[] = '\'' . $_SERVER['REQUEST_URI'] . '\'';
        $log[] = '\'' . $_SERVER['QUERY_STRING']. '\'';
        $log[] = '\'' . $_SERVER['REQUEST_METHOD'] . '\'';
        $log[] = '\'' . $_SERVER['HTTP_REFERER'] . '\'';
        $log[] = 'NOW()';

        // insert the data
        $sql = 'INSERT INTO AdminLog VALUES( ' . implode(', ', $log) . ');';
        $db->insert($sql);
    }

    function isAjaxRequest() {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
    }

?>
