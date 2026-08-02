<?php   
//BREAK AND CONTINUE 
// pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
//sama dengan perulangan, break juga digunakan untuk meghentikan seluruh perulangan
//namun berbeda sama denan continue. continue digunakan untuk menghentikan perulangan saat ini lalu lanjut ke perulangan selanjutnya

//Break = memberhentikan perulangan saat ini
//Continue = memberhentikan code yang lagi berjalan dan akan lanjut ke code selanjutnya

$counter = 1;

while (true) {
    echo "ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10){
    break;
    }
}