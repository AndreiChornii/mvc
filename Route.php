<?php

class Route {

    private $path;
    private $routes;
    private $id;

    public function __construct() {
        include './routes.php';
        
        // path  from user url example /gallery
        $pathInfo = $_SERVER['PATH_INFO'];
        
        if($_GET['id']){
            $idQuery = $_GET['id'];
        }
        
        if(!$pathInfo) {
            $pathInfo = '/';
        }
        
        if($idQuery) {
            $this->id = $idQuery;
        }
        
        $this->path = $pathInfo;
        
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
        
        $idBlog = $this->id;
        
        // connect controller file by controller path
        include $pathController;
        
        // create controller object by class
        $Controller = new $nameController();
        
        
        
        if($idBlog) {
            $Controller->$actionController($idBlog);
        }
        else {
            // execute controller function by name
            $Controller->$actionController();
        }
        
    }
}
