<?php
// CDDE : IF STATEMENT
//Dalam PHP, If adalah salah satu kata  kunci yang digunakan untuk percabangan.
//Hampir di semua bahasa pemrorgraman mendukung if expression.

// CODE : ELSE STATEMENT 
//block Else if akan di eksekusi ketika kondisi if bernilai true
//jika If bernilai true, Statement nya akan di eksekusi
//jika If bernilai false, Statement Else yang akan di eksekusi 

// ELSE IF STATEMENT
//kadang dalam If, kita butuh membuat beberapa kondisi
//kasus ini di PHP bisa menggunakan Else IF statement yang mana bisa lebih dari satu kondisi
//code Esle If di PHP menggunakan "else if" / "elseif" (gabung)

// SYNTAX ALTERNATIF
//selain menggunakan {}(kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, 
// yaitu demgam memggunakan : (titik dua). namun untuk gunakan ini harus pakai kata kunci endif di akhir if statement


$nilai = 10;
$absen = 90;

if ($nilai >= 80 && $absen >= 80){
    echo "Nilai Anda A" . PHP_EOL;
}else if($nilai >= 70 && $absen >= 70){ 
    echo "Nilai Anda B" . PHP_EOL;
}else if($nilai >= 60 && $absen >= 60){ 
    echo "Nilai Anda C" . PHP_EOL;
}else if($nilai >= 50 && $absen >= 50){ 
    echo "Nilai Anda D" . PHP_EOL;
}else{ 
    echo "Nilai Anda E" . PHP_EOL;
}

//Syntax Alternatif (endif:)
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;


