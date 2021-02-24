<?php

include_once 'userMapper.php';
//include_once 'simpleUserClass.php';
if (isset($_POST['userid'])) {
    $userId = $_POST['userid'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $role = $_POST['RoleID'];

    $mapper = new UserMapper();
    $mapper->edit($userId, $username, $email, $password, $role);
    header("Location:../users.php");
}

?>
