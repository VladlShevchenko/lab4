<?php

class DefaultPlan extends Plan
{
    public $durability;

    public function __construct($name, $description, $price, $durability)
    {
        parent::__construct($name, $description, $price, $durability);
        $this->durability = $durability;
    }

    public function getDurability()
    {
        return $this->durability;
    }

    public function setDurability($durability)
    {
        $this->durability = $durability;
    }

    public function __toString()
    {
        return parent::__toString()."\n Тривалість дії ".$this->durability.";";
    }


}