<?php
//VISIBILITY 
//VISIBILITY adalah kemampuan properties, function dan cosntast dapat diakses dari mana saja 
// ACCSES LEVEL
//Modifier : Public = Class : Y, Subclass : Y, World : Y. 
//Modifier : Protected = Class : Y, Subclass : Y, World : N. 
//Modifier : Private = Class : Y, Subclass : N, World : N. 

require_once "data/Product.php";
$product = new Product("Apple", 20000);

echo $product->getName() . PHP_EOL; 
echo $product->getPrice() . PHP_EOL; 

$dummy = new ProductDummy("Dummy", 30000); 
$dummy->info();

