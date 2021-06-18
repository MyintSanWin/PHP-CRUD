<?php

if (!empty($errors)): ?>
<div class="alert-danger">
    <?php
    foreach ($errors as $error): ?>
    <div><?php
   echo $error;
    ?>
    </div>
    <?php endforeach;
    ?>
</div>

<?php endif; ?>

<form action=" " method="post" enctype="multipart/form-data">

    <?php

    if ($product['image']):?>

        <img src="<?php echo $product['image']?>" class="update-image" alt="">
    <?php endif; ?>



    <div class="mb-3">
        <label >Product Image</label>
        <input type="file" name="image" class="form-control">

    </div>
    <div class="mb-3">
        <label  style="padding-bottom: 3px;">Product Title</label>
        <input type="text" name="title" value="<?php echo $title ?>"    class="form-control" >

    </div>

    <div class="mb-3">
        <label >Product Description</label>
        <textarea name="description"   class="form-control" ><?php echo $description ?></textarea>

    </div>

    <div class="mb-3">
        <label >Product Price</label>
        <input  name=" price" type="number" value="<?php echo $price ?>"   step=".01" class="form-control" >

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
