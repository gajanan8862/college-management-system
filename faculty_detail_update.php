<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Details Update</title>
    <link rel="stylesheet" href="faculty_detail_update.css">
</head>
<body>
    <div id="title">FACULTY DETAILS UPDATE</div>
    <form id="form1">
        <input type="text" name="search_id" id="search_id" placeholder="Enter Faculty ID">
        <input type="button" value="Find" id="findbtn">
    </form>
    <form method="post" id="form2">
        <label for="fid">Faculty ID :<input type="text" id="fid" name="fid"></label>
        <label for="fname">Faculty Name :<input type="text" id="fname" name="fname"></label>
        <label for="fmob">Faculty Mobile :<input type="text" id="fmob" name="fmob"></label>
        <label for="femail">faculty Email :<input type="text" id="femail" name="femail"></label>
        <input type="submit" value="UPDATE DETAILS" name="update" id="update">
    </form>
    <script src="faculty_details_update.js"></script>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bcctdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conection failed.");
    }
    if(isset($_POST['update'])){
    $fid = $_POST['fid'];
    $fname = $_POST['fname'];
    $fmob = $_POST['fmob'];
    $femail = $_POST['femail'];

    if ($fid != "" && $fname != "" && $fmob != "" && $femail != "") {
        $sql = "UPDATE `faculty_details` SET `fid` = '$fid', `fname` = '$fname', `fmobile` = '$fmob', `femail` = '$femail' WHERE `faculty_details`.`fid` = '$fid'";

        if ($conn->query($sql) == true) {
            echo "Details updated.";
        } else {
            echo "Error";
        }
    }
    }

    $conn->close();

?>