<?php 
class Video{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function play(){
        return $this->published ? "Video is Playing" : "Video is not Available yet";

    }
    public function pause(){
        return $this->published ? "Video Is Playing" : "" ;
    }
}
header("Content-Type:text/plain",true);
$v1 = new Video();
$v1->author = "Shah Lakshya";
// echo print_r($v1);
echo PHP_EOL;
// var_dump($v1);
echo "V1";
echo PHP_EOL;
echo $v1->play();
echo PHP_EOL;
echo $v1->pause();
echo PHP_EOL;
echo $v1->author ;
echo PHP_EOL;
echo PHP_EOL;
echo "V2";
echo PHP_EOL;
$v2 = new Video();
$v2->published = true;
echo $v2->play();
echo PHP_EOL;
echo $v2->pause();
echo PHP_EOL;
echo $v2->author ;