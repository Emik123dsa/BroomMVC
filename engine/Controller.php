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
     * construct
     *
     * @param DI $di
     */
    public function __construct(DI $di) 
    {
        $this->di = $di;
        $this->db = $this->di->get('db'); 
        $this->router = $this->di->get('router');
        $this->view = $this->di->get('view');
    }
}

?>