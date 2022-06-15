<?php
include('inc/header.php');
login_check_pages();
?>

<div>
    <?php display_message(); ?>
    <?php validate_user_registration(); ?>
</div>


<style>

body {
    background-image: url("logo.png");
    background-size: 500px 300px;
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
    <input type="text" name="first_name" placeholder="First Name" value="" required>
    <input type="text" name="last_name" placeholder="Last Name" value="" required>
    <input type="text" name="username" placeholder="Username" value="" required>
    <input type="text" name="address" placeholder="Delivery address" value="" required>
    <input type="email" name="email" placeholder="Email Address" value="" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <input type="submit" name="register-submit" value="Register Now">
</form>
