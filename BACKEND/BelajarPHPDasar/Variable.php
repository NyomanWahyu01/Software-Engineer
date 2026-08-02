<?php
//CODE : VARIABLE adalah tempat untuk menyimpan data sehingga bisa kita gunakan kembali lagi di code program selanjutnya.
//Pada PHP, variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe datanya.
//Membuat variable dengan simbol $(dolar) diikuti nama variable dan penamaannya variable tidak boleh mengandung spasi. 

//Variable
$name = "Trisna";
$age = 20;

echo "Name :"; 
echo $name; 
echo "\n";

echo "Age :"; 
echo $age; 
echo "\n"; 

//CODE : VARIABLE VARIABLES adalah membuat variable dari string value variable
//Walaupun fitur ini ada, tapi tidak di sarankan untuk digunakan karna sangat memingunggkan kecuali memang diperlukan.
//Untuk membuat variable dari value variable, kita bisa menggunakan simbol $$(dolar) diikuti nama variablenya

$contoh = "wahyu";
$$contoh = "budi";

echo "contoh :";
echo $contoh;
echo "\n";

echo "wahyu :";
echo $wahyu;
echo "\n";


