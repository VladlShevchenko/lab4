<?php


include_once './classes/Plan.php';
include_once './classes/DefaultPlan.php';
include_once './classes/PlanForMultipleUsers.php';
include_once './classes/PlanService.php';
include_once './classes/Singleton.php';

$defaultPlan = new DefaultPlan("Довга перспектива",
    "Включає основні можливості антивірусу.", 100, 2);

$planForMultipleUsers = new PlanForMultipleUsers("Для 2+ користувачів",
    "Для багатьох акаунтів", 300, 3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Protected OOP</title>
    <style>
        .container-oop {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container-oop">
    <h1>OOP implementation</h1>
    <?php
    echo $defaultPlan;
    echo "<br>";
    echo "<br>";

    echo $planForMultipleUsers;

    echo "<br>";
    echo "<br>";

    echo "Сума звичайного плану на ".$defaultPlan->getDurability()." = ".PlanService::calculateSum($defaultPlan);
    echo "<br>";
    echo "<br>";
    echo "Сума плану для $planForMultipleUsers->amountOfUsers користувачів = "
        .PlanService::calculateSum($planForMultipleUsers);

    ?>

</body>

</html>