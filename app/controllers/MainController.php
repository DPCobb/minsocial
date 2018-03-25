<?php

require_once 'app/models/Views.Class.php';

class Main{

    public $router;
    public $view;

    public function __construct()
    {
        $this->router =  new \Buki\Router();
        $this->view = new Views();
    }

    public function route()
    {
        $this->router->get('/', function(){
            $this->view->displayView('index/index');
        });
        $this->router->get('/home', function(){
            echo 'hello from home';
        });

        $this->router->run();
    }
}

$routes = new Main();
$routes->route();

 ?>
