<?php

require 'model/ProductsManager.php' ;
require 'model/AdminManager.php' ;

function home()
{
    require 'view/indexView.php';
}

function products($idCat)
{
    $productsManager = new ProductsManager();

    if ($idCat != 0) {
        $products = $productsManager->getProductsByCat($idCat);
        $categoryName = $productsManager->getCategoryName($idCat);
    }
    else {
        $products = $productsManager->getAllProducts();
        $categoryName = 'Tous les produits';
    }
    
    require 'view/productsView.php';
}

// BASKET ------------------------------------------------------------------

function basket()
{
    $productsManager = new ProductsManager();
    $req = $productsManager->getAllProducts();
    $products = $req->fetchAll();
    require 'view/basket/basketView.php';
}

function addBasket($id)
{
    $productsManager = new ProductsManager();
    $product = $productsManager->getProductsById($id);
    if ($product > 0) require 'view/basket/addBasketProduct.php';
    else require 'view/indexView.php';
    
}

function quantity($id, $qtt)
{
    $productsManager = new ProductsManager();
    $product = $productsManager->getProductsById($id);
    if ($product > 0 && isset($_SESSION['basket'][$id])) {
        $qtt = $qtt;
        require 'view/basket/quantity.php';
    }
    else require 'view/basket/basketView.php'; 
}


// ORDER ---------------------------------------------------------------

function order()
{
    $productsManager = new ProductsManager();
    $req = $productsManager->getAllProducts();
    $products = $req->fetchAll();    
    $productsManager->getOrderId();
    
    if(isset($_SESSION['basket'])){
        require 'view/orderView.php';
    }
    else require 'view/basket/basketView.php';
}

function orderSuccessfully()
{
    $productsManager = new ProductsManager();
    $req = $productsManager->getAllProducts();
    $products = $req->fetchAll();  

    if(isset($_SESSION['basket']) && isset($_SESSION['orderId'])){        
        $productsManager->orderProducts();
        $productsManager->containProducts();
        unset($_SESSION['basketCount'], $_SESSION['basket']);
        require 'view/basket/basketView.php';
    }
    else require 'view/basket/basketView.php';
}


// INFO ------------------------------------------------------------------

function cg()
{
    require 'view/info/cgView.php';
}

function politics()
{
    require 'view/info/politicsView.php';
}

function legalNotice()
{
    require 'view/info/legalNoticeView.php';
}

function refundPolicy()
{
    require 'view/info/refundPolicyView.php';
}


// CONTACT ----------------------------------------------------------------

function contact()
{
    unset($_SESSION['sent_successfully']);
    require 'view/contactView.php';
}

function contactValidation()
{
    $_SESSION['sent_successfully'] = 'Votre message a été envoyé avec succès.';
    require 'view/contactView.php';
}


// ADMIN ------------------------------------------------------------------


function admin()
{
    unset($_SESSION['failed_to_connect']);
    if(isset($_SESSION['id'])){
        require('view/admin/adminPanelView.php');
    }
    else require('view/admin/adminView.php');
}

function adminConnection()
{
    $adminManager = new AdminManager();

    if(isset($_SESSION['id'])){
        require('view/admin/adminPanelView.php');
    }
    else{
        if(empty($_POST['nom']) || empty($_POST['mdp'])){
            require('view/admin/adminView.php');
        }
        else {
            $admin = $adminManager->isAdmin();
            if($admin){
                require('view/admin/adminPanelView.php');
            }
            else require('view/admin/adminView.php');
        }
    }
}

function adminAdd()
{
    if(isset($_SESSION['id'])){
        require('view/admin/adminAddView.php');
    }
    else require('view/admin/adminView.php');
}

function adminAddedSuccessfully()
{
    $adminManager = new AdminManager();   

    if(isset($_SESSION['id'])){
        $addproduct = $adminManager->addProduct();
        require('view/admin/adminAddView.php');
    }
    else require('view/admin/adminView.php');
}

function adminModify()
{
    $productsManager = new ProductsManager();
    $products = $productsManager->getAllProducts();

    if(isset($_SESSION['id'])){
        require('view/admin/adminModifyView.php');
    }
    else require('view/admin/adminView.php'); 
}

function adminModifiedSuccessfully()
{

    $adminManager = new AdminManager();    

    if(isset($_SESSION['id'])){
        $admin = $adminManager->editProduct();
        $product = $adminManager->getProduct();
        require('view/admin/adminPanelView.php');
    }
    else require('view/admin/adminView.php');
}


function adminDelete()
{
    $adminManager = new AdminManager();
    $productsManager = new ProductsManager();    

    if(isset($_SESSION['id'])){

        $idFromDeleted = $_GET['id'];

        if (isset($_SESSION['basket'][$idFromDeleted])) {

            $products = $productsManager->getAllProducts();
            $all = $products->fetchAll();
            $_SESSION['basketCount'] -= $_SESSION['basket'][$idFromDeleted] * $all[$idFromDeleted-1]['price'];
            unset($_SESSION['basket'][$idFromDeleted]);
        }

        foreach ($_SESSION['basket'] as $id => $qtt) {
            if ($id > $idFromDeleted) {
                $_SESSION['basket'][$id-1] = $_SESSION['basket'][$id];
                unset($_SESSION['basket'][$id]);
            }
        }

        $adminManager->deleteProduct();
        $products = $productsManager->getAllProducts();

        require('view/admin/adminModifyView.php');
    }
    else require('view/admin/adminView.php');
}

function adminEdit()
{
    $adminManager = new AdminManager();
    if(isset($_SESSION['id'])){
        $product = $adminManager->getProduct();
        require('view/admin/adminEditView.php');
    }
    else require('view/admin/adminView.php');
}

function adminViewAll()
{
    $productsManager = new ProductsManager();
    $products = $productsManager->getAllProducts();

    if(isset($_SESSION['id'])){
        require('view/admin/adminAllView.php');
    }
    else require('view/admin/adminView.php');
}