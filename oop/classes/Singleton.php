<?php

class Singleton
{
    private static $instance;
    private $plan_info;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPlanInfo()
    {
        return $this->plan_info;
    }

    public function setPlanInfo($plan_info)
    {
        $this->plan_info = $plan_info;
    }

}