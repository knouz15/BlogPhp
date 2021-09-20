<?php



  
  class UserManager extends Model 
  {

    //

    public function getUsers(){

      return $this->getAllUsers('users', 'user');

    }    

    public function createtUser(){

        return $this->createNewUser('users', 'user');

    }   
    
    
    public function loginUser()
    {

      return $this->login('users', 'user');

    }



    public function CheckUserLogin()
    {

      return $this->checkUserEmail('users', 'email');

    }


    public function deleteUser($id){
      return $this->DeleteOne('users', 'user', $id);
    }


    public function editUser($id){
      return $this->editOneUser('users','user', $id);
    }










   
   

  
  
  
   }
  ?>