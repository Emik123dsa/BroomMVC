<?php 

namespace Engine\Core\Template; 
use Engine\DI\DI;
use Engine\Core\Template\Theme; 

class View 
{ 
    private $theme; 

    public function __construct(DI $di)

    {
        $this->di = $di;
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
       $pathUrl = $this->entityDetermine($template);

       $functions = $this->getThemePath() . DS . 'Assets/Assets.php'; 
        
       if (file_exists($functions)) 
       {
           include $this->getThemePath() . DS . 'Assets/Assets.php'; 
       }

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
            throw new \Exception(sprintf("This file is not being an available - %s.php", $template, $pathUrl));
        }
        
    }

    public function entityDetermine($template) 
    {
        switch(ENV) {
            case 'Cms': 
                $entity = ROOT_DIR . DS . 'content/themes/default' . DS . $template . '.php';
                return $entity; 
                break;
            case 'Developer': 
                $entity = path('view') . DS . $template . '.php';
                return $entity;
                break;

            default: 
                throw new \InvalidArgumentException(sprintf('This entity does not exist -%s', ENV));
                break;
        }
    }

    public function getThemePath() 
    {
        switch(ENV) 
        {
            case 'Cms': 
                return ROOT_DIR . DS . 'content/themes/default';
                break;

            case 'Developer': 
                return path('view');
                break;

        }

    }
}


?>