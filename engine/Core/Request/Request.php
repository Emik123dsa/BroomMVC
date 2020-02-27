<?php 

namespace Engine\Core\Request; 

class Request 
{
    /**
     * post
     *
     * @var [type]
     */
    public $post;
    /**
     * get
     *  
     * @var [type]
     */
    
    public $get;
    
    /**
     * cookie
     *
     * @var [type]
     */
    public $cookie;
    /**
     * env
     *
     * @var [type]
     */
    public $env; 
    /**
     * files
     *
     * @var [type]
     */
    public $files;
    /**
     * server
     *
     * @var [type]
     */
    public $server;
    /**
     * server
     *
     * @var [type]
     */
    public $request;

    public function __construct()
    {
        $this->post     =  $_POST; 
        $this->get      =  $_GET;  
        $this->server   =  $_SERVER; 
        $this->files    =  $_FILES;  
        $this->env      =  $_ENV;  
        $this->request  =  $_REQUEST; 
        $this->cookie   =  $_COOKIE; 
    }

    public function convertToHtmlChars(array $operation) 
    {
        return htmlspecialchars($operation);
    }
    
}


?>