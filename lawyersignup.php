<!DOCTYPE html>
<html>
<head>
  <title>Signup | Legal Act of War</title>
  <link rel="stylesheet" href="signup.css">
  <script type="text/javascript" src="signup1.js"></script>
</head>
<body>
<?php 
    if(isset($_POST['submit'])){

      $firstname=$_REQUEST['fname'];
      $lastname=$_REQUEST['lname'];
      $passw=$_REQUEST['pass'];
      $password=sha1($passw);
      $cpassword=$_REQUEST['cpass'];
      $dob=$_REQUEST['dob'];
      $exp = $_REQUEST['experience'];
      $category = $_REQUEST['type'];
      $email=$_REQUEST['email'];
      $phone=$_REQUEST['phone'];
      $gender=$_REQUEST['gender'];
      $address=$_REQUEST['address'];
      $city=$_REQUEST['city'];
      $pincode=$_REQUEST['pincode'];
      $state=$_REQUEST['state'];
      $name=$firstname.$lastname;
      $work_or_hire = "Lawyer";

      $con=mysqli_connect("localhost","root","yash123","webproject");
      $jquery="insert into lawyer(fname,lname,Username,dob,Email,Phone,experience,category,Address,city,State,Pincode) values('$firstname','$lastname','$name','$dob','$email','$phone','$exp','$category','$address','$city','$state','$pincode');";
      $jquery.="insert into login values('$work_or_hire','$name','$password');";
      mysqli_multi_query($con,$jquery)or die(mysqli_error($con));
    }
?>
  <div>
    <header>
      <h3>Sign Up</h3>
    </header>
    <form action="#" method="POST">
      <div class="container">
        <div class="labels">
          <label for="fname">First Name</label><br>
          <label for="lname">Last Name</label><br>
          <label for="pass">Password</label><br>
          <label for="cpass">Confirm Password</label><br>
          <label for="dob" style="display:block; padding-top:4px;">Date of Birth</label><br>
          <label for="exp">Experience</label><br>
          <label for="category">Category</label><br><br><br><br><br>
          <label for="email">Email</label><br>
          <label for="phone">Phone Number</label><br>
          <label for="gender">Gender</label><br>
          <label for="address">Address</label><br>
          <label for="city" style="display:block; padding-top:55px;">City</label><br>
          <label for="state">State</label><br>
          <label for="pincode">Pincode</label><br>
        </div>
        <div class="textfield">
          <input id="fname" name = "fname" type="text"><br><br>
          <input id="lname" name = "lname" type="text"><br><br>
          <input id="pass" name = "pass" type="password" onkeyup="checkpass();">
          <label for="pass" id="passstatus"></label><br><br>
          <input id="cpass" name = "cpass" type="password" onkeyup="matchpass();">
          <label for="cpass" id="passmatch"></label><br><br>
          <input type="date" name = "dob" id="dob" name="Date_of_birth" value="2018-07-22" min="1990-01-01" max="2018-12-31"><br><br>
          <input type="text" name="experience" id="experience"><br><br>
            <label for="Corporate">Corporate Attorney</label>
            <input type="radio" id="Corporate" name="type" value="Corporate Attorney">
            <label for="family">Family Attorney</label>
            <input type="radio" id="family" name="type" value="Family Attorney">
            <label for="bank">Bankruptcy Attorney</label>
            <input type="radio" id="bank" name="type" value="Bankruptcy Attorney"><br><br>
            <label for="immigration">Immigration Attorney</label>
            <input type="radio" id="immigration" name="type" value="Immigration Attorney">
            <label for="govt">Government Attorney</label>
            <input type="radio" id="govt" name="type" value="Government Attorney">
            <label for="criminal">Criminal Attorney</label>
            <input type="radio" id="criminal" name="type" value="Criminal Attorney"><br><br>
            <label for="employ">Employment Attorney</label>
            <input type="radio" id="employ" name="type" value="Employment Attorney">
            <label for="Divorce">Divorce Attorney</label>
            <input type="radio" id="Divorce" name="type" value="Divorce Attorney">
            <label for="military">Military Attorney</label>
            <input type="radio" id="military" name="type" value="Military Attorney"><br><br>
          <input id="email" name = "email" type="email"><br><br>
          <input id="phone" name = "phone" type="text" onkeyup="checknumber();">
          <label for="phone" id="checkphone"></label><br><br>
            <label for="male">Male</label>
            <input name="gender" id="male" type="radio" value = "Male">
            <label for="female">Female</label>
            <input name="gender" id="female" type="radio" value = "Female">
            <label for="others">Others</label>
            <input name="gender" id="others" type="radio" value = "Others"><br><br>
          <textarea id="address" name = "address" rows="4" cols="30"></textarea><br><br>
          <input id="city" name = "city" type="text"><br><br>
          <input id="state" name = "state" type="text"><br><br>
          <input id="pincode" name = "pincode" type="text" onkeyup="checkpin();">
          <label for="pincode" id="checkpincode"></label><br><br>
        </div>
      </div>
      <div class="buttons">
        <input type="button" value="Validate" class="validate" onclick="validate();"><br><br>
        <input name = "submit" id="submit" class="submit" type="submit" value = "Let's get to work"disabled><br><br>
        <input class="reset" type="reset" value="Reset">
      </div>
    </form>
    <footer class="homefooter">
    <h1>Legal Act of War &copy</h1>
    </footer>
  </div>
</body>
</html>