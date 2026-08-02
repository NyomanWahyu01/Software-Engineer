<?php

//CODE : VARIABLE CONSTANT sifatnya mutable = tidak dapat di ubah-ubah. jika mau immutable (tidak bisa diubah), maka kita tidak bisa lakukan di PHP
//Cosntant adalah tempat untuk menyimpan data yang tidak bisa diubah lagi setelah di deklarasikan
//Cosntant bisa menggunakan function Define() dan Best practice pembuatan nama constant adalah UPPER_CASE. 

define("AUTHOR", "Programmer Zaman Now Gen-Z");
define("APP_VERSION", "100");

echo "Author :";
echo AUTHOR;
echo "\n";

echo "APP_VERSION :";
echo APP_VERSION;
echo "\n";

