<?php
// CUNSTRUCTOR
// Dalam class php, kita bisa membuat constructor
// Constructor adalah function yang akan dijalankan pertama kali ketika object dibuat
// Constructor memiliki nama function __construct()

include "data/Person.php";
$Nyoman = new Person ("Wahyu", "Bali");
var_dump($Nyoman);