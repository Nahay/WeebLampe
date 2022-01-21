<?php ob_start()?>
<div class="main">
    <div class="title">
        <h1 class="title-h1">Modifiez vos produits !</h1>
    </div>
</div>

<form class="box" id="box" action="index.php?action=admin-modified-successfully&id=<?= $product['id']?>" method="post"
    enctype="multipart/form-data" onsubmit="return validate(this)">

    <label>id</label>
    <input type="text-id" name="id" placeholder="id" value="<?= $product['id']?>" readonly>
    <label>Description</label>
    <input type="text" id="description" name="description" placeholder="Description" value="<?= $product['description']?>" required>
    <label>Prix</label>
    <input type="text" id="price" name="price" placeholder="Prix" value="<?= $product['price']?>" required>
    <label>Image</label>
    <input type="text" id="img" name="img" placeholder="Image" value="<?= $product['image']?>" required>
    <label>Catégorie</label>
    <input type="text" id="cat" name="cat" placeholder="Catégorie" value="<?= $product['idCategory']?>" required>

    <input type="submit" name="submit" value="Modifier">

</form>

<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/admin/edit.css?v=<?php echo time(); ?>">'?>

<?php $script = '<script src = "public/js/admin.js"></script>'?>

<?php $title = " - Modification des produits"?>

<?php require 'view/template.php'?>