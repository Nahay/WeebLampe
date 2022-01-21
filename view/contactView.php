<?php ob_start() ?>

<div class="main">
    <div class="title">
        <h1 class="title-h1">Contact</h1>
    </div>
</div>

<form class="contact-form" action="index.php?action=contact-validation" method="post" enctype="multipart/form-data">
    
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';" required></textarea>

    <input type="submit" name="submit" value="Envoyer">

    <?php if (isset($_SESSION['sent_successfully'])) { ?>
    <div style="margin-top:20px; height:40px; padding-top:6px; text-align:center; background-color:#0b9439; transition: 0.5s;"
        class="rounded">
        <p class="text-white form-text"><?= $_SESSION['sent_successfully']?></p>
    </div>
    <?php } ?>
    
</form>

<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/contact.css?v=<?php echo time(); ?>" />'?>

<?php $script = '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
                 <script src="public/js/contact.js"></script>'?>

<?php $title = " - Contact"?>

<?php require 'template.php'?>