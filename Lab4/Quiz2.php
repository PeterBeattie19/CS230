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

	<h1>Yoga Quiz 2</h1>

	<div>
		<p>Adho Muka Kapotasana</p>
	</div>

	<form method="post" action="process2.php">
		<div>
		<select name="0" class="required">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Downward Facing Pigeon Pose</option>  
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>


	<div>
		<p>Adho Mukha Vrksasana</p>
	</div>

	<div>
		<select name="1">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">The Tree Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


		<div>
			<p>Vrksasana</p>
	</div>

	<div>
		<select name="2">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">The Tree Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>


	<div>
		<p>Bhuja Vrischikasana</p>
	</div>


	<div>
		<select name="3">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Arm Balance Scorpion</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>




	<div>
		<p>Akarna Dhanurasana</p>
	</div>

	<form method="post" action="process1.php">
		<div>
		<select name="4" class="required">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Bow To The Ear</option>  
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>


	<div>
		<p>Ardha Padma Anantasana</p>
	</div>

	<div>
		<select name="5">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Vishnu and the serpent Vishnu slept on</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>


		<div>
			<p>Anjaneyasana</p>
	</div>

	<div>
		<select name="6">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Crescent Moon</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>


	<div>
		<p>Ardha Jathara Parivarttanasana</p>
	</div>


	<div>
		<select name="7">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Half Revolved Belly Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>




	<div>
		<p>Ardha Padmasana</p>
	</div>

	<form method="post" action="process1.php">
		<div>
		<select name="8" class="required">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Half Lotus pose</option>  
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>

	</div>


	<div>
		<p>Astangasana</p>
	</div>

	<div>
		<select name="9">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct">Eight Limb Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>



	<input type="submit" name="submit">

</form>




</body>
</html>