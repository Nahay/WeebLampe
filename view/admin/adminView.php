<?php ob_start() ?>

<div class="main">
    <div class="title">
        <h1 class="title-h1">Connexion</h1>
    </div>
</div>

<form class="box" action="index.php?action=admin-connection" method="post" enctype="multipart/form-data">

    <h1>Welcome</h1>
    <input type="text" name="nom" placeholder="Nom d'utilisateur" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>

    <?php if (isset($_SESSION['failed_to_connect'])) { ?>
    <div style="margin-top:20px; height:40px; padding-top:6px; text-align:center; background-color:#F35A5A"
        class="rounded">
        <p class="text-white form-text"><?= $_SESSION['failed_to_connect']?></p>
    </div>
    <?php } ?>

    <input type="submit" name="submit" value="Se connecter">

</form>

<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/admin/form.css?v=<?php echo time(); ?>">'?>

<?php $script = ''?>

<?php $title = " - Connexion"?>

<?php require 'view/template.php'?>