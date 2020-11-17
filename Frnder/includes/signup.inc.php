<?php

if(isset($_POST["submit"])){
    $name =$_POST["name"];
    $email =$_POST["email"];
    $username =$_POST["uid"];
    $pwd =$_POST["pwd"];
    $pwdRepeat =$_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== False){
        header("location: ../register.php? error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== False){
        header("location: ../register.php? error=invalidUid");
        exit();
    }
    if(invalidEmail($email) !== False){
        header("location: ../register.php? error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat) !== False){
        header("location: ../register.php? error=passwordsdontMatch");
        exit();
    }
    if(uidExists($conn,$username,$email) !== False){
        header("location: ../register.php? error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);


}
else{
    header("location: ../register.php");
    exit();
}