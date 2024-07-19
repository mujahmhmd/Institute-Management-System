
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $sql = "SELECT storeappexam.id,stu_reg.fullname,stu_reg.regno,stu_reg.emailadd,stu_reg.nic,stu_reg.course,stu_reg.year1,stu_reg.username FROM `storeappexam` INNER JOIN stu_reg on storeappexam.reg =stu_reg.id;";
    if(isset($_POST["find"])){
        $course = $_POST["course"];
        $year = $_POST["year"];

        $sql  ="SELECT storeappexam.id,stu_reg.fullname,stu_reg.regno,stu_reg.emailadd,stu_reg.nic,stu_reg.course,stu_reg.year1,stu_reg.username FROM `storeappexam` INNER JOIN stu_reg on storeappexam.reg =stu_reg.id WHERE storeappexam.course= '$course' AND storeappexam.semester='$year'";
    }

    $result = mysqli_query($connection , $sql);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {
       echo '<table class = "stu_table">';
       echo '<tr>';
       echo '<th>No</th>';
       echo '<th>Name</th>';
       echo '<th>Reg_No</th>';
       echo '<th>NIC</th>';
       echo '<th>Course</th>';
       echo '<th>Year</th>';
       echo '<th>Delete</th>';
       echo '</tr>';
       ?>
        <a href="student_details.php"><h3><button class="btn btn-primary"><b><~Back</b></h3></button></a> <br>
         

         <form action="admin_xm.php" method="POST">
                     <div class="input-box">
                            
                            &nbsp;&nbsp;  

                            <label for="semester">Course</label>
                            <select id="course" name="course" required="">
                            <option value="--select course">--select course</option>
                            <option value="HNDIT">HNDIT</option>
                            <option value="HNDE">HNDE</option>
                            <option value="HNDA">HNDA</option>
                            <option value="HNDTHM">HNDTHM</option>
                            </select>

                            &nbsp;&nbsp;

                            <label for="year1">Semester</label>
                            <select id="year1" name="year" required="" >
                            <option value="">--select semester</option>
                          <option value="1st Year 1st Semester">1st Year 1st Semester</option>
                          <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
                          <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
                          <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
                            </select>
                            &nbsp;&nbsp;
                            <button type="submit" name="find" id="find">Find Details</button>
                            &nbsp;&nbsp;
                            <button type="button" onclick="myFunction()">Refresh</button>

                           
                     </div>
    </form>

         <?php
         $c=1;
       while ($row = mysqli_fetch_assoc ($result))
       {
        ?>
        <body>
        <tr>
        <td> <?php echo $c;?> </td>
        <td> <?php echo $row ['fullname']; ?> </td>
        <td> <?php echo $row ['regno']; ?> </td>
        <td> <?php echo $row ['nic']; ?> </td>
        <td> <?php echo $row ['course']; ?> </td>
        <td> <?php echo $row ['year1'];  $c++;?> </td>
            </form>
        </td>
        <td>
            <form action="delete_regexam.php" method="post">
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
        echo "<script> window.location.assign('admin_xm.php')</script>";
    }

?>


<style>
    .stu_table {
        margin-top: 40px;
        margin-bottom: 50px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: 80px;
        width: 90%;
       
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<script>
    function myFunction() {
        window.location.assign("admin_xm.php")
}
</script>
















