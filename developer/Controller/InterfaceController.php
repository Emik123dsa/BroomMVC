<?php 

namespace Developer\Controller; 

class InterfaceController extends DeveloperController 
{
    /**
     * This an example of interface
     * Model User
     * You can recieve anything from DB via Model
     * Render of graphical
     *
     * @return void
     */
    public function interface() 
    {
        $this->load->model('User'); 
        
        $this->data['users'] = $this->model->user->getUsers();

        $this->view->render('developer', $this->data);
    }

}

?>