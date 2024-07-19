
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM store_assignment ORDER BY  id DESC"; // select details

    if(isset($_POST["find"])){
        $course = $_POST["course"];
        $year = $_POST["year"];
    $query = "SELECT * FROM store_assignment WHERE course= '$course' AND semester='$year'";
    }

    $result = mysqli_query($connection , $query);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {
       echo '<table class = "stu_table">';
       echo '<tr>';
       echo '<th>Ass_NO</th>';
       echo '<th>Course</th>';
       echo '<th>Semester</th>';
       echo '<th>Subject</th>';
       echo '<th>Assignment</th>';
       echo '<th>Created Date</th>';
       echo '<th>Deadline</th>';
       echo '<th>Delete</th>';
       echo '</tr>';
       while ($row = mysqli_fetch_assoc ($result))
       {
        ?>
        <body>

        <tr>
        <td> <?php echo $row ['id']; ?> </td>
        <td> <?php echo $row ['course']; ?> </td>
        <td> <?php echo $row ['semester']; ?> </td>
        <td> <?php echo $row ['subject1']; ?> </td>
        <td> <a href=" <?php echo $row ['ass']; ?>">  <?php echo $row ['ass']; ?></a> </td>
        <td> <?php echo $row ['cdate']; ?> </td>
        <td> <?php echo $row ['deadline']; ?> </td>
        
        <td>
        <form action="delete_assignment.php" method="post">
                <button type="submit" name="delete" value="<?=$row['id'] ?>" class="btn btn-danger">DELETE</bu>

            </form>
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

















