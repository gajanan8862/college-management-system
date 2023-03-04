<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Percentage Display</title>
    <link rel="stylesheet" href="attendance_percentage_display.css">
</head>
<body>
    <div id="title">ATTENDANCE PERCENTAGE</div>


    <table>
    <tr>
        <th>Sl</th>
        <th>Roll</th>
        <th>Presents</th>
        <th>Absents</th>
        <th>Percentage</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "bcctdb");
    if($conn->connect_error){
        die("connecton failed");
    }
    $sql = "SELECT * FROM att_record";
    $result = $conn->query($sql);
    $total_class = 13;
    $sl = 1;
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$sl++."</td>";
        echo "<td>".$row['roll']."</td>";
        
        echo "<td>".$row['max_class']."</td>";
        echo "<td>".$total_class - $row['max_class']."</td>";
        $temp = ($row['max_class'] / $total_class) * 100;
        echo "<td>".round($temp, 2)." %"."</td>";
        echo "</tr>";
    }
    $conn->close();
    ?>
    </table>
</body>
</html>