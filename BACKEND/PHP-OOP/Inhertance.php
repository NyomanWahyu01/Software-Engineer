<?php
//INHERTANCE
//inhertance adalah pewarisan kemampuan untuk menurunkan sebuah class ke class lainnya

include "data/Manager.php";

$manager = new Manager();
$manager -> name = "Nyoman";
$manager->sayHello("Trisna");

$vp = new VicePresident();
$vp -> name = "Wahyu";
$vp->sayHello("Adiguna");