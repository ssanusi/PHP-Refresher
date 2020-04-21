<?php


class Router
{
    public array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load(string $file): Router
    {
        $router = new static;
        require $file;

        return $router;
    }


    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No Route Define for this URi');
    }
}