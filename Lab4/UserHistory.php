<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php 

	session_start(); 

	echo "<h1>History</h1> ";

	$string = file_get_contents("JasonFile.json");
	$object = json_decode($string, true);
	$x = 1;


	foreach($object[$_SESSION["id"]]["history1"] as $item) { //foreach element in $arr
    	echo "<h3> Quiz 1 Session Number " .$x. "</h3><p>Yiu scored " .$item. "</p>"; 
    	$x++;
	}

	$x = 1; 

	foreach($object[$_SESSION["id"]]["history2"] as $item) { //foreach element in $arr
    	echo "<h3> Quiz 2 Session Number " .$x. "</h3><p>Yiu scored " .$item. "</p>"; 
    	$x++;
	}


?>

<style type="text/css">
	
	body{
		background-color: teal; 

	}


	p{
		font-family: sans-serif;
		font-style: italic;
	}

	h1{
		font-family: sans-serif;
		font-style: bold; 
	}
	

</style>
<body>



</body>
</html>