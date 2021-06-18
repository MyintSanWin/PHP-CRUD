<?php

$age = 0;
$salary = 300000;

// Sample if
//if ($age === 20){
//    echo "2";
//}
//// Without circle braces
//if ($age === 20) echo "1";
//
//
//// Sample if-else
//if ($age > 20){
//    echo "age is ..";
//}
//else{
//    echo "young boy";
//}


// Difference between == and ===
$age == 20; //true
$age == '20'; //true


$age === 20; //true
$age === '20'; //false


// if AND
if ($age > 20 && $salary ===300000){
    echo "do something";
}
echo '<br>';
// if OR
if ($age <= 20 || $salary >4000000){
    echo "You are so good place";
}
else{
    echo "Hello u must try again";
}
echo '<br>';


// Ternary if
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18 ;
echo '<pre>';
var_dump($myAge);
echo '</pre>';


// Null coalescing operator
$myName = isset($name) ? $name : "John";
//$myName = $name ?? 'John';

// switch
$userRole = 'john'; //editor , user , admin
switch ($userRole){
    case  'admin':
        echo 'admin';
        break;

    case  'editor':
        echo 'editor';
        break;

    case 'user':
        echo 'user';
        break;
    default:
        echo "Invalid role";
}
