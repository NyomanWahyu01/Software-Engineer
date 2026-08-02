<?php  
//int bilangan bulat (base 10)
echo "Decimal :";
var_dump(12345);
// base 8 (octal)
echo "Octal :";
var_dump(0123);
// int base 16 (hexadecimal)
echo "Hexadecimal :";
var_dump(0x1A);
//int bilangan (base 2)
echo "Binary :";
Var_dump(0b1111111);
// int yang di berikan underscore
echo "underscore di Number :";
var_dump(1_234_5678);


// KODE : TIPE DATA FLOATING POINT

echo "floating point :";
var_dump(1.235);

echo "floating point dengan E notation plus (1.2 x 1000) :";
var_dump(1.2e5);

echo "floating point dengan E notation plus (7 x 0.001) :";
var_dump(7e-3);

echo "underscore di floating point :";
var_dump(1_2435_6789_10);


//KODE : INTEGER OVERFLOW 
// Secara default, kapasitas integer di PHP ada kapasitasnya, 2147.483.647 (32 bit) dan 9.223.372.036.854.775.807 (64 bit). 
// Jika melebihi kapasitas integer, maka akan di konversi menjadi float point.

echo "integer overflow :";
var_dump(2147483647); // 32 bit

echo "integer overflow 64 bit :";
var_dump(9223372036854775807); // 64 bit



?>