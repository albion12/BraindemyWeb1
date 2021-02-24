<?php
require_once "dbConfig.php";

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

    public function edit(\User $user, $id)
    {
        $this->query = "update users set username=:username, userLastName=:lastname where UserID=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $this->query = "select * from users where username=:username";
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

    public function insertUser(\User $user)
    {
        $this->query = "insert into users (username, email,password, role) values (:username,:email,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":pass", $password);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);
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
