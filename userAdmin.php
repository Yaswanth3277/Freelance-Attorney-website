<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users|Admin Login</title>
  <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
  <?php
  error_reporting(0);
    $searchbar = $_REQUEST['searchbar'];
    $con=mysqli_connect("localhost","root","yash123","internship");
    $query="select * from user";
    $result=mysqli_query($con,$query);
  ?>
  <header>
    <div class="container">

    <a href="index.php"> <img class="websiteLogo" src="./img/websiteLogo.jpg" alt="Website Logo"</img></a>
     <nav class="navbar">
        <ul>
         <li><a id="prbtn" href="index.php">Logout</a></li>
       </ul>
     </nav>
    </div>
  </header>
<div class="viewusers">
  <div class="container">
   <div class="search">
        <input name="searchbar" class="searchbar" type="text" placeholder="Search User....">
        <input name="searchbtn" class="searchbtn" type="submit" value="Search">
        <input class="deletebtn" type="submit" value="Delete">
    </div>
    <div class="viewuserstable">
    <table align="right">
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>E-Mail</th>
        <th>Phone</th>
      </tr>
      <?php
        while($row=mysqli_fetch_assoc($result)){
        echo "
        <tr>
          <td>{$row['Name']}</td>
          <td>{$row['Username']}</td>
          <td>{$row['Email']}</td>
          <td>{$row['Phone']}</td>
        </tr>";
        }
        mysqli_close();
      ?>
    </table>
  </div>


  </div>
  <?php
  if(isset($_POST['deletebtn'])) {
      $conn=mysqli_connect("localhost","root","yash123","internship");
      $deletequery="delete from user where username='$searchbar'";
      mysqli_query($conn,$deletequery);
      echo "<script>alert('deleted');</script>";
      echo "deleted";
  }
  ?>
  <form action="#" method="POST">

  </form>
</div>
</body>
</html>
