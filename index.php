<?php
session_start();
require 'controller/controller.php' ;

try {
    if (isset($_GET['action'])) {
        switch($_GET['action']) {
            case 'home':
                home();
                break;
            case 'products':
                if (isset($_GET['theme'])) {
                    products($_GET['theme']);
                }
                else products(0);
                break;
            case 'contact':
                contact();
                break;
            case 'contact-validation':
                contactValidation();
                break;
            // BASKET -----------------------------
            case 'basket':
                basket();
                break;
            case 'add-to-basket':
                if (isset($_GET['id'])) {
                    addBasket($_GET['id']);
                }
                else home();
                break;
            case 'quantity':
                if (isset($_GET['id']) && isset($_GET['qtt'])) {
                quantity($_GET['id'], $_GET['qtt']);
                }
                else home();
                break;
            // ORDER --------------------------
            case 'order':
                order();
                break;
            case 'order-successfully':
                orderSuccessfully();
                break;
            // INFO -----------------------------
            case 'legal-notice':
                legalNotice();
                break;
            case 'cgu-cgv':
                cg();
                break;
            case 'politics':
                politics();
                break;
            case 'refund-policy':
                refundPolicy();
                break;
            // ADMIN -----------------------------
            case 'admin':
                admin();
                break;
            case 'admin-connection':
                adminConnection();
                break;
            case 'admin-add':
                adminAdd();
                break;
            case 'admin-added-successfully':
                adminAddedSuccessfully();
                break;  
            case 'admin-modify':
                adminModify();
                break;
            case 'admin-modified-successfully':
                adminModifiedSuccessfully();
                break;
            case 'admin-view-all':
                adminViewAll();
                break;
            case 'admin-edit':
                adminEdit();
                break;
            case 'admin-delete':
                adminDelete();
                break;
        }
    }
    else {
        home();
    }
}
catch(Exception $e) {
    // if there is an error, then...
    echo 'Erreur : ' . $e->getMessage();
}