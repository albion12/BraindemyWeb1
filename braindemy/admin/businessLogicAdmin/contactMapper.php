<?php
require_once "dbConfig.php";

class contactMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getContactByID($contactid)
    {
        $this->query = "select * from user_contacts where contactid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $contactid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllContacts()
    {
        $this->query = "select * from user_contacts";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertContact(\Contact $contact)
    {
        $this->query = "insert into user_contacts (user_name, user_email,user_text) values (:name,:email,:text)";
        $statement = $this->conn->prepare($this->query);
        $contactname = $contact->getUsername();
        $email = $contact->getEmail();
        $text = $contact->getText();
        $statement->bindParam(":name", $contactname);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":text", $text);
        $statement->execute();
    }

    public function deleteContact($contactId)
    {
        $this->query = "delete from user_contacts where contactid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $contactId);
        $statement->execute();
    }
}
