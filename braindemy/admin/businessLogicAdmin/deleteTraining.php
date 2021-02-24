<?php
    include_once 'trainingMapper.php';
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $mapper = new trainingMapper();
        $mapper->deleteTraining($userId);
        header("Location:../trainings.php");
    }
?>