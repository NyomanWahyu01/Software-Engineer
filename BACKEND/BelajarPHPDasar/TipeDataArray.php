<?php
//CODE : ARRAY
//array adalah tipe data yang berisikan bosong atau banyak 
//array di PHP bisa berisikan data dengan jenis berbeda-beda. memiliki panjang dinamis
//artinya bisa menambahkan data eke array sebanyak-banyaknya tanpa dibatasi kapasitasnya

// CARA KERJA ARRAY
// First index 0,1,2,3,4,5,6,7,Element(at index) 8,Indices 9
// Array length is 10
// ambil data : 0 = 1 

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["adi", "Kurni", "widi"];
var_dump($names);

var_dump($names[0]); // mengambil data array dari 0

$names[0] = "budi"; //mengubah data array 0
var_dump($names);

unset($names[1]); //menghapus variable array secara permanen 
var_dump($names);

$names[] = "ayu"; //menambahkan data baru dengan array 
var_dump($names);
var_dump(count($names)); // menghitung jumlah data array

// CODE : OPERASI ARRAY 
//$array[index] : mengakses data di array pada nomor index
//$array[index] = value  : mengubah data di array pada nomor index dgn value baru
//$array[] = value  : menambah data array pada posisi paling dibelakang 
//$array[] = value  : menghapus data array, index otomatis hilang dari array  
//$array[] = value  : mengambil total array 


// CODE : ARRAY SEBAGAI MAP
// Array Map Adalah asosiasi antara key dan value, namun di php Map bisa dibuat menggunakan Array
//Secara default menggunakan index(number) sebegai key dan value nya kita bisa bebbas memasukkan data ke dalam array 
 
$indra = array(
    "id" => "indra",
    "name" => "ketut indra",
    "age" => "20"
);
var_dump($indra);
var_dump($indra["name"]);

$man = [
    "id" => "man",
    "name" => "Nyoman Wahyu",
    "age" => "20"
];
var_dump($man);

// CODE : ARRAY ADAM ARRAY 
$indra = array(
    "id" => "indra",
    "name" => "ketut indra",
    "age" => "20",
    "address" => array( // array dalam array versi () array
        "city" => "Bali",
        "country" => "Indonesia" 
    )
);
var_dump($indra);
var_dump($indra["name"]);
var_dump($indra["address"]["country"]);

$man = [
    "id" => "man",
    "name" => "Nyoman Wahyu",
    "age" => "20",
    "address" => [ //array dalam array versi []array
        "city" => "Bali",
        "country" => "Indonesia" 
    ]
];
var_dump($man);
var_dump($man["name"]);
var_dump($man["address"]["city"]);
