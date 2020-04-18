<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Login</title>
</head>
<body id="loginBody">
  <?php

  ?>
  <section class="loginpage">
    <div class="layout">
        <div class="logincontainer">
           <a href="index.html"><img id="login-websiteLogo" src="./img/websiteLogo.jpg"></img></a>
           <div id="greeting">
             <span>Welcome Back</span>
           </div>



        <form id="loginfields" action="">
          <div class="typeRadio">
            <span>Lawyer</span><input name="type" class="lawyerOrUser" type="radio" name="work_or_hire" value="lawyer" />
            <span>User</span><input name="type" class="lawyerOrUser" type="radio" name="work_or_hire" value="user" />
          </div>
            <ul>
              <li>  <input name="username" type="text"  placeholder="Username or Email"><br> </li>
              <li>  <input name="password"type="password" placeholder="Password"><br>         </li>

              <?php
              error_reporting(0);
              $con=mysqli_connect("localhost","root","yash123","webproject");
              session_start();
              if(isset($_REQUEST['login'])){

                $username=$_REQUEST['username'];
                $passw=$_REQUEST['password'];
                $password=sha1($passw);
                $type = $_REQUEST['type'];
                $query="select * from login where Username='$username' and Password='$password' and Type='$type'";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result)){
                  if($row['Type'] == "User") {
                    $_SESSION['username'] = $username;
                    header( "location:uuserlogin.php" );
                  }

                  elseif($row['Type'] == "Lawyer"){
                    $_SESSION['username'] = $username;
                    header( "location:sample.php" );

                  }
                  else {
                    header( "refresh:3; url=login.php" );
                    echo "Invalid Username/Password";
                  }
              }

              error_reporting(0);
              }?>
                <input name="login" id="Login" type="submit" value="Login" onClick="loginbtn()">
        </form>
    <span id="signupLink"><a href="signupinterface.php">Don't have an Account? Signup here</a></span>
        </div>

  </div>
  </section>




</body>
</html>
