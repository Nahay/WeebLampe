<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:dbname=id16702463_bd_weeb_lampe;host=localhost;charset=utf8',
                        'id16702463_weeb',
                        'MDPweeblampe1+');
        return $db;
    }
}