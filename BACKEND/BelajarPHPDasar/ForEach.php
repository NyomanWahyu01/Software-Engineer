<?php
// FOR EACH LOOP
// Tanpa For Each
$name = ["Adi", "Wira", "Bagas"];

for ($i = 0; $i < count($name); $i++){
    echo "Data ke $i = $name[$i]" . PHP_EOL;
}


// Pakai For Each +$index
foreach ($name as $index => $names){
    echo "Data ke berapa-$index = $names" . PHP_EOL;
}

// Pakai For Each
foreach ($name as $names){
    echo "Data $names" . PHP_EOL;
}

// For Each in Key
$person = [ //array
    "first_name" => "Nyoman",
    "middle_name" => "Wahyu",
    "last_name" => "Trisna"
];

//$Key = first name dll. $value = Nyoman dll. 
foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}