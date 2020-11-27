<?php
    include "includes/dbh.inc.php";
?>

<style>
<?php    include "css/main.css"; ?>
</style>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Network</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" >
<link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"crossorigin="anonymous"/>
</head>
<body>

<div class="mainmenu">

<div class="user">
<?php //se afiseaza toti userii in loc de 1
    //$sql = "SELECT * FROM users;";
    //$result = mysqli_query($conn, $sql);
    //$resultCheck = mysqli_num_rows($result);

    //if ($resultCheck > 0) {
    //    while ($row = mysqli_fetch_assoc($result)){
    //        echo $row['nameUsers'];
    //        echo " ";
    //        echo $row['surnameUsers'];
    //    }
    //}
?>
</div>

<div class="search">
<input type="text" placeholder=" Search..."><button type="submit" name="search-submit"><i class="fas fa-search"></i></button>
</div>

<div class="logout">
<?php

echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';

?>
</div>

</div>

<div class="leftmenumain">

</div>

<div class="posts">
    <div class="newpost">

    </div>
</div>

<?php
    require "footer.php";
?>

</body>
</html>