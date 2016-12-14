	<div class="profile">
		<div id="body">
			<div id="tab"> 
				<input type="radio" name="tabs" id="tab1">
				<label for="tab1">My Profile</label>
				<input type="radio" name="tabs" id="tab2" checked>
				<label for="tab2">My Restaurants</label>
		 
				<div id="tab-content1" class="tab_content">
					<p>
						<?php foreach( $user_data as $row) {?>
							<p class="Username"><?=$row['username']?></p>
							<p class="EMail"><?=$row['email']?></p>
							<p class="name"><?=$row['name']?></p>
						<?php } ?>
					</p>
					<a href="editprofilePage.php" class="button">Edit Profile</a>
				</div>
			
				<div id="tab-content2" class="tab_content">
					<p>
		 	<!--?php foreach( $user_data as $row) {?>
				<p class="Username"><?=$row['username']?></p>
				<p class="EMail"><?=$row['email']?></p>
				<p class="name"><?=$row['name']?></p>
					<form action="actions/action_login.php" method="post"-->
			<!--hr-->
					<input type="text" name="name" id="name" placeholder="Name" required/>
					<br>
					<input type="text" name="name" id="name" placeholder="Address" required/>
					<br>
					<input type="text" name="name" id="name" placeholder="Post Code" required/>
					<br>
					<input type="text" name="name" id="name" placeholder="Type" required/>
					<br>
					<input type="text" name="name" id="name" placeholder="Timetable" required/>
					<br>
					</p>
					<a href="profilePage.php" class="button">Add</a>
					<a href="profilePage.php" class="button">Back</a>
				</div>
			</div>
		</div>
	</div>

