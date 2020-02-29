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


}

?>