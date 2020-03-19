<?php 
spl_autoload_register(function($className){
	$path = __DIR__.DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."{$className}.php";
	require $path;
});
$d1 = new Database();