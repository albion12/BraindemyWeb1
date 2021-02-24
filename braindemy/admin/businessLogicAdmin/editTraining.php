<?php

include_once 'trainingMapper.php';
if (isset($_POST['trainingid'])) {
    $trainingid = $_POST['trainingid'];
    $title = $_POST['Title'];
    $content = $_POST['Content'];

    $mapper = new trainingMapper();
    $mapper->editTraining($trainingid,$title, $content);

    header("Location: ../trainings.php");


}

?>
