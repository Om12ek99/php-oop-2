<?php

require_once __DIR__ . "/products.php";

//definizione della classe giochi
class Toys extends Products{
    private string $animalage;  //kitten, adult or senior
    private string $size;       //small or large

    //definizione del construct figlio
    public function __construct(string $name, string $price, string $image, string $type,  string $animalage, string $size){
        parent::__construct($name, $price, $type, $image);
    }
}
?>