<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
        <form method="post">

            <center><p id="title">STUDENT REGISTRATION</p></center>
            <center>
                <div class="year-hint">Year &nbsp;:</div>
                <div class="option yr"><input type="radio" name="year" value="firstyear" id="firstyr" checked><label for="firstyr">1st year</label></div>
                <div class="option yr"><input type="radio" name="year" value="secondyear" id="secondyr"><label for="secondyr">2nd year</label></div>
                <div class="option yr"><input type="radio" name="year" value="thirdyear" id="thirdyr"><label for="thirdyr">3rd year</label</div>
            </center><br>
            
            <center>
                <div class="stream-hint">Stream :</div>    
                <div class="option"><input type="radio" name="stream" value="bca" id="bca" checked><label for="bca">BCA</label></div>
                <div class="option"><input type="radio" name="stream" value="bba" id="bba"><label for="bba">BBA</label></div><br><br>
                <div class="space"></div>
                <div class="option"><input type="radio" name="stream" value="ba" id="ba"><label for="ba">BA</label></div>
                <div class="option"><input type="radio" name="stream" value="bsc" id="bsc"><label for="bsc">BSC</label></div>
                <div class="option"><input type="radio" name="stream" value="bcom" id="bcom"><label for="bcom">BCOM</label></div>
            </center><br>

            <div class="form">
            <center>Roll No. :
            <input type="text" name="st_roll" id="roll" autocomplete="off"></center><br>

            <center>Name &nbsp;&nbsp;&nbsp;&nbsp;:
            <input type="text" name="st_name" id="name" autocomplete="off"></center><br>

            <center>D.O.B &nbsp;&nbsp;&nbsp;:
            <input type="date" name="st_dob" id="dob" autocomplete="off"></center><br>

            <center>Mobile &nbsp;&nbsp;:
            <input type="text" name="st_mob" id="mob" autocomplete="off"></center><br>

            <center>Address :
            <input type="text" name="st_add" id="add" autocomplete="off"></center><br>


            <center><input type="submit" value="Submit" name="submit" onclick="myFunction()">
            <input type="reset" value="Reset" name="reset">       
            <input type="button" value="Cancel" name="cancel">
            </center>
            </div>
        </form>
    </body>
    <script src="registration.js"></script>
</html>

<?php
if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bcctdb";

    $conn =mysqli_connect($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conection failed.");
    }   

    $roll = $_POST['st_roll'];
    $name = $_POST['st_name'];
    $dob = date('Y-m-d',strtotime($_POST['st_dob']));
    $mob = $_POST['st_mob'];
    $add = $_POST['st_add'];
    $stream = $_POST['stream'];
    $year = $_POST['year'];
    $table = $stream.$year;
    //echo "You ahve selected ".$stream;

    if($roll !="" && $name != "" && $dob != "" && $mob != "" && $add != ""){
        $sql = "INSERT INTO `$table` (`roll`, `name`, `dob`, `mobile`, `address`) VALUES ('$roll', '$name', '$dob', '$mob', '$add')";

        if($conn->query($sql)==true){
        }else{
            echo "Error";
        }
    }

    $conn->close();

}

?>