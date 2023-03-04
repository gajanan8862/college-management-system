<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <div class="title">
        Delete a student record
    </div><br>
    <form method="post">
            <div>
                <center><input type="text" name="st_roll" id="roll" autocomplete="off" placeholder="Enter roll number"></center><br>
                <center><input type="submit" id="submit" value="Delete Record" name="submit" onclick="jsFunction()"></center>
            </div>
            
    </form>
    <script src="delete.js"></script>
</body>
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
    if($roll!=""){

        $que = "SELECT * FROM stud_deatil WHERE roll = '$roll'";
        $result=$conn->query($que);
        $rowcount=mysqli_num_rows($result);
        if($rowcount<1){
            echo "<h3>Not found record for the roll number.</h3>";
        }else{
            $sql = "DELETE FROM stud_deatil WHERE roll = '$roll'";
            if($conn->query($sql)==true){
                echo "<h3>Record deleted from database</h3>";
            }else{
                echo "Error";
            }
        }
    }
    $conn->close();
}
?>