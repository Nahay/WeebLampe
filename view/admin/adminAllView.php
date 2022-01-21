<?php ob_start()?>

<div class="main">
  <div class="title">
    <h1 class="title-h1">Aperçu de tous vos produits</h1>
  </div>
</div>

<div class="wrapper">
  <div class="container">
    <div class="row g-1">
      <?php 
            foreach($products as $product){
            ?>

      <div class="col-md-3">
        <div class="card p-3">
          <div class="text-center">
            <img src="<?=$product['image']?>" width="200" height="200" />
          </div>
          <div class="product-details">
            <span class="font-weight-bold d-block"
              ><?=$product['price']?>
              €</span
            >
            <span><?=$product['description']?></span>

            <div class="weight"></div>
          </div>
        </div>
      </div>

      <?php
            }
            ?>
    </div>
  </div>
</div>
<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/admin/viewAll.css?v=<?php echo time(); ?>">'?>

<?php $script = ''?>

<?php $title = " - Modification des produits"?>

<?php require 'view/template.php'?>