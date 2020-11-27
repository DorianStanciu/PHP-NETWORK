<?php
    require "header.php";
?>

<style>
<?php    include "css/index.css"; ?>
</style>


<main>
<div class="wrapper-main">
<h1>Signup</h1>

<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] == 'emptyfields') {
            echo '<p class="signup-error">Fill in all fields!</p>';
        }
        else if($_GET['error'] == 'invaliduidmail') {
            echo '<p class="signup-error">Invalid Username and e-mail!</p>';
        }
        else if($_GET['error'] == 'invaliduid') {
            echo '<p class="signup-error">Invalid Username!</p>';
        }
        else if($_GET['error'] == 'invalidmail') {
            echo '<p class="signup-error">Invalid E-mail!</p>';
        }
        else if($_GET['error'] == 'passwordcheck') {
            echo '<p class="signup-error">Your passwords do not match!</p>';
        }
        else if($_GET['error'] == 'usertaken') {
            echo '<p class="signup-error">Username is already taken!</p>';
        }
    }
    
    else if (isset($_GET["signup"])) {
        if($_GET['signup'] == 'success') {
        echo '<p class="signup-success">Signup Successful!</p>';
        }
    }
    
    
    
?>

<form action="includes/signup.inc.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <br>
    <input type="text" name="surname" placeholder="Surname">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="text" name="mail" placeholder="E-mail">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <input type="password" name="pwd-repeat" placeholder="Repeat password">
    <br>
    <button type="submit" name="signup-submit">Signup</button>
</form>

</div>
</main>
