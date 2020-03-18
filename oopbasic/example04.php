<?php
class Database{
	static private $pdo;
	static public $operators = ['=',"<",">","and","or","<=",">=","like"];
	private $table = "Table";
	
	public static function connect(string $method){
		self::$pdo = $method; 
		//echo $this->table; /**error**/
		$obj = new static;
		echo $obj->table;
	}
	public static function create(array $data){
		var_dump("Creating the new record with ".self::$pdo);
		//echo $this->table; /**error**/
		$obj = new static;
		echo $obj->table;
	}
	
	public function getVar(){
		echo PHP_EOL."==== Simple Method Accessing Static Property====".PHP_EOL;
		var_dump(self::$pdo);
		var_dump(self::$operators);
		echo $this->table;
	}
}
var_dump(Database::$operators);
//var_dump(Database::$pdo);
Database::connect("SOME PDO CONNECTION");
Database::create(["name"=>"Some Name","gender"=>"Male"]);
$d1 = new Database();
$d1->getVar();