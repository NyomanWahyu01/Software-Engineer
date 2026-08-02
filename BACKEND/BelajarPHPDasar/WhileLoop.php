<?php   
//WHILE LOOP
//While Loop adalah versi perulangan yang lebih sederhanan dibanding for loop 
// di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

// $counter = 1;
// while ($counter <= 10){
//     echo "ini adalah for while-$counter" . PHP_EOL;
//     $counter++;
// }

// SYNTAX ALTERNATIF WHILE LOOP
$counter = 1;
while ($counter <= 10) :
    echo "ini adalah for while-$counter" . PHP_EOL;
    $counter++;
endwhile;