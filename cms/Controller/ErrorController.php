<?php 
namespace Cms\Controller;

use Engine\Controller;

class ErrorController extends CmsController
{
    public function error404() 
    {
        echo "Error has been occured";
    }
}


?>