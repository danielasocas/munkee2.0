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
					<a href="profilePage.php" class="button">Add to my Restaurants</a>
					<a href="" class="button">Upload image</a>
					<a href="profilePage.php" class="button">Back</a>
					
					
					<div class="form-container">
						<form enctype="multipart/form-data" name='imageform' role="form" id="imageform" method="post" action="actions/ajax.php">
							<div class="form-group">
								<p>Please Choose Image: </p>
								<input class='file' multiple="multiple" type="file" class="form-control" name="images[]" id="images" placeholder="Please choose your image">
								<span class="help-block"></span>
							</div>
							<div id="loader" style="display: none;">
							Please wait image uploading to server....
							</div>
							<input type="submit" value="Upload" name="image_upload" id="image_upload" class="btn"/>
						</form>
					</div>
					<div class="clearfix"></div>
						<div id="uploaded_images" class="uploaded-images">
							<div id="error_div">
							</div>
							<div id="success_div">
							</div>
						</div>
	<input type="hidden" id='base_path' value="<?php echo BASE_PATH; ?>">
	<script src="../../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../../scripts/jquery.form.min.js"></script>
	<script src=".../scripts/script.js"></script>
				</div>
			</div>
		</div>
	</div>

