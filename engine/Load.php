<?php 

namespace Engine; 

use \stdClass; 
use Engine\DI\DI; 
use \Developer\Model\User\UserRepository; 
class Load 
{
    const MODEL_REPOSITORY = '\%s\Model\%s\%sRepository'; 
  
    const LANGUAGE = 'Language/%s/%s.ini';
    /**
     * modelName
     *
     * @var string
     */
    public $modelName = 'model';
    public $languageName = 'language';
    /**
     * di
     *
     * @var [type]
     */
    public $di; 
    
    public function __construct(DI $di)
    {
        $this->di = $di;
        return $this;
    }

    /**
     * model
     *
     * @param [type] $modelName
     * @param boolean $modelDir
     * @param boolean $env
     * @return void
     */
    public function model($modelName, $modelDir = false, $env = false) 
    {
        $modelName = ucfirst($modelName); 

        $modelDir = $modelDir ? $modelDir : $modelName; 

        $env = $env ? $env : ENV; 

        $namespaceModel = sprintf(self::MODEL_REPOSITORY, $env, $modelDir, $modelName);
        
        $isClassModel = class_exists($namespaceModel);
        
        if ($isClassModel) {
            
            $modelRegistry = new stdClass(); 
            
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);
            
            $this->di->set($this->modelName, $modelRegistry);

        } else {
            throw new \Exception(sprintf('This file is being an unavailable - %s', $modelName));
            die();
        }

        return $isClassModel;
    }   
    /**
     * language
     *
     * @param [type] $path
     * @return void
     */
    public function language($path) 
    {
        $file = sprintf(self::LANGUAGE, 'english', $path); 

        $content = parse_ini_file($file, true); 

        $languageName = $this->toCamelCase($content); 

        $language = new stdClass(); 

        $language->{$languageName} = $content; 

        $this->di->set($this->languageName, $language);

        return $language;
    }

    private function toCamelCase($str) 
    {
        $replace = preg_replace('/[^a-zA-Z0-9]/', ' ' ,$str);
        $convert = mb_convert_case($replace, MB_CASE_TITLE);
        $result = lcfirst(str_replace(' ', '', $convert)); 

        return $result;
    }
}

?>