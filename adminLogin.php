<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Login</title>
</head>
<body id="loginBody">
  <section class="loginpage">
    <div class="layout">
        <div class="logincontainer">
           <a href="index.html"><img id="login-websiteLogo" src="./img/websiteLogo.jpg"></img></a>
           <div id="greeting">
             <span>Welcome Admin</span>
           </div>

        <form style="margin-top: 100px;" id="loginfields" action="">
            <ul>
              <li>  <input type="text" name="username" placeholder="Username or Email"><br> </li>
              <li>  <input type="password" name="password" placeholder="Password"><br>         </li>
              <?php 
              if(isset($_REQUEST['login'])){

                $username=$_REQUEST['username'];
                $password=$_REQUEST['password'];
                $con=mysqli_connect("localhost","root","yash123","webproject");
                $query="select * from admin where Username='$username';";
                $result=mysqli_query($con,$query);
                if($row=mysqli_fetch_array($result)) {
        
                
                  header( "location:admin.php" );
                  
                }
                
                else {
                  header( "refresh:3; url=adminLogin.php" );
                  echo "Invalid Username/Password";
                }

              error_reporting(0);
              }?>
              <li><a href="forgotpass"></li>
                <a href="#">Forgot Password ?</a>
             <input name="login" id="Login" type="submit" value="Login">
           </ul>
        </form>
        </div>

  </div>
  </section>




</body>
</html>
