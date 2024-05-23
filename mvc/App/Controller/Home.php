<?php
namespace App\Controller;

use App\Core\View;

class Home 
{
    public function index()
    {
        View::render('Home/index');
    }
}