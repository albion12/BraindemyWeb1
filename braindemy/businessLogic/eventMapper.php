<?php
require_once "dbConfig.php";

class eventMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getEventByID($eventid)
    {
        $this->query = "select * from events where eventid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $eventid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit(\User $event, $id)
    {
        $this->query = "update user set username=:username, userLastName=:lastname where UserID=:id";
        var_dump($event);
        $statement = $this->conn->prepare($this->query);
        $eventname = $event->getUsername();
        $lastname = $event->getLastname();
        $statement->bindParam(":username", $eventname);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getAllEvents()
    {
        $this->query = "select * from events";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertEvent(\Event $event)
    {
        $this->query = "insert into events (event_title, event_content,event_date, event_end_date, image) values (:title,:content,:sdate,:edate,:image)";
        $statement = $this->conn->prepare($this->query);
        $eventname = $event->getTitle();
        $eventContent = $event->getContent();
        $eventSDate = $event->getStartDate();
        $eventEDATE = $event->getEndDate();
        $eventImage = $event->getImageDate();

        $statement->bindParam(":title", $eventname);
        $statement->bindParam(":content", $eventContent);
        $statement->bindParam(":sdate", $eventSDate);
        $statement->bindParam(":edate", $eventEDATE);
        $statement->bindParam(":image", $eventImage);
        $statement->execute();
    }

    public function deleteEvent($eventId)
    {
        $this->query = "delete from events where eventid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $eventId);
        $statement->execute();
    }
}
