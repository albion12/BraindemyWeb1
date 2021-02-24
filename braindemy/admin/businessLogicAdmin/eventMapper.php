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
        $this->query = "select * from events where eventiid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $eventid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function editEvent($eventid,$title, $content, $start_date, $end_date)
    {
        $this->query = "update events set event_title=:event_title, event_content=:event_content, event_date=:event_date, event_end_date=:event_end_date where eventiid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":event_title", $title);
        $statement->bindParam(":event_content", $content);
        $statement->bindParam(":event_date", $start_date);
        $statement->bindParam(":event_end_date", $end_date);
        $statement->bindParam(":id", $eventid);
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
        $this->query = "insert into events (event_title, event_content,event_date, event_end_date, event_image) values (:title,:content,:sdate,:edate,:image)";
        $statement = $this->conn->prepare($this->query);
        $eventname = $event->getTitle();
        $eventContent = $event->getContent();
        $eventSDate = $event->getStartDate();
        $eventEDATE = $event->getEndDate();
        $eventImage = $event->getImage();

        $statement->bindParam(":title", $eventname);
        $statement->bindParam(":content", $eventContent);
        $statement->bindParam(":sdate", $eventSDate);
        $statement->bindParam(":edate", $eventEDATE);
        $statement->bindParam(":image", $eventImage);
        $statement->execute();
    }

    public function deleteEvent($eventId)
    {
        $this->query = "delete from events where eventiid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $eventId);
        $statement->execute();
    }
}
