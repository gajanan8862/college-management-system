<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Issue</title>
    <link rel="stylesheet" href="book_issue.css">
</head>
<body>
    <div class="container">
    <div class="search_form">
        <div class="search-title">ISSUE BOOK</div>
        <input type="text" id="search_accn_no" name="search_accn_no" placeholder="Enter book accn number">
        <input type="text" id="search_roll_no" name="search_roll_no" placeholder="Enter student roll number">
        <button id="nxtbtn">NEXT</button>
    </div>
    <form class="main-form" method="post" id="main_form">
        Book Accn No :<input type="text" id="accn" name="accn">
        Author Name :<input type="text" id="author" name="author">
        Book Name :<input type="text" id="book_name" name="book_name">
        Student Roll Number :<input type="text" id="roll" name="roll">
        Student Name :<input type="text" id="st_name" name="st_name">
        <input type="submit" id="submit" name="submit" value="Confirm Issue">
    </form>
    </div>
    <script src="book_issue.js"></script>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bcctdb";

        $accn = $_POST['accn'];
        $roll = $_POST['roll'];
        $date = date('Y-m-d');
        $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conection failed.");
        }   

        $query = "INSERT INTO `book_issue` (`book_accn_no`, `st_roll_no`, `issue_date`, `return_status`) VALUES 
        ('$accn', '$roll', '$date', 'pending')";
        $conn->query($query);

        $sql = "UPDATE `book_details` SET `availability` = 'issued' WHERE `book_details`.`accn_no` = $accn";
        $conn->query($sql);

        $conn->close();

    }

?>