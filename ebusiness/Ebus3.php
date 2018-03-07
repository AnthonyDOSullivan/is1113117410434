<?php
session_start();
$_SESSION["total"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <style>
            body{ text-align:center;
              background-image: url("http://barbmayer.com/images/backgrounds/blue_sky_background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
            }
               div {background-color: black;}
div a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    padding: 15px;
    display:inline-block;
}
ul {
    display:inline-block;
  margin: 0;
  padding: 0;
}
ul li {display: inline-block;}
ul li:hover {background: #adad85;}
ul li:hover ul {display: block;}
ul li ul {
  position: absolute;
  width: 200px;
  display: none;
}
ul li ul li { 
  background: #adad85 ; 
  display: block; 
  color : #c2c2a3;
}
ul li ul li a {display:block;} 
ul li ul li:hover {background: #adad85;}
li a:hover:not(.active) {
    background-color: #c2c2a3;
}
 a:hover:not(.active) {
    background-color: #adad85;
}
        </style>
        <div class="topnav">
  
         <a href="../homepage.html">Home</a>   
        <ul>
  <li><a href="../cv_page1.html">Curriculum Vitae</a>
  <ul>
        <li><a href="../cv_page1.html">CV Page 1</a></li>
        <li><a href="../cv_page2.html">CV Page 2</a></li>
        <li><a href="../cv_page3.html">CV Page 3</a></li>
      </ul>
    </li>
  </ul>
  <ul>
    <li><a href="../sports.html">Interests</a>
    <ul>
        <li><a href="../sports.html">Sports</a></li>
        <li><a href="../travel.html">Travel</a></li>
    </ul>
    </li>
    </ul>
  <a href="../ebus1.php">E-Business </a>
  <a href="../about_cloud.html">About Cloud Services</a>
  <a href=https://github.com/AnthonyDOSullivan/is1113117410434>Github</a>
  <a href=https://dashboard.heroku.com/apps/is1113117410434/deploy/github>Heroku</a>
  <a href=https://is1113117410434.herokuapp.com/>Website link </a>
  
</div>
         <h1 class="mainheading">Cloudco</h1>
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        $username = $_POST['username'];
        echo"Name:$username .";
        ?>
        <br/>
        <?php
        $useremail = $_POST['useremail'];
        echo"E-mail:$useremail .";
        ?>
        <br/>
        <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        <br/>
        <a href="../homepage.html" class="btn btn-success">Home</a>
    </body>
    
</html>