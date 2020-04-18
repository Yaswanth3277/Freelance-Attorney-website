<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="uuser.css">
    <title>User Home</title>
    <link rel="icon" href="User Images\Sharpen Twice.ico">
    <script src="validations.js"></script>
</head>
<body>
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
    <div id="snackbar">Enter the case title..</div>
    <div class="main">
        <!--<img class="homeCover" src="User Images\homeCover.jpg" alt="Home Cover">-->
        <div class="newcase">
            <ul>
                <strong>New Case!</strong><br>
                <input id="casetitle" class="casetitle" type="text" placeholder="Enter Case Title"><br>
                <input class="casebtn" type="button" value="Upload Case" onclick="myCase()"><br>
            </ul>
        </div>
    </div>  
</body>
</html