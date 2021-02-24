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

    public function setSession()
    {   
        if($this->role==0){
            $_SESSION["role"] = "0";
            $_SESSION['roleName'] = "SimpleUser";
        }else{
            $_SESSION["role"] = "1";
            $_SESSION['roleName'] = "Admin";

        }
    }

    public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getRole(){
		return $this->role;
	}

	public function setRole($role){
		$this->role = $role;
	}
    
}
