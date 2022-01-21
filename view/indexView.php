<?php ob_start(); ?>

<div class="main">
  <div class="title">
    <h1 class="title-h1">Dépensez tout votre côté weeb ici !</h1>
  </div>
</div>

<main class="container">
  <section class="card" data-aos="fade-right">
    <a href="index.php?action=products&theme=1">
      <img
        src="https://cdn.discordapp.com/attachments/837028987146076210/837030005703311360/Pokemon.png"
        alt="Pokemon"
      />
    </a>
  </section>

  <section class="card" data-aos="fade-left">
    <a href="index.php?action=products&theme=2">
      <img
        src="https://cdn.discordapp.com/attachments/837029002169811004/837030134632022036/unknown.png"
        alt="Naruto"
      />
    </a>
  </section>

  <section class="card" data-aos="fade-right">
    <a href="index.php?action=products&theme=3">
      <img
        src="https://cdn.discordapp.com/attachments/837029024429244436/837030311073153075/HunterXHunter.png"
        alt="Hunter X Hunter"
      />
    </a>
  </section>

  <section class="card" data-aos="fade-left">
    <a href="index.php?action=products&theme=4">
      <img
        src="https://cdn.discordapp.com/attachments/837029034453631016/842363580120432680/Demon_Slayer.png"
        alt="Demon Slayer"
      />
    </a>
  </section>
</main>

<?php $content = ob_get_clean(); ?>

<?php $link = '<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
              <script src="../public/js/aos.js"></script>
              <link rel="stylesheet" href="public/css/index.css?v=<?php echo time(); ?>" />'
?>

<?php $script = '<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                  AOS.init();
                </script>'
?>

<?php $title = ""?>

<?php require 'template.php'?>