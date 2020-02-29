<?php 

namespace Engine\Core\Template; 

use Engine\Core\Config\Config; 

class Theme 
{
    const NAME_THEME_RULES = [
        'header' => 'header-%s.php', 
        'footer' => 'footer-%s.php', 
        'sidebar' => 'sidebar-%s.php'
    ];

    const THEME_MASK = '%s/content/themes/%s'; 
    const THEME_ASSET_MASK = '%s/content/themes/%s/Assets';
    protected static $data = []; 

    protected static $url = '';
    
    public $asset;

    public $theme;

    public function __construct()
    {
        $this->asset = new Asset();
        $this->theme = $this;
    }

    public static function getUrl() 
    {
        $currentTheme = Config::item('baseUrl', 'main'); 
        $currentFile = Config::item('defaultTheme', 'main'); 

        return sprintf(self::THEME_MASK, $currentFile, $currentTheme);

    }

    public static function getData() 
    {
        return static::$data;
    }

    public static function setData($data) 
    {
        static::$data = $data;
    }

    public function header($template = null) 
    {

        $template = (string) $template;
        $template = static::detectNameFile($template, __FUNCTION__); 

        Component::load($template);

    }

    public function footer($template = null) 
    {
        $template = (string) $template;
        $template = static::detectNameFile($template, __FUNCTION__); 

        Component::load($template);
    }

    public function sidebar($template = null) 
    {
        $template = (string) $template;
        $template = static::detectNameFile($template, __FUNCTION__); 

        Component::load($template);
    }

    public function blocks($template = null, $vars = []) 
    {

        $template = (string) $template;
        $template = static::detectNameFile($template, __FUNCTION__); 

        Component::load($template, $vars);
    }

    public static function detectNameFile($name, $function) 
    {
        return empty(trim($name)) ? $function : sprintf(self::THEME_MASK[$function], $name);
    }

    public static function getAssetPath() 
    {
        switch(ENV) 
        {
            case 'Developer': 
                return Config::item('baseUrl', 'main') . DS . mb_strtolower(ENV) . DS . 'Assets';  
                break;
            case 'Cms': 
                return sprintf(self::THEME_ASSET_MASK, Config::item('baseUrl', 'main'), Config::item('defaultTheme', 'main')); 
                break;
            default: 
                return Config::item('baseUrl', 'main');
            break;
        }
    }

    public static function getPathFile() 
    {
        switch(ENV) 
        {
            case 'Developer': 
                return ROOT_DIR . DS . mb_strtolower(ENV) . DS . 'Assets';  
                break;
            case 'Cms': 
                return sprintf(self::THEME_ASSET_MASK, ROOT_DIR, Config::item('defaultTheme', 'main')); 
                break;
            default: 
                return ROOT_DIR;
            break;
        }
    }  


}

?>