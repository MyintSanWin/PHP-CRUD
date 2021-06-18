<?php
//
//// Create array
//$fruits =[
//    "Banana", "Apple", "Orange", "strawbarry", "juices"
//];
//
//// Print the whole array
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//// Get element by index
//echo $fruits[1].'<br>';
//
//// Set element by index
//$fruits[0] ='Peach';
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//echo '<br>';
//
//// Check if array has element at index 2
//echo isset($fruits[3]);//true
//
//// Append element
//$fruits[] = 'Banana';
//echo '<pr>';
//var_dump($fruits);
//
//echo  '</pre>';
//
//
//// Print the length of the array
//echo count($fruits).'<br>';
//
//// Add element at the end of the array
//array_push($fruits, 'foo');
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//
//// Remove element from the end of the array
//array_pop($fruits);
//echo '<pre>';
//echo var_dump($fruits);
//echo '</pre>';
//
//// Add element at the beginning of the array
// array_unshift($fruits,'bar');
//echo '<pre>';
//var_dump($fruits);
//
//echo '</pre>';
//
//// Remove element from the beginning of the array
//echo array_shift($fruits);
//
//// Split the string into an array
//$string = "BANANA, APPLE, PEACH";
//echo '<pre>';
//var_dump(explode(",", $string));
//echo '</pre>';
//
//// Combine array elements into string
//echo implode("&", $fruits);
//
//// Check if element exist in the array
//echo '<pre>';
//var_dump (in_array('jj', $fruits));
//echo '</pre>';
//
//// Search element index in the array
//echo "<pre>";
//var_dump(array_search('Mango', $fruits));
//echo "</pre>";
//
//// Merge two arrays
//$vegetable =[
//    'Potato', 'cucumber'
//];
//echo '<pre>';
//var_dump(array_merge($fruits, $vegetable));
////var_dump([...$fruits, ...$vegetable]);
//echo '<pre>';
//
//
//// Sorting of array (Reverse order also)
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//sort($fruits);
//rsort($fruits);//revert sort
//
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays

// ============================================

// Create an associative array
$person =['name' => 'Brand',
    'surname' => 'Traversy',
    'age' =>20,
    'hobbises'=>['tennis','video game']];
echo  '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
var_dump($person);
echo '<pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address']))
{
    $person['address'] ='Unknown';
    echo '<pre>';
    var_dump($person);
    echo '<pre>';
}

//$person['address'] ??= 'unknown';


// Check if array has specific key

// Print the keys of the array
var_dump(array_keys($person));


// Print the values of the array
var_dump(array_values($person));

// Sorting associative arrays by values, by keys
asort($person);
var_dump($person);

// Two dimensional arrays
$todos = [
    ['title' =>'Todo title 1', 'completed' => true],
    ['title' =>'Todo title 2', 'completed' => false]
];

echo '<pre>';
var_dump($todos);
echo '<pre>';