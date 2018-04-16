<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>


<style type="text/css">
	
	h1{ text-align: center; }

	body{
		background-color: teal;
	}

</style>

<?php 

session_start();

?>

<body>

	<h1>Yoga Quiz 1</h1>

	<div>
		<img src="Adho-Muka-Kapotasana.jpg">
		<img src="Adho-Mukha-Vrksasana.jpg">
		<img src="Akarna-Dhanurasana.jpg">
		<img src="Anantasana.jpg">
		<img src="Anjaneyasana.jpg">
	</div>

	<form method="post" action="process1.php">
		<div>
		<select name="0" class="required">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Adho-Muka-Kapotasana</option>  
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="1">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct">Adho-Mukha-Vrksasana</option> 
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="2">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct">Akarna-Dhanurasana</option>  
		</select>
		<select name="3">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct">Anantasana</option> 
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="4">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Anjaneyasana</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


	<div>
		<img src="Ardha-Jathara-Parivarttanas.jpg">
		<img src="Ardha-Padmasana.jpg">
		<img src="Astangasana.jpg">
		<img src="astavakrasana1.jpg">
		<img src="back-bend-salute.jpg">
	</div>

	<div>
		<select name="5">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Ardha-Jathara-Parivarttanas</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="6">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option>
			<option value="correct">Ardha-Padmasana</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="7">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct">Astangasana</option>
		</select>
		<select name="8">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct">astavakrasana1</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="9">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">back-bend-salute</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


		<div>
		<img src="baddhakona.jpg">
		<img src="Bheka-Parsva-Sarvangasana.jpg">
		<img src="Bhuja-Vrischikasana.jpg">
		<img src="boat.jpg">
		<img src="Half-Moon-Pose.jpg">
	</div>

	<div>
		<select name="10">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">baddhakona</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="11">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Bheka-Parsva-Sarvangasana</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="12">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option>
			<option value="correct">Bhuja-Vrischikasana</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="13">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct">boat</option>
		</select>
		<select name="14">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct9">Half-Moon-Pose</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


	<div>
		<img src="headstand.jpg">
		<img src="headstand-side.jpg">
		<img src="headstand-splits.jpg">
		<img src="Vrksasana.jpg">
		<img src="Yoganidrasana.jpg">
	</div>


	<div>
		<select name="15">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">headstand</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="16">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">headstand-side</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="17">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option>
			<option value="correct">headstand-splits</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="18">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct">Vrksasana</option>
		</select>
		<select name="19">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct">Yoganidrasana</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


	<input type="submit" name="submit">

</form>




</body>
</html>