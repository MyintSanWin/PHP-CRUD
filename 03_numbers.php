<?php

// Declaring numbers
$a = 5;
$b = 4;
$c =3.2;

// Arithmetic operations
echo $a + $b * $c."<br>";
echo ($a + $c)* $b.'<br>';

// Assignment with math operators
$a +=$b; echo $a.'<br>';//$a=9
$a /=$b; echo $a.'<br>';
$a *=$b; echo $a.'<br>';
echo "..................";

// Increment operator
$a= 6;
echo $a++.'<br>';
echo ++$a.'<br>';


// Decrement operator
echo $a--.'<br>';
echo  --$a.'<br>';


// Number checking functions
is_float(1.3);//true
is_int(3);//true
is_double(3.4);//true
is_numeric("3.45");//true
is_numeric("3g.34");//false

// Conversion
$strNumber = '12.34';
$number =(int)$strNumber;
var_dump($number);//12
echo '<br>';

// Number functions
echo "abs(-12)" .abs(-12). '<br>';
echo "pow(2,4)".pow(2,4).'<br>';
echo "sqrt(12)".sqrt(12).'<br>';
echo "max(2,4)".max(2,4)."<br>";
echo  "min(3,42)".min(3,42).'<br>';
echo "round(2.7)".round(2.7)."<br>";
echo "floor(2.4)".floor(2.4)."<br>";
echo "ceil(3.2)".ceil(3.2)."<br>";


// Formatting numbers

$number = 12233455.2426;//
echo  number_format($number, 2,'.', ',');
// https://www.php.net/manual/en/ref.math.php
