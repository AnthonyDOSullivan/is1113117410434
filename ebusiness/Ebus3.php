<?php
session_start();
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
        echo "Name: " . $_SESSION["user_name"];
        echo "E-mail" . $_SESSION["user_email"];
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>