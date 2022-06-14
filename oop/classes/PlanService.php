<?php

class PlanService
{
    public static function calculateSum(Plan $plan)
    {
        if ($plan instanceof DefaultPlan) {
            return $plan->getDurability() * $plan->getPrice();
        } elseif ($plan instanceof PlanForMultipleUsers) {
            return $plan->getAmountOfUsers() * $plan->getPrice();
        }
    }
}