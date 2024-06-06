<?php

class Type {
    private string $name;
    private string $icon;

    public function __construct(string $_name) {
        $this->name = $_name;
    }


    /**
     * Set the value of icon
     *
     */ 
    public function setIcon($_icon): void
    {
        $this->icon = $_icon;
    }

    /**
     * Get the value of icon
     */ 
    public function getIcon(): string
    {
        return $this->icon;
    }
}