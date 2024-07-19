<?php

require('config.php');

    $fname = $_POST['fullname'];
    $reg = $_POST['regno'];
    $emailadd = $_POST['emailadd'];
    $nic = $_POST['nic'];
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $cpassword = $_POST['cpassword'];
    $course = $_POST['course'];
    $year = $_POST['year1'];
    

    if (!empty($fname) || !empty($reg) || !empty($emailadd) || !empty($nic)|| !empty($username) || !empty($password)
       || !empty($cpassword) || !empty($course) || !empty($year) )
 {
    
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT username  From stu_reg Where username = ?  Limit 1";
        $INSERT = "INSERT Into stu_reg (fullname,regno,emailadd,nic,username,password1,cpassword,course,year1 )values(?,?,?,?,?,?,?,?,?)";
      
      //Prepare statementecho "<script> window.location.assign('studentLoginPage.html')</script>";

           $stmt = $connection->prepare($SELECT);
           $stmt->bind_param("s", $username);
           $stmt->execute();
           $stmt->bind_result($username);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
      
           //checking username
            if ($rnum==0) {
            $stmt->close();
            $stmt = $connection->prepare($INSERT);
            $stmt->bind_param("sssssssss", $fname,$reg,$emailadd,$nic,$username,$password,$cpassword,$course,$year);
            $stmt->execute();
            echo "<script> alert('New Record Insert Successfully')</script>";
            echo "<script> window.location.assign('studentLoginPage.php')</script>";
            
           } else {
            echo "<script> alert('Someone already register using this username!!')</script>";
            echo "<script> window.location.assign('stuReg.html')</script>";
           }
           $stmt->close();
           $connection->close();
          }
        } else {
       echo "<script> alert(All field are required') </script>";
       die();
      }
?>

