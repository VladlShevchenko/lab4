<?php

class PlanForMultipleUsers extends Plan
{
    public $amountOfUsers;

    public function __construct($name, $description, $price, $amountOfUsers)
    {
        parent::__construct($name, $description, $price, $amountOfUsers);
        $this->amountOfUsers = $amountOfUsers;
    }

    public function getAmountOfUsers()
    {
        return $this->amountOfUsers;
    }

    public function setAmountOfUsers($amountOfUsers)
    {
        $this->amountOfUsers = $amountOfUsers;
    }

    public function __toString()
    {
        return parent::__toString()."\n Кількість користувачів ".$this->amountOfUsers.";";
    }

}