<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <script src="admin_page_bg_change.js"></script>
</head>
<body>
    <div class="title-bar">
        <span class="title">BADRIPRASAD COLLEGE OF COMPUTER TECHNOLOGY</span>
        <span class="admin-icon"> <img src="usericon.png" id="user-icon"><span id="admintext"> Admin</span></span>
    </div>
    <div class="left-container">
        <div class="menu">MENU</div>
        <button class="btn btn1 boldbg" onclick="homeDisplay()" id="btnhome">Home</button>
        <button class="btn btn2" onclick="div1Display()" id="btn1">Student</button>
        <button class="btn btn3" onclick="div2Display()" id="btn2">Faculty</button>
        <button class="btn btn4" onclick="div3Display()" id="btn3">Library</button>

    </div>
    <div class="main-container">
        <div class=" div divhome " id="divhome">
            <img src="college_image/image6.jpg" alt="image not loaded" id="collegeimage">
        </div>
        <div class=" div div1 " id="div1">
                <div class="inner-title">STUDENT</div>
                <a href="http://localhost/bcct/details.php"><button class="options"><img src="usericon.png" class="icon"><br> DETAILS</button></a>
                <a href="http://localhost/bcct/registration.php"><button class="options"><img src="image/icon2.png" class="icon"><br> REGISTRATION</button></a>
                <a href="http://localhost/bcct/update.php"><button class="options"><img src="image/icon1.png" class="icon"><br> UPDATE</button></a>
                <a href="http://localhost/bcct/delete.php"><button class="options"><img src="image/icon3.png" class="icon"><br> DELETE</button></a>
        </div>
        <div class="div div2" id="div2">
                <div class="inner-title">FACULTY</div>
                <a href="http://localhost/bcct/faculty_details_display.php"><button class="options"><img src="image/icon8.png" class="icon"><br> DETAILS</button></a>
                <a href="http://localhost/bcct/faculty_registration.php"><button class="options"><img src="image/icon2.png" class="icon"><br> REGISTRATION</button></a>
                <a href="http://localhost/bcct/faculty_detail_update.php"><button class="options"><img src="image/icon3.png" class="icon"><br>UPDATE</button></a>
        </div>
        <div class="div div3" id="div3">
            <div class="inner-title">LIBRARY</div>
            <a href="http://localhost/bcct/book_details.php"><button class="options"><img src="image/icon4.png" class="icon"><br> ALL BOOKS</button></a>
            <a href="http://localhost/bcct/book_register.php"><button class="options"><img src="image/icon5.png" class="icon"><br> ADD BOOKS</button></a>
            <a href="http://localhost/bcct/issued_book.php"><button class="options"><img src="image/icon6.png" class="icon"><br>ISSUED BOOKS</button></a>
            <a href="http://localhost/bcct/avail_book.php"><button class="options"><img src="image/icon7.png" class="icon"><br> AVAILABLE BOOKS</button></a>
        </div>

    </div>
    <script src="admin.js"></script>
</body>
</html>