<?php
include('inc/header.php');
login_check_pages();
?>

<div>
    <?php display_message(); ?>
    <?php validate_user_login(); ?>
</div>

<style>

body {
    background-image: url("logo.png");
    background-size: 400px 200px;
    background-repeat: no-repeat;
    background-position: center;
    font-family: Arial;
}

form {
    margin-top: 15px;
}

form input {
    display: block;
    margin-top: 15px;
    height: 30px;
    padding-left: 10px;
    width: 300px;
}

form textarea {
    padding: 10px;
}

.alert {
    border: 1px solid red;
    padding: 15px;
    max-width: 30px;
}



</style>


<form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login-submit" value="Log In">
</form>
