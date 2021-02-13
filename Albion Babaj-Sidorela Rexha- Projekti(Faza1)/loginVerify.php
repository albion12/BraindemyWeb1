<?php
require 'verify.php';
session_start();
$username = "";
$password = "";
if (isset($_POST['loginBtn'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (variablesNotDefinedWell($username, $password)) {
        header('Location: ..login.php');
    } else if (usernameAndPasswordCorrect($username, $password)) {
        header('Location: ./project.php');
    } else {
        header('Location: ..login.php');
    }
}

function variablesNotDefinedWell($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    }
}

function usernameAndPasswordCorrect($username, $password)
{
    global $users;
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['password'];
            $_SESSION['loginDate'] = date("Y-m-d");
            $_SESSION['loginTime'] = time();
            return true;
        }
    }
}
?>