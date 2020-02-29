<?php

namespace Engine\Core\Config; 

class Config 
{
    public static function item($key, $group = 'main') 
    {
        if(!Repository::retrieve($group, $key)) 
        {
            self::file($group);
        }

        return Repository::retrieve($group, $key);

    }

    public static function group($group) 
    {
        if(!Repository::retrieveGroup($group)) 
        {
            self::file($group);
        }

        return Repository::retrieveGroup($group);
    }

    public static function file($group) 
    {
        $path = path('config') . DS . $group . '.php';


        if(file_exists($path)) 
        {
            $items = require $path;
           
            if (is_array($items)) 
            {
                foreach ($items as $item => $key) 
                {
                    Repository::store($group, $item, $key);
                }

            return true;
            } else {

                throw new \Exception(sprintf('This config file is not being an array format', $path));
            }
        } 
        else
        {
        throw new \Exception(sprintf('This config file is not existing currently', $path));
        }
        return false;
    }
}
?>