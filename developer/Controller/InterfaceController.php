<?php 

namespace Developer\Controller; 

class InterfaceController extends DeveloperController 
{
    
    public function interface() 
    {
        echo "<pre>";
        var_dump($_SERVER);
        echo 'ADMIN';
    }

}

?>