<?php

$str = $_REQUEST["q"];

$conn=mysqli_connect("localhost","root","","bcctdb");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$arr=array();

$search_roll = "20BCA09";
$sql ="SELECT * FROM `bcathirdyear` WHERE roll = '$str'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);
?>