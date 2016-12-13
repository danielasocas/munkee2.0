	<div id="error">
      <?php
      $invalid_user = $_SESSION['invalid_user'];
      if($invalid_user) {
  		echo '<p>Invalid username/email. Please try again with a different one.</p>';
	  }		
      ?>
    </div>  
			<div id="links">
				<a href="registerPage.php">Register Now</a>
				<a href="loginPage.php" style="padding-left: 20px">Login</a>
			</div>
		</div>
	</div>
</div>
<div class="register">
	<div id="body">
		<div class="registerBox">
			<h2>Registration</h2>
			<form action="actions/action_register.php" method="post" onsubmit="return validateForm()">
			<hr>
				<input type="text" name="email" id="email" placeholder="Email" required/>
				<input type="text" name="username" id="username" placeholder="Username" required/>
				<input type="password" name="password" id="password" placeholder="Password" required/>
				<br>
				<input id="buttonRegister" class="button" type="submit" value="Register" >
		</form>
		</div>
	</div>
</div>

  