<?php 

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
use Engine\DI\DI;
use Engine\Helper\Common;

class Cms {
    /**
     * di
     *
     * @var [type]
     */
    private $di;
/**
 * 'db'
 *
 * @var [type]
 */
    public $db;

/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $router;
    /**
     * request
     *
     * @var [type]
     */
    public $request;
    /**
     * config
     *
     * @var [type]
     */ 
    public $config;
    /**
     * config
     *
     * @var [type]
     */
    public $view;
    /**
     * view
     *
     * @param [type] $di
     */
/**
 * class Constuctor
 *
 * @param [type] $di
 */ 

    public function __construct($di)
    {
       $this->di = $di; 
       $this->db = $this->di->get('db');
       $this->router = $this->di->get('router');
       $this->view   = $this->di->get('view');
       $this->config = $this->di->get('config');
       $this->request = $this->di->get('request');
    }
    
    public function run() 
    {
        try {
        require_once ROOT_DIR. '/' . mb_strtolower(ENV)."/Route.php";

        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getUrl());

        if($routerDispatch == null) {

            $routerDispatch = new DispatchedRoute('ErrorController:error404');

        }

        list($class, $action) = explode(':', $routerDispatch->getController(), 2);

        $controller = '\\'. ENV .'\\Controller\\' . $class;
        
        $parameters = $routerDispatch->getParameters();

        call_user_func_array([new $controller($this->di) , $action], array($parameters) );

    } catch (\Exception $e) {

        echo $e->getMessage();

        exit;
        }
    }

}


?>