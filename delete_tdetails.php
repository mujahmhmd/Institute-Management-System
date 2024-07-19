<?php
require('config.php');

if(isset($_POST['delete']))
{
    $delete = $_POST['delete'];
    $query = "DELETE FROM teacher_reg WHERE nic='$delete'";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
     
        $_SESSION['message'] = "Deleted Successfully";
        header('Location:teacher_details.php?id='.$delete);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Somthing went wrong. !";
        header('Location:teacher_details.php?id='.$delete);
        exit(0);
    }

}

   


?>