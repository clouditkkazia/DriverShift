<?php

namespace Framework;

class Router
{

    protected $routes = [];

    public function registerRoute($method, $uri, $action)
    {
        //so after explode, u can assign the variables u want coming from explode 1 to 1
        //'HomeController@index'
        //$controller = 'HomeController' and $controllerMethod='index'

        list($controller, $controllerMethod) = explode('@', $action);

        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ];

        // inspect($uri);
        // inspect($action);
        //inspect($controllerMethod);
    }


    /******************************************************************************** */


    /**GET
     * @param string $uri
     * @param string $controller
     * @return void
     */

    //this function is going to change as i have to register the routes!!!  
    public function get($uri, $controller)
    {
        // /inspect($controller);
        $this->registerRoute('GET', $uri, $controller);
    }

    //OLDWAY
    // public function get($uri, $controller)
    // {
    //     $this->routes[] = ['method' => 'GET', 'uri' => $uri, 'controller' => $controller];
    //     return;
    // }




    /**POST
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
        //$this->routes[] = ['method' => 'POST', 'uri' => $uri, 'controller' => $controller];
        //return;
    }

    /**PUT
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
        // $this->routes[] = ['method' => 'PUT', 'uri' => $uri, 'controller' => $controller];
        // return;
    }

    /**DELETE
     * @param string $uri
     * @param string $controller
     * @return void
     */

    public function delete($uri, $controller)
    {
        $this->registerRoute('DELETE', $uri, $controller);
        // $this->routes[] = ['method' => 'DELETE', 'uri' => $uri, 'controller' => $controller];
        // return;
    }

    //find from arry matching the uri and method 
    //and send the controller to load ie loadview helperfunction is loading the page. right HERE!!
    public function loadRoute($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                //inspect($route);
                //require basePath('App/' . $route['controller']);
                //so this changes to 
                //extract contrller and controllermethod
                $controller = 'App\\Controllers\\' . $route['controller'];
                // inspect($controller);
                $controllerMethod = $route['controllerMethod'];
                // inspect($controllerMethod);
                //creaete an instance of controller and call the method
                $controllerInstance = new $controller();
                // echo 'instance of object=>' . $controller . '<br>';
                // inspect($controllerInstance);
                $controllerInstance->$controllerMethod();
                // inspectAndDie($controllerMethod);
                return;
            }
        }
    }
}
