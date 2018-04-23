<?php
include 'conn.php';
//Delete record from database

/*$name = $_POST['name'];
$email = $_POST['URL'];*/
$id = $_GET['id'];

$query = "DELETE FROM Ass5 WHERE id='$id'";
if ($connection->query($query)) {
    $msg = array("status" =>1 , "msg" => "Record Deleted successfully");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);