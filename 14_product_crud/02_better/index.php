<?php

require_once "database.php";

$search = $_GET['search'] ?? '';
if ($search){

    $statement = $pdo->prepare('select * from products where title like :title ORDER BY title DESC ');
    $statement->bindValue(':title', "%$search%");
} else
{
    $statement = $pdo->prepare(' select * from products ORDER BY price DESC ');

}
$statement->execute();
$products=$statement->fetchAll((PDO::FETCH_ASSOC));
//echo '<pre>';
//var_dump($products);
//echo '</pre>';

?>

<?php include_once "view/partials/header.php"; ?>

<h1>Product Crud</h1>

<p>
    <a href="create.php" class="btn btn-success">Create Product</a>
</p>
<form action="">


    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for products" value="<?php echo $search ?>" name="search">
        <div>
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>

    </div>
</form>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($products as $i => $product): ?>
        <tr>
        <th scope="row"><?php echo $i +1 ?></th>
        <td style="width: 20px; height: 20px;"><img src="<?php echo $product['image']?>" class="thumb-image" alt="" ></td>
        <td><?php echo $product['title']  ?></td>
        <td><?php echo $product['price']  ?></td>
<td>
            <a href="update.php?id= <?php echo $product['id'] ?>" class="btn btn-primary">Edit</a>

    <form action="../01_bad/delete.php" method="post" style="display: inline-block" >
        <input type="hidden" name="id" value="<?php echo $product['id'] ?>" >
            <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
<!--            <td>--><?php //echo $product['Action']  ?><!--</td>-->
    </tr>
    <?php
   endforeach;
    ?>
    </tbody>
</table>

</body>
</html>