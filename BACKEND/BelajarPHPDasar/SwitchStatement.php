<?php
//SWICH STATEMENT
//hanya butuh menggunakan kondisi sederhana di if statement,  seperti hanya menggunakan perbandigan ==
//Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
// Switch hanya untuk perbandingan == 

// // Code IfElse
// if ($nilai == "A"){
//     echo "Anda lulus Dengan Sangat Baik" . PHP_EOL;
// }else if($nilai == "B" || $nilai == "C"){ 
//     echo "Anda Lulus" . PHP_EOL;
// }else if($nilai == "D"){ 
//     echo "Anda Tidak Lulus" . PHP_EOL;
// }
// else{ 
//     echo "Coba Ganti Jurusan Yah Sob" . PHP_EOL;
// }


$nilai = "B";

switch ($nilai){
    case "A";
        echo "Anda lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus, Selamat Mengulang Kembali" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

//Syntax Alternatif
switch ($nilai):
    case "A";
        echo "Anda lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus, Selamat Mengulang Kembali" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
endswitch;



