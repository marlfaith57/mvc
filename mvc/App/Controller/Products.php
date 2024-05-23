<?php
namespace App\Controller;

use App\Core\View;
use App\Model\Product;

class Products
{
    public function index()
    {
        $products = Product::getAllProducts();
        View::render('Products/index',$products);
    }

    public function add()
    {
        View::render('Students/add');
        if(isset($_POST['add'])){
            $result=Student::add($_POST);
            if($result){
                header('location:'.url.'Students');
            }
        }
    }

    public function edit($id = null)
    {
        $student=Student::getStudentByID($id);
        View::render('Students/edit',$student);
        if(isset($_POST['edit'])){
            $result=Student::edit($_POST);
            if($result){
                header('location:'.url.'Students');
            }
        }
    }

    public function delete($id = null)
    {
        if(!$id==null)
        {
            $result=Student::delete($id);
            if($result){
                header('location:'.url.'Students');
            }
        }
    }
}