<?php 

namespace Developer\Controller;

use Engine\Controller;
use Engine\Core\Database\SqlClaim;

use Developer\Model\User\UserRepository; 

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
        /**
         * Example of Ajax for login
         * $params = $this->requst->post;
         */

    }

}

?>