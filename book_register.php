<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Register</title>
    <link rel="stylesheet" href="book_register.css">
</head>
<body>
    <div class="container">
        <div id="title">
            BOOK REGISTRATION
        </div>
        <form method="post">
            <label for="accn_no">Accn No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" id="accn_no" name="accn_no"></label>
            <label for="author">Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="author" id="author"></label>
            <label for="book_name">Book Name &nbsp;: <input type="text" name="book_name" id="book_name"></label><br>
            <input type="submit" value="Submit" name="submit">    
            <input type="reset" id="reset" value="Reset">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bcctdb";

        $accn_no = $_POST['accn_no'];
        $author = $_POST['author'];
        $book_name = $_POST['book_name'];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conection failed.");
        }   

        $query = "INSERT INTO `book_details` (`accn_no`, `author`, `book_name`) VALUES ('$accn_no', '$author', '$book_name')";
        $conn->query($query);

        $conn->close();

    }

?>