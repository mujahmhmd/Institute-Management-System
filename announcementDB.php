<?php

require('config.php');

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    
    

    if (!empty($title) || !empty($desc) )
    {
    

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
      }
      else{
        $SELECT = "SELECT title  From store_ann Where title = ?  Limit 1";
        $INSERT = "INSERT Into store_ann (title,desc1,date1)values(?,?,now())";
      
      //Prepare statement
           $stmt = $connection->prepare($SELECT);
           $stmt->bind_param("s", $title);
           $stmt->execute();
           $stmt->bind_result($title);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
      
           //checking username
            if ($rnum==0) {
            $stmt->close();
            $stmt = $connection->prepare($INSERT);
            $stmt->bind_param("ss", $title,$desc);
            $stmt->execute();
            echo "<script> alert('New Record Insert Successfully')</script>";
            echo "<script> window.location.assign('announcement.php')</script>";
           } else {
            echo "<script> alert('Already created the announcement with the same Title!!')</script>";
            echo "<script> window.location.assign('createannouncement.php')</script>";
           }
           $stmt->close();
           $connection->close();
          }
        } else {
       echo "<script> alert(All field are required') </script>";
       die();
      }
?>

