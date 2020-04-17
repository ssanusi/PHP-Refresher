<?php


class Router
{
    protected $routes = [];

    public static function lood(string $file)
    {
        $router = new static;
        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }

        throw new Exception('No Route Define for this URi');
    }
}