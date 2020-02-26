<?php 
namespace Engine\Service; 

use Engine\DI\DI; 

abstract class AbstractProvider
{
    /**
     * di
     *
     * @var [type]
     */
    protected $di;
    /**
     * construct
     */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }
/**
 * init
 *
 * @return void
 */
    abstract function init();
}
?>