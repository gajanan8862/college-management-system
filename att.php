<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="att.css">
    <title>Take Attendance</title>
</head>
<body>
<div id="title">TAKE ATTENDANCE</div>
    <form method="post">
    <div class="select">
                <div class="basic">
                    <input type="text" placeholder="Faculty name">
                    <input type="text" placeholder="Subject">
                    <input type="text" placeholder="Course Code">
                    <label class="date">Date : <?php echo date('d-m-Y')?></label>
                </div>
                <br>
                <div class="select-year">
                    <span class="year-hint"> Select Year&nbsp;&nbsp;&nbsp; &nbsp;:</span>
                    <span class="option yr"><input type="radio" name="year" value="firstyear" id="firstyr" checked><label for="firstyr">1st year</label></span>
                    <span class="option yr"><input type="radio" name="year" value="secondyear" id="secondyr"><label for="secondyr">2nd year</label></span>
                    <span class="option yr"><input type="radio" name="year" value="thirdyear" id="thirdyr"><label for="thirdyr">3rd year</label</span>
                </div><br>
                <span class="select-stream">                        
                    <span class="stream-hint">Select Stream :</span>    
                    <span class="option strm"><input type="radio" name="stream" value="bca" id="bca" checked><label for="bca">BCA</label></span>
                    <span class="option strm"><input type="radio" name="stream" value="bba" id="bba"><label for="bba">BBA</label></span>
                    <span class="option strm"><input type="radio" name="stream" value="ba" id="ba"><label for="ba">BA</label></span>
                    <span class="option strm"><input type="radio" name="stream" value="bsc" id="bsc"><label for="bsc">BSC</label></span>
                    <span class="option strm"><input type="radio" name="stream" value="bcom" id="bcom"><label for="bcom">BCOM</label></span>
                </span>
                <span><input type="submit" id="nxtbtn" value="Next" onclick="displaySheet()"></span>
    </form>
    <form method="post" id="attsheet" class="">

        <div class="container">
            
            </div>
            <table>
                <thead>
                    <tr>
                        <th>sl</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Check</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(1){
                        //$checked_stream=$_POST['stream'];
                        //$checked_year=$_POST['year'];

                        //echo "<input type='date' name='takendate'>";

                        $conn=mysqli_connect("localhost","root","","bcctdb");
                        if($conn-> connect_error){
                            die("connection failed :".$conn->connect_error);
                        }
                        $stream = "bca";//fethched option from stream options
                        $year = "thirdyear";//hetched year from year options
                        $table_name = $stream.$year;
                        $sql ="SELECT roll,name from `$table_name`";
                        $result = $conn->query($sql);
                        $sl=0;
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                                $sl++;
                                echo "<tr>
                                <td>".$sl."</td>
                                <td>".$row["roll"] ."</td>
                                <td>".$row["name"] ."</td>
                                <td><input name='check[]' type='checkbox' value='$row[roll]' class='form-control'></td>
                            </tr>";
                            }
                        }else{
                            echo "no record found";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <input type="submit" name="submit" value="Submit Attendance" class="submit-btn">
        </div>

    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bcctdb";
    
        $conn =mysqli_connect($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Conection failed.");
        }

        $sql ="SELECT roll from `bcathirdyear`";  
        //$td = date('j');
        //$date = "dt".$td;

        $tempd=$_POST['takendate'];
        //echo $td;
        $newDate=date("j",strtotime($tempd));
        echo "<br/>".$newDate;
        $date="dt".$newDate;
        //$date=('d',strtotime($td));
        //echo $date;
        $tb_creation ="ALTER TABLE `novattendance` ADD `$date` VARCHAR(10)";
        $conn->query($tb_creation);
        
       
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $val = $row['roll'];
            $query = "UPDATE `novattendance` SET `$date` = 'A' WHERE `novattendance`.`roll` = '$val'";
            $conn->query($query);
        }
        $check = $_POST['check'];
        if(!empty($_POST['check'])) {

            foreach($_POST['check'] as $value){
                $stmt = "SELECT max_class from att_record WHERE roll = '$value'";
                $temp=$conn->query($stmt);
                $ress = mysqli_fetch_assoc($temp);
                $max_class=$ress['max_class'];
                $max_class+=1;
                $sql="UPDATE `novattendance` SET `$date` = '$max_class' WHERE `novattendance`.`roll` = '$value'";
                $conn->query($sql);
                $statement="UPDATE `att_record` SET max_class = '$max_class' where `att_record`.`roll` = '$value'";
                $conn->query($statement);
            }
        }
        $conn->close();
    
}
?>