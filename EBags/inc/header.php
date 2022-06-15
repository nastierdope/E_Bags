<?php
include "functions/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E Bags</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>

body {
    font-family: "Lato", sans-serif;
    margin: 0px;
}

.contrainer {
    display: grid;
    grid-template-columns: 1fr;
}

ul li {
    display: flex;
    justify-content: space-between;
    padding: 10px; 
}

ul li > .left-side > div {
    margin-right: 20px;
    text-transform: uppercase;
    font-size: 0.9rem;
}

ul li {
    height: 22px;
    border-bottom: 1px solid transparent;
    transition: border-bottom 0.5s;
}

.active ul li {
    border-bottom: 1px solid white;
}

.active ul li a{
    color: white !important;
}

ul li {
    color: #8a8a8a;
    text-decoration: none;
    transition: color 0.5s;
}

ul li:hover {
    border-bottom: 1px solid white;
}

ul li:hover a{
    color: black;
}

ul li a{
    color: green;
}

ul li.welcome-message {
    float: center;
}

</style>

<div class="container">

    <ul>
        <li><a href="index.php">Home</a></li>
        <?php if (!isset($_SESSION['email'])): ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php else: ?>
            <li><a href="logout.php">Logout</a></li>
            <li class="welcome-message"><h4><?php $user = get_user(); echo $user['first_name']; ?>, welcome!</h4></li>
        <?php endif; ?>
    </ul>

    <hr>