<?php ob_start()?>

<div class="main">
  <div class="title">
    <h1 class="title-h1 font">Mentions Légales</h1>
  </div>
</div>

<div class="content">
  <h4>MENTIONS LÉGALES</h4>
  <p>
    Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575
    du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N.,
    nous portons à la connaissance des utilisateurs et visiteurs du site
    Boutiquepokemon.com les informations suivantes :
  </p>
  <h4>ÉDITEUR</h4>
  <p>
    Le site weeblampe.000webhostapp.com est la propriété exclusive de la
    <strong>société à responsabilité limitée : Weeb Lamp</strong>, qui l'édite
    et qui est responsable de la commercialisation des produits.
  </p>
  <p>
    Le créateur, responsable publication et webmaster sont une personne morale.
  </p>
  <p>Créateur : <strong>WEEB LAMP</strong></p>
  <p>Responsable publication : <strong>WEEB LAMP</strong></p>
  <p>Webmaster : <strong>WEEB LAMP</strong></p>
  <h4>CONDITION GÉNÉRALES D'UTILISATION ET DE VENTE</h4>
  <p>
    Les condition générales d'utilisation et de vente du site
    weeblampe.000webhostapp.com sont disponibles
    <a href="index.php?action=cgu-cgv">ici</a>.
  </p>
  <h4>POLITIQUE DE CONFIDENTIALITÉ</h4>
  <p>
    La politique de confidentialité du site weeblampe.000webhostapp.com est
    disponible <a href="index.php?action=politics">ici</a>.
  </p>
</div>

<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/cg.css?v=<?php echo time(); ?>">'?>

<?php $script = ''?>

<?php $title = " - Mentions Légales"?>

<?php require 'view/template.php'?>
