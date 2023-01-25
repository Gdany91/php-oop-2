<?php

class Product {
    
    public $price;
    public $category;
    public $type;
    

    public function __construct($price, $category, $type) {

        
        $this -> price = $price;
        $this -> category = $category;
        $this->type = $type;
    }

    public function getCard() {
        

        return $this -> price
        . " <br> " . $this -> category 
        . " <br>" . $this -> type  
        ;
    }
}


class Toys extends Product{

    public $toys_name;
    

    public function __construct( $price, $category, $type, $toys_name ) {

        $this -> price = $price;
        $this -> category = $category;
        $this->type = $type;
        $this -> toys_name = $toys_name;
      
    }

    public function getName(){

        return $this->getCard() . " <br> " . $this->toys_name . " <br> <br> <br> ";


    }





}



class Food extends Product{

    
    public $Food_name;
    

    public function __construct( $price, $category, $type, $food_name ) {

        $this -> price = $price;
        $this -> category = $category;
        $this->type = $type;
        $this -> food_name = $food_name;
        
    }

    public function getName(){

        return $this->getCard() . " <br> " . $this->food_name . " <br> <br> <br> ";
    }


}

$ball = new Toys('7.50 £', 'cat', 'toys', 'magic ball');
$kibble = new Food('9.50 £', 'dog', 'food', 'gnammy');
$bone = new Toys('12 £', 'dog', 'toys', 'amazing bone');
$catFood = new Food('21 £', 'cat', 'food', 'deluxe');


echo '<h1>';

echo $ball -> getName();
echo $kibble -> getName();
echo $bone -> getName();
echo $catFood -> getName();


echo "</h1>";