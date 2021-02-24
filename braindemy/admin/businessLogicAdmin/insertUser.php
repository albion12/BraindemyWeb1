<?php
include_once 'userMapper.php';
if (isset($_POST['AddButton'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $RoleID = $_POST['RoleID'];
    if($Username == "" || $Email == "" || $Password == "" || $RoleID == ""){
        echo "<script language='javascript'>";
        echo 'alert("Please fill all fields!");';
        echo 'window.location.assign("../users.php");';
        echo "</script>";
    }else if(!(preg_match('/^[a-z0-9_]/', $Username))){
        echo "<script language='javascript'>";
        echo 'alert("Username is not valid! Please try again...");';
        echo 'window.location.assign("../users.php");';
        echo "</script>";
    }else{
        $mapper = new UserMapper();
        $mapper->insertUser($Username, $Email, $Password, $RoleID);
        header("Location: ../users.php");
    }
}
?>
