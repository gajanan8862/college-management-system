<!DOCTYPE html>
<html>
    <head>
        <title>Student Deatils</title>
        <link rel="stylesheet" href="student_detail.css">
        <link rel="stylesheet" href="util.css">
    </head>

    <body>
        
        <div class="data">
        <center>
        <table class="table_data" cellspacing="0">
            <tr>
                <th>Sl</th>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Check</th>
            </tr>
            <?php
                $conn=mysqli_connect("localhost","root","","bcctdb");
                if($conn-> connect_error){
                    die("connection failed :".$conn->connect_error);
                }
    
                $sql ="SELECT roll,name from `stud_deatil`";
                $result = $conn->query($sql);
                $sl=0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $sl++;
                        echo "<tr>
                            <td>".$sl."</td>
                            <td>".$row["roll"] ."</td>
                            <td>".$row["name"] ."</td>
                            <td><input name='check[]' type='checkbox' class='form-control'></td>
                            </tr>";
                           
                    }
                    echo "</table>";
                }else{
                    echo "0 result";
                }
                $conn->close();
            ?>
        </table>
        </center>
        </div>
        
    </body>
</html>