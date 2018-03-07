<?php
// Start the session
session_start();
$_SESSION["username"];
$_SESSION["useremail"];
$_SESSION["total"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <style>
            body{
                text-align:center;
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
        <li><a href="../Interests/sports.html">Sports</a></li>
        <li><a href="../travel.html">Travel</a></li>
    </ul>
    </li>
    </ul>
  <a href="../ebus1.php">E-Business </a>
  <a href="about_cloud.html">About Cloud Services</a>
  <a href=https://github.com/AnthonyDOSullivan/is1113117410434>Github</a>
  <a href=https://dashboard.heroku.com/apps/is1113117410434/deploy/github>Heroku</a>
  <a href=https://is1113117410434.herokuapp.com/>Website link </a>
  
</div>
         <h1 class="mainheading">Cloudco</h1>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                
                <label for="username">Name:</label>
                    
                    <input type="text" id="username" name="username" placeholder="Name" maxlength="50"/>
                    
                    <br/>
                    
                    <label for="useremail">E-mail</label>
                    
                    <input type="text" id="useremail" name="useremail" placeholder="E-mail" maxlength="50"/>
                    
                    <br/>

                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br/>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variable
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["useremail"] = $_POST["useremail"];
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>