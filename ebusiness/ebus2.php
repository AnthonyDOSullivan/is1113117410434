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
                background-color:dodgerblue;
            }
        </style>
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