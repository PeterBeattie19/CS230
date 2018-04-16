<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php
	
	session_start();


	$total = 0;

	for($i = 0; $i < 10; $i++){
		if($_POST["".$i] == "correct")
			$total++; 
	}

	$userName = $_SESSION['name']; 
	$string = file_get_contents("JasonFile.json");
	$object = json_decode($string, true);

	$elementCount  = count($object);
	$userExists = false; 
	$index = 0;





	for ($x = 0; $x < $elementCount; $x++) {
    	if($object[$x]["name"] == $userName){
    		$index = $x;
    		break; 
    	}
	}

	$_SESSION['id'] = $index; 

	$object[$index]["score"] += $total;

	array_push($object[$index]["history2"],$total); 

	file_put_contents('JasonFile.json', json_encode($object));


	echo "<p> Yiu Scored ".$total."</p>";
?>
<body>



	<form action="UserHistory.php" method="get" align="center"> 
		<input type="submit" value="View Yiur History"> 
	</form>




</body>
</html>