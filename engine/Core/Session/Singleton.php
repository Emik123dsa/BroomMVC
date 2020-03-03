<?php 

namespace Engine\Core\Session; 

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
            if(!isset(self::$instance)) { 

                self::$instance = new self;

            }

            self::$instance->startSession();

            self::$instance;
    }
    
}

?>