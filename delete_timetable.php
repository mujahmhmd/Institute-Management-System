<?php
require('config.php');

session_start();
if(isset($_POST['delete']))
{
    $delete = $_POST['delete'];
    $query = "DELETE FROM store_timetable WHERE course='$delete'";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
     
        $_SESSION['message'] = "Deleted Successfully";
        header('Location:timeTable.php?id='.$delete);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Somthing went wrong. !";
        header('Location:timeTable.php?id='.$delete);
        exit(0);
    }

}

   


?>