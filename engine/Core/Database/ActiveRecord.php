<?php 

namespace Engine\Core\Database; 

use \ReflectionClass; 
use \ReflectionProperty;

trait ActiveRecord 
{
    /**
     * database value
     *
     * @var [type]
     */
    protected $db; 
    /**
     * sql claim
     *
     * @var [type]
     */
    protected $sqlClaim; 
    /**
     * construct
     *
     * @param integer $id
     */
    public function __construct($id = 0) 
    {

        global $di;
        $this->db = $di->get('db');

        $this->sqlClaim = new SqlClaim(); 

        if ($id) {
            $this->setId($di);
        }
        
    }
    /**
     * table get 
     *
     * @return void
     */
    public function getTable() 
    {
        return $this->table; 
    }
    /**
     * save
     *
     * @return void
     */
    public function save() 
    {
        $properties = $this->getIssetProperties(); 
        try {
        if (isset($this->id)) {
            $this->db->execute($this->sqlClaim
            ->update($this->getTable())
            ->set($properties)
            ->where('id', $this->id)
            ->sql(), $this->sqlClaim->values);

        } else {
            $this->db->execute($this->sqlClaim
            ->insert($this->getTable())
            ->set($properties)
            ->sql(), $this->sqlClaim->values);
        }
        return $this->db->lastInsertId();
    } catch (\Exception $e) 
    {
        echo $e->getMessage(); 
        die();
    }
        
    }

    private function getIssetProperties() 
    {
        $properties  = []; 

        foreach($this->getProperties() as $key => $property) 
        {
            if (isset($this->{$property->getName()})) 
            {
                $properties[$property->getName()] = $this->{$property->getName()};
            }
        }
        return $properties;
    }

    private function getProperties() 
    {
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC); 
        return $properties;
    }

    public function findOne() 
    {
        $find = $this->db->query($this->sqlClaim
            ->select()
            ->from($this->getTable())
            ->where('id', $this->id)
            ->sql(), $this->sqlClaim->values);

        return isset($find[0]) ? $find[0] : [];
    }

}


?>