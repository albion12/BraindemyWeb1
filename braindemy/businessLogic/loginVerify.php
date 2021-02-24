<?php
include_once 'userClass.php';
require_once 'userMapper.php';
session_start();
//main
if (isset($_POST['loginBtn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['signUPbtn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:..\index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['usernameFL'];
        $this->password = $formData['passwordFL'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location: ../login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            header('Location: ../index.php');
        } else {
            header("Location: ../login.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if ($password == $user['password']) {
                $obj = new User($user['username'], $user['password'], $user['email'], $user['role']);
                $obj->setSession();
            return true;
        } else return false;
    }
}

class RegisterLogic
{
    private $username = "";
    private $password = "";
    private $email = "";

    public function __construct($formData)
    {
        $this->username = $formData['usernameField'];
        $this->password = $formData['passwordField'];
        $this->email = $formData['emailField'];
    }

    public function insertData()
    {
        $user = new User($this->username, $this->password, $this->email,0);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        $user->setSession();
        header("Location:../index.php");
    }
}
