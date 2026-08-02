<?php
/* 
STRING FUNCTIONG
*/

// CONTOH STRING FUNCTION
// join() / implod() = menggabungkan array menjadi string
// explode() = memecah array menjadi string
// strtolowwer() =  mengubah string menjadi lowercase
// strtoupper() = mengubah string menjadi uppercase  
// substr() = mengambil sebagian string
// trim() = meghapus whitespace di depan dan belakang string

var_dump(join(",", [10,11,12,13,14,15]));
var_dump(explode(" ", "I Nyoman Wahyu"));
var_dump(strtolower("I NYOMAN WAHYU"));
var_dump(strtoupper("i nyoman wahyu"));
var_dump(trim("      Nyoman        "));
var_dump(substr("Nyoman Wahyu Tris", 0, 6));