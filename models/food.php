<?php

require_once __DIR__ . "/products.php";

class Food extends Products {
    private bool $canned;
    private string $foodName;
    private string $mainIngredient;

    public function __construct(string $name, string $price, string $type, string $image, string $canned, string $foodName, string $mainIngredient){
        parent::__construct($name, $price, $type, $image); 

        $this->foodName = $foodName;
        $this->mainIngredient = $mainIngredient;
     }

     //inserimento del booleano
     public function setCanned($canned)
     {
         $this->canned = $canned;
     }

     public function getfoodName(){
        return $this->foodName;
     }
     public function getmainIngredient(){
        return $this->mainIngredient;
     }
}

?>