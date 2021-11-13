<?php
class Animal {
    public $cry = "bowbow";
    function bow () {
        echo $this->cry;
    }
}

class Dog extends Animal {
    public $cry ="わんわん";
}

class Cat extends Animal {
    public $cry ="なんなん";
}

$dog = new Dog();
$dog->bow();

$cat = new Cat();
$cat->bow();
?>