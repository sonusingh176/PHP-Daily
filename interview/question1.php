<!-- Q1 : how to define a class in php? -->

<!-- 
    1.) PHP me class ko class keyword ka use karke define kiya jata hai.
    2.) new ClassName() Class ka instance create karne ke liye.

        
    🎯 Key Points
    ✔ Class ek blueprint hota hai objects banane ke liye.
    ✔ Methods aur properties ko access karne ke liye $this-> ka use hota hai.
    ✔ Object new keyword ka use karke create hota hai.
 -->



<?php

// Defining PHP Classes
class Books{
    
    //Member Variable
    //Use var to create a property or variable of class. it is equivalent to the public keyword.
    var $price;
    public $title;


    //Member function
    function setPrice($par){
        $this->price=$par;  //The variable $this is a special variable and it refers to the same object ie. itself.
    }

    function getPrice(){
        echo $this->price."<br/>";
    }


    function setTitle($par){
        $this->title=$par;
    }

    function getTitle(){
        echo $this->title."<br/>";
    }

}

// Creating Objects in PHP
$physics = new Books;

// Calling Member Functions
$physics->setPrice(10);
$physics->getPrice();

$physics->setTitle("Physics for High School");
$physics->getTitle();



?>