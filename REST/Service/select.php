<?php
include 'conn.php';
//Select data from database


$id = $_GET['id']; 

$getData = "select * from Ass5 where '$id' = id";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

$msg[] = array("name" => $r['name'], "date" => $r['date'], "id" => $r['id']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>