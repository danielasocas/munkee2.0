<!DOCTYPE html>
<!-- HTML5 Restaurant website project. Daniela Socas Gil & Katja Hader  -->
<html lang="en-us">

<head>
 <meta name="Daniela S. Gil & Katja Hader" content="Restaurant Advisor"  charset="utf-8">      
 <title>Munkee Advisor</title>
 <link rel="stylesheet" href="../css/style_profile.css">
 <link rel="stylesheet" href="../css/reset.css">
 </head>

<body>
	<div id="header">
		<div id="flags">
			<img src="../pictures/portugal.png" style="width:2%; padding-top: 10px"> 
			<img src="../pictures/spain.png" style="width:2%"> 
			<img src="../pictures/united_Kingdom.png" style="width:2%"> 
			<img src="../pictures/germany.png" style="width:2%"> 
		<div id="logo">
		<a href="/actions/mainPage.php">
		<img src="../pictures/logo.png" style="width:20%"></a>
<div id="links">
				<a href="/actions/mainPage.php">Logout</a>
			</div>
		</div>
	</div>
</div>

	<div id="body">
		<ul class= "tabs">
				<li><a href="javascript:void(0)" class="tablinks" class="active"
			onclick="openContent(event, 'user_data')">My Profile</a></li>
				<li><a href="javascript:void(0)" class="tablinks"
			onclick="openContent(event, 'restaurant_data')">My Restaurants</a></li>
		</ul>
		<div id="user_data" class="tabcontent">
			<h1>Username</h1>
			<h3>E-mail Address</h3>
		</div>
		<div id="restaurant_data" class="tabcontent">
			<h1>Username</h1>
			<h3>My Restaurants<h3>
		</div>
	</div>

	