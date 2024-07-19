
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM teacher_reg"; // select details

    $result = mysqli_query($connection , $query);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {
       echo '<table class = "stu_table">';
       echo '<tr>';
       echo '<th>No</th>';
       echo '<th>Full_Name</th>';
       echo '<th>NIC</th>';
       echo '<th>Pnone_No</th>';
       echo '<th>Address</th>';
       echo '<th>Email_Address</th>';
       echo '<th>Select_Subject</th>';
       echo '<th>Gender</th>';
       echo '<th>DELETE</th>';
       echo '</tr>';

       $c=1;

       while ($row = mysqli_fetch_assoc ($result))
       {
        ?>
        <body>

        <tr>
        <td> <?php echo $c;?> </td>
        <td> <?php echo $row ['fullname']; ?> </td>
        <td> <?php echo $row ['nic']; ?> </td>
        <td> <?php echo $row ['pno']; ?> </td>
        <td> <?php echo $row ['address1']; ?> </td>
        <td> <?php echo $row ['email']; ?> </td>
        <td> <?php echo $row ['subject1']; ?> </td>
        <td> <?php echo $row ['gender']; $c++; ?> </td>

        <td>
            <form action="delete_tdetails.php" method="post">
                <button type="submit" name="delete" value="<?=$row['nic'] ?>" class="btn btn-danger">DELETE</bu>

            </form>
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

















