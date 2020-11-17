<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FRNDER</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header class="primary-header container clearfix">
            <h1 class="logo"><a href="index.php"><img class="img" src="img/frnder_logo1.png" alt="Friends Hugging"></a></h1>
            <h3 class="tagline"><a href="index.php">FRNDER</a><br><br>Find Your True Friend</h3>
            <nav class="nav primary-nav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo "<a href='profile.php'>Profile</a>";
                    echo "<a href='includes/recommendation.inc.php'> Match</a>";
                    echo "<a href='includes/logout.inc.php'> Logout</a>";
                }
                else{
                echo "<a href='login.php'>Login</a>";
                echo "<a href='register.php'> Register</a>";
                }
                ?>
            </nav>
        </header>