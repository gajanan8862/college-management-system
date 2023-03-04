<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Record</title>
        <link rel="stylesheet" href="update.css">
    </head>
    <body>
            <div class="form1">
                <center><p id="title">Update Details</p></center>
                <input type="text" name="search_roll" id="search_roll" autocomplete="off" placeholder="Enter roll number">
                <input type="button" id="button1" value="Find" name="button1">
            </div>
        <form method="post" class="form2" id="form2">

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


            <center><input type="submit" id="submit2" value="Update" name="submit2" onclick="myFunction()"></center>
        </form>
    </body>
    <script src="update.js"></script>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bcctdb";

$conn =mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Conection failed.");
}
if(isset($_POST['submit2'])){
    $roll = $_POST['st_roll'];
    $name = $_POST['st_name'];
    $dob = date('Y-m-d',strtotime($_POST['st_dob']));
    $mob = $_POST['st_mob'];
    $add = $_POST['st_add'];

    if($roll !="" && $name != "" && $dob != "" && $mob != "" && $add != ""){
        $sql = "UPDATE `bcathirdyear` SET `roll` = '$roll', `name` = '$name', `dob` = '$dob', `mobile` = '$mob', `address` = '$add' WHERE `bcathirdyear`.`roll` = '$roll'";

        if($conn->query($sql)==true){
            echo "Details updated.";
        }else{
            echo "Error";
        }
    }
}

$conn->close();

?>