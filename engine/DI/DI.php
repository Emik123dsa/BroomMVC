<?php 

namespace Engine\DI; 

class DI {
/**
 * container
 *
 * @var [type]
 */

    private $container = [];

/**
 * set
 *
 * @param [type] $container
 * @return void
 */
    public function set($key, $value) 
    {   

        $this->container[$key] = $value;

        return $this;
        
    }

/**
 * get
 *
 * @return void
 */
    public function get($key) 
    {
        return $this->has($key);
    }

/**
 * has
 *
 * @param [type] $key
 * @return boolean
 */
    public function has($key) 
    {
 
        if (isset($this->container[$key])) {
            return $this->container[$key];
        }

        return null;

    }

}

?>