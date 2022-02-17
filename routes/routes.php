<?php

class Route {
    public $adress;
    public $views;
    public $name;
}

class  Routes {
    private $routes = [];

    public function __construct() {
        $this->routes[] = $this->createRoute(
            '1',
            'list.php',
            'Список'
        );
        $this->routes[] = $this->createRoute(
            '2',
            'post.php',
            'Не список'
        );
    }


    private function createRoute($adress, $views, $name)
    {
        $c = new Route;
        $c->adress = $adress;
        $c->views = $views;
        $c->name = $name;
        return $c;
    }

    public function getAllRoutes()
    {
        return $this->routes;
    }



}







?>