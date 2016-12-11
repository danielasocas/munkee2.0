<?php
  session_start(); 
  
  #include_once("db/connection.php");
  $db = new PDO('sqlite:munkee.db');
  include_once("db/restaurants.php");

  $result = getAllRest();
  $food = getRestByFood();
  
  include_once("templates/header.php");  
  include_once("templates/list_restaurants_info.php");  
  include_once("templates/footer.php");
?>
