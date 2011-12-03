<?php

class Database {
	
	private $dbConn = null;
	
	public function __construct() {}
	
	/**
	 * 
	 * @return 
	 */
	private function connect() {
		if(!$this->dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME)) {
			// log error
			var_dump('Error Connecting To Database');
		}
	}
	
	/**
	 * 
	 * @return 
	 */
	private function close() {
		$this->dbConn->close();
	}
	
	/**
	 * 
	 * @return 
	 */
	private function transaction_start() {
		$this->dbConn->autocommit(false);
	}
	
	/**
	 * 
	 * @return 
	 */
	private function transaction_commit() {
		$this->dbConn->commit();
	}
	
	/**
	 * Translate the record set to
	 * key => value
	 * @return 
	 * @param object $results
	 */
	private function buildResultArray($results) {
		$return = array();
		while ($row = $results->fetch_assoc()){
			$return[] = $row;
		}
		return $return;
	}
	
	/**
	 * A query statement that returns the number
	 * of affected rows
	 * @return string $affected_rows
	 * @param object $sql
	 */
	public function query($sql) {
		$this->connect();
		if(!$result = $this->dbConn->query($sql)) {
			// log error
			var_dump('DB Error: ' . $this->dbConn->error);
			return false;
		} 
		$affectedRows = $this->dbConn->affected_rows;
		$this->close();
		return $affectedRows;
	}
	
	/**
	 * Selects a record set and gets the 
	 * array association of the rs
	 * @return Array
	 * @param object $sql
	 */
	public function select($sql, $reset=true) {
		$this->connect();
		if(!$results = $this->dbConn->query($sql)) {
			// log error
			var_dump($this->dbConn->error);
			return false;
		}
		$results = $this->buildResultArray($results);
		if(count($results) == 1 && $reset) {
			$results = reset($results);
		}
		$this->close();
		return $results;
	}
	
	/**
	 * 
	 * @return 
	 * @param object $sql
	 * @param object $transaction[optional]
	 */
	public function insert($sql) {
		$this->connect();
		if(!$result = $this->dbConn->query($sql)) {
			// log error
			var_dump($this->dbConn->error);
			return false;
		}
		$insertID = $this->dbConn->insert_id;
		$this->close();
		return $insertID;
	}
	
}
?>