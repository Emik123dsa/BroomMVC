<?php 

namespace Developer\Model\User;

use Engine\Core\Database\ActiveRecord;

class User 
{
    /**
     * ACTIVE RECORD CURRENTLY IS USING ONLY FOR WIDING PURPOSE; 
     * You can develop and enhance it accordignly to your requirements 
     * and promotions; 
     * Perceive a free to become a contributor for project expanding;
     * It's an instance for model using;
     */
    use ActiveRecord;
    /**
     * table mysql user
     *
     * @var string
     */
    protected $table = 'user'; 
    /**
     * id for user table
     *
     * @var [type]
     */
    public $id; 
    /**
     * name
     *
     * @var [type]
     */
    public $name;
    /**
     * user
     *
     * @var [type]
     */
    public $user;
    /**
     * email
     *
     * @var [type]
     */
    public $email;
    /**
     * password
     *
     * @var [type]
     */
    public $password; 
    /**
     * password
     *
     * @var [type]
     */
    public $hash; 
    /**
     * hash
     *
     * @var [type]
     */
    public $createdAt; 
    /**
     * date
     */

     /**
      * get id
      *
      * @return void
      */
     public function getId() 
     {
         return $this->id;
     }
     /**
      * set id
      *
      * @param [type] $id
      * @return void
      */
     public function setId($id) 
     {
         $this->id = $id;
     }
     /**
      * get name
      *
      * @return void
      */
     public function getName() 
     {
         return $this->name;
     }
     /**
      * set name
      *
      * @param [type] $name
      * @return void
      */
     public function setName($name) 
     {
         $this->name = $name;
     }
     /**
      * get user
      *
      * @return void
      */
     public function getUser() 
     {
         return $this->user;
     }
     /**
      * set user
      *
      * @param [type] $user
      * @return void
      */
     public function setUser($user) 
     {
         $this->user = $user;
     }
     /**
      * get email
      *
      * @return void
      */
     public function getEmail() 
     {
         return $this->email;
     }
     /**
      * set email
      *
      * @param [type] $email
      * @return void
      */
     public function setEmail($email) 
     {
         $this->email = $email;
     }
     /**
      * get password
      *
      * @return void
      */
     public function getPassword() 
     {
         return $this->password;
     }
     /**
      * set password
      *
      * @param [type] $password
      * @return void
      */
     public function setPassword($password) 
     {
         $this->password = $password;
     }
     /**
      * get created at
      *
      * @return void
      */
     public function getCreatedAt() 
     {
         return $this->createdAt;
     }
     /**
      * set created at
      *
      * @param [type] $createdAt
      * @return void
      */
     public function setCreatedAt($createdAt) 
     {
         $this->createdAt = $createdAt;
     }

}


?>