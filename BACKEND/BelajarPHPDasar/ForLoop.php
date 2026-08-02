<?php 
// FOR LOOP
//For Loop adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan 
//blok code yang terdapat di dalam for akan selalu di ulangi selama kondisi for terpenuhi

//FORMAT FUNCTION 
// for(init statemnt; kondisi; post statement){
//blok perulangan
//}

//RULE FUNCTION
//Init Statement : akan di eksekkusi hanya sekali dia awl sebelum perulangan
//Kondisi : akan dillakukan ppengeekan dalamsetiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
//Post Statement : akan dieksekusi setiap kkali akhir perulangan 
// 3 kondisi diatas tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selelu bernilai true 

//PERULANGAN TANPA HENTI
// for ( ; ; ;){
//     echo "ini adalah for loop" . PHP_EOL;
// }

//PERULANGAN DENGAN KONDISI
// $counter = 1;

// for (; $counter <= 10;){
//     echo "ini adalah for loop-$counter" . PHP_EOL;
//     $counter++;
// }

//PERULANGAN DENGAN INIT STATEMENT
// for ($counter = 1; $counter <= 10;){
//     echo "ini adalah for loop-$counter" . PHP_EOL;
//     $counter++;
// }

// PERULANGAN DENGAN POST STATEMENT 
// decrement turun, increment naik
// for ($counter = 20; $counter >= 1; $counter--){
//     echo "ini adalah for loop-$counter" . PHP_EOL;
// }

//SYNTAX ALTERNATIF FOR LOOP
//DECREMENT = TURUN 
for ($counter = 20; $counter >= 1; $counter--) :
    echo "ini adalah for loop-$counter" . PHP_EOL;
endfor;

//INCREMENT = NAIK
for ($counter = 20; $counter <= 1; $counter++) :
    echo "ini adalah for loop-$counter" . PHP_EOL;
endfor;




