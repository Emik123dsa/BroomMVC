<?php declare(strict_types=1);

namespace Engine\Core\Database;

use \PDO; 
use \PDOException;
use Engine\Core\Config\Config;

class Connection {

    /**
     * Undocumented variable
     *
     * @var [type]
     */
        private $pdo; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
        private $isConnected;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
        private $statement;
    /**
     * Undocumented variable
     *
     * @var array
     */
        private $config = [];
    /**
     * Undocumented function
     *
     * @param array $config
     */
        public function __construct() 
        {
            $this->config = Config::file('database');
            $this->connect();
        }
        /**
         * connect
         *
         * @return void
         */
        public function connect() 
        {

        $dsn = $this->config['driver']. ":host=". $this->config['host'] .";dbname=". $this->config['db_name'];
    
        try
        { 
        
        $this->pdo = new PDO($dsn, $this->config['db_user'], $this->config['db_password'], 
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->config['charset']]); 

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
       
        $this->isConnected = true;
        
        return $this;
        
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
        
    }
    /**
     * close
     *
     * @return void
     */
    public function close() 
    {
        $this->pdo = null;
    }
    /**
     * init
     *
     * @param string $query
     * @param array $params
     * @return void
     */
    public function execute($sql, $params = []) 
    {
        if (!$this->isConnected) {
            $this->connect();
        }

        try {

            $this->statement = $this->pdo->prepare($sql);
            
            return $this->statement->execute($params);
            
        } catch (PDOException $e) {
            echo $e->getMessage();

            $this->close();

            exit;
        }
        
    }

    /**
     * query
     *
     * @param string $query
     * @param array $params
     * @param [type] $mode
     * @return void
     */
    public function query($sql, $params = [], $mode = PDO::FETCH_OBJ)
    {
        $sql = trim(str_replace('\r', ' ', $sql));
       
        $this->execute($sql, $params); 
        
        //$rowStatement = explode(" ", preg_replace("/\s+|\t+|\n+/", " ", $sql));
        //$this->statement = array(strtolower($rowStatement[0])); 
        
        return $this->statement->fetchAll($mode);

        $this->close();
    }
    /**
     * lastInsertId
     *
     * @return void
     */
    public function lastInsertId() 
    {
        $this->pdo->lastInsertId();
        $this->close();
    }

}


?>