<?php 

namespace Developer\Controller; 

class InterfaceController extends DeveloperController 
{
    
    public function interface() 
    {
        $this->load->model('User'); 
        
        $this->model->user->getUsers();

    }

}

?>