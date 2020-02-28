<?php 

namespace Developer\Controller;

use Engine\Controller;

class LoginController extends Controller
{

    public function __construct($di)
    {
        parent::__construct($di);

        if ($this->auth->hashUser() !== null) {

            header('Location: /developer/', true, 301);

            exit;
        }       

    }

    public function loginRender() 
    {
        
        $this->view->render('login');
    }

    public function loginAjax() 
    {   
        

    }

}

?>