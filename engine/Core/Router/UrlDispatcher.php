<?php 

namespace Engine\Core\Router; 

class UrlDispatcher 
{
    /**
     * methdo
     *
     * @var array
     */
    private $method = [
        "GET", 
        "POST"
    ]; 
    /**
     * router
     *
     * @var array
     */
    private $routes = [
        "GET" => [], 
        "POST" => []
    ];
    /**
     * patterns
     *
     * @var array
     */
    private $patterns = [
        "int" => "[0-9]+", 
        "str" => "[a-zA-Z\.\-_%]+",
        "any" => "[a-zA-Z0-9\.\-_%]+"
    ];
    /**
     * addPatterns
     *
     * @param [type] $key
     * @param [type] $pattern
     * @return void
     */
    public function addPaterns($key, $pattern)
    {
        $this->patterns[$key] = $pattern; 
    } 

    public function routes($method) 
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }

    public function dispatch($method, $uri) 
    {
        $routes = $this->routes(strtoupper($method));
       
        if(array_key_exists($uri, $routes)) {
            return new DispatchedRoute($routes[$uri]);
           
        }

        return $this->doDispatch($method, $uri);
    }

    private function doDispatch($method, $uri) 
    {
        foreach($this->routes($method) as $route => $controller ) {
             $pattern = '#^'. $route . '$#s'; 
             // echo $pattern;
             if (preg_match($pattern, $uri, $parameters)) {
                  return new DispatchedRoute($controller, $this->filterArray($parameters));
             }
        }
    }

    public function signup($method, $pattern, $controller) 
    {
        $convert = $this->convertPattern($pattern);
        
        $this->routes[strtoupper($method)][$convert] = $controller;

    }

    private function convertPattern($pattern) 
    {
   
        if(stripos($pattern, '(') === false)
        {
            return $pattern;
        }
        
        return preg_replace_callback('#\((\w+):(\w+)\)#', [$this, 'replacePattern'], $pattern);    
    
    }

    private function replacePattern($matches) 
    {
       
        return '(?<' . $matches[1] . '>' . strtr($matches[2], $this->patterns) . ')';
    }

    private function filterArray($parameters) {
        foreach($parameters as $key => $value) 
        {
            if (is_int($key)) {
                unset($parameters[$key]);
            }
        }
        return $parameters;
    }
}

?>