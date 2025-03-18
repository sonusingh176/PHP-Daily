<!-- What is constructor in PHP? -->





<?php 

class Car{

    public $brand;
    public $color;

    //constructor
    public function __construct($brand,$color){
        $this->brand= $brand;
        $this->color = $color;
    }

    //Method

    public function getCarDetails(){
        return "This is a $this->color $this->brand.";
    }
}

// Object Creation
$car1 = new Car("Toyota", "White");
echo $car1->getCarDetails(); // Output: This is a Red Toyota.
?>