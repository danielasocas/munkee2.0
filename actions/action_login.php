<?php
session_start();


include_once('../db/connection.php');
include_once('../db/users.php');

include_once('../templates/header.php');

include_once('../templates/login.php');

if (userExists( $_POST['username'], $_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user-logged'] = true;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

include_once('../templates/footer.php');
?>