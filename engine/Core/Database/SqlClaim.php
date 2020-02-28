<?php 

namespace Engine\Core\Database; 

class SqlClaim 
{   
    /**
     * Query sql claim
     *
     * @var [type]
     */
    protected $sql = [];
    /**
     * Values for execute 
     *
     * @var [type]
     */
    public $values = []; 
    /**
     * Standard for select query
     *
     * @param string $realm
     * @return void
     */
    public function select($realm = '*') 
    {
        $this->reset();
        $this->sql['select'] = "SELECT {$realm} "; 
        return $this;
    }
    /**
     * You can choose any table from database
     *
     * @param [type] $table
     * @return void
     */
    public function from($table) 
    {
        $this->sql['from'] = "FROM {$table} ";
        return $this; 
    }
    /**
     * Where conditions
     *
     * @param [type] $column
     * @param [type] $value
     * @param string $operator
     * @return void
     */
    public function where($column, $value, $operator = '=') 
    {
        $this->sql['where'][] = "{$column} {$operator} ? "; 

        $this->values[] = $value; 
        return $this; 
    }
    /**
     * Order list by
     *
     * @param [type] $column
     * @param string $condition
     * @return void
     */
    public function orderBy($column, $condition = "ASC") 
    {
        $this->sql['orderBy'] = "ORDER BY {$column} {$condition} "; 
        return $this;
    }
    /**
     * Restrictions for sql 
     *
     * @param [type] $limit
     * @return void
     */
    public function limit($limit) 
    {
        $this->sql['limit'] = "LIMIT {$limit} "; 
        return $this;
    }
    /**
     * Update for table
     *
     * @param [type] $table
     * @return void
     */
    public function update($table) 
    {
        $this->reset();

        $this->sql['update'] = "UPDATE {$table} "; 
        return $this;
    }
    /**
     * Set for database
     *
     * @param array $data
     * @return void
     */
    public function set($data = []) 
    {
        
        $this->sql['set'] = "SET ";

        if(!empty($data)) 
        {
            foreach($data as $key => $value) 
            {
                $this->sql['set'] .= "{$key} = ?, "; 
                $this->values[] = $value; 
            }
        }

        return $this;
    }
    /**
     * sql builder
     *
     * @return void
     */
    public function sql() 
    {
        $sql = ' ';
        foreach($this->sql as $key => $value) 
        {
            if ($key == 'where') {
                $sql .= ' WHERE '; 
                foreach($value as $where) 
                {
                    $sql .= $where; 
                    if (count($value) > 1 && next($value)) 
                    {
                        $sql .= ' AND ';
                    }
                }
            } else {
                $sql .= $value;
            }
        }
        return $sql;
    }

    /**
     * It's required to reset all of sql claims and their 
     * values before send a new sql claim again
     *
     * @return void
     */
    public function reset() 
    {
        $this->sql = [];
        $this->values = [];
        return $this;
    }


}


?>