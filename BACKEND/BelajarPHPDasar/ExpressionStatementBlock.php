<?php 
// CODE : EXPRESSION 
//Expression adalah bagian terpenting di PHP. di PHP, hampir semua code yang kita tulis adalah sebuah expression.
//secara sederhana expression adalah apapun yang memiliki nilia atau value

//$a=5; ketika kita menuliskan "5", maka tentu itu adalah nilai, oleh karna itu 5 tersebut adlah expression.
//lalu kita menuis code $b=$a; $a bisa kita bilang adalah expression, karena $adalah nilai 5
$a = 5;
$b = $a;

//EXAMPLE EXPRESSION COMPLEX
// pada code dibawah ini , getValue() adalah expression. karena getValue() bernilai 100.
function getValue()
{
    return 100;
}
$value = getValue();


// CODE : STATEMENT
// Statement bisa dibilang adalah kalimat lengkap dalam bahasa
// sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma (;)
$name = "Nyoman Wahyu";
echo $name;
$date = new DateTime();


// CODE : BLOCK
//Block adalah kumpulan statement yang terdiri dari nol atau lebih statement 
//Block diawali dan di akhiri dengan kurung kurawal {}
function runApp($names)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}
