<?php 
spl_autoload_register(function($className){
	$path = __DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."{$className}.php";
	echo $path;
	echo PHP_EOL;
	require $path;
});
// $d1 = new Database();
$pdo = (new PDOClient("mysql","localhost","laravel_cms","root",""))->connect();
$posts = $pdo->select("SELECT * FROM `posts`")->get();
var_dump($posts);

foreach($posts as $post){
	echo $post->id." ".$post->title;
	echo PHP_EOL;
	echo $post->body;
	echo PHP_EOL;
}

echo PHP_EOL." ======= MYSQLI ======= ".PHP_EOL;

$mysqli = (new MysqliClient("localhost","laravel_cms","root",""))->connect();
$posts = $mysqli->select("SELECT * FROM `posts`")->get();
var_dump($posts);
foreach($posts as $post){
	echo $post->id." ".$post->title;
	echo PHP_EOL;
	echo $post->body;
	echo PHP_EOL;
}
echo PHP_EOL." ======= MYSQLI HANDLER [RAW Query] ======= ".PHP_EOL;
$handlers = $mysqli->getConnection();
var_dump($handlers);
$p = $handlers->query("SELECT * FROM `posts`");
var_dump($p);
foreach($p as $post){
	echo $post->id." ".$post->title;
	echo PHP_EOL;
	echo $post->body;
	echo PHP_EOL;
}