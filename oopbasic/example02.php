<?php 
class Video{
    protected $type;
    private $duration;
    private $published = false;
    private $title;
    private $playStatus = false;
    public function __construct(string $type,float $duration,bool $published,string $title){
        $this->type = $type;
        $this->duration = $duration;
        $this->published = $published;
        $this->title = $title;
    }
    public function play(){
        if($this->getPublished()){
            $this->playStatus = true;
        }else{
            $this->playStatus = false;
        }
        return $this->published ? "The Video is Playing" : "The Vidoe Is Not Available Yet";
    }
    public function pause(){
        if($this->playStatus){
            return "The Video is Paused";
        }
        //return $this->published ?  : "";
    }
    public function getTitle(){
        return $this->title;
    }
    public function getType(){
        return $this->type;
    }
    public function getDuration(){
        return $this->duration;
    }
    public function getPublished(){
        return $this->published ? "Video Is Published" : "Video Is Not Available Yet";
    }



    public function setPublished(bool $flag){
        $this->published = $flag;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setType(string $type){
        $this->type = $type;
    }
    public function setDuration(float $duration){
        $this->duration = $duration;
    }
}

$video1 = new Video("mp4",30.10,true,"Welcome to PHP OOp");
var_dump($video1);
echo $video1->play();
echo PHP_EOL;
echo $video1->pause();
echo PHP_EOL;
//echo $video1->title;
echo $video1->getTitle();
echo PHP_EOL;
//echo $video1->type;
echo $video1->getType();
echo PHP_EOL;
echo $video1->setType("mvk");
echo $video1->getType();