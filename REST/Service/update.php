<?php
include 'conn.php';
//Update record in database


$name = $_GET['name'];
$URL = $_GET['URL'];
$description = $_GET['description'];
$id = $_GET['id'];

$query = "UPDATE Ass5 SET name='$name' ,URL='$URL' , description='$description'  WHERE  id='$id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);