<?php declare(strict_types=1); 

require_once __DIR__ . '/../vendor/autoload.php';

class_alias('\\Engine\\Core\\Template\\Asset', 'Asset');
class_alias('\\Engine\\Core\\Template\\Token', 'Token');

include_once 'Function.php';

define('DS', DIRECTORY_SEPARATOR);

use Engine\Cms;
use Engine\DI\DI;

try {

    $di = new DI(); 
    $services = require_once __DIR__ . '/Config/Service.php';

    foreach ($services as $service) {
        
        $provider = new $service($di);
       
        $provider->init();   
    }


    $cms = new Cms($di);

    $cms->run();

} catch(\ErrorException $e) {

    echo $e->getMessage();

    exit;
}

?>