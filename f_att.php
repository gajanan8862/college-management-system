<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Attendance</title>
    <link rel="stylesheet" href="f_att.css">
</head>
<body>
    <div id="title">
        FACULTY ENTRY EXIT RECORD
    </div>
    <div>
        <div id="div1">
            <input type="text" name="sfid" id="search_id" placeholder="Enter Faculty Id">
            <input type="button" value="Next" id="nxtbtn" onclick="displayForm()">
        </div>
        <form class="form" id="form" method="post">
            <input type="text" id="fname" placeholder="Faculty Name" name="fname">
            <input type="text" id="fid" placeholder="Faculty Id" name="fid">
            <input type="submit" value="Entry" id="entrybtn" name="entrybtn">
            <input type="submit" value="Exit" id="exitbtn" name="exitbtn">
        </form>
    </div>
    <script src="f_att.js"></script>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "bcctdb");
if($conn->connect_error){
    die("Connection failed");
}
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['entrybtn'])){
    $time = date('h:i A');
    $t = date('j');
    $column_n = "dt" . $t . "n";
    $column_x = "dt" . $t . "x";
    $query = "SHOW COLUMNS FROM `faculty_attendance` LIKE '$column_n'";
    $res = $conn->query($query);
    $exists = (mysqli_num_rows($res)) ? TRUE : FALSE;
    if($exists){}else{
        $str1 = "ALTER TABLE `faculty_attendance` ADD `$column_n` VARCHAR(50) DEFAULT ''";
        $str2 = "ALTER TABLE `faculty_attendance` ADD `$column_x` varchar (50) DEFAULT ''";
        $conn->query($str1);
        $conn->query($str2);
    }
    $fid = $_POST['fid'];
    $sql = "UPDATE `faculty_attendance` SET `$column_n` = '$time' WHERE `faculty_attendance`.`fid` = '$fid'";
    $conn->query($sql);
}
if(isset($_POST['exitbtn'])){
    $time = date('h:i A');
    $t = date('j');
    $column_n= "dt" . $t . "n";
    $column_x = "dt" . $t . "x";
    $query = "SHOW COLUMNS FROM `faculty_attendance` LIKE '$column_x'";
    $res = $conn->query($query);
    $exists = (mysqli_num_rows($res)) ? TRUE : FALSE;
    if($exists){}else{
        $str1 = "ALTER TABLE `faculty_attendance` ADD `$column_n` varchar (50) DEFAULT ''";
        $str2 = "ALTER TABLE `faculty_attendance` ADD `$column_x` varchar (50) DEFAULT ''";
        $conn->query($str1);
        $conn->query($str2);
    }
    $fid = $_POST['fid'];
    $sql = "UPDATE `faculty_attendance` SET `$column_x` = '$time' WHERE `faculty_attendance`.`fid` = '$fid'";
    $conn->query($sql);
}
$conn->close();
?>

