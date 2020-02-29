<?php 


function path($entity) 
{
    $templateFile = ROOT_DIR . DS . strtolower(ENV) . DS . '%s'; 

    if (ENV == 'Cms') 
    {
        $templateFile = ROOT_DIR . DS . strtolower(ENV) . DS . '%s';
    }
    
    $entity = ucfirst($entity); 

    switch(strtolower($entity)) 
    {
        case 'view': 
            return sprintf($templateFile, $entity);
        case 'controller': 
            return sprintf($templateFile, $entity);
        case 'model': 
            return sprintf($templateFile, $entity);
        case 'config':
            return sprintf($templateFile, $entity);
        default: 
            return ROOT_DIR;
    }

}

?>