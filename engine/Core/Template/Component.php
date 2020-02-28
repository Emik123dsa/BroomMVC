<?php 

namespace Engine\Core\Template; 

class Component 
{
    public static function load($name, $data = []) 
    {
        $templatePath = ROOT_DIR . '/content/themes/default' . $name. '.php'; 

        if (ENV == 'Admin') {
            $templatePath = path('view') . '/' . $name .'.php'; 
        }

        if(is_file($templatePath)) 
        {
            extract(array_merge($data, Theme::getData())); 
            require ($templatePath);
        }   else 
        {
            throw new \Exception(sprintf('This file is not being an avaialable - %s', $name));
        }


    }
}


?>