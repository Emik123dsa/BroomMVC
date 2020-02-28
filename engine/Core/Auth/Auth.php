<?php

namespace Engine\Core\Auth; 
use Engine\Helper\Cookie; 
use Engine\Core\Auth\AuthInterface;

class Auth implements AuthInterface 
{
    protected $authed = false; 

    protected $hashUser; 
    /**
     * embed an user into session
     *
     * @return void
     */
    public function authed() 
    {
        return $this->authed;
    }
    /**
     * recieve and retrieve cookies as a hash for signed user
     *
     * @return void
     */
    public function hashUser() 
    {
        return Cookie::get('auth_user');
    }
    /**
     * auth for user
     *
     * @param [type] $hashUser
     * @return void
     */
    public function auth($hashUser) 
    {    
        Cookie::set('auth_user', true); 
        Cookie::set('auth_hashUser', $hashUser);

        $this->authed = true; 
        $this->hashUser   = $hashUser;
    
    }
    /**
     * expired for cookies
     *
     * @return void
     */
    public function expired() 
    {
    Cookie::delete('auth_user'); 
    Cookie::delete('auth_hashUser');

    $this->authed = false; 
    $this->hashUser   = null;

    }
    
    public static function salt() 
    {
        return (string) rand(123456789, 987654321);
    }

    public static function encrypt($password) 
    {
        return hash('sha256', $password, static::salt());
    }
}

?>