<?php

/* Checks if the user exists */
  function userExists($username, $password) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
    $stmt->execute(array($username, $password));  

    return $stmt->fetch() !== false;
  }

/* Gets an user by the username */
  function getUserByUsername($username) {
  	global $db;

    $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

 /* Gets an user by the username */
function getUserByEmail($email) {
    global $db;

    $stmt = $db->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }
 

/* Create a new user */
  function createUser($username, $email,$name, $password, $birthday) {
  	global $db;
 
    $stmt = $db->prepare('INSERT INTO user VALUES(?,?,?,?,?)');
    $stmt->execute(array($username, $name, $email,$password, $birthday));
  }

?>
