<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="book_details.css">
</head>
<body>
    <div class="container">
    <div class="title">
        BOOK DETAILS
    </div>
    <table>
        <tr>
            <th>Sl</th>
            <th>Accn No</th>
            <th>Author Name</th>
            <th>Book Name</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "bcctdb");
        if($conn->connect_error){
            die("Connection failed");
        }
        $sql = "SELECT * FROM book_details";
        $result = $conn->query($sql);
        $sl = 1;
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$sl++."</td>";
            echo "<td>".$row['accn_no']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['book_name']."</td>";
            echo "</tr>";
        }

        ?>
    </table>
    </div>
</body>
</html>