<?php
//BREAK AND CONTINUE 
// pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
//sama dengan perulangan, break juga digunakan untuk meghentikan seluruh perulangan
//namun berbeda sama denan continue. continue digunakan untuk menghentikan perulangan saat ini lalu lanjut ke perulangan selanjutnya

//Break = memberhentikan perulangan saat ini
//Continue = memberhentikan code yang lagi berjalan dan akan lanjut ke code selanjutnya

for ($counter = 1; $counter <= 100; $counter++){
    if ($counter % 2 == 0){  // 0 = ganjil, 1 = genap
        continue;
    }
    echo "Conuter : $counter" . PHP_EOL;
}
