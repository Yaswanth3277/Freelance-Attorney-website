<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="uprofile.css">
</head>
<body>
    <?php

    $con = mysqli_connect("localhost","root","yash123","webproject");
    session_start();
    $username=$_SESSION['username'];
    $query="select * from user where Username='$username'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    ?>
    <header>
        <div class="container">
                              
            <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
                              
            <nav class="navbar">
                <ul>
                    <li><a href="uuserlogin.php">Home</a></li>
                    <li><a href="index.php">Logout</a></li>
                    <li><a id="prbtn" href="uuser.php">Post a Case</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main">
        <strong>Profile</strong> 
        <div class="boxes">
            <div class="profiledetails">
                <?php
                    $image = $row['image'];
                    echo "<img class='pprofilepic' src='$image.jpg' alt = 'Profile Picture' style='width:130px;'>";
                ?><br><br>
                <strong><?php echo "$username" ?></strong><br>
            </div>
            <div class="details">
                <strong class="about" style="padding-left:20px;">About</strong>
                <hr>
                <table class="table" cellspacing="20px">
                    <tr>
                        <td>First Name</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[1];
                        ?></td>
                        <td style="padding-left: 80px">Last Name</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[2];
                        ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[3];
                        ?></td>
                        <td style="padding-left: 80px">Email</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[5];
                        ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[8];
                        ?></td>
                        <td style="padding-left: 80px">State</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[9];
                        ?></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[4];
                        ?></td>
                        <td style="padding-left: 80px">Phone</td>
                        <td style="padding-left: 20px"><?php 
                            echo $row[6];
                        ?></td>
                    </tr>
                </table>
            </div>
        </div>    
    </div>
</body>
</html>