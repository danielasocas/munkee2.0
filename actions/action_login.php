<?php
session_start();

include_once('../db/connection.php');
include_once('../db/users.php');

if (userExists( $_POST['username'], $_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user-logged'] = true;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>