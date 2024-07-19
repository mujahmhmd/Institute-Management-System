<?php

require('config.php');

    $name = $_POST['fullname'];
    $nic = $_POST['nic'];
    $pno = $_POST['pno'];
    $address = $_POST['address1'];
    $email = $_POST['email'];
    $sub = $_POST['subject1'];
    $gender = $_POST['gender'];

    if (!empty($name) || !empty($nic) || !empty( $pno) || !empty($address)|| !empty($email) || !empty($sub) || !empty($gender))
    {
    

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT nic  From teacher_reg Where nic = ?  Limit 1";
        $INSERT = "INSERT Into teacher_reg (fullname,nic,pno,address1,email,subject1,gender)values(?,?,?,?,?,?,?)";
      
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
            $stmt->bind_param("ssissss", $name,$nic,$pno,$address,$email,$sub,$gender);
            $stmt->execute();
            echo "<script> alert('New Record Insert Successfully')</script>";
            echo "<script> window.location.assign('Teacher_details.php')</script>";

           } else {
            echo "<script> alert('Someone already register using this NIC!!SS')</script>";
            echo "<script> window.location.assign('TeacherReg.php')</script>";
           }
           $stmt->close();
           $connection->close();
          }
        } else {
       echo "<script> alert(All field are required') </script>";
       die();
      }
?>

