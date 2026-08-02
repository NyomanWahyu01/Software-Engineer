<?php
// CALLBACK FUNCTION
//CallBack adalah subuah mekanisme function memanggil functian lainnya dengan yang diberikan pada argument
//pada PHP, untuk mengimplementasi callback yaitu dengan menggunakan tipe data callable
//kita bisa menggunakan functian call_user_func(callable,argumet)

function sayHello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "hello $finalname" . PHP_EOL;
};

sayHello("Wahyu", "strtoupper" );
sayHello("Wahyu", "strtolower" );

// type anonymousFunction
sayHello("Wahyu", function (string $name): string{
    return strtoupper($name);
});
sayHello("Wahyu", fn($name) => strtoupper($name)); 


