<?php session_start(); ?>
<?php 
    include_once 'trainingAppMapper.php';
    if (isset($_GET['id']) && $_SESSION['role']==1) {
        $tapid = $_GET['id'];
        $mapper = new trainingAppMapper();
        $mapper->deleteTrainingById($tapid);
        header("Location:../trainingApplications.php");
    }else{
        header("Location:../../index.php");

    }
?>