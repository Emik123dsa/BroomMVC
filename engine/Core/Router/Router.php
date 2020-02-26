<?php 

namespace Engine\Core\Router; 

class Router {
    /**
     * routes
     *
     * @var array
     */
    private $routes = [];
    /**
     * host
     *
     * @var [type]
     */
    private $host;
    /**
     * disptacher
     *
     * @var [type]
     */
    private $dispatcher;
    /**
     * construct
     *
     * @param [type] $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }
/**
 * add
 *
 * @param [type] $key
 * @param [type] $pattern
 * @param [type] $controller
 * @param string $method
 * @return void
 */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern' => $pattern, 
            'controller' => $controller, 
            'method'       => $method
        ];
    }
    /**
     * dispatch
     *
     * @param [type] $method
     * @param [type] $uri
     * @return void
     */
    public function dispatch($method, $uri) 
    {
        return $this->getDispatcher()->dispatch($method, $uri);
    }
    /**
     * getDispatcher
     *
     * @return void
     */
    public function getDispatcher() 
    {
       

        if($this->dispatcher == null) {
            $this->dispatcher = new UrlDispatcher();
           
            foreach($this->routes as $route) {
              
                $this->dispatcher->signup($route['method'], $route['pattern'], $route['controller']);
            }

        }

        return $this->dispatcher;
    }


}


?>