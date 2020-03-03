<?php 

namespace Engine; 
use Engine\DI\DI;
abstract class Controller 
{
    /**
     * di
     *
     * @var [type]
     */
    protected $di;
    /**
     * db
     *
     * @var [type]
     */
    protected $db;
    /**
     * router
     *
     * @var [type]
     */
    protected $router;
    /**
     * views
     *
     * @var [type]
     */
    protected $view;
    /**
     * config
     *
     * @var [type]
     */
    protected $config;
    /**
     * request
     *
     * @var [type]
     */
    protected $request; 
    /**
     * construct
     *
     * @param DI $di
     */
    protected $auth;
    /**
     * model
     *
     * @param DI $di
     */ 

    protected $session;
    public function __construct(DI $di) 
    {
        $this->di = $di;
            
        $this->initVars();
        
    }

    public function __get($key) 
    {
        return $this->di->get($key);
    }

    public function initVars() 
    {
        $vars = array_keys(get_object_vars($this));

        foreach($vars as $var) 
        {
            if ($this->di->has($var)) {
                
                $this->{$var} = $this->di->get($var);

            }
        }
        return $this;
    }
}

?>