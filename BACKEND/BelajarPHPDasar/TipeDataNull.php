<?php

//CODE : DATA NULL
//Nilai Null = variable tanpa nilai 
//Saat kita membuat variable, lalu mau menghapus data yang terdapat di variable tsb. Bisa menggunakan NULL untuk mengusongkan variable tsb.
//Membuat variable NULL, bisa menggunakan Kata Kunci NULL (Case Insensitive).

$name = "budi";
$name = null;
$umur = null;

echo "Nama :";
echo $name;
echo "\n";

echo "Umur :";
echo $umur;
echo "\n";

//CODE : MENGECEK APAKAH DATA NULL ?
//Mengecek apakah data NULL atau tidak, kita bisa menggunakan function is_null($variable) untuk mengecek data NULL.
//Function is_null($variable) : booolean = true atau bisa 1(angka). 
// echo "Is Name NULL?;";
// echo is_null($name);
// echo "\n";

// +function var_dump()
// $name = "agung"; +false

echo "Is Name NULL?;";
var_dump(is_null($name)); //function mengecek Variable Ada\tidak setelah NULL
echo "\n";

//CODE : MENGHAPUS VARIABLE
//caranya dengan menggunakan function unset($variable). namun jika sudah dihapus variable tsb tidak bisa diakses kembali. 
//Bahwa dengan function is_null($variable) akan menjadi eror jika mengakses variable tsb
//Solusinya menggunakan function isset($variable) untuk mengecek apakah sebuah variable ada dan nilainya NULL

$contoh = "andi";
unset($contoh);

$contoh = "winda";
$contoh = Null;
var_dump(isset($contoh)); //function mengecek Variable Masih Ada setelah di Isset

//jika variable mau kosong tanpa hilang = Function NULL
//jika variable mau hilang + kosong = Function Isset
