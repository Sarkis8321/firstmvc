<?php

class Route {
    public $adress;
    public $views;
}

class  Routes {
    private $routes = [];

    public function __construct() {
        $this->routes[] = $this->createRoute(
            '1',
            'list.php'
        );
        $this->routes[] = $this->createRoute(
            '2',
            'post.php'
        );
    }


    private function createRoute($adress, $views)
    {
        $c = new Route;
        $c->adress = $adress;
        $c->views = $views;
        return $c;
    }

    public function getAllRoutes()
    {
        return $this->routes;
    }



}







?>