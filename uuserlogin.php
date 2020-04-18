<!DOCTYPE html>
<html lang="en">
<head>
    <title>Userhome</title>
    <link rel="stylesheet" type="text/css" href="uuserlogin.css">
    <script src="validations.js"></script>
</head>
<body>
    <?php 
    error_reporting(0);
        $con=mysqli_connect("localhost","root","yash123","webproject");
        session_start();
        $username=$_SESSION['username'];
        /*$query="select * from cases,user where username='$username';";
        $result=mysqli_query($con,$query);*/
        $query = "select * from user,cases where user.Username='$username' and cases.Username='$username';";
        $url = mysqli_query($con,$query)or die(mysqli_error($con));
    ?>
    <header>
        <div class="container">
                      
            <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
        
            <nav class="midnav" id="midnav">
                <input id="searchbar" class="searchbar" type="text" placeholder="Search Attorneys....">
            </nav>
            <nav>
                <a href="#" onClick="myFunction()">
                <img class="searchbutton" src="User Images\search.png">
                </a>
            </nav>
                      
            <nav class="navbar">
                <ul>
                    <li><a href="uprofile.php">Profile</a></li>
                    <li><a href="index.php">Logout</a></li>
                    <li><a id="prbtn" href="uuser.php">Post a Case</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="snackbar">Search bar empty..</div>
    <div class="main">    
        <div class="cases">
            <strong>Cases</strong><br>
            <hr>
            <table>
                <tr>
                    <th style="padding:0 60px 20px 60px;">Name</td>
                    <th style="padding:0 80px 20px 60px;">Description</td>
                    <th style="padding:0 80px 20px 60px;">Appointment Date</td>
                </tr>
                <?php
                    while( $row = mysqli_fetch_assoc($url)){
                        echo
                            "<tr>
                                <td style='padding-left:60px;'>{$row['Casename']}</td>
                                <td style='padding-left:60px;'>{$row['case_description']}</td>
                                <td style='padding-left:60px;'>{$row['Appdate']}</td>
                            </tr>\n";
                            $image = $row['image'];
                    }
                ?>
            </table>
        </div>
        <div class="profile">
            
            <?php 
                echo "<img class='profilepic' src='$image.jpg' alt = 'Profile Picture'>";
            ?>
            <strong class="wish">Welcome back,</strong>
            <h3 class="username"><?php echo "$username"?></h3>
        </div>
    </div>  
</body>
</html>




