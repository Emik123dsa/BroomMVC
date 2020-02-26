<?php 

namespace Engine\Core\Template; 

use Engine\Core\Template\Theme; 

class View 
{ 
    private $theme; 

    public function __construct()
    {
        $this->theme = new Theme();        
    }
    /**
     * Undocumented function
     *
     * @param [type] $template
     * @param array $vars
     * @return void
     */
    public function render($template, $vars = []) 
    {
       $pathUrl = ROOT_DIR . '/content/themes/default/' . $template . '.php';
       if (is_file($pathUrl)) 
       {

       extract($vars); 

       ob_start();
       ob_implicit_flush(0); 

       try {

        require $pathUrl; 
        
       } catch (\Exception $e) 
       {
            ob_end_clean();
            echo $e->getMessage(); 
            exit;
       }

       echo ob_get_clean();

        } else {
            throw new \Exception(sprintf("This file is not being an available - %s", $template, $pathUrl));
        }
        
    }
}


?>