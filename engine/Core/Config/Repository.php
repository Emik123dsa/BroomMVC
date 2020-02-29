<?php 

namespace Engine\Core\Config; 

class Repository 
{
    /**
     * stored array
     *
     * @var array
     */
    protected static $stored = []; 
    /**
     * store 
     *
     * @param [type] $group
     * @param [type] $key
     * @param [type] $data
     * @return void
     */
    public static function store($group, $key, $data) 
    {
        if (!isset(static::$stored[$group]) || !is_array(static::$stored[$group])) 
        {
            static::$stored[$group]= [];
        }

        static::$stored[$group][$key] = $data;
    }
    /**
     * This static function us using for retrieve of theme defaults;
     *
     * @param [type] $group
     * @param [type] $key
     * @return void
     */
    public static function retrieve($group, $key) 
    {
        return isset(static::$stored[$group][$key]) ? static::$stored[$group][$key] : false;
    }
    /**
     * Retrieve by group
     *
     * @param [type] $group
     * @return void
     */
    public static function retrieveGroup($group) 
    {
        return isset(static::$stored[$group]) ? static::$stored[$group] : false;
    }

}

?>