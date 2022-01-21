<?php ob_start()?>

<div class="main">
  <div class="title">
    <h1 class="title-h1 font"><?=$categoryName?></h1>
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
            <img
              src="<?=$product['image']?>"
              width="200"
              height="200"
              alt="<?=$product['description']?>"
              id = "card"
            />
          </div>
          <div class="product-details">
            <span class="font-weight-bold d-block"><?=$product['price']?> €</span>
            <span><?=$product['description']?></span>
            <div class="buttons d-flex flex-row">
              <div class="cart"><i class="fa fa-shopping-cart"></i></div>
              <a href="index.php?action=add-to-basket&id=<?=$product['id']?>">
                <button class="btn cart-button btn-block">
                  <span class="dot">1</span>Ajouter au panier
                </button>
              </a>
            </div>
            <div class="weight"></div>
          </div>
        </div>
        <img src="<?=$product['image']?>"
              alt="<?=$product['description']?>"
              width="1000px"
              height="1000px"
              class="zoom-container" id="zoom-container"
            >
      </div>

      <?php
        }
      ?>

    </div>
  </div>
</div>

<span id="layer"></span>

<div class="filter-container" id="filter-container">
  <span>Filtrer</span>
</div>


<?php $content = ob_get_clean()?>

<?php $link = '<link rel="stylesheet" href="public/css/products.css?v=<?php echo time(); ?>">'?>

<?php $script = '<script src = "public/js/products.js"></script>'?>

<?php $title = " - $categoryName"?>

<?php require 'template.php'?>