<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Admin</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <header>
        <div class="container">
                              
            <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
                              
            <nav class="navbar">
                <ul>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="uprofile.php">Profile</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main">
        <div class="users">
            <a href="#"><img src="User Images\download.png" alt="user"></a><br>
            <a href="userAdmin.php"><input class="userbtn" type="button" value="View Users"></a>
        </div>
        <div class="lawyers">
            <a href="#"><img src="User Images\lawyer.jpg" alt="Lawyer"></a><br>
            <a href="lawyerAdmin.php"><input class="lawyerbtn" type="button" value="View Lawyers"></a>
        </div>
    </div>
</body>
</html>