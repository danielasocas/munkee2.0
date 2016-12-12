<div id="tab"> 
	<input type="radio" name="tabs" id="tab1" checked>
	<label for="tab1">Food</label>
		 
	<input type="radio" name="tabs" id="tab2">
	<label for="tab2">Service</label>
		 
	<input type="radio" name="tabs" id="tab3" checked>
	<label for="tab3">Ambiente</label>
		<div id="tab-content1" class="tab_content">
		  <p>
			<?php foreach( $rest_food as $row) {?>
				<p class="name"><?=$row['name']?></p>
				<p class="food"><?=$row['food_rat']?></p>
				<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="100x50">
				<p class="address"><?=$row['address']?></p>
				<p class="timetable"><?=$row['timetable']?></p>
			<?php } ?>
		  </p>
		</div>
		
		<div id="tab-content2" class="tab_content">
		 <p>
		 	<?php foreach( $rest_serv as $row) {?>
				<p class="name"><?=$row['name']?></p>
				<p class="food"><?=$row['service_rat']?></p>
				<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="100x50">
				<p class="address"><?=$row['address']?></p>
				<p class="timetable"><?=$row['timetable']?></p>
			<?php } ?>
		  </p>
		</div>
		
		<div id="tab-content3" class="tab_content">
		 <p>
		 	<?php foreach( $rest_amb as $row) {?>
				<p class="name"><?=$row['name']?></p>
				<p class="food"><?=$row['ambient_rat']?></p>
				<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="100x50">
				<p class="address"><?=$row['address']?></p>
				<p class="timetable"><?=$row['timetable']?></p>
			<?php } ?>
		 </p>
		</div>

