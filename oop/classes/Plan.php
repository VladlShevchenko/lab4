<?php

class Plan
{
    public $name;
    public $description;
    public $price;

    /**
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __toString()
    {
        return "План: ".$this->name."; \nОпис ".$this->description."; \nЦіна ".$this->price.";";
    }


}