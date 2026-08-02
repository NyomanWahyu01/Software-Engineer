<?php
// CODE : OPERATOR LOGIKA 
//Operator logika adalah operator untuk membandingkan dua nilai boolean 
//hasil dari operator logika adalah boolean lagi 

//Operator Logika :
//$a && $b : And = True
//$a and $b : And = True
//$a || $b : Or = True jika salah satu / keduanya
//$a || $b : Or = True jika salah satu / keduanya
//! $a : Not = True jika bernilai false
//$a xor $b : xor = True jika salah satu true, tapi tidak keduanya

var_dump(true && true);
var_dump(true && false);

var_dump(true || false);
var_dump(true || true);


var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
