<?php
require_once "dbConfig.php";

class trainingAppMapper extends DatabasePDOConfiguration
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

    public function getAllTrainingApplications(){
        $this->query = "SELECT t.*  , ta.* FROM training_applications t INNER JOIN trainings ta ON t.trainingid = ta.trainingid";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteTrainingById($trainingid){
            $this->query = "delete from training_applications where tappid=:id";
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":id", $trainingid);
            return $statement->execute();
    }
}
?>