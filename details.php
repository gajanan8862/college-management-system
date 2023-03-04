<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <div id="title">STUDENT RECORD</div>
    <form action="" method="post" id="choice">
        <div class="box">
            <div class="select-year">
                    <div class="year-hint"> Select Year&nbsp;&nbsp;&nbsp; &nbsp;:</div>
                    <div class="option yr"><input type="radio" name="year" value="firstyear" id="firstyr" checked><label for="firstyr">1st year</label></div>
                    <div class="option yr"><input type="radio" name="year" value="secondyear" id="secondyr"><label for="secondyr">2nd year</label></div>
                    <div class="option yr"><input type="radio" name="year" value="thirdyear" id="thirdyr"><label for="thirdyr">3rd year</label</div>
            </div>
            <div class="select-stream">                        
                    <div class="stream-hint">Select Stream :</div>    
                    <div class="option strm"><input type="radio" name="stream" value="bca" id="bca" checked><label for="bca">BCA</label></div>
                    <div class="option strm"><input type="radio" name="stream" value="bba" id="bba"><label for="bba">BBA</label></div>
                    <div class="option strm"><input type="radio" name="stream" value="ba" id="ba"><label for="ba">BA</label></div>
                    <div class="option strm"><input type="radio" name="stream" value="bsc" id="bsc"><label for="bsc">BSC</label></div>
                    <div class="option strm"><input type="radio" name="stream" value="bcom" id="bcom"><label for="bcom">BCOM</label></div>
                    <input type="submit" value="Get Details" name="submit" id="submit">
            </div>
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $conn=mysqli_connect("localhost","root","","bcctdb");
        if($conn-> connect_error){
            die("connection failed :".$conn->connect_error);
            }
        $year=$_POST['year'];
        $stream=$_POST['stream'];
        $table=$stream.$year;
        $sql ="SELECT * from `$table`";
        $result = $conn->query($sql);   
        $sl=0;
        if($result->num_rows>0){
        echo "<table>";
        echo "<tr>
            <th>Sl</th>
            <th>Roll Number</th>
            <th>Name</th>
            <th>D.O.B.</th>
            <th>Mobile</th>
            <th>Address</th>
        </tr>";
        while($row = $result->fetch_assoc()){
            $sl++;
            echo "<tr>
            <td>".$sl."</td>
            <td>".$row["roll"] ."</td>
            <td>".$row["name"] ."</td>
            <td>".date('d-m-Y',strtotime($row["dob"]))."</td>
            <td>".$row["mobile"] ."</td>
            <td>".$row["address"] ."</td>
            </tr>";
                           
        }
        echo "</table>";
                }else{
                    echo "0 result";
                }
                $conn->close();
    }
?>