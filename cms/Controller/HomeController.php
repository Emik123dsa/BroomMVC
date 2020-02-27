<?php 

namespace Cms\Controller;


class HomeController extends CmsController
{
    /**
     * index
     *
     * @return void
     */
    public function index() 
    {
       var_dump($this->request->get);
    
       $this->view->render('index');
    }
    
}

?>