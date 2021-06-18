<?php

$pdo= new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id =$_POST['id'] ?? null;

if (!$id){
    header('location:index.php');
    exit;
}


//echo '<pre>';
//var_dump($id);
//echo '</pre>';

$statement = $pdo->prepare('delete from products where id = :id' );
$statement ->bindValue(':id', $id);
$statement ->execute();


header('location:index.php');