
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $query = "SELECT id,fullname,regno,emailadd,nic,course,year1 FROM stu_reg"; // select details
    if(isset($_POST["find"])){
        $course = $_POST["course"];
        $year = $_POST["year"];
    $query = "SELECT id,fullname,regno,emailadd,nic,course,year1 FROM stu_reg WHERE course= '$course' AND year1='$year'";
    }

    $result = mysqli_query($connection , $query);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {
       echo '<table class = "stu_table">';
       echo '<tr>';
       echo '<th>No</th>';
       echo '<th>Full_Name</th>';
       echo '<th>Reg_Number</th>';
       echo '<th>Email_Address</th>';
       echo '<th>NIC</th>';
       echo '<th>Course</th>';
       echo '<th>Semester</th>';
       echo '</tr>';

       $c=1;
       while ($row = mysqli_fetch_assoc ($result))
       {
        ?>
        <body>

        <tr>
        <td> <?php echo $c;?> </td>
        <td> <?php echo $row ['fullname']; ?> </td>
        <td> <?php echo $row ['regno']; ?> </td>
        <td> <?php echo $row ['emailadd']; ?> </td>
        <td> <?php echo $row ['nic']; ?> </td>
        <td> <?php echo $row ['course']; ?> </td>
        <td> <?php echo $row ['year1']; $c++; ?> </td>

        </td>
           
        </td>
       </tr>


<?php
       }
    }
    else
    {
        echo "<script> alert ('Records Not Found') </script>";
    }

?>


<style>
    .stu_table {
        margin-top: 30px;
        margin-bottom: 50px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: 30px;
        width: 90%;
       
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #c9f5d0;;
    }
</style>

















