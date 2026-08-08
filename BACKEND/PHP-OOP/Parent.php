<?php
//PARENT KEYWORD

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . 'Shape.php';

use Data\{Shape, Rectangle};
$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
