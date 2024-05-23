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

    public static function getStudentbyID($id)
    {
        $db = Model::getDB();
        $sql="SELECT * FROM students WHERE id = :id LIMIT 1";
        $query = $db->prepare($sql);
        $parameters = [':id'=>$id];
        $query->execute($parameters);

        return array($query->fetch());
    }


    public static function add($post)
    {
        extract($post);
        $db = Model::getDB();
        $sql="INSERT INTO students (id_no,name,course,year_level) VALUES (:id_no,:name,:course,:year_level)";
        $parameters = [':id_no'=>$id_no,':name'=>$name,':course'=>$course,'year_level'=>$year_level];
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
        $sql="UPDATE students SET id_no=:id_no,name=:name,course=:course,year_level=:year_level WHERE id=:id";
        $parameters = array(':id'=>$id,':id_no'=>$id_no,':name'=>$name,':course'=>$course,'year_level'=>$year_level);
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
        $sql="DELETE FROM students WHERE id=:id";
        $parameters = array(':id'=>$id);
        $query = $db->prepare($sql);
        if($query->execute($parameters)){
            return true;
        }else{
            return false;
        }
    }
}