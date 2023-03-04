<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Attendance</title>
    <link rel="stylesheet" href="bus_att.css">
</head>
<body>
    <div id="title">
            BUS ENTRY EXIT RECORD
    </div>
    <form id="form" method="post">
        
        <input type="text" placeholder="Enter roll number" name="roll_no">
        <input type="text" placeholder="Bus stop location" name="stop_loc">
        <input type="submit" id="entrybtn" name="entrybtn" value="Entry">
        <input type="submit" id="exitbtn" name="exitbtn" value="Exit">

    </form>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "bcctdb");
date_default_timezone_set('Asia/Kolkata');
if($conn->connect_error){
    die("Connection failed");
}

if(isset($_POST['entrybtn'])){
    $date = date('Y-m-d');
    $time = date('h:i A');
    $roll =strtoupper($_POST['roll_no']);
    $stream = strtoupper(substr($roll, 2,3));
    $add = ucfirst($_POST['stop_loc']);
    if ($roll != "" && $add != "") {
        $sql = "INSERT INTO `bus_att_record` (`roll_no`, `stream`, `date`, `n_add`, `n_time`, `x_add`, `x_time`) VALUES 
    ('$roll', '$stream', '$date', '$add', '$time', '', '')";
        $conn->query($sql);
    }
}

if(isset($_POST['exitbtn'])){
    $date = date('Y-m-d');
    $time = date('h:i A');
    $roll =strtoupper($_POST['roll_no']);
    $add = ucfirst($_POST['stop_loc']);
    if($roll !="" && $add!=""){
        $sql = "UPDATE `bus_att_record` SET `x_add` = '$add', `x_time` = '$time' WHERE
     `bus_att_record`.`roll_no` = '$roll' AND `bus_att_record`.`date` = '$date'";
        $conn->query($sql);
    }
}

$conn->close();
?>