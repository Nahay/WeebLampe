<?php

require_once 'Manager.php';

Class ProductsManager extends Manager
{
    public function getAllProducts()
    {
        $db = $this->dbConnect();
        $req =  $db->query('SELECT * FROM Product ORDER BY id ASC');
        return $req;
    }

    public function getProductsByCat($idCat)
    {
        $db = $this->dbConnect();
        $req =  $db->query("SELECT * FROM Product WHERE idCategory = '$idCat' ORDER BY id ASC");
        return $req;
    }

    public function getCategoryName($idCat)
    {
        $db = $this->dbConnect();
        $categories = $db->query("SELECT name FROM Category WHERE id = '$idCat'");
        $category = $categories->fetch();
        $categoryName = $category['name'];
        return $categoryName;
    }

    public function getProductsById($id)
    {
        $db = $this->dbConnect();
        $req =  $db->query("SELECT * FROM Product WHERE id = '$id'");
        $product = $req->fetch();
        return $product;
    }

    public function orderProducts()
    {
        $db = $this->dbConnect();
        $date = date("d.m.y");
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $pc = $_POST['pc'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $req = $db->query("INSERT INTO `Order` (orderDate, clientName, fullClientAdress, clientPC, clientCity, clientEmail) VALUES('$date', '$name', '$adress', $pc, '$city', '$email')");
    }

    public function getOrderId()
    {
        $db = $this->dbConnect();
        $id = $db->query("SELECT COUNT(DISTINCT idOrder) FROM Contain");
        $req = $id->fetch();

        if($req > 0){
            $_SESSION['orderId'] = $req['0']['0'] + 1;
        }
        else {
            $_SESSION['orderId'] = 1;
        }        
    }
    public function containProducts()
    {
        $db = $this->dbConnect();
        $idOrder = $_GET['id'];

        foreach($_SESSION['basket'] as $idProduct => $qtt){
            $req = $db->query("INSERT INTO `Contain` (idOrder, idProduct, quantity) VALUES($idOrder, $idProduct, $qtt)");
        }        
    }
}