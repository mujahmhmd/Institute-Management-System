<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                        <p class="logo-DB"><img src="Admin.png" width="100px"></p>
                    </a><br>
                    <a href="#">
                        <p><span class="GIC"><div class="line">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</b></div></span></p>
                    </a>

                </li>

                <li>
                    <a href="student_details.php">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">Student Details 
                        </span>

                    </a>
                </li>

                <li>
                    <a href="Teacher_details.php">
                        <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
                        <span class="title">Teachers Details
                        </span>
                    </a>
                </li>

                <li>
                    <a href="timeTable.php">
                        <span class="icon"><ion-icon name="alarm-sharp"></ion-icon></span>
                        <span class="title">Make Timetable</span>
                    </a>
                </li>

                <li>
                    <a href="announcement.php">
                        <span class="icon"><ion-icon name="list-sharp"></ion-icon></span>
                        <span class="title">Make Announcement</span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
                        <span class="title" >Logout</span>
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
                    <img src="Admin.png">
                </div>
            </div>
                
          <h2>Registered Student Details </h2>
          <div class="btn btn-primary"> </div>
          
          <br>

         
         

          <?php
                require_once("./viewexamreg.php");
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
