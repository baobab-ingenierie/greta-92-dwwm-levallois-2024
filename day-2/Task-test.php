<?php
echo "<pre>";

include_once "./class/Task.class.php";
include_once "./class/Iron.class.php";

$task1 = new Task("Achat baguette", 1.15);
var_dump($task1);

$task2 = new Iron("Repassage", 5.2, 12);
echo "Coût total : {$task2->calculatePrice()}\n";
var_dump($task2);