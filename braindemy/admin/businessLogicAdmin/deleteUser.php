<?php
    include 'includes/header.php';
    include_once 'userMapper.php';
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $mapper = new UserMapper();
        $mapper->deleteUser($userId);
        header("Location:../users.php");
    }
?>