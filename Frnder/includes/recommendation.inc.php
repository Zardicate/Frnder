<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

session_start();
$userid=$_SESSION["userid"];

if(alreadyExist($conn, $userid) !== false){
    header("location: ../recommendation.php");
    exit();
}
else{
    header("location: ../profile.php?error=notexists");
}

