<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments</title>
    <link rel="stylesheet" type="text/css" href="uappointments.css">
</head>
<body>
    <?php 
        $con=mysqli_connect("localhost","root","yash123","internship");
        session_start();
        $username=$_SESSION['username'];
        $query="select * from appointments where Username='$username'";
        $result=mysqli_query($con,$query);
    ?>
    <header>
        <div class="container">
                                      
            <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
                                      
            <nav class="navbar">
                <ul>
                    <li><a href="sample.php">Home</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="appointments">
    <table>
        <tr>
            <th style="padding:0 20px 0px 20px;border:1px solid black;">Case Title</th>
            <th style="padding:0 20px 0px 20px;border:1px solid black;">Case Description</th>
            <th style="padding:0 20px 0px 20px;border:1px solid black;">Date of Appointment</th>
        </tr>
        <?php
            while( $row = mysqli_fetch_assoc($result)){
                echo
                    "<tr>
                        <td>{$row['case_title']}</td>
                        <td>{$row['case_description']}</td>
                        <td>{$row['date']}</td>
                    </tr>\n";
            }
        ?>
    </table>
    </div>
</body>
</html>