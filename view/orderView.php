<?php ob_start()?>

<div class="main">
  <div class="title">
    <h1 class="title-h1">Commande</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-6">
      <form
        class="box"
        id="box"
        action="index.php?action=order-successfully&id=<?= $_SESSION['orderId'] ?>"
        method="post"
        enctype="multipart/form-data"
        onsubmit="return validate(this)"
      >
        <label>Nom et Prenom</label>
        <input type="text" id="name" name="name" placeholder="Nom Prenom" required />
        <label>Adresse</label>
        <input type="text" name="adress" placeholder="Description" required />
        <label>Code Postal</label>
        <input type="text" id="pc" name="pc" placeholder="Code Postal" required />
        <label>Ville</label>
        <input type="text" id="city" name="city" placeholder="Ville" required />
        <label>Adresse email</label>
        <input type="text" id="email" name="email" placeholder="Adresse email" required />

        <input type="submit" name="order" value="Commander" />
      </form>
    </div>
    <div class="col-6">
      <div class="product">
        <h1 id="products">Vos arcticles</h1>
        <div class="table-container">
          <table class="table">
            <tbody>
              <?php foreach ($_SESSION['basket'] as $id =>
              $qtt) { ?>
              <tr>
                <td>
                  <img
                    src="<?=$products[$id-1]['image']?>"
                    alt="<?=$products[$id-1]['description']?>"
                    width="70"
                    height="70"
                  />
                </td>
                <td><?=$products[$id-1]['description']?></td>
                <td>
                  <?=$products[$id-1]['price']?>
                  €
                </td>
                <td>
                  Quantité :
                  <?=$qtt?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <h1 id="total">
          Total :
          <?= $_SESSION['basketCount']?>
          €
        </h1>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php $link = '<link rel="stylesheet" href="public/css/order.css?v=<?php echo time(); ?>"
/>'?>

<?php $script = '<script src = "public/js/form.js"></script>'?>

<?php $title = " - Commande"?>

<?php require 'view/template.php'?>