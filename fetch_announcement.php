
<?php
    require('config.php');

    if(!$connection)
    {
        die ('connection error ' . mysqli_connect_error());
    }
    
    $query = "SELECT title,desc1,date1 FROM store_ann ORDER BY  id DESC"; // select details

    $result = mysqli_query($connection , $query);     // execute

    $numrow = mysqli_num_rows($result);
    if($numrow > 0 )
    {    
       echo '<table class = "stu_table">';
       echo '<tr>';
      
       echo '<th>Title</th>';
       echo '<th>Information</th>';
       echo '<th>Date & Time</th>';
       echo '</tr>';
       while ($row = mysqli_fetch_assoc ($result))
       {
   
        ?>
        <body>

        <tr>
       
        <td> <?php echo $row ['title']; ?> </td>
        <td><?php echo $row ['desc1']; ?> </td>
        <td> <?php echo $row ['date1']; ?> </td>
    
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
        padding: 14px;
    }

    tr:nth-child(even) {
        background-color: #c9f5d0;
    }
</style>

















