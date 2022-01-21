<?php

// check get
if ((!isset( $_GET['id']))) {
    header('location:index.php?action=home');
}

$id = $_GET['id'];
$price = $product['price'];

// check basket
if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'][$id] = 1;
}
else {
    $_SESSION['basket'][$id] += 1;
}

// check basketCount
if (!isset($_SESSION['basketCount'])) {
    $_SESSION['basketCount'] = $price;
}
else {
    $_SESSION['basketCount'] += $price;
}

header('location:index.php?action=basket');