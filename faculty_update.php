<?php

$fid = $_REQUEST["fid"];

$conn=mysqli_connect("localhost","root","","bcctdb");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$arr=array();

$sql ="SELECT * FROM `faculty_details` WHERE fid = '$fid'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);
?>