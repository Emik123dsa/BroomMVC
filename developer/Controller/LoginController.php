<?php 

namespace Developer\Controller;


use Engine\Core\Auth\Auth;
class LoginController extends DeveloperController 
{

    public function loginInterface() 
    {
        
        $this->auth->auth('5'); 
        
        if (!$this->auth->authed()) {

            header('Location: login/', true, 301); 
            exit;

        }
        
        echo 'HELLO!';
    }

    public function login() 
    {   
       
        echo 'LOGIN';
    }

}

?>