<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Issued Books</title>
    <link rel="stylesheet" href="avail_book.css">
</head>
<body>
    <div class="container">
        <div class="title">
            ISSUED BOOKS
        </div>
        <div>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "bcctdb");
            if($conn->connect_error){
                die("connection Failed");
            }
            $sql = "SELECT * FROM book_issue where `return_status` = 'pending'";
            $result = $conn->query($sql);
            $sl = 1;
            echo "<table>";
            echo "<tr>";
            echo "<th> Sl </th>";
            echo "<th>Book Accn no </th>";
            echo "<th>Student Roll</th>";
            echo "<th>Issued Date</th>";
            echo "</tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$sl++. "</td>";
                echo "<td>".$row['book_accn_no'] . "</td>";
                echo "<td>".$row['st_roll_no'] . "</td>";
                echo "<td>".$row['issue_date'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
        $conn->close(); 
        ?>
         </div>
    </div>
</body>
</html>