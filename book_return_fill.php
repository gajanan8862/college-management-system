<?php

$accn = $_REQUEST["accn"];

$conn=mysqli_connect("localhost","root","","bcctdb");
if($conn-> connect_error){
    die("connection failed :".$conn->connect_error);
}
$arr=array();

$sql ="SELECT * FROM `book_issue` WHERE book_accn_no = '$accn' AND return_status = 'pending'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    array_push($arr,$row);
}
echo json_encode($arr);
?>