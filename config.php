<?php

$connection = mysqli_connect ("localhost","root","","Project");

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());
    }
?>