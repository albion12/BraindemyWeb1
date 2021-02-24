<?php session_start(); ?>
<?php 
    include_once 'contactMapper.php';
    if (isset($_GET['id']) && $_SESSION['role']==1) {
        $userId = $_GET['id'];
        $mapper = new ContactMapper();
        $mapper->deleteContact($userId);
        header("Location:../contacts.php");
    }else{
        header("Location:../../index.php");

    }
?>