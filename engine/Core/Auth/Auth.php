<?php

namespace Engine\Core\Auth; 
use Engine\Core\Helper\Cookie; 
use Engine\Core\Auth\AuthInterface\AuthInterface;

class Auth implements AuthInterface 
{
    protected $authed = false; 

    protected $user; 

    public function authed() 
    {
        return $this->authed;
    }

    public function user() 
    {
        return $this->user;
    }

    public function auth($user) 
    {
        Cookie::set('auth.signin', true); 
        Cookie::set('auth.user', $user);

        $this->authed = true; 
        $this->user   = $user;

    }
    public function expired() 
    {
    Cookie::expires('auth.signin'); 
    Cookie::expires('auth.user');

    $this->authed = false; 
    $this->user   = null;

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