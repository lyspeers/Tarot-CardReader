<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport">
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper_main" style="margin-top:0%">
            <div class="wrapper_interior_a" style="background-color:#aaaaff; width:25%">
                <p>Home</p>
            </div>

            <div class="wrapper_interior_a" style="background-color:#aaaaff; width:25%">
                <p>User (DEFUNCT)</p>
            </div>
            
            <div class="wrapper_interior_a" style="background-color:#aaaaff; width:25%">
                <p>Admin (DEFUNCT)</p>
            </div>
            
            <div class="wrapper_interior_a" style="background-color:#aaaaff; width:25%">
                <a href="consultant.php">Consultant panel</a>
            </div>
            
            <div class="wrapper_interior_a" style="background-color:#aaaaff; width:25%">
                <p>Login</p>
            </div>
        </div>

<?php

$_SESSION["userpower"] = "0";


?>
    
    </body>
</html>