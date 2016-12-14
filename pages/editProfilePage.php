<?php
session_start();
$_SESSION['loginFail']=0;
$_SESSION['invalid_user'] = 0;
$_SESSION['page'] = 'profilePage.php';


	
include_once ('/templates/editprofile.php');

include_once ('/actions/action_profile.php');

include_once('/templates/footer.php');
?>