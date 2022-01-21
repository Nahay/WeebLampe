<?php ob_start()?>

<div class="main">
    <div class="title">
        <h1 class="title-h1">Gérez vos produits !</h1>
    </div>
</div>

<main class="container">
    <section class="card" data-aos="fade-right">
        <a href="index.php?action=admin-add">
            <img src="https://media.discordapp.net/attachments/771065782553411640/837235909354717194/ajouter.png"
                alt="Add" />
        </a>
    </section>

    <section class="card" data-aos="fade-left">
        <a href="index.php?action=admin-modify">
            <img src="https://cdn.discordapp.com/attachments/771065782553411640/837235944524218408/modifier.png"
                alt="Modify" />
        </a>
    </section>

    <section class="card" data-aos="fade-right">
        <a href="index.php?action=admin-view-all">
            <img src="https://cdn.discordapp.com/attachments/771065782553411640/837241403871461376/voirtout.png"
                alt="All" />
        </a>
    </section>

</main>

<?php $content = ob_get_clean()?>

<?php $link = '<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
              <script src="../public/js/aos.js"></script>
              <link rel="stylesheet" href="public/css/admin/panel.css?v=<?php echo time(); ?>">'?>


<?php $script = '<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                  AOS.init();
                </script>'
?>

<?php $title = " - Administrer"?>

<?php require 'view/template.php'?>