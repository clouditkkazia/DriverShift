<?php

namespace Framework;

class Router
{

    protected $routes = [];

    /**GET
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function get($uri, $controller)
    {
        $this->routes[] = ['method' => 'GET', 'uri' => $uri, 'controller' => $controller];
        return;
    }

    /**POST
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function post($uri, $controller)
    {
        $this->routes[] = ['method' => 'POST', 'uri' => $uri, 'controller' => $controller];
        return;
    }

    /**PUT
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function put($uri, $controller)
    {
        $this->routes[] = ['method' => 'PUT', 'uri' => $uri, 'controller' => $controller];
        return;
    }

    /**DELETE
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function delete($uri, $controller)
    {
        $this->routes[] = ['method' => 'DELETE', 'uri' => $uri, 'controller' => $controller];
        return;
    }

    //find from arry matching the uri and method 
    //and send the controller to load ie loadview helperfunction is loading the page. right HERE!!
    public function loadRoute($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                require basePath('App/' . $route['controller']);
            }
        }
    }
}
