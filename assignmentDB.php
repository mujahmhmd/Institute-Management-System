<?php

require('config.php');

    $course = $_POST['course'];
    $sem = $_POST['semester'];
    $sub = $_POST['subject1'];
    $date = $_POST['deadline'];
    $ass = $_POST['ass'];
    
   
    

    if (!empty($course) || !empty($sem) || !empty($sub) || !empty($date) || !empty($ass))
    {
    

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT ass  From store_assignment Where ass = ?  Limit 1";
        $INSERT = "INSERT Into store_assignment (course,semester,subject1,deadline,ass,cdate)values(?,?,?,?,?,now())";
      
      //Prepare statement
           $stmt = $connection->prepare($SELECT);
           $stmt->bind_param("s", $ass);
           $stmt->execute();
           $stmt->bind_result($ass);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
      
           //checking username
            if ($rnum==0) {
            $stmt->close();
            $stmt = $connection->prepare($INSERT);
            $stmt->bind_param("sssss", $course,$sem,$sub,$date,$ass);
            $stmt->execute();
            echo "<script> alert('New Assignment Created Successfully')</script>";
            echo "<script> window.location.assign('tassignment.php')</script>";

           } else {
            echo "<script> alert('This assignment is already created!!')</script>";
            echo "<script> window.location.assign('createassignment.php')</script>";
           }
           $stmt->close();
           $connection->close();
          }
        } else {
       echo "<script> alert(All field are required') </script>";
       die();
      }
?>

