<?php
// $routes = require base_path('routes.php');

// if(array_key_exists($uri, $routes)){
//     require(base_path($routes[$uri]));
// } else {
//     http_reseponse_code(404);
//     require base_path($routes['404']);
// }

class Router{
    protected $routes = [];

    public function registerRoute($method, $uri, $controller){
        'method' = $method;
        'uri' = $uri;
        'controller' = $controller;
    }

    /**
     * add a GET method
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function get($uri, $controller){
       $this->registerRoute('GET', $uri, $controller);
    }

        /**
     * add a GET method
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function get($uri, $controller){
       $this->registerRoute('GET', $uri, $controller);
    }
    /**
     * add a GET method
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function put($uri, $controller){
       $this->registerRoute('PUT', $uri, $controller);
    }
    /**
     * add a GET method
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function delete($uri, $controller){
       $this->registerRoute('DELETE', $uri, $controller);
    }


}