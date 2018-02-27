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
    </body>
</html>