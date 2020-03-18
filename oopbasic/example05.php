<?php
class Database{
	static private $pdo;
	static public $operators = ['=',"<",">","and","or","<=",">=","like"];
	private $table = "Table";
	
	public function setTable(string $table){
		$this->table = $table;
		return $this;
	}
	
	public static function connect(string $method){
		static::$pdo = $method; 
		//echo $this->table; /**error**/
		$obj = new static;
		echo $obj->table;
		return new static;
	}
	public static function create(array $data){
		var_dump("Creating the new record with ".static::$pdo);
		//echo $this->table; /**error**/
		$obj = new static;
		echo $obj->table;
		return new static;
	}
	
	public function getVar(){
		echo PHP_EOL."==== Simple Method Accessing Static Property====".PHP_EOL;
		var_dump(static::$pdo);
		var_dump(static::$operators);
		echo $this->table;
		return $this;
	}
	
	public function insert(array $data){
		echo PHP_EOL."==== Simple Method Inserting ====".PHP_EOL;
		echo "Connected Throught ".static::$pdo;
		echo PHP_EOL;
		echo "Insert into {$this->table} values ".json_encode($data);
		return $this;
	}
}
var_dump(Database::$operators);
//var_dump(Database::$pdo);
Database::connect("SOME PDO CONNECTION")->create(["name"=>"Some Name","gender"=>"Male"]);
$d1 = new Database();
$d1->getVar();

echo PHP_EOL;
$d1->setTable("users")->insert(["name"=>"Some Name","gender"=>"Male"]);
echo PHP_EOL."==== Other Method ====".PHP_EOL;
Database::connect("SOME PDO CONNECTION")->create(["name"=>"Some Name 2","gender"=>"Male"])->setTable("users")->insert(["name"=>"Some Name 2","gender"=>"Male"]);

/** static method returns new static; normal method -> return this;