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
    
    <div class="title">Create Announcement</div>
    <div class="content">
      <form action="announcementDB.php" method="post">
        <div class="user-details">
          
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" id="title" name="title" placeholder="" required>
          </div>
          <div class="input-box">
          </div>
            <div class="input-box">
                <span class="details">Description</span>
                <textarea name="desc" id="desc" cols="50" rows="10"></textarea>
              </div>
              
        </div>
        
        <div class="button">
          <input type="submit" value="Create">
        </div>
      </form>
      <a href="announcement.php"><<< Back to previous page</a>
    </div>
  </div>

</body>
</html>
