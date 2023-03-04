<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Return</title>
    <link rel="stylesheet" href="return_book.css">
</head>
<body>
        <div class="container">
            <div class="title">
                RETURN BOOK
            </div>
            <div class="search-form">
                <input type="text" id="s_accn" name="s_accn" placeholder="Enter Book Accn no.">
                <button id="nxtbtn">Next</button>
            </div>
            <form class="main-form" method="post" id="main_form">
                <label for="accn">Book Accn No :</label><input type="text" id="accn" name="accn"><br><br>
                <!--<label for="author">Author Name &nbsp;&nbsp;:</label><input type="text" id="author" name="author"><br>
                <label for="book_name">Book Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" id="book_name" name="book_name"><br>
                -->
                <label for="issue_date">Issued Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="date" id="issue_date" name="issue_date"><br><br>
                <label for="roll">Student Roll &nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" id="roll" name="roll"><br><br>
                <!--<label for="st_name">Student Name &nbsp;:</label><input type="text" id="st_name" name="st_name"><br>-->
                <input type="submit" id="submit" name="submit" value="Confirm Return"><br>
            </form>
        </div>
        <script src="return_book.js"></script>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bcctdb";

        $accn = $_POST['accn'];
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conection failed.");
        }   

        $query = "UPDATE `book_issue` SET `return_status` = 'returned' WHERE `book_issue`.`book_accn_no` = $accn AND `return_status` = 'pending'";
        $conn->query($query);

        $sql = "UPDATE `book_details` SET `availability` = 'yes' WHERE `book_details`.`accn_no` = $accn";
        $conn->query($sql);

        $conn->close();

        }

?>