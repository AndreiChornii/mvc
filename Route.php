<?php

class Route {

    private $path;
    private $routes;

    public function __construct() {
        include './routes.php';
        
        // path  from user url example /gallery
        $this->path = $_SERVER['REQUEST_URI'];
        
        // array routes from routes.php
        $this->routes = $dataRoutes;
    }

    public function executeController() {
        // get array route from routes.php by path | example /gallery
        $dataController = $this->routes[$this->path];
        
        // get full path file controller | example ./controller/GalleryController.php
        $pathController = $dataController['path'];
        $nameController = $dataController['controller'];
        $actionController = $dataController['action'];
        
        // connect controller file by controller path
        include $pathController;
        
        // create controller object by class
        $Controller = new $nameController();
        
        // execute controller function by name
        $Controller->$actionController();
    }
}
