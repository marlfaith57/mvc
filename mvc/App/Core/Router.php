<?php
namespace App\Core;

class Router
{
    private $controller = null;
    private $action = null;
    private $params = [];


	/* excutes everytime the class is called*/
    public function __construct()
    {
        $this->splitUrl();
		$this->dispatch();
		$this->getController();
	}

    public function getController()
    {
        return $this->controller;
    }

	/* split the url into 3 separate parts,Controller,Action and parameter*/
    private function splitUrl()
    {
		$url=$_SERVER['QUERY_STRING'];
        if (isset($url)) {
            $url = trim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $this->controller = isset($url[0]) ? $url[0] : null;
            $this->action = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $this->params = array_values($url);
        }
	}

	/* sends off to its destination */
    public function dispatch()
    {
        if(!isset($_SESSION['id'])){
            $this->controller='App\Controller\Users';
            $this->controller=new $this->controller;
            $this->controller->login();
        }else{
            if (!$this->controller) {
                $this->controller='App\Controller\Home';
                $this->controller=new $this->controller;
                $this->controller->index();
            } else{
                $this->controller='App\Controller\\'.$this->controller;
                if (class_exists($this->controller)){
                    $this->controller = new $this->controller();
                    if (is_callable([$this->controller, $this->action])) {
                        if (!empty($this->params)) {
                            call_user_func_array(array($this->controller, $this->action), $this->params);
                        } else {

                            $this->controller->{$this->action}();
                        }

                    } else {
                        if (strlen($this->action ?? '') == 0) {
                            $this->controller->index();
                        }
                        else{
                            echo "Method not found";
                        }
                    }
                }else{
                    echo "Class not found";
                }
            }
        }

    }
}