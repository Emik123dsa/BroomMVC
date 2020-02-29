<?php 

namespace Engine\Helper; 

trait Singleton 
{
    protected static $instance = null; 

    private function __consruct() 
    {
        /**
         * singleton private construct
         *
         * @return void
         */
    }

    private function __clone() 
    {
        /**
         * clone magic method
         */
    }

    private function __wakeup() 
    {
        /**
         * arouse magic method
         *
         * @return void
         */
    }

    public static function getInstance() 
    {
            self::$instance === null ? 
            self::$instance = new static() : self::$instance;
    }
}

?>