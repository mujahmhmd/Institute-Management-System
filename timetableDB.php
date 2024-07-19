<?php

require('config.php');

    if(isset($_POST['submit']))
    {
    
    $course = $_POST['course'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $sub = $_POST['subject'];
    $lname = $_POST['lname'];

$query = "INSERT Into store_timetable (course,stime,etime,day1,year1,subject1,lname)values('$course','$stime','$etime','$day','$year','$sub','$lname')";

mysqli_query($connection, $query);

  echo "<script> alert('New Timetable create Successfully')</script>";
  echo "<script> window.location.assign('timeTable.php')</script>";


    }
    
?>