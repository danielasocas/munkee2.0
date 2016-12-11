<?php
  session_start(); 
  
  include_once("../db/connection.php");
  #$db = new PDO('sqlite:munkee.db');
  include_once("../db/restaurants.php");

  $rest_food = getRestByFood();
  $rest_serv = getRestByService();
  $rest_amb = getRestByAmbient();

  include_once("../templates/header.php");  
  include_once("../templates/list_restaurant_info.php");  
  include_once("../templates/footer.php");
?>
