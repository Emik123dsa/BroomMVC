<?php declare(strict_types=1);

namespace Engine\Helper; 

class Common 
{
    /**
     * isPost
     *
     * @return boolean
     */
    public static function isPost(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        } 
        return false;
    }
    /**
     * getMethod
     *
     * @return void
     */
    public static function getMethod() {

        return $_SERVER['REQUEST_METHOD'];
    }
/**
 * getPathUrl
 *
 * @return void
 */
    public static function getUrl() {
        $pathUrl = $_SERVER['REQUEST_URI'];

        if ($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, 0, $position);
        }
        return $pathUrl;
    }
}
?>