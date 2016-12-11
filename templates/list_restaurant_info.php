<div id="tab"> 
	<input type="radio" name="tabs" id="tab1" checked>
	<label for="tab1">Food</label>
		 
	<input type="radio" name="tabs" id="tab2">
	<label for="tab2">Service</label>
		 
	<input type="radio" name="tabs" id="tab3" checked>
	<label for="tab3">Ambiente</label>
		 
		 <?php foreach ($result as $restaurant) {?>
			<div id="tab-content1" class="tab_content">
			<p>
				<?php foreach ($food as $row) {?>
					echo '<h1>' . $row['name'] . '</h1>';
					<h3><?=$row['name']?></h3>
					<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="300x200">
					<p class="food"><?=$row['food_rat']?></p>
					<p><?=$row['address']?></p>}
				<?php } ?>
			</p>
		 </div>
		 <?php } ?>
		 <div id="tab-content2" class="tab_content">
		 <p>content2content2content2content2content2content2content2
		 content2content2content2content2content2</p>
		 </div>
		
		 <div id="tab-content3" class="tab_content">
		 <p>content3content3content3content3content3</p>
</div>
