<?php
// Magic constants
echo __DIR__.'<br>';
echo  __FILE__.'<br>';

echo __LINE__.'<br>';


// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
//$files = scandir('../');
//echo '<pre>';
//var_dump($files);
//echo '</pre>';


// file_get_contents, file_put_contents
//echo file_get_contents('lorem.txt');
//echo file_put_contents('somefile.txt', "Hello everybody have there");



// file_get_contents from URL
//$userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
//echo $userJson;
//$user = json_decode($userJson, true);
//echo  '<pre>';
//var_dump($user);
//echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('somefile.txt');//true

// is_dir
echo is_dir('test');//false

// filemtime
// filesize
// disk_free_space
// file