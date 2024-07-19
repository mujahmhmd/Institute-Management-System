<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Teacher's Registration Form </title>--->
    <link rel="stylesheet" href="Application.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <H2 data-text="Global&nbsp;&nbsp;International&nbsp;&nbsp;College"><b>Global&nbsp;&nbsp;International&nbsp;&nbsp;College</b></H2>
        <div class="title">Teacher Registration Form</div>
        <div class="content">
            <form action="treg.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" placeholder="Enter name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">NIC</span>
                        <input type="text" name="nic" placeholder="Enter NIC" pattern=".{10,}">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone No</span>
                        <input type="tel"  name="pno" placeholder="Enter Phone No" pattern=".{10,}">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address1" placeholder="Enter Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter Email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <div class="input-box">
                        <span class="details">Subject</span>
                        <input type="text" name="subject1" placeholder="Enter Subject" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <select id="Gender" name="gender">
                <option value="--select gender">--select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="APPLY">
                </div>
                <a href="Teacher_details.php"><<< Back to previous page</a>
            </form>
        </div>
    </div>

</body>

</html>