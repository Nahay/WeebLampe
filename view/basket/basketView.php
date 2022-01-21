<?php ob_start()?>

<div class="main">
  <div class="title">
    <h1 class="title-h1 font">Panier</h1>
  </div>
</div>

<div class="table-container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Description</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantité</th>
      </tr>
    </thead>
    <tbody>
      <?php if (isset($_SESSION['basket'])) {
                foreach ($_SESSION['basket'] as $id =>
      $qtt) { ?>

      <tr>
        <td>
          <img
            src="<?=$products[$id-1]['image']?>"
            alt="<?=$products[$id-1]['description']?>"
            width="200"
            height="200"
          />
        </td>
        <td><?=$products[$id-1]['description']?></td>
        <td id="td-price">
          <?=($products[$id-1]['price'])*$qtt?>
          €
        </td>
        <td>
          <a
            href="index.php?action=quantity&qtt=less&id=<?=$id?>"
            style="text-decoration: none !important; color: black !important"
          >
            <button type="button" class="btn btn-secondary btn-sm">-</button>
          </a>
          <span><?=$qtt?></span>
          <a href="index.php?action=quantity&qtt=more&id=<?=$id?>">
            <button type="button" class="btn btn-secondary btn-sm">+</button>
          </a>
        </td>
      </tr>

      <?php } ?>

      <tr>
        <td colspan="4" class="commande">
          <a href="index.php?action=order" class="commande-link">
            Passer commande
          </a>
        </td>
      </tr>

      <?php } else { ?>

      <tr>
        <td colspan="4" class="commande">Panier Vide !</td>
      </tr>

      <?php } ?>
    </tbody>
  </table>
</div>

<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/basket.css?v=<?php echo time(); ?>">'?>

<?php $script = ''?>

<?php $title = " - Panier"?>

<?php require 'view/template.php'?>
