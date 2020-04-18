<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TechCiti Technologies</title>
    <link rel="stylesheet" href="./css/sample.css" type="text/css">
  </head>

<body>
<?php 
    error_reporting(0);
        $con=mysqli_connect("localhost","root","yash123","internship");
        session_start();
        $username=$_SESSION['username'];
        $con=mysqli_connect("localhost","root","yash123","webproject");
        $query = "select * from lawyer where Username='$username';";
        $url = mysqli_query($con,$query)or die(mysqli_error($con));
    ?>
  <header>
    <div class="container">
    <a href="index.html"> <img class="websiteLogo" src="./img/websiteLogo.jpg" alt="Website Logo"</img></a>

      <nav class="navbar1" id="navbar1">
        <ul>
          <li><a href="sample.php">Home</a></li>
        </ul>
      </nav>

     <nav class="navbar">
        <ul>
          <li><a href="viewcases.php">View Cases</a></li>
          <li><a href="index.php">Logout</a></li>
       </ul>
     </nav>
    </div>
  </header>

<div class="profilecontainer">
        <div class="card">
          <div class="layoutcontainer">
          <h2 style="text-align:center; position: relative; margin-top:10px;">WELCOME ATTORNEY!!!</h2>

          <H3>HERE IS YOUR PROFILE</H3>
          <?php 
            while($row = mysqli_fetch_assoc($url)){
              $image = $row['image'];
              echo "<img src='$image.jpg'alt='John'style='width:100%'>";
            }
          ?>
            <h1><?php echo "$username"; ?></h1>
              <p id="title">LAWYER IN HIGH COURT</p>
              <p>Harvard University</p>
                <div style="margin: 15px 0 ;">
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
               </div>
             <p><button>EDIT PROFILE</button></p>
        </div>
      </div>
    </div>
</body>
</html>
