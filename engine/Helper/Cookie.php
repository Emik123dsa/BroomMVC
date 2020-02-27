<?php 

namespace Engine\Helper; 

class Cookie 
{
    /**
     * set cookies
     *
     * @param [type] $cookie
     * @param [type] $value
     * @param integer $time
     * @return void
     */
    public static function set($cookie, $value, $time = 3600) 
    {
        setcookie($cookie, $value, time() + $time, '/');
    }
    /**
     * get cookies
     *
     * @param [type] $cookie
     * @return void
     */
    public static function get($cookie) 
    {
        return isset($_COOKIE[$cookie]) ? $_COOKIE[$cookie] : null;
    }
    /**
     * expired for cookies
     *
     * @param [type] $cookie
     * @param integer $time
     * @return void
     */
    public static function delete($cookie, $time = 3600) 
    {
        if (isset($_COOKIE[$cookie])) {
            self::set($cookie, null, -$time); 
            unset($_COOKIE[$cookie]);
        }
    }

}

?>