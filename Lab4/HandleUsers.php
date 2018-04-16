<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php 

	session_start();

	//$_SESSION['quiz1Num'] = 

	$_SESSION['name'] = $_GET['name']; 

	$userName = $_GET['name']; 

	$string = file_get_contents("JasonFile.json");
	$object = json_decode($string, true);

	$elementCount  = count($object);
	$userExists = false; 
	$index = 0;


	for ($x = 0; $x < $elementCount; $x++) {
    	//echo "The number is: $x <br>";
    	if($object[$x]["name"] == $userName){
    		$userExists = true;
    		$index = $x;
    		break; 
    	}
	}

	
	if($userExists == false){
		$object[] = array("name" => $userName , "score"=>0, "visits"=>0, "history1"=>[], "history2"=>[]);
		file_put_contents('JasonFile.json', json_encode($object));
	}	

	else{
		$object[$index]["visits"]++; 
		file_put_contents('JasonFile.json', json_encode($object));
	}

?> 


<body>

	<form action="Quiz1.php" method="get" align="center"> 
		<input type="submit" value="Quiz 1"> 
	</form>

	<form action="Quiz2.php" method="get" align="center"> 
		<input type="submit" value="Quiz 2"> 
	</form>

</body>

<style type="text/css">
	
	body{
		background-color: teal;
	}



</style>

</html>