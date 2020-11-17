<?php

if(isset($_POST["submit"])){
    $q1 =$_POST["q1"];
    $q2 =$_POST["q2"];
    $q3 =$_POST["q3"];
    $q4 =$_POST["q4"];
    $q5 =$_POST["q5"];
    $q6 =$_POST["q6"];
    $q7 =$_POST["q7"];
    $q8 =$_POST["q8"];
    $q9 =$_POST["q9"];
    $q10 =$_POST["q10"];
    $q11 =$_POST["q11"];
    $q12 =$_POST["q12"];
    $q13 =$_POST["q13"];
    $q14 =$_POST["q14"];
    $q15 =$_POST["q15"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    session_start();
    $userid = $_SESSION["userid"];

    if(alreadyExist($conn, $userid) !== False){
        header("location: ../profile.php? error=alreadyexist");
        exit();
    }

    createProfile($conn, $userid, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15);
}
else{
    header("location: ../profile.php");
    exit();
}