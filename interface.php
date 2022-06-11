<?php

interface Mammals {
    public function walking();
}

class Man implements Mammals {
    public function walking() {echo 'Man walk on two legs.';}
}
class Cat implements Mammals {
    public function walking() {echo 'Cat walk on four legs.';}
}
class Dog implements Mammals {
    public function walking() {echo 'Dog walk on four legs.';}
}
class Beer implements Mammals {
    public function walking() {echo 'Beer walk on four legs.';}
}

$man=new Man();
$cat=new Cat();
$dog=new Dog();
$beer=new Beer();
$animals=[$man,$cat,$dog,$beer];
foreach ($animals as $animal){
    $animal->walking();
    echo '<br>';
}
