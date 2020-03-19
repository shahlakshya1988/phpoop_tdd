<?php 
class PDOClient extends Database{
	protected $dsn;

	public function __construct($driver,$host,$db_name,$db_user,$db_password){	
		parent::__construct($host,$db_name,$db_user,$db_password);
		$this->dsn = "{$driver}:host={$this->host};dbname={$this->db_name}";
	}

	public function connect(){
		var_dump($this->db_user);
		var_dump($this->db_password);
		var_dump($this->db_name);
		try{
			$this->handler = new PDO($this->dsn,$this->db_user,$this->db_password);
		}catch(Exception $e){
			die($e->getMessage());
		}
		return $this;
	}
	public function get(){
		return $this->statement->fetchAll(PDO::FETCH_OBJ);
	}
}