<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Harry Potter Wiki Page</title>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div class="container">
		<h1 class='main_title'>Harry Potter Wiki Page</h1>
  		<div class="footer">BY MINGYAN FENG & YI XU</div>
  		<img src="http://icanbecreative.com/resources/files/articles/harry-potter-as-disney-characters/featured/harry-potter-as-disney-characters_featured_900.jpg" alt="HP" style="width:1000px;height:450px;"></P>
  		<font size="3" color="gray">[Note: For "character's name", you can enter first/middle/last/full name.]</font></P>

<!--Search characters' basic profile-->
  		<h2 class='main_title'>Characters:</h2>
  		<div class="content">
  			<form method="POST" action="character.php">
  				<div class="label_div">Enter a character's name, gender, blood status or house: </div>
  				<div class="input_container">
  					<input type="text" id="country_id_1" name="Character" onkeyup="autocomplet_1()">
  					<ul id="country_list_id_1"></ul>
  					<input type="submit" value="Enter"></p>
  				</div>
  			</form>
  		</div>
  
<!--Search wands' information-->
  		<h2 class='main_title'>Wands:</h2>
  		<div class="content">
  			<form method="POST" action="wand.php">
  				<div class="label_div">Enter a wand's owner name, or wood, or core, or manufacturer: </div>
  				<div class="input_container">
  					<input type="text" id="country_id_2" name="Wand" onkeyup="autocomplet_2()">
  					<ul id="country_list_id_2"></ul>
  					<input type="submit" value="Enter"></p>
  				</div>
  			</form>
  		</div>

<!--Search events' information-->
  		<h2 class='main_title'>Events:</h2>
  		<div class="content">
  			<form method="POST" action="event.php">
  				<div class="label_div">Enter an event's name or a character's name: </div>
  				<div class="input_container">
  					<input type="text" id="country_id_3" name="Event" onkeyup="autocomplet_3()">
  					<ul id="country_list_id_3"></ul>
  					<input type="submit" value="Enter"></p>
  				</div>
  			</form>
  		</div>

 <!--Search killing information-->
  		<h2 class='main_title'>Killing Records:</h2>
  		<div class="content">
  			<form method="POST" action="kill_records.php">
  				<div class="label_div">Enter a killer's or victim's name, or time, or killing method: </div>
  				<div class="input_container">
  					<input type="text" id="country_id_4" name="Kill" onkeyup="autocomplet_4()">
  					<ul id="country_list_id_4"></ul>
  					<input type="submit" value="Enter"></p>
  				</div>
  			</form>
  		</div>

 <!--Search textbooks' information-->
  		<h2 class='main_title'>Character Relations:</h2>
  		<div class="content">
  			<form method="POST" action="character_relation.php">
  				<div class="label_div">Enter a character's name: </div>
  				<div class="input_container">
  					<input type="text" id="country_id_5" name="Relation" onkeyup="autocomplet_5()">
  					<ul id="country_list_id_5"></ul>
  					<input type="submit" value="Enter"></p>
  				</div>
  			</form>
  		</div>

  	</div>
  
  </body>
  </html>
