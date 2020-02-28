<?php 

namespace Engine; 
use Engine\DI\DI; 
use Engine\Core\Database\SqlClaim;
class Model 
{
    /**
     * di
     *
     * @var [type]
     */
    protected $di; 
    /**
     * db
     *
     * @var [type]
     */
    protected $db; 
    /**
     * db
     *
     * @var [type]
     */
    protected $sqlClaim; 
    /**
     * config
     *
     * @var [type]
     */
    protected $config;

    public function __construct(DI $di)
    {
        $this->di = $di; 
        $this->db = $this->di->get('db');
        $this->config = $this->di->get('config');

        $this->sqlClaim = new SqlClaim();
        
    }


}

?>