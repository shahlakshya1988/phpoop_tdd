<?php 
/** instance of this class can't be created ***/
abstract class Database{
	protected $handler;
	protected $statement;
	protected $host;
	protected $db_name;
	protected $db_user;
	protected $db_password;
	public function __construct($host,$db_name,$db_user,$db_password){
		$this->host = $host;
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_password = $db_password;
	}
	abstract public function connect();
	public function select($query){
		$this->statement = $this->handler->query($query);
		return $this;
	}
	public function getConnection(){
		return $this->handler;
	}
	abstract public function get();
}

