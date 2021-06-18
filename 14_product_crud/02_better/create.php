<?php
require_once "database.php";
require_once "functiion.php";
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';


$errors = [];
$title = '';
$description = '';
$price = '';
$product = [
        'image'=>''
];

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
        $imagePath='';
        if ($image){

            $imagePath = 'images/'.randomString(8).'/'.$image['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'],$imagePath);
        }



$statement = $pdo->prepare("Insert into products (title,description, image, price)
values(:title, :description, :image,:price)");
$statement->bindValue(':title', $title);
$statement->bindValue(':description', $description);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':price', $price);
$statement->execute();
header('Location: index.php');
    }

}
?>


<?php include_once "view/partials/header.php"; ?>
<p>
    <a href="index.php" class="btn btn-secondary">Go back to products</a>
</p>

<h1>Create New Product</h1>

<?php  include_once "view/products/form.php" ?>

</body>
</html>