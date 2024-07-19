
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM `store_timetable`INNER JOIN teacher_reg ON store_timetable.lname =teacher_reg.id"; // select details
    if(isset($_POST["find"])){
        $course = $_POST["course"];
        $year = $_POST["year"];
        $query = "SELECT * FROM `store_timetable`INNER JOIN teacher_reg ON store_timetable.lname =teacher_reg.id WHERE store_timetable.course= '$course' AND store_timetable.year1='$year'";
    }

    $result = mysqli_query($connection , $query);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {
       echo '<table class = "stu_table">';
       echo '<tr>';
       echo '<th>Course</th>';
       echo '<th>Start_Time</th>';
       echo '<th>End_Time</th>';
       echo '<th>Day</th>';
       echo '<th>Semester</th>';
       echo '<th>Subject</th>';
       echo '<th>Leturer_Name</th>';
       echo '</tr>';
       while ($row = mysqli_fetch_assoc ($result))
       {
        ?>
        <body>

        <tr>
        <td> <?php echo $row ['course']; ?> </td>
        <td> <?php echo $row ['stime']; ?> </td>
        <td> <?php echo $row ['etime']; ?> </td>
        <td> <?php echo $row ['day1']; ?> </td>
        <td> <?php echo $row ['year1']; ?> </td>
        <td> <?php echo $row ['subject1']; ?> </td>
        <td> <?php echo $row ['fullname']; ?> </td>
      
           
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
        margin-top: 25px;
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
        background-color: #c9f5d0;

    }
</style>

















