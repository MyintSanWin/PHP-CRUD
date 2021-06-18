<?php

// while
//$counter = 0;
//while ($counter < 10){
//    echo $counter;
//    echo "<br>";
////    if ($counter === 5)
////        break;
//    $counter ++;
//}

// Loop with $counter

// do - while
//do{
//    echo $counter.'<br>';
//    $counter++;
//}while($counter < 10);


// for
for ($i=0; $i<20; $i++){
    echo $i.'<br>';
}
// foreach
$fruits =[
    'banana', 'apple', 'orange', 'peach'
];
foreach ($fruits as $fruit) {
var_dump($fruit);
}

// Iterate Over associative array.
$persons =[
    'name' =>'Brand',
    'surname'=>'Traversy',
    'age'=>20,
    'hobbies'=>['tennis', 'video game playing']
];
foreach($persons as $key => $value){
    if (is_array($value)){
        echo $key . ' '.implode("*",$value) .'<br>';
    }
    else{
        echo $key.' '.$value. '<br>';
    }

}