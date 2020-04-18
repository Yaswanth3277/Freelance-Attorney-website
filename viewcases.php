<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Cases | LAW</title>
  <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
  <?php 
    $connect = mysqli_connect("localhost","root","yash123","webproject");
    $s = "select * from cases";
    $result = mysqli_query($connect,$s);
  ?>
  <div class="container">

  <a href="index.php"> <img class="websiteLogo" src="./img/websiteLogo.jpg" alt="Website Logo"</img></a>
    <nav class="navbar1" id="navbar1">
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>
  </div>
  </header>

  <div class="container">
    <div class="appointments">
      <table>
          <tr>
              <th style="padding:0 60px 10px 100px;">Client Name</th>
              <th style="padding:0 80px 10px 60px;">Case Title</th>
              <th style="padding:0 40px 10px 40px;">Case Description</th>
          </tr>
                        <?php
                        error_reporting(0);
                            while( $row = mysqli_fetch_assoc($result)){
                                echo
                                    "<tr>
                                        <td>{$row['Username']}</td>
                                        <td>{$row['Casename']}</td>
                                        <td>{$row['case_description']}</td>
                                    </tr>\n";
                                    }
                                  ?>
       </table>
    </div>
</div>

</body>
</html>
