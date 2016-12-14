			<div id="tab"> 
				<input type="radio" name="tabs" id="tab1" checked>
				<label for="tab1">Food</label>
				<input type="radio" name="tabs" id="tab2">
				<label for="tab2">Service</label>
				<input type="radio" name="tabs" id="tab3">
				<label for="tab3">Ambiente</label>
				<h3>Best rated Restaurants</h3>
				<div id="tab-content1" class="tab_content">
					<p>
						<?php foreach( $rest_food as $row) {?>
							<p class="name"><?=$row['name']?></p>
							<p class="food"><?=$row['food_rat']?></p>
							<img src="../pictures/restaurants/ravioli.jpg" style="float:left; margin-top: -50px; width:20%">
							<p class="address"><?=$row['address']?></p>
							<p class="timetable"><?=$row['timetable']?></p>
							<hr>
						<?php } ?>
					</p>
				</div>
				<div id="tab-content2" class="tab_content">
					<p>
						<?php foreach( $rest_serv as $row) {?>
							<p class="name"><?=$row['name']?></p>
							<p class="food"><?=$row['service_rat']?></p>
							<img src="../pictures/restaurants/adega.jpg" style="float:left; margin-top: -50px; width:20%; height: 90%">
							<p class="address"><?=$row['address']?></p>
							<p class="timetable"><?=$row['timetable']?></p>
							<hr>
						<?php } ?>
					</p>
				</div>
				<div id="tab-content3" class="tab_content">
					<p>
						<?php foreach( $rest_amb as $row) {?>
							<p class="name"><?=$row['name']?></p>
							<p class="food"><?=$row['ambient_rat']?></p>
							<img src="../pictures/restaurants/ode-wine-house.jpg" style="float:left; margin-top: -50px; width:20%">
							<p class="address"><?=$row['address']?></p>
							<p class="timetable"><?=$row['timetable']?></p>
							<hr>
						<?php } ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

