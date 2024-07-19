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
    <div class="title">Create Assignment</div>
    <div class="content">
      <form action="assignmentDB.php" method="post">
        <div class="user-details">
          
          <div class="input-box">
            <span class="details">Course</span>
            <select id="course" name="course">
            <option value="">---select course</option>
                <option value="HNDIT">HNDIT</option>
                <option value="HNDE">HNDE</option>
                <option value="HNDA">HNDA</option>
                <option value="HNDTHM">HNDTHM</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Semester</span>
            <select id="semester" name="semester">
            <option value="">--select semester</option>
                          <option value="1st Year 1st Semester">1st Year 1st Semester</option>
                          <option value="1st Year 2nd Semester">1st Year 2nd Semester</option>
                          <option value="2nd Year 1st Semester">2nd Year 1st Semester</option>
                          <option value="2nd Year 2nd Semester">2nd Year 2nd Semester</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Subject</span>
            <input type="text" name="subject1" id="subject" placeholder="Subject Name">
          </div>
          <div class="input-box">
            <span class="details">Deadline</span>
            <input type="date" name="deadline" id="deadline" placeholder="Date">
          </div>
          <div class="input-box">
            <span class="details">Assignment</span>
            <textarea name="ass" id="ass" cols="93" rows="5"></textarea>
          </div>

         
        </div>
        
        <div class="button">
          <input type="submit" value="Submit">
        </div>
        <a href="tassignment.php"><<< Back to previous page</a>
      </form>
    </div>
  </div>

</body>
</html>
