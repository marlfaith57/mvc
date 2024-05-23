<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 13/04/2024
 * Time: 2:25 PM
 */

namespace App\Controller;

use App\Core\View;
use App\Model\User;

class Users
{
    public function index()
    {
        $users = User::getAllUsers();
        View::render('Users/index',$users);
    }

    public function add()
    {
        View::render('Users/add');
        if(isset($_POST['add'])){
            $result= User::add($_POST);
            if($result){
                header('location:'.url.'Users');
            }
        }
    }

    public function edit($id = null)
    {
        $user= User::getUserByID($id);
        View::render('Users/edit',$user);
        if(isset($_POST['edit'])){
            $result=User::edit($_POST);
            if($result){
                header('location:'.url.'Users');
            }
        }
    }

    public function delete($id = null)
    {
        if(!$id==null)
        {
            $result=User::delete($id);
            if($result){
                header('location:'.url.'Users');
            }
        }
    }

    public function login()
    {
        View::render('Users/login');
        if(isset($_POST['login'])){
            $user=User::login($_POST);
            if(!empty($user)){
                $_SESSION['id'] = $user->id;
                header('location:'.url.'Home');
            }else{
                header('location:'.url.'Users/login');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:'.url.'Users/login');
    }
}