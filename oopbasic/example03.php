<?php 
class Animal{
    public $weight;

    public function eat(){
        var_dump("All Animals Eat as a  ".strtolower(get_class()));
    }
    public function reproduct(){
        var_dump("All Animals Reproduct as ".strtolower(get_class()));
    }
}
class Mammal extends Animal{
    public $heartRate;
    public function breath(){
        var_dump("I can Breath as I am a ".strtolower(get_class()));
    }
}

class Dog extends Mammal{
    public $color;
    public function bark(){
        var_dump("I Can Bark, as I am a ".strtolower(get_class()));
    }

    public function chase(){
        var_dump("I am chasing a Rabit as a ".strtolower(get_class()));
    }
    public function eat(){
        var_dump("I only Eat Biscut ".strtolower(get_class()));
    }
}
$brown  = new Dog();
var_dump($brown);
$brown->weight = "7.3";
$brown->heartRate = "ok";
$brown->color = "Brown";
var_dump($brown);

$brown->bark();
$brown->chase();
$brown->breath();
$brown->reproduct();
$brown->eat();