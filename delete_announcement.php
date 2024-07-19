<?php
session_start();
require('config.php');

if(isset($_POST['delete']))
{
    $delete = $_POST['delete'];
    $query = "DELETE FROM store_ann WHERE title='$delete'";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
     
        $_SESSION['message'] = "Deleted Successfully";
        header('Location:announcement.php?id='.$delete);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Somthing went wrong. !";
        header('Location:announcement.php?id='.$delete);
        exit(0);
    }

}

   


?>