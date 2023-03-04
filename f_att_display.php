<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Attendance Display</title>
    <link rel="stylesheet" href="f_att_display.css">
</head>
<body>
    <div id="title">
        FACULTY ATTENDANCE DISPLAY
    </div>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost", "root", "", "bcctdb");
    if($conn->connect_error){
        die("Connection failed");
    }

    $columns = array();
    $query = "SHOW COLUMNS FROM `faculty_attendance`";
$result = $conn->query($query);
while($row = mysqli_fetch_array($result)){
    array_push($columns, $row['Field']);
}
$length = count($columns);
$sl = 1;
echo "<div class='table-wrapper'>";
echo "<table>";
echo "<tr>";
echo "<th>Sl</th>";
echo "<th>Id</th>";
echo "<th>Name</th>";
for($i=2;$i<$length;$i++){
    //echo "<th>".$columns[$i]."</th>";
    $str = "Dt-".substr($columns[$i],2,1).(substr($columns[$i],3,1)=="n"?" Entry":" Exit");
    echo "<th>".$str."</th>";
}
echo "</tr>";
$sql = "SELECT * FROM `faculty_attendance`";
$res = $conn->query($sql);
while($row = $res->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $sl++ . "</td>";
    for($i=0;$i<$length;$i++){
        echo "<td>" . $row[$columns[$i]] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";

?>