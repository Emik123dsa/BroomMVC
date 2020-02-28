<?php 

namespace Developer\Model\User; 

use Engine\Core\Database\SqlClaim;
use Engine\Model;

class UserRepository extends Model
{
    public function getUsers() 
    {
        $sql =  $this->sqlClaim 
                     ->select()
                     ->from('user')
                     ->sql();

        return $this->db->query($sql, $this->sqlClaim->values);
    }

}


?>