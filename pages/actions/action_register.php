<?php
include_once('../../db/users.php');

session_start();

$_SESSION['invalid_user'] = 0;

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

if($username != null && $username != null && $password != null ){

    $checkuser = getUserByUsername($username);
    $checkemail = getUserByEmail($email);
    $result = sizeof($checkuser) + sizeof($checkemail);

    if($result == 0){
        $password = password_hash($password,PASSWORD_DEFAULT);
        createUser($username, $email,$username, $password);
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header('Location: ../profilePage.php');
        $_SESSION['invalid_user'] = 0;
    }
    else {
        $username = null;
        $password = null;
        $_SESSION['invalid_user'] = 1;
        header('Location: ../signup.php');
    }
}