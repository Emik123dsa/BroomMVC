<?php 

namespace Cms\Controller;

use Engine\Controller;

class CmsController extends Controller 
{
    public $data;
    /**
     * controller in the entity cms
     *
     * @param $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }
}

?>