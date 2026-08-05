<?php

require_once "Data/Person.php";

$person = new Person("Wahyu", "Bali");
$person->name = "Wahyu";
$person->address = "Bali";

var_dump($person);

// menambahkan properties dalam object baru
echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Adiguna", "Makassar");
$person2->name = "Adiguna";
$person2->address = "Makassar";

var_dump($person2);
// echo "Name : $person2->name" . PHP_EOL;
// echo "Address : $person2->address" . PHP_EOL;
// echo "Country : $person2->country" . PHP_EOL;