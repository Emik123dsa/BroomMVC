<?php 

namespace Engine\Core\Template; 

class Token 
{   
    const CSRF_MASK_RENDER = '<input type="hidden" name="_token" value="%s" />'; 
    const META_CSRF_TOKEN = '<meta name="csrf-token" content="%s" >';

    public $csrf;

    public static function csrf_token() :void
    {
        
        $csrf = md5(uniqid(self::salt(), TRUE));

        echo sprintf(self::CSRF_MASK_RENDER, $csrf); 

    } 

    public static function meta_csrf_token() :void
    {
        $csrf = md5(uniqid(self::salt(), TRUE));

        echo sprintf(self::META_CSRF_TOKEN, $csrf);
    }

    public static function salt() 
    {
        return (string) rand(1000000, 9999999);
    }

}


?>