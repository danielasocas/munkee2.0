<?php
  session_start();
  $_SESSION['incorrectLogin_flag']=0;
  $_SESSION['invalid_user'] = 0;
  $_SESSION['page'] = 'mainPage.php';

  include_once("../db/connection.php");
  include_once("../db/restaurants.php");
  include_once("../db/users.php");


  try {
        if (isset($_SESSION['username']))
            $user = getUserByUsername( $_SESSION['username']);
        
        $rest_food = getRestByFood();
  		$rest_serv = getRestByService();
  		$rest_amb = getRestByAmbient();
    }
    catch(PDOException $e) {
        die($e->getMessage());
    }

  include_once("../templates/header.php");  
  include_once ('../templates/search.php');
  include_once("../templates/list_restaurant_info.php");  
  include_once("../templates/footer.php");

?>