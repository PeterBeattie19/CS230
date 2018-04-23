<?php
include 'conn.php';
//Select data from database


$name = $_GET['name']; 

$getData = "select * from Ass5 where '$name' = name";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

$msg[] = array("name" => $r['name'], "date" => $r['date'], "id" => $r['id'], "description" => $r['description'], "URL" => $r['URL']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>