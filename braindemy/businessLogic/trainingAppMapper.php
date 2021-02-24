<?php
require_once "dbConfig.php";

class trianingAppMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function insertTrainingApplication(\TrainingApp $trainingApp)
    {
        $this->query = "insert into training_applications (trainingid,user_email, user_name) values (:id,:email,:name)";
        $statement = $this->conn->prepare($this->query);
        $name = $trainingApp->getName();
        $email = $trainingApp->getEmail();
        $tid = $trainingApp->getTrainingid();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":id", $tid);
        $statement->execute();
    }
}

?>