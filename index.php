<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Law</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:800">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <script src="script.js"> </script>
</head>

<body>
<header>
<?php  
 //logout.php  
 session_start();  
 session_destroy();  
 
 ?> 
  <div class="container">

  <a href="index.php"> <img class="websiteLogo" src="./img/websiteLogo.jpg" alt="Website Logo"</img></a>
    <nav class="navbar1" id="navbar1">
      <ul>
        <li><a href="#howitworks">How It Works</a></li>
        <li><a href="viewcases.php">Browse Cases</a></li>
      </ul>
    </nav>

   <nav class="navbar">
      <ul>
       <li><a href="login.php">Login</a></li>
       <li><a href="signupinterface.php">Sign Up</a></li>
       <li><a id="prbtn" href="login.php">Post a Case</a></li>
     </ul>
   </nav>
  </div>
</header>

<section id="homepage">
  <!-- <img id="homeCover" src="homeCover.jpg" alt="Home Cover"></img> -->
    <div class="container">
      <h1 id="slogan"> Hire Expert Attornies to Solve any Case, online.</h1>
      <div id="sloganInfo"><h1>A platform that Connects Thousands of Clients with Attornies to solve there Law Cases. </h1></div>
      <div id="coverButtons">
       <a id="Hire" href="login.php">I want to Hire</a>
       <a id="Work" href="login.php">I want to Work</a>
       </div>
    </div>
</section>

<section id="howitworks">
   <div class="container">
     <div id="howitworks-info-container">
        <h1>Looking for a Lawyer to Solve a Case?</h1>
        <p id="howitworks-ans-container">Legal Act of War provides you a platform
           to connect with experienced and highly rated Legal Representatives.<br>
           Simply post a case to be solved and get contacted by a suitable Lawyer.
            Or choose from Hundreds of Lawyers based on Categories and get in touch with them directy.<br><br>

            All at the ease of doing it online!<br><br>
            <b>Signup Now to post your case!<b>


        </p>


     </div>
       <img id="homeLawyer" src="./img/homeLawyer.jpg" alt="Lawyer">
   </div>
</section>

<footer id="homefooter">
  <div class="container">
   <h1 id="footerinfo">Legal Act of War &copy</h1>
   <a id="adminlogin" href="adminLogin.php">Admin Login</a>

  </div>
</footer>
</body>
</html>
