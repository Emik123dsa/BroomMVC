<?php 

namespace Developer\Controller;
use Engine\Core\Auth\Auth; 
use Engine\Controller;

class DeveloperController extends Controller 
{
    //protected $auth;
    /**
     * consrtuct of controller in the developer entity
     *
     * @param $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
 
        if ($this->auth->hashUser() == null) 
        {
            header('Location: /developer/login/', true, 301);
            exit;
        }

    }
    /**
     * logout
     *
     * @return void
     */
    public function logout() 
    {
    if ($this->auth->hashUser() !== null) {
            $this->auth->expired(); 
            header('Location: /developer/login/', true, 301);    
        exit;
    }

    }
}

?>