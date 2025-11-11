<?php

 class Router{

      protected $routes = [];

      public function registerRoute($method, $uri, $controller){

         $this->routes[] = [
         'method' => $method,
         'uri' => $uri,
         'controllers' => $controller
         ];
        }

     /**
     * add a GET Route
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function get($uri, $controller){
       $this->registerRoute('GET', $uri, $controller);
    }

      /**
     * add a POST Route
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function post($uri, $controller){
       $this->registerRoute('POST', $uri, $controller);
    }
    /**
     * add a put route
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function put($uri, $controller){
       $this->registerRoute('PUT', $uri, $controller);
    }
    /**
     * add a DELETE Route
     * @param string $uri
     * @param string $controller
     * return void
     */

    public function delete($uri, $controller){
       $this->registerRoute('DELETE', $uri, $controller);
    }
/**
 * Add a route
 * @param String $uri
 * @param string $method
 * 
 * retirn void
 * 
 */

public function route($uri, $method){

   foreach($this->routes as $route){
      if($route['uri'] === $uri && $route['method'] === $method){
         require base_path($route['controllers']);
         return;
      }
   }
   http_response_code(404);
   loadView('erroe/404');
   exit;
}
}