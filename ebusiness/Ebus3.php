<?php
session_start();
$_SESSION["username"];
$_SESSION["useremail"];
$_SESSION["total"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo"Name: " . $_SESSION["username"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail: " . $_SESSION["useremail"] . ".";
        ?>
        <br/>
        <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>