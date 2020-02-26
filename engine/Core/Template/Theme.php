<?php 

namespace Engine\Core\Template; 

class Theme 
{
    const NAME_THEME_RULES = [
        'header' => 'header-%s.php', 
        'footer' => 'footer-%s.php', 
        'sidebar' => 'sidebar-%s.php'
    ];

    public function header($template = null) 
    {

        $template = (string) $template;

        $file = sprintf(self::NAME_THEME_RULES['header'], $template);
        
        if ($template == null) {
            $file = 'header.php';
        }

        $templatePath = ROOT_DIR . '/content/themes/default/' . $file; 
        
        if (!is_file($templatePath)) 
        {
            throw new \Exception(sprintf('You have to add an header.php file in the directory - %s', $template, $templatePath));
        }

        $this->loadTemplatePath($templatePath);

    }

    public function footer($template = null) 
    {
        $template = (string) $template;

        $file = sprintf(self::NAME_THEME_RULES['footer'], $template);
        
        if ($template == null) {
            $file = 'footer.php';
        }

        $templatePath = ROOT_DIR . '/content/themes/default/' . $file; 
        
        if (!is_file($templatePath)) 
        {
            throw new \Exception(sprintf('You have to add an header.php file in the directory - %s', $template, $templatePath));
        }

        $this->loadTemplatePath($templatePath);
    }

    public function sidebar($template = null) 
    {
        $template = (string) $template;

        $file = sprintf(self::NAME_THEME_RULES['sidebar'], $template);
        
        if ($template == null) {
            $file = 'sidebar.php';
        }

        $templatePath = ROOT_DIR . '/content/themes/default/' . $file; 
        
        if (!is_file($templatePath)) 
        {
            throw new \Exception(sprintf('You have to add an header.php file in the directory - %s', $template, $templatePath));
        }

        $this->loadTemplatePath($templatePath);
    }

    public function blocks($template = null, $vars = []) 
    {

        $templatePath = ROOT_DIR . '/content/themes/default/' . $template . '.php'; 
        
        if (!is_file($templatePath)) 
        {
            throw new \Exception(sprintf('You have to add an header.php file in the directory - %s', $template, $templatePath));
        }

        $this->loadTemplatePath($templatePath);
    }

    public function loadTemplatePath(string $templatePath, array $vars = []) 
    {
        if ($vars != []) {
            extract($vars);  
        }

        ob_start(); 
        ob_implicit_flush(0); 

        try 
        {
            require_once $templatePath; 

        } catch (\Exception $e) 
        {
            ob_end_clean(); 
            echo $e->getMessage(); 
            exit;
        }

        echo ob_get_clean(); 
    }


}

?>