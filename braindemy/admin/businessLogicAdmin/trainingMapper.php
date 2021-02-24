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

    public function editTraining($trainingid,$title, $content)
    {
        $this->query = "update trainings set title=:title, content=:content where trainingid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":id", $trainingid);
        $statement->execute();
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

    public function insertTraining($title, $content, $image)
    {
        $this->query = "insert into trainings (title, content,image) values (:title,:content,:image)";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":image", $image);
        $statement->execute();
    }

    public function deleteTraining($userId)
    {
        $this->query = "delete from trainings where trainingid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
