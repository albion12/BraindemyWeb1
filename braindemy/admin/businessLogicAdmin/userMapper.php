<?php
require_once "dbConfig.php";
include_once 'userClass.php';

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from users where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit($userId, $username, $email, $password, $role)
    {
        $this->query = "update users set username=:username, email=:email, password=:password, role=:role where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from users";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser($Username, $Email, $Password, $RoleID)
    {
        $this->query = "insert into users (username, email,password, role) values (:username,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $Username);
        $statement->bindParam(":lastname", $Email);
        $statement->bindParam(":pass", $Password);
        $statement->bindParam(":role", $RoleID);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from users where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
