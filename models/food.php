<?php
class Food extends Products {
    private int $weight_gr;
    private string $food_status;

    public function __construct(string $_name, string $_price, Type $_type, int $_weight_gr) {
        parent::__construct($_name, $_price, $_type);
        $this->weight_gr = $_weight_gr;
    }

    /**
     * Get the value of food_status
     */ 
    public function getfood_status(): string
    {
        return $this->food_status;
    }

    /**
     * Set the value of food_status
     *
     */ 
    public function setfood_status($_food_status): void
    {
        if ($_food_status === "") {
            throw new Exception("Non può essere vuoto");
            
        }
        $this->food_status = $_food_status;
    }
}