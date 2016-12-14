<?php
 session_start();
  $_SESSION['incorrectLogin_flag']=0;
  $_SESSION['invalid_user'] = 0;
  $_SESSION['page'] = 'mainPage.php';

  include_once("../db/connection.php");
  include_once("../db/restaurants.php");
  include_once("../db/users.php");

  include_once('../templates/profile.php');
  try {
        if (isset($_SESSION['username']))
            $user = getUserByUsername( $_SESSION['username']);
        
		$user_data = getUserByUsername($user);
  		$restaurant_data = getRestByOwner();
    }

header('Location: ' . $_SERVER['HTTP_REFERER']);

include_once('../templates/footer.php');
?>