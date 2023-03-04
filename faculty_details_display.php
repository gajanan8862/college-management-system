<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty Details</title>
    <link rel="stylesheet" href="faculty_details_display.css">
</head>
<body>
    <div id="title">FACULTY DETAILS</div>
    <table>
        <tr>
            <th>Sl</th>
            <th>Faculty id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
        </tr>
        <?php

            $conn = mysqli_connect("localhost", "root", "", "bcctdb");
            if($conn->connect_error){
                die("connection failed");
            }

            $sql = "SELECT * from faculty_details";
            $result=$conn->query($sql);
            $sl = 1;
            while($row=$result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>".$sl++."</td>";
                    echo "<td>".$row['fid']."</td>";
                    echo "<td>".$row['fname']."</td>";
                    echo "<td>".$row['fmobile']."</td>";
                    echo "<td>".$row['femail']."</td>";
                echo "</tr>";
            }

            $conn->close();
        ?>
    </table>
</body>
</html>