<?php 

namespace Engine\Core\Auth\AuthInterface; 

interface AuthInterface 
{
    
    public function authed();

    public function user(); 

    public function auth($user);

    public function expired(); 
    
    public static function salt();

    public static function encrypt();

}

?>