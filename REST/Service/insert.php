<?php
include 'conn.php';

$name = $_GET['name'];
$URL = $_GET['URL'];
$description = $_GET['description'];

$now = new DateTime();
$da =  $now->format('Y-m-d H:i:s');

$sql = "INSERT INTO Ass5 (name, URL, date, description) VALUES ('$name', '$URL', '$da', '$description')";

if ($connection->query($sql)) {
$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);

?>