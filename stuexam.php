<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="DashBoard.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="examApplication.php">
                        <span class="GIC">
                        <div class="line">&nbsp; &nbsp; Global International College</div> 
                        </span>

                    </a>
                    <a href="#">
                        <p class="logo-DB"><img src="student.svg" width="100px"></p>
                    </a>
                    <a href="#">&nbsp;</a>
                    <a href="#">
                        <p><span class="GIC"><div class="line">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STUDENT</b></div></span></p>
                    </a>

                </li>

                <li>
                    <a href="examApplication.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">Register Exam
                        </span>
                    </a>
                </li>

                <li>
                    <a href="stuassignment.php">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">View Assignment
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="alarm-sharp"></ion-icon></span>
                        <span class="title">View Timetable</span>
                    </a>
                </li>

                
                <li>
                    <a href="Sfetch_announcement.php">
                        <span class="icon"><ion-icon name="reader-sharp"></ion-icon></span>
                        <span class="title">View Announcement
                        </span>
                    </a>
                </li>


                <li>
                    <a href="logout.php">
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
                    <img src="student.svg">
                </div>
            </div>

            
            <div class="btn btn-primary"> </div><br><br>
            
              <?php
                require_once("./examApplication.php");
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