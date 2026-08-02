<?php
// DO WHILE LOOP
//Do While Loop adalah perulangan yang mirip dengan while. perbedaan hanya pengecekan kondisi
//pengecekan kondisi di while loop dilakukan di awal sebelum  perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan 

$counter = 100;
do {
    
    echo "ini adalah Do While-$counter" . PHP_EOL;
    $counter++;
}while ($counter <= 10);

