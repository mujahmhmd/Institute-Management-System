<?php

require('config.php');

    $name = $_POST['fullname'];
    $reg = $_POST['reg'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $sem = $_POST['semester'];
   

    if (!empty($name) || !empty($reg) || !empty( $nic) || !empty($email)|| !empty($course) || !empty($sem) )
    {
    

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT nic  From storeappexam Where nic = ?  Limit 1";
        $INSERT = "INSERT Into storeappexam (fullname,reg,nic,email,course,semester)values(?,?,?,?,?,?)";
      
      //Prepare statement
           $stmt = $connection->prepare($SELECT);
           $stmt->bind_param("s", $nic);
           $stmt->execute();
           $stmt->bind_result($nic);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
      
           //checking username
            if ($rnum==0) {
            $stmt->close();
            $stmt = $connection->prepare($INSERT);
            $stmt->bind_param("ssssss", $name,$reg,$nic,$email,$course,$sem);
            $stmt->execute();
            echo "<script> alert('Applied Successfully')</script>";
            echo "<script> window.location.assign('studenthome.php')</script>";
           } else {
            echo "<script> alert('Already applied the exam!!')</script>";
            echo "<script> window.location.assign('examApplication.php')</script>";
           }
           $stmt->close();
           $connection->close();
          }
        } else {
       echo "<script> alert(All field are required') </script>";
       die();
      }
?>

