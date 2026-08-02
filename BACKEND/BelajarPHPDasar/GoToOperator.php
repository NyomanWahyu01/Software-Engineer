<?php
// GOTO OPERATOR
//goto operator adalah fitur dimana kita bisa loncat ke code program sesuai dengan ke inginan kta 
//agar goto bisa loncat ke code program, kita harus membuat label di php menggunakan nama label lalu diakhiri ;(titik koma)
goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

// GoTo Operator Di Loop
$counter = 1;

while (true) {
    echo "ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10){
    goto end;
    }
}

end:
echo "End Loop";
