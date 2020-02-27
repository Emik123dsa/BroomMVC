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
       
       $this->view->render('index');
       
    }
    
}

?>