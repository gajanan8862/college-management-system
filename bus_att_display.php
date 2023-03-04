<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Attendance Display</title>
    <link rel="stylesheet" href="bus_att_display.css">
</head>
<body>
    <div id="title">
        BUS ATTENDANCE DISPLAY
    </div>
    <form method="post">
        <div>
            <input type="date" id="date" name="date">
            <input type="submit" id="submit" name="submit" value="Show">
        </div>
    </form>
</body>

<script>
    var today = new Date();
    var t1 = today.getMonth()+1;
    if(t1<10){
        t1="0"+t1;
    }
    var t2 = today.getDate();
    if(t2<10){
        t2="0"+t2;
    }
    var date = today.getFullYear()+'-'+t1+'-'+t2;
    document.getElementById("date").defaultValue = date;

</script>

</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "bcctdb");
if($conn->connect_error){
    die("Connection error");
}

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $sql = "SELECT * FROM bus_att_record where `date` = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        echo "<table>";
        echo "<tr>
        <th>Roll No</th>
        <th>Stream</th>
        <th>Entry Address</th>
        <th>Entry Time</th>
        <th>Exit Address</th>
        <th>Exit Time</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['stream'] . "</td>";
            echo "<td>" . $row['n_add'] . "</td>";
            echo "<td>" . $row['n_time'] . "</td>";
            echo "<td>" . $row['x_add'] . "</td>";
            echo "<td>" . $row['x_time'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No result";
    }
    $conn->close();
}

?>