<?php
// CONSTANT
//properties di cels bisa diubah , mirip seperti variable. 
//kita membuat contstant, data yang tidak bisa diubah 
 
require_once "data/Person.php";
define ("APPLICATION", "Belajar PHP OOP BY PZN");
const APP_VERSION = "1.0.0";

Echo APPLICATION . PHP_EOL;
Echo APP_VERSION . PHP_EOL;
echo person::AUTOR . PHP_EOL;

// SELF KEYWORD
// PROPERTIES vs COSNTANT