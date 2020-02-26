<?php

namespace Engine\Core\Config; 

class Config 
{
    public static function item($key, $group = 'items') 
    {

    }

    public static function file($group) 
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . mb_strtolower(ENV) . '/Config/'. $group .'.php'; 

        if(file_exists($path)) 
        {
            $items = require_once $path;
             
            if (is_array($items)) 
            {
                return $items;

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