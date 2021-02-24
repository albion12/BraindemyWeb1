<?php
include_once 'trainingMapper.php';
if (isset($_POST['AddButton'])) {
    $title = $_POST['Title'];
    $content = $_POST['Content'];
    $image = $_FILES["uploadfile"]["name"];


    if($title == "" || $content == "" || $image== ""){
        echo "<script language='javascript'>";
        echo 'alert("Please fill all fields!");';
        echo 'window.location.assign("../trainings.php");';
        echo "</script>";
    }else{
        $filename = $_FILES["uploadfile"]["name"]; 
        $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "../../Images/".$filename; 
  
        $mapper = new trainingMapper();
        $mapper->insertTraining($title, $content, $image);
        move_uploaded_file($tempname, $folder);
        header("Location: ../trainings.php");
    }
}
?>
