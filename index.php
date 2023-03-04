<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="head">
        <div class="clg-banner">
            <div class="clg-banner-1">
                Badriprasad
            </div>
            <div class="clg-banner-2">
                College of Computer Technology
            </div>
        </div>
    </div>
    <div class="left-box">
        <div class="title2"><span id="menu">MENU</span></div>
        <button class="btn" onclick="openForm1()">STUDENT</button>
        <button class="btn" onclick="openForm2()">FACULTY</button>
        <button class="btn" onclick="openForm3()">LIBRARY</button>
        <button class="btn" onclick="openForm4()">COLLEGE BUS</button>
        <button class="btn" onclick="openForm5()">ABOUT</button>
    </div>
    <div class="main">
        <div class="main-box div-1" id="div1">
            <div class="inner-title">
                STUDENT MANAGEMENT SYSTEM
            </div>
            <div class="sections">
                <a href="http://localhost/bcct/details.php"><button class="options">DETAILS</button></a>
                <!--<a href="http://localhost/bcct/registration.php"><button class="options">REGISTRATION</button></a>
                <a href="http://localhost/bcct/update.php"><button class="options">UPDATE</button></a>
                <a href="http://localhost/bcct/delete.php"><button class="options">DELETE</button></a>
            </div>

            <div class="sections">-->
                <a href="http://localhost/bcct/att.php"><button class="options">TAKE</button></a>
                <a href="http://localhost/bcct/att_display.php"><button class="options">VIEW SHEET</button></a>
                <a href="http://localhost/bcct/att_percentage_display.php"><button class="options">PERCENTAGE</button></a>
            </div>


        </div>
        <div class="main-box div-2" id="div2">

            <div class="inner-title">
                FACULTY MANAGEMENT SYSTEM
            </div>
            <div class="sections">
                <a href="http://localhost/bcct/faculty_details_display.php"><button class="options">DETAILS</button></a>
                <!--<a href="http://localhost/bcct/faculty_registration.php"><button class="options">REGISTRATION</button></a>
                <a href="http://localhost/bcct/faculty_detail_update.php"><button class="options">UPDATE</button></a>-->
                <a href="http://localhost/bcct/f_att.php"><button class="options">TAKE</button></a>
                <a href="http://localhost/bcct/f_att_display.php"><button class="options">VIEW</button></a>
            </div>


        </div>
        <div class="main-box div-3" id="div3">
            <div class="inner-title">
                LIBRARY MANAGEMENT SYSTEM
            </div>
            <div class="sections">
                <a href="http://localhost/bcct/book_details.php"><button class="options">ALL BOOKS</button></a>
                <a href="http://localhost/bcct/book_issue.php"><button class="options">ISSUE BOOKS</button></a>
                <a href="http://localhost/bcct/issued_book.php"><button class="options">ISSUED BOOK</button></a>
                <a href="http://localhost/bcct/avail_book.php"><button class="options avail">AVAILABLE BOOK</button></a>
            </div>
            

        </div>
        <div class="main-box div-4" id="div4">
            
            <div class="inner-title">
                COLLEGE BUS MANAGEMENT SYSTEM
            </div>
            <div class="sections">
                <a href="http://localhost/bcct/bus_att.php"><button class="options">Take</button></a>
                <a href="http://localhost/bcct/bus_att_display.php"><button class="options">View</button></a>
            </div>

        </div>
        <div class="main-box div-5" id="div5">
            College management system 

            this project is developed to automate the functionalities of the College
            

        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>