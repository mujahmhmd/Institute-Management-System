<?php
require('config.php');
if(!isset($_SESSION)){
    session_start();
}
if(empty($_SESSION['student_id']))
{
 header("location:studentLoginPage.php");
}else{
    $sql="SELECT * FROM `stu_reg` WHERE id='$_SESSION[student_id]'";
    $result = mysqli_query($connection, $sql);
    $row = $result->fetch_assoc();
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Exam Application Form </title>--->
    <link rel="stylesheet" href="Application.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <H2 data-text="Global&nbsp;&nbsp;International&nbsp;&nbsp;College"><b>Global&nbsp;&nbsp;International&nbsp;&nbsp;College</b></H2>
        <div class="title">Apply Exam </div>
        <div class="content">
            <form action="examappdb.php" method="post">

            <div class="user-details">
                    <div class="input-box">
                        <span class="details">Reg No</span>
                        <input type="text" name="reg" id="fullname"  value=<?php echo $row["regno"]?> readonly>  
                    </div>

             
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter your Name"  value=<?php echo $row["fullname"]?> reaonly>                              
                    </div>
                    

                    <div class="input-box">
                        <span class="details">NIC</span>
                        <input type="text" name="nic" id= "ic" placeholder="Enter your NIC" value=<?php echo $row["nic"]?> reaonly>
                    </div>


                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" id="mail" placeholder="Enter your Email" value=<?php echo $row["emailadd"]?> reaonly>
                    </div>


                    <div class="input-box">
                         <span class="details">Course</span>
                         <input type="text" name="course" id="course" placeholder="Enter your course" value=<?php echo $row["course"]?> reaonly>
                    </div>


                    <div class="input-box">
                        <span class="details">Semester</span>
                        <select id="semester" name="semester"  >
                            <option value="">--select semester</option>
                            <option value="1st Year 1st Semester">1st Year 1st Semester</option>
                            <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
                            <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
                            <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
                         </select>     
                    </div>
                    
            </div>

                   <div class="button">
                          <input type="submit" value="APPLY">
                 </div>
                 
                <a href="studenthome.php"><<< Back to previous page</a>
            </form>
        </div>
    </div>

</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function myFunction (){
    let x= document.getElementById("reg").value;
    $.ajax({
        url:"fetch.php",
        method:"POST",
       data:{id:x},
        success:function(response){
          
            const data = JSON.parse(response)
            document.getElementById("ic").value=data.nic
            document.getElementById("fullname").value=data.fullname
            document.getElementById("mail").value=data.emailadd
            document.getElementById("course").value=data.course
            document.getElementById("semester").value=data.year1
       
            
        }
    })
    }
    
</script>