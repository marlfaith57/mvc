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
        if(isset($_POST['add'])){
            $result=Product::add($_POST);
            if($result){
                header('location:'.url.'Products');
            }
        }
        View::render('Products/add');
    }

    public function edit($id = null)
    {
        $product=Product::getProductByID($id);
        if(isset($_POST['edit'])){
            $result=Product::edit($_POST);
            if($result){
                header('location:'.url.'Products');
            }
        }
        View::render('Products/edit',$product);
    }

    public function delete($id = null)
    {
        if(!$id==null)
        {
            $result=Product::delete($id);
            if($result){
                header('location:'.url.'Products');
            }
        }
    }
}