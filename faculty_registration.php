<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Registration</title>
    <link rel="stylesheet" href="faculty_registration.css">
</head>
<body>
    <form method="post">
        <div class="titile-div">
            <span class="title">FACULTY REGISTRATION</span>
        </div>
        <div class="inputs">
            <label for="fid">Enter faculty id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;: <input type="text" id="fid" name="fid"></label>
            <label for="fname">Enter faculty name &nbsp;&nbsp;&nbsp;: <input type="text" id="fname" name="fname"></label>
            <label for="fmobile">Enter faculty mobile &nbsp;: <input type="text" id="fmobile" name="fmobile"></label>
            <label for="femail">Enter faculty email &nbsp;&nbsp;&nbsp;: <input type="text" id="femail" name="femail"></label><br>
            <input type="submit" value="Submit" name="submit">    
            <input type="reset" id="reset" value="Reset">
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bcctdb";
        $fid = $_POST['fid'];
        $fname = $_POST['fname'];
        $fmob = $_POST['fmobile'];
        $femail = $_POST['femail'];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conection failed.");
        }   

        $query = "INSERT INTO `faculty_details` (`fid`, `fname`, `fmobile`, `femail`) VALUES ('$fid', '$fname', '$fmob', '$femail')";
        $conn->query($query);

        $conn->close();

    }

?>