<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case</title>
    <link rel="stylesheet" type="text/css" href="casedetails.css">
    <script src="validations.js"></script>
</head>
<body>
    <?php 
        if(isset($_POST['appointmentbtn'])){
            $con = mysqli_connect("localhost","root","yash123","webproject");
            $casetitle=$_REQUEST['ctitle'];
            $casedescription=$_REQUEST['cdescription'];
            $appointmentdate=$_REQUEST['txtDate'];
            $caseid=rand(1,1000);
            session_start();
            $username=$_SESSION['username'];
            $query = "insert into cases(Casename,Username, case_description,Appdate)values('$casetitle','$username','$casedescription','$appointmentdate');";
            $result=mysqli_query($con,$query);
            if($result){

                return true;
            }
            else {

                echo "<script> alert('invalid credentials')</script>";
            }
        }
    ?>
    <header>
        <div class="container">
                      
             <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
                      
            <nav class="navbar">
                <ul>
                    <li><a href="uuserlogin.php">Home</a></li>
                    <li><a href="uprofile.php">Profile</a></li>
                    <li><a href="index.php">Logout</a></li>
                    <li><a id="prbtn" href="#">Post a Case</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="snackbar">Fill all the fields..</div>
    <form method="POST">
        <div class="box">
            <div class="labels">
                <label for="ctitle">Case Title</label><br><br><br>
                <label for="cdescription">Case Description</label><br><br><br>
                <label for="cappointment">Appointment</label><br><br><br>
            </div>
            <div class="textfields">
                <input name="ctitle" id="ctitle" class="ctitle i" type="text" Placeholder="title"><br>
                <input name="cdescription" id="cdescription" class="cdescription i" type="text" Placeholder="description"><br>
                <input name="txtDate" id="txtDate" class="cappointment i"type="date" data-date-inline-picker="true" /><br>
            </div>
                <input class="searchbtn" type="button" value="Search Lawyers" onclick="location.href='usearch attorney.html'">
                <input name="appointmentbtn"class="casebtn" type="submit" value="Confirm Appointment" onclick="myAppointment()">
        </div>
    </form>
    
</body>
</html>