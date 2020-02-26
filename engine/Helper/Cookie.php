<?php 

namespace Engine\Core\Helper; 

class Cookie 
{
    public static function set($cookie, $value, $time = 3600) 
    {
        setcookie($cookie, $value, time() + $time, '/', 1);
    }

    public static function get($cookie) 
    {
        return isset($_COOKIE[$cookie]) ? $_COOKIE[$cookie] : null;
    }

    public static function expires($cookie, $time = 3600) 
    {
        if (isset($_COOKIE[$cookie])) {
            self::set($cookie, null, time()-$time); 
            unset($_COOKIE[$cookie]);
        }
    }

}

?>