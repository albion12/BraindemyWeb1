<?php
class User
{
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username,  $password, $email, $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getrole(){
        return $this->role;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    
    public function setRole($role){
        $this->role = $role;
    }
}
