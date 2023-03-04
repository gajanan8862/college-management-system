<?php

$roll = $_REQUEST["roll"];

$conn=mysqli_connect("localhost","root","","bcctdb");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$arr=array();

$sql ="SELECT * FROM `bcathirdyear` WHERE roll = '$roll'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);
?>