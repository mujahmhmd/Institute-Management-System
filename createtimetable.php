<?php
require('config.php');
$student = '';
$query = "SELECT * FROM `teacher_reg`";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result))
{
 $student .= '<option value="'.$row["id"].'">'.$row["fullname"].'</option>';
}
?>
   
   
   
   
   <!DOCTYPE html>

    <!-- Created By CodingLab - www.codinglabweb.com -->
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <!---<title> Responsive Registration Form | CodingLab </title>--->
        <link rel="stylesheet" href="Application.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container">
            <H2 data-text="Global&nbsp;&nbsp;International&nbsp;&nbsp;College"><b>Global&nbsp;&nbsp;International&nbsp;&nbsp;College</b></H2>
            <div class="title">Create Timetable</div>
            <div class="content">
                <form action="timetableDB.php" method="post">
                    <div class="user-details">

                        <div class="input-box">

                        </div>
                        <div class="input-box">
                            <span class="details">Department</span>
                            <select id="course" name="course" required>
                            <option value="HNDIT">HNDIT</option>
                            <option value="HNDE">HNDE</option>
                            <option value="HNDA">HNDA</option>
                            <option value="HNDTHM">HNDTHM</option>
                            </select>
                        </div>


                        <div class="input-box">
                            <span class="details">Lecturer Name</span>
                            <select id="lname" name="lname"  class="studentID" onchange="myFunction()">
                            <option value=""></option>
                        <?php echo $student;?>  
                        </select>
                        </div>


                        <div class="input-box">
                            <span class="details">Subject</span>
                            <input type="text" name="subject" id="subject" placeholder="Enter Your Subject" required>
                        </div>




                        <div class="input-box">
                            <span class="details">Start Time</span>
                            <input type="time" name="stime" id="stime" required>
                        </div>
                        <div class="input-box">
                            <span class="details">End Time</span>
                            <input type="time" name="etime" id="etime" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Day</span>
                            <select id="day" name="day" required>
                <option value="">--select day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Semester</span>
                            <select id="year" name="year" required>
                            <option value="">--select semester</option>
                          <option value="1st Year 1st Semester">1st Year 1st Semester</option>
                          <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
                          <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
                          <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
            </select>
                        </div>




                    </div>

                    <div class="button">
                        <input type="submit" name="submit" value="Create">
                        <a href="timeTable.php">
                            <<< Back to previous page</a>
                    </div>
                </form>
            </div>
        </div>

    </body>

    </html>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function myFunction (){
    let x= document.getElementById("lname").value;
    $.ajax({
        url:"fetchTime.php",
        method:"POST",
       data:{id:x},
        success:function(response){
          
            const data = JSON.parse(response)
            
          
            document.getElementById("subject").value=data.subject1
       
            
        }
    })
    }
    
</script>