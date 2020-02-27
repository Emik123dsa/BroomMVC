<?php 

namespace Engine\Core\Auth; 
use Engine\Helper\Cookie; 
interface AuthInterface 
{
    
    public function authed();

    public function hashUser(); 

    public function auth($hashUser);

    public function expired(); 
    
    public static function salt();

    public static function encrypt($password);

}

?>