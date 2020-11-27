
<?php
    require "header.php";
?>

<style>
<?php    include "css/index.css"; ?>
</style>


<main>


    <div class="indexcontent">

    <?php
    if (isset($_SESSION['userId'])){
        echo '<p class="login-status">You are logged in! </p>';
    }
    else{
        echo '<p class="login-status">You are logged out! </p>';
    }
    ?>

    </div>

    <?php
    require "footer.php";
    ?>

</main>

