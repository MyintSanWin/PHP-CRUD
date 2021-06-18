<?php

// Function which prints "Hello I am Zura"
//function hello(){
//    echo "Hello I am Zuara";
//}
//hello();
//hello();
//hello();

// Function with argument
//function hello( $name){
//    return "Hello I am $name";
//}
//echo (hello("Myint San Win")).'<br>';
//echo (hello("Htet Htet Aung")).'<br>';
//
//
//// Create sum of two functions
//function sum($a , $b){
//    return $a + $b;
//}
//echo (sum(23,12));


// Create function to sum all numbers using ...$nums
//function sum(...$num){
//    $sum=0;
//    foreach($num as $n){
//        $sum +=$n;
//    }
//    return $sum;
//}
//echo (sum(5,32, 25, 25,62));


// Arrow functions
function sum(...$nums){
    return array_reduce($nums, fn($carry, $n)=>$carry + $n);
}
echo sum(2,45,25,42);