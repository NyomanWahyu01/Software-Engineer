<?php
//FUNCTION RETURN VALUE

// function sum(int $first, int $second)
// {
//     $total = $first + $second;
//     return $total;
// }

// $result = sum(10, 10);
// var_dump($result);

// $result = sum(100, 100);
// var_dump($result);

// //FUNCTION RETURN VALUE IFELSE 
// function getFinalValue(int $value)
// {
//     if ($value >= 80){
//         return "A";
//     }else if ($value >= 70){
//         return "B";
//     }else if ($value >= 60){
//         return "C";
//     }else if ($value >= 50){
//         return "A";
//     }else{
//         return "E";
//     }
//     echo "Maaf anda Gagal" . PHP_EOL;
// }

// $score = getFinalValue(90);
// var_dump($score);


//RETURN TYPE DECLARATION
// integer dan string pada variable yang dibuat
function sum(int $first, int $second): int 
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

//FUNCTION RETURN VALUE IFELSE 
function getFinalValue(int $value): string 
{
    if ($value >= 80){
        return "A";
    }else if ($value >= 70){
        return "B";
    }else if ($value >= 60){
        return "C";
    }else if ($value >= 50){
        return "A";
    }else{
        return "E";
    }
    echo "Maaf anda Gagal" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

 
