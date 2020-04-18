<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attorney Search</title>
    <link rel="stylesheet" type="text/css" href="usearch attorney.css">
    <script src="validations.js"></script>
</head>
<body>
    <?php
        error_reporting(0);
        if(isset($_POST['catsearch'])){//to run PHP script on submit
            $attorney = $_POST['cb'];
            $con = mysqli_connect("localhost","root","yash123","webproject");
            $query="select * from lawyer where category='$attorney';";
            $cresult= mysqli_query($con,$query);
        }
        if(isset($_POST['searchbtn'])){//to run PHP script on submit
            $name = ucfirst($_REQUEST['attorneysearch']);
            $con = mysqli_connect("localhost","root","yash123","webproject");
            $query="select * from lawyer where fname='$name';";
            $sresult= mysqli_query($con,$query);
        }
    ?>
    <header>
        <div class="container">                 
            <a href="#" > 
            <img class="websiteLogo" src="User Images\websiteLogo.jpg" alt="Website Logo"></a>
                              
             <nav class="navbar">
                <ul>
                    <li><a href="uuserlogin.php">Home</a></li>
                    <li><a href="uprofile.php">Profile</a></li>
                    <li><a href="index.php">Logout</a></li>
                    <li><a id="prbtn" href="uuser.php">Post a Case</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="snackbar">Search bar empty...</div>
    <div class="main">
        <div class="head">
            <ul>
            <strong><b>Attorney Search</b></strong>
            </ul>
        </div>
        <div class="boxes">
            <div class="categories">
                <ul>
                    <strong class="cat">Category</strong><br>
                    <form action="#" method="POST">
                        <div class="checkbox">
                            <div class="leftcheckbox">
                                <input name="cb" id="cb1" class="leftcheck" type="radio" value="Corporate Attorney"><label>Corporate Attorney</label><br>
                                <input name="cb" id="cb2" class="leftcheck" type="radio" value="Family Attorney"><label>Family Attorney</label> <br>
                                <input name="cb" id="cb3" class="leftcheck" type="radio" value="Bankruptcy Attorney"><label>Bankruptcy Attorney</label> <br>
                                <input name="cb" id="cb4" class="leftcheck" type="radio" value="Immigration Attorney"><label>Immigration Attorney</label> <br>
                                <input name="cb" id="cb5" class="leftcheck" type="radio" value="Government Attorney"><label>Government Attorney</label> <br>
                        
                            </div>
                            <div class="rightcheckbox">
                                <input name="cb" id="cb6" class="rightcheck" type="radio" value="Criminal Attorney"><label>Criminal Attorney</label> <br>
                                <input name="cb" id="cb7" class="rightcheck" type="radio" value="Tax Attorney"><label>Tax Attorney</label> <br>
                                <input name="cb" id="cb8" class="rightcheck" type="radio" value="Employment Attorney"><label>Employment Attorney</label> <br>
                                <input name="cb" id="cb9" class="rightcheck" type="radio" value="Divorce Attorney"><label>Divorce Attorney</label> <br>
                                <input name="cb" id="cb10" class="rightcheck" type="radio" value="Military Attorney"><label>Military Attorney</label> <br>
                            </div>
                        </div>
                        <input name="catsearch" class="checkbtn" type="submit" value="Search" onclick="catSearch()"><br>
                    </form> 
                </ul>
            </div>
            <div class="search">
                <ul>
                    <strong>Search</strong><br>
                    <div>
                        <form action="#" method="POST">
                            <input name="attorneysearch" id="attorneysearch" class="attorneysearch" type="text" placeholder="Search Attorney....">
                            <input name="searchbtn" class="searchbtn" type="submit" value="Search" onclick="searchbtn()"><br>
                        </form>         
                    </div>
                    <div class="searchresults">
                        <table>
                            <tr>
                                <td style="padding:0 60px 20px 60px;">Name</td>
                                <td style="padding:0 80px 20px 60px;">Experience(in years)</td>
                                <td style="padding:0 40px 20px 40px;">Phone</td>
                                <td style="padding:0 60px 20px 60px;">Category</td>
                            </tr>
                            <?php
                                while( $row = mysqli_fetch_assoc($cresult)){
                                echo
                                "<tr>
                                    <td>{$row['fname']}</td>
                                    <td>{$row['experience']}</td>
                                    <td>{$row['Phone']}</td>
                                    <td>{$row['category']}</td>
                                </tr>\n";
                                }
                            ?>
                            <?php
                                while( $row = mysqli_fetch_assoc($sresult)){
                                echo
                                "<tr>
                                    <td>{$row['fname']}</td>
                                    <td>{$row['experience']}</td>
                                    <td>{$row['Phone']}</td>
                                    <td>{$row['category']}</td>
                                </tr>\n";
                                }
                                error_reporting(0);
                            ?>
                        </table>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>