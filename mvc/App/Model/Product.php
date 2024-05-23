<?php
namespace App\Model;

use App\Core\Model;

class Product
{
    public static function getAllProducts()
    {
        $db = Model::getDB();
        $sql="SELECT * FROM products ORDER BY name";
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getProductbyID($id)
    {
        $db = Model::getDB();
        $sql="SELECT * FROM products WHERE id = :id LIMIT 1";
        $query = $db->prepare($sql);
        $parameters = [':id'=>$id];
        $query->execute($parameters);

        return array($query->fetch());
    }


    public static function add($post)
    {
        extract($post);
        $db = Model::getDB();
        $sql="INSERT INTO products (name,price,created,modified)VALUES (:name,:price,:created,:modified)";
        $parameters = [':name'=>$name,':price'=>$price,':created'=>date('Y-m-d'),':modified'=>date('Y-m-d')];
        $query = $db->prepare($sql);
        if($query->execute($parameters)){
            return true;
        }else{
            return false;
        }
    }

    public static function edit($post)
    {
        extract($post);
        $db = Model::getDB();
        $sql="UPDATE products SET name=:name,price=:price,modified=:modified WHERE id=:id";
        $parameters = [':id'=>$id,':name'=>$name,':price'=>$price,':modified'=>date('Y-m-d')];
        $query = $db->prepare($sql);
        if($query->execute($parameters)){
            return true;
        }else{
            return false;
        }
    }

    public static function delete($id)
    {
        $db = Model::getDB();
        $sql="DELETE FROM products WHERE id=:id";
        $parameters = array(':id'=>$id);
        $query = $db->prepare($sql);
        if($query->execute($parameters)){
            return true;
        }else{
            return false;
        }
    }
}