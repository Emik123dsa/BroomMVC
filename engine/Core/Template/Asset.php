<?php 

namespace Engine\Core\Template; 

class Asset 
{
    const JS_MASK = ".js"; 
    const CSS_MASK = ".css"; 
    const LESS_MASK = ".less";
    const SCSS_MASK = ".scss"; 
    const SASS_MASK = ".sass"; 

    const MASK_JS_REPOSITORY = '<script type="text/javascript" src="%s"></script>';
    const MASK_CSS_REPOSITORY = '<link href="%s" type="text/css" rel="stylesheet">'; 

    public static function css($path) 
    {

    }

    public static function js($path) 
    {

    } 

    public static function renderJs() 
    {

    }

    public static function renderCss() 
    {

    }
}

?>