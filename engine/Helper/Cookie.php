<?php 

namespace Engine\Helper; 

define('COOKIE_LIVE', 60*60*24*365);
define('COOKIE_DIE', NULL);
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
    public static function set($cookie, $value, $time = COOKIE_LIVE) 
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
    public static function delete($cookie, $time = COOKIE_LIVE) 
    {
        if (isset($_COOKIE[$cookie])) {
            self::set($cookie, null, time()-$time, '/'); 
            unset($_COOKIE[$cookie]);
        }
    }

}

?>