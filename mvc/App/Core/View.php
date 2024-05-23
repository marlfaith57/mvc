<?php
namespace App\Core;

class View
{
	/* loads the head,navbar and the footer */
	/* loads gets the file sent from the controller */
    public static function render($view, $args = [])
    {
        $head = app . "View/Template/Head.php";
        $footer = app . "View/Template/Footer.php";
        $file = app . "View/$view".".php";
        if(isset($_SESSION['id'])){
            require $head;
        }
        extract($args);
        if (is_readable($file)) {
            require $file;
        } else {
            echo("$file not found");
        }
        if(isset($_SESSION['id'])){
            require $footer;
        }
    }
}