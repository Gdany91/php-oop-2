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
    

    public function __construct(, $price, $category, $type, $toys_name ) {

        /* $this -> price = $price;
        $this -> category = $category;
        $this->type = $type; */
        $this -> toys_name = $toys_name;
      
    }





}



class Food extends Product{

    
    public $Food_name;
    

    public function __construct( $price, $category, $type, $food_name ) {

     /* $this -> price = $price;
        $this -> category = $category;
        $this->type = $type; */
        $this -> food_name = $food_name;
        
    }


}

