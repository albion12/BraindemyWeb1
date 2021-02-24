<?php
    include 'includes/header.php';
    include_once 'eventMapper.php';
    if (isset($_GET['id'])) {
        $eventid = $_GET['id'];
        $mapper = new eventMapper();
        $mapper->deleteEvent($eventid);
        header("Location:../events.php");
    }
?>