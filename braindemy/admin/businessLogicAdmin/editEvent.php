<?php

include_once 'eventMapper.php';
if (isset($_POST['eventid'])) {
    $eventid = $_POST['eventid'];
    $title = $_POST['Title'];
    $content = $_POST['Content'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];


    $mapper = new eventMapper();
    $mapper->editEvent($eventid,$title, $content, $start_date, $end_date);

    header("Location: ../events.php");


}

?>
