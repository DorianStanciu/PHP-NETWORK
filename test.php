<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Network</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" >
<link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>

        <div class="menu">
        <h1>Network</h1>


        <div class="rightmenu">
        <?php
        if(isset($_SESSION['userId'])){  // if user is logged in
            echo '
            <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
            </form>';
        }
        else{ // if user is not logged in
            echo '  
            <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder=" Username/E-mail...">
            <input type="password" name="pwd" placeholder=" Password">
            <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
        ?>
        </div>

        </div>  

        

</body>
</html>