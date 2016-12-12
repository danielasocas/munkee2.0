<?php
	$db = new PDO('sqlite:../db/munkee.db');
    
    $stmt = $db->prepare('SELECT * FROM restaurant
    ORDER BY food_rat DESC LIMIT 3');
    $stmt->execute();  

	$food = $stmt->fetchAll();

	$stmt = $db->prepare('SELECT * FROM restaurant');
    $stmt->execute();  

   $restaurant = $stmt->fetchAll();

?>
<!DOCTYPE html>
<!-- HTML5 Restaurant website project. Daniela Socas Gil & Katja Hader  -->
<html lang="en-us">

<head>
 <meta name="Daniela S. Gil & Katja Hader" content="Restaurant Advisor"  charset="utf-8">      
 <title>Munkee Advisor</title>
 </head>
<body>
<div id="tab"> 
	<input type="radio" name="tabs" id="tab1" checked>
	<label for="tab1">Food</label>
		
 	<input type="radio" name="tabs" id="tab2">
	<label for="tab2">Service</label>
		 
	<input type="radio" name="tabs" id="tab3" checked>
	<label for="tab3">Ambiente</label>
		<div id="tab-content1" class="tab_content">
		  <p>
			<?php foreach( $food as $row) {?>
				<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="300x200">
				<p class="food"><?=$row['food_rat']?></p>
				<p class="blah"><?=$row['name']?></p>
			<?php } ?>
		  </p>
		</div>
		
		<div id="tab-content2" class="tab_content">
		 <p>content2content2content2content2content2content2content2
		 content2content2content2content2content2</p>
		</div>
		
		<div id="tab-content3" class="tab_content">
		 <p>content3content3content3content3content3</p>
		</div>
  </div>
<div id="footer">
		   <p>Daniela Ohana Socas Gil & Katja Cornelia Hader</p>
		   <p>FEUP 2016/2017</p>
    </div>
  </body>
</html>