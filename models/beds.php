<?php
require_once __DIR__ . "/products.php";

// definizione della classe Beds
class Beds extends Products{
    private string $size;

    public function __construct(string $name, string $price, string $type, string $image, string $size){
        parent::__construct($name, $price, $type, $image);          //chirificazione degli attributi presi dal padre
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
}

?>