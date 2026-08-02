<?php

// CODE : Single Quote untuk membut String di PHP. Kita bisa menggunakan single quote.
// echo 'Nama : ';
// echo 'Eko Adiguna Wijaya';


// CODE : Double Qoute Adalah kita menggunakan escape sequence untuk beberapa hal. 
//seperti \n untuk ENTER, \t untuk TAB, \" untuk double quote dll.
// String = Kalimat

// \n untuk ENTER
// echo 'Nama : ';
// echo 'Eko Adiguna Wijaya';
// echo "\n";
// \t & \n untuk TAB dan ENTER dalam sebuah String
echo 'Nama : ';
echo "Eko\t Adiguna\t Wijaya\n";


// CODE : Multiline String adalah membuat data string yang lebih dari satu baris dan menggunakan \n sebagai ENTER.
// namun PHP ada fitur yang lebih baik yaitu menggunakan Heredoc dan Nowdoc.

// Heradoc : membuat String yang panjang, sehingga kita tidak perlu manual melakukan Enter, Tab, DLL. secara manual
echo <<<text
Ini Adalah contoh string yang sangat panjang dan juga tidak perlu 
melakukan ketik ENTER secara manual, "bisa qoute" juga.
text;

// Nowdoc : Mirip heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan persing seperti di Heredoc/Double Quote.
// Nowdoc 
echo <<<'ADI'
SELAMAT BELAJAR PHP NYOM
sekarang, kita lagi berproses untuk lebih baik lagi
ini adalah kebangkitan kita untuk bisa kerja mandiri freelance dan remato 
target < 1 sudah bisa beberapa fremework dan dasar mu sudah kuat yah. 
good luck bro. lu kuat dan bisa (:
ADI;