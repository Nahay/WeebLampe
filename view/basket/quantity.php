<?php

switch($qtt) {
    case 'less':
        $_SESSION['basket'][$id] -= 1;
        $_SESSION['basketCount'] -= $product['price'];

        if ($_SESSION['basket'][$id] == 0) {
            unset($_SESSION['basket'][$id]);
        }
        
        if (empty($_SESSION['basket'])) {
            unset($_SESSION['basket']);
            unset($_SESSION['basketCount']);
        }

        break;
    
    case 'more':
        $_SESSION['basket'][$id] += 1;
        $_SESSION['basketCount'] += $product['price'];
        break;
}


header('location:index.php?action=basket');