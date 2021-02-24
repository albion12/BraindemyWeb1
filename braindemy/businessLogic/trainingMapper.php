<?php
require_once "dbConfig.php";

class trainingMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getTrainingByID($trainingid)
    {
        $this->query = "select * from trainings where trainingid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $trainingid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit(\User $user, $id)
    {
        $this->query = "update user set username=:username, userLastName=:lastname where UserID=:id";
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
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllTrainings()
    {
        $this->query = "select * from trainings";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getLatestTrainings()
    {
        $this->query = "select * from trainings ORDER BY trainingid DESC LIMIT 1";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\User $user)
    {
        $this->query = "insert into User (userName, userLastName,userPassword, role) values (:username,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
