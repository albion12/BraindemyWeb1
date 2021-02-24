<?php
include_once 'eventMapper.php';
include_once 'eventClass.php';

if (isset($_POST['AddButton'])) {
    $title = $_POST['Title'];
    $content = $_POST['Content'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $image = $_FILES["uploadfile"]["name"];


    if($title == "" || $content == "" || $image== "" || $end_date == '' || $start_date == ''){
        echo "<script language='javascript'>";
        echo 'alert("Please fill all fields!");';
        echo 'window.location.assign("../events.php");';
        echo "</script>";
    }else{
        $filename = $_FILES["uploadfile"]["name"]; 
        $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "../../Images/".$filename; 
        
        $eventOb = new Event($title, $content, $image, $start_date, $end_date);
        $mapper = new eventMapper();
        $mapper->insertEvent($eventOb);

        move_uploaded_file($tempname, $folder);
        header("Location: ../events.php");
    }
}
?>
