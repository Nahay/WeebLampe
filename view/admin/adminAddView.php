<?php ob_start()?>

<div class="main">
    <div class="title">
        <h1 class="title-h1">Ajoutez un produit</h1>
    </div>
</div>

<form class="box" id="box" action="index.php?action=admin-added-successfully" method="post" enctype="multipart/form-data" onsubmit="return validate(this)">

    <input type="text" name="description" placeholder="Description" required>
    <input type="text" id="price" name="price" placeholder="Prix" required>
    <input type="text" name="img" placeholder="Image" required>
    <input type="text" id="cat" name="cat" placeholder="Categorie" required>

    <input type="submit" name="submit" value="Ajouter">

</form>

<?php $content = ob_get_clean()?>

<?php $title = " - Ajouter un produit"?>

<?php $link = '<link rel="stylesheet" href="public/css/admin/form.css?v=<?php echo time(); ?>">'?>

<?php $script = '<script src = "public/js/admin.js"></script>'?>

<?php require 'view/template.php'?>