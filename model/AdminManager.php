<?php

require_once('Manager.php');

Class AdminManager extends Manager
{
    public function isAdmin()
    {
        $db = $this->dbConnect();

        $username = $_POST['nom'];
        $password = $_POST['mdp'];
        $password_hash = MD5($password);

        $logs = $db->query("SELECT * FROM Admin WHERE username = '$username' AND  password = '$password_hash'");
        $count = $logs->fetch();
        
        if($count > 0)
        {
            $_SESSION['id'] = $count['id'];
            return true;
        }        
        else 
        {
            $_SESSION['failed_to_connect'] = 'Nom d\'utilisateur ou mot de passe incorrect';
            return false;
        }
    }

    // Peut-être à mettre dans produit 
    public function addProduct()
    {
        $db = $this->dbConnect();

        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['img'];
        $idCat = $_POST['cat'];

        $product = $db->query("INSERT INTO Product (description, price, image, idCategory) VALUES('$description', $price, '$image', '$idCat')");
        return $product;
    }

    public function deleteProduct()
    {
        $db = $this->dbConnect();
        $id = $_GET['id'];

        $db->exec("DELETE FROM Product WHERE id = $id");
        $db->exec("UPDATE Product set id = id-1 WHERE id > $id");
    }
    
    public function getProduct()
    {
        $db = $this->dbConnect();
        $id = $_GET['id'];

        $req = $db->query("SELECT * FROM Product WHERE id = $id");
        $product = $req->fetch();
        return $product;
    }
    
    public function editProduct()
    {
        $db = $this->dbConnect();
        $id = $_GET['id'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['img'];
        $idCat = $_POST['cat'];

        $db->exec("UPDATE Product set description='$description', price=$price, image='$image', idCategory='$idCat' WHERE id=$id");
    }

}