<?php
require('config.php');
if(isset($_POST["id"])){
    $id = $_POST["id"];
    $output = array();
    $query = "SELECT * FROM `stu_reg` WHERE id='$id'";
    $result = $connection->query($query);
    $output= $result->fetch_assoc();

    echo json_encode($output);
}
?>