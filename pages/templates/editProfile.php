<!DOCTYPE html>
<!-- HTML5 Restaurant website project. Daniela Socas Gil & Katja Hader  -->
<html lang="en-us">

<head>
	<meta name="Daniela S. Gil &amp; Katja Hader" content="Restaurant Advisor"  charset="utf-8">      
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
			<a href="mainPage.php">
			<img src="../pictures/logo.png" style="width:20%"></a>
				<div id="links">
					<a href="mainPage.php">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<div class="profile">
		<div id="body">
			<div id="tab"> 
				<input type="radio" name="tabs" id="tab1" checked>
				<label for="tab1">My Profile</label>
			
				<input type="radio" name="tabs" id="tab2">
				<label for="tab2">My Restaurants</label>
		 
				<div id="tab-content1" class="tab_content">
					<p>
			<!--?php foreach( $user_data as $row) {?>
				<p class="Username"><?=$row['username']?></p>
				<p class="EMail"><?=$row['email']?></p>
				<p class="name"><?=$row['name']?></p>
					<form action="actions/action_login.php" method="post"-->
			<!--hr-->
						<input type="text" name="name" id="name" placeholder="Username" required/>
						<br>
						<input type="text" name="name" id="name" placeholder="Email" required/>
						<br>
						<input type="text" name="name" id="name" placeholder="Password" required/>
						<br>
						<input type="text" name="name" id="name" placeholder="Name" required/>
						<br>
						<input type="text" name="name" id="name" placeholder="Birthdate" required/>
						<br>
			<!--/form-->
					</p>
					<a href="profilePage.php" class="button">Submit</a>
					<a href="profilePage.php" class="button">Back</a>
				</div>
				<div id="tab-content2" class="tab_content">
					<p>
						<?php foreach( $restaurant_data as $row) {?>
							<p class="name"><?=$row['name']?></p>
							<p class="food"><?=$row['service_rat']?></p>
							<img src="../pictures/restaurants/ravioli.jpg" style="float:left; margin-top: -80px;">
							<p class="address"><?=$row['address']?></p>
							<p class="timetable"><?=$row['timetable']?></p>
						<?php } ?>
					</p>
					<a href="addRestaurantPage.php" class="button">Add a Restaurant</a>
				</div>
			</div>
		</div>
	</div>

