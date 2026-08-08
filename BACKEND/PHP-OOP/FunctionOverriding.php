<?php
//FUNCTION OVERRIDING 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Wahyu";
$manager->sayHello("Nyoman");

$vp = new VicePresident();
$vp->name = "Dodi";
$vp->sayHello("Nyoman");

