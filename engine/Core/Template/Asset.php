<?php 

namespace Engine\Core\Template;

use Exception;

class Asset 
{
    const JS_MASK = ".js"; 
    const CSS_MASK = ".css"; 
    const LESS_MASK = ".less";
    const SCSS_MASK = ".scss"; 
    const SASS_MASK = ".sass"; 

    const MASK_JS_REPOSITORY = '<script type="text/javascript" src="%s"></script>';
    const MASK_CSS_REPOSITORY = '<link href="%s" type="text/css" rel="stylesheet">'; 

    protected static $container = []; 

    public static function css($path) 
    {
        $file = Theme::getPathFile() . DS . $path . self::CSS_MASK;
        
        if(is_file($file)) 
        {
            
            self::$container['css'][] = [
                'file' => Theme::getAssetPath() . DS . $path . self::CSS_MASK
            ];
           
        } else {
    
            throw new \ErrorException(sprintf('This file does not exist in the folder way '.Theme::getAssetPath() . DS . '%s' .self::CSS_MASK, $path));
        }
    
        
    }

    public static function js($path) 
    {
        $file = Theme::getPathFile() . DS . $path . self::JS_MASK;
        
        if(is_file($file)) 
        {
            
            self::$container['js'][] = [
                'file' => Theme::getAssetPath() . DS . $path . self::JS_MASK
            ];
        } else {
    
            throw new \ErrorException(sprintf('This file does not exist in the folder way '.Theme::getAssetPath() . DS . '%s' .self::JS_MASK, $path));
        }
    } 

    public static function renderJs($path) 
    {
        $file = Theme::getPathFile() . DS . $path . self::JS_MASK;
        
        if(is_file($file)) 
        {
                $file = Theme::getAssetPath() . DS . $path . self::JS_MASK;
                echo sprintf(self::MASK_JS_REPOSITORY, $file);
        }
    }

    public static function renderCss($path) 
    {
        $file = Theme::getPathFile() . DS . $path . self::CSS_MASK;
        
        if(is_file($file)) 
        {
                $file = Theme::getAssetPath() . DS . $path . self::CSS_MASK;
                echo sprintf(self::MASK_CSS_REPOSITORY, $file);
        }
    }

    public static function render($name) 
    {
        $resolution = static::determineResolution($name);
        foreach(self::$container[$resolution] as $key) 
        {
            if ($resolution == 'css' || $resolution == 'sass' || $resolution == 'less' || $resolution == 'scss') 
            {
                echo sprintf(self::MASK_CSS_REPOSITORY, $key['file']);
            }
            elseif ($resolution == 'js' ) {
                echo sprintf(self::MASK_JS_REPOSITORY, $key['file']);
            }
        }
    }

    public static function determineResolution($name) 
    {
        switch($name) 
        {
            case 'css': 
                return 'css'; 
            break; 
            case 'js': 
                return 'js';
            break;
            case 'less': 
                return 'less';
            break;
            case 'sass': 
                return 'sass'; 
            break;
            case 'scss':
                return 'scss'; 
            break;
            default: 
                throw new Exception(sprintf('This file .%s does not exist', $name)); 
            break;
        }
    }
    
}

?>