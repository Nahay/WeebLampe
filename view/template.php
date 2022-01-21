<?php
    if (!(isset($_SESSION['basketCount']))) {
        $_SESSION['basketCount'] = 0.00;
    }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      href="https://cdn.discordapp.com/attachments/837028587584094219/837253152956350474/icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="public/css/template.css?v=<?php echo time(); ?>"
    />
    <?=$link?>

    <title>Weeb Lampe<?=$title?></title>
  </head>

  <body>
    <nav class="navbar bg-dark" style="padding-top: 0; padding-bottom: 0">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?action=home">
          <img
            src="https://cdn.discordapp.com/attachments/837028587584094219/837029268448870400/logo.png"
            alt="Weeb Lampe"
            width="170"
            height="45"
            class="d-inline-block align-text-top"
          />
        </a>
        <a href="index.php?action=basket" class="basket">
          <i class="fa fa-shopping-cart"></i>
          <span class="text-dark">
            <?=$_SESSION['basketCount']?>
            €
          </span>
        </a>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light mb-5 menu">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="index.php?action=home"
                >Accueil</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Les catégories
              </a>
              <ul
                class="dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
              >
                <li>
                  <a
                    class="dropdown-item"
                    href="index.php?action=products&theme=1"
                    >Pokemon</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="index.php?action=products&theme=2"
                    >Naruto</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="index.php?action=products&theme=3"
                    >Hunter X Hunter</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="index.php?action=products&theme=4"
                    >Demon Slayer</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=products"
                >Tous les produits</a
              >
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="index.php?action=contact"
                >Contact</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="index.php?action=admin"
                >Administrer</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?=$content?>

    <footer class="bg-dark text-center text-lg-start mt-5">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase text-white">Weeb Lampe</h5>
            <a href="index.php">
              <img
                src="https://cdn.discordapp.com/attachments/837028587584094219/837029268448870400/logo.png"
                alt="Weeb Lamp"
                width="321px"
                height="81px"
                class="footer-logo"
              />
            </a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-white">Informations</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="index.php?action=contact" class="f-item">Contact</a>
              </li>
              <li>
                <a href="index.php?action=legal-notice" class="f-item"
                  >Mentions Légales</a
                >
              </li>
              <li>
                <a href="index.php?action=refund-policy" class="f-item"
                  >Politique de remboursement</a
                >
              </li>
              <li>
                <a href="index.php?action=cgu-cgv" class="f-item">CGU & CGV</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-white">Liens Utiles</h5>

            <ul class="list-unstyled">
              <li>
                <a href="https://www.pokemon.com/fr/" class="f-item">Pokemon</a>
              </li>
              <li>
                <a href="https://www.viz.com/naruto" class="f-item">Naruto</a>
              </li>
              <li>
                <a href="https://www.viz.com/hunter-x-hunter" class="f-item"
                  >Hunter X Hunter</a
                >
              </li>
              <li>
                <a
                  href="https://www.viz.com/demon-slayer-kimetsu-no-yaiba"
                  class="f-item"
                  >Demon Slayer</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div
        class="text-center p-3 text-white"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © Copyright 2021 <strong>Weeb Lampe</strong>. Boutique indépendante
        créée en France pour l'amour des animes. Boutique non affiliée.
      </div>
    </footer>

    <?=$script?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
