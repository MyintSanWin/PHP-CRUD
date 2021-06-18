<?php

// $pdo= "database.php";
require_once "database.php";
 require_once "functiion.php";
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';


$id = $_GET['id'] ?? null;

if (!$id){
    header('locarion :index.php');
    exit;
}

$statement = $pdo->prepare('select * from products where id = :id');
$statement ->bindValue(':id', $id);
$statement ->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

//echo '<pre>';
//var_dump($product);
//echo '</pre>';
//exit;
$errors = [];
$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD']==='POST'){


$title = $_POST['title'];
$description = $_POST['description'];
//$image =$_POST['image'];
$price =$_POST['price'];




if(!$title){
    $errors[]= 'Product title is required';
}

    if(!$description){
        $errors[]= 'Product description is required';
    }

    if(!$price){
        $errors[]= 'Product price is required';
    }
    //image
if (!is_dir('images')){
    mkdir('images');
}


    if (empty($errors)){
        $image = $_FILES['image'] ?? null;
        $imagePath= $product['image'];


        if ($image && $image['tmp_name']){

            if ($product['image']){
                unlink($product['image']);
            }

            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'],$imagePath);
        }



$statement = $pdo->prepare("update  products set title = :title, image = :image, description = :description, price = :price where id = :id");
$statement->bindValue(':title', $title);
$statement->bindValue(':description', $description);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':price', $price);
$statement->bindValue(':id', $id);
$statement->execute();
header('Location: index.php');
    }

}


//echo '<pre>';
//var_dump($products);
//echo '</pre>';

?>

<?php include_once "view/partials/header.php"; ?>

<p>
    <a href="index.php" class="btn btn-secondary">Go back to products</a>
</p>



<h1> Update Product <?php echo $title ?></h1>


<?php  include_once "view/products/form.php" ?>

</body>
</html>

