<?php
if(!isset($_SESSION)){
    session_start();
}
if(empty($_SESSION['teacher_id']))
{
 header("location:teacherLoginPage.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" type="text/css" href="DashBoard.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="GIC">
                        <div class="line">&nbsp; &nbsp; Global International College</div> 
                        </span>

                    </a>
                    <a href="#">
                        <p class="logo-DB"><img src="Teacher.png" width="100px"></p>
                    </a><br>
                    <a href="#">
                        <p><span class="GIC"><div class="line">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEACHER</b></div></span></p>
                    </a>

                </li>

                <li>
                    <a href="tstudetails.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">Student Details
                        </span>
                    </a>
                </li>

                <li>
                    <a href="tassignment.php">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">Make Assignment
                        </span>
                    </a>
                </li>

                <li>
                    <a href="Ttimetable.php">
                        <span class="icon"><ion-icon name="alarm-sharp"></ion-icon></span>
                        <span class="title">View Timetable</span>
                    </a>
                </li>

                <li>
                    <a href="tannouncement.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">View Announcement</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php#">
                        <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--  -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> 
                <!-- userImg -->
                <div class="user">
                    <img src="Teacher.png">
                </div>
            </div>
            <h2>View Timetable</h2>
               <div class="btn btn-primary"> </div><br><br>
          

               <form action="Ttimetable.php" method="POST">
                     <div class="input-box">
                     &nbsp;&nbsp; 
                            <label for="semester">Course</label>
                            <select id="course" name="course" required="">
                            <option value="">--select course</option>
                            <option value="HNDIT">HNDIT</option>
                            <option value="HNDE">HNDE</option>
                            <option value="HNDA">HNDA</option>
                            <option value="HNDTHM">HNDTHM</option>
                            </select>
                     &nbsp;&nbsp; 
                            <label for="year1">Semester</label>
                            <select id="year1" name="year" required="" >
                            <option value="">--select semester</option>
                          <option value="1st Year 1st Semester">1st Year 1st Semester</option>
                          <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
                          <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
                          <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
                            </select>
                     &nbsp;&nbsp; 
                            <button type="submit" name="find" id="find">Find Details</button>
                     &nbsp;&nbsp; 
                            <button type="button" onclick="myFunction()">Refresh</button>


                           
                     </div>
</form>

               <?php
                require_once("./Tfetch_timetable.php");
                ?>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        // MenuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        // add hovered class on selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered')
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>

</html>
<script>
    function myFunction() {
        window.location.assign("Ttimetable.php")
}
</script>