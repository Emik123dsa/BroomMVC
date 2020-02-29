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
    /**
     * public function updateUser() 
     *   {
     *   $user = new User(1);
     *   $user->setEmail('emil.shari87@gmail.com');
     *   $user->save(); 
     *
     *   }
     *
     * @return void
     */
    

}


?>