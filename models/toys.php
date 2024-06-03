<?php

require_once __DIR__ . "/products.php";

//definizione della classe giochi
class Toys extends Products{
    private string $animalAge;  //kitten, adult or senior
    private string $size;       //small or large

    //definizione del construct figlio
    public function __construct(string $name, string $price, string $image, string $type,  string $animalAge, string $size){
        parent::__construct($name, $price, $type, $image);          //chirificazione degli attributi presi dal padre
        $this->animalAge = $animalAge;
        $this->size=$size;
    }
        // conversione in valori visibili ed accessibili
        public function getAnimalAge(){
            return $this->animalAge;
        }
        public function getSize(){
            return $this->size;
        }
}
?>