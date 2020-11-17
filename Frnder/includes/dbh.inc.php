<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "frnder";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}?>

<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// error_reporting(0);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=frnder", $username, $password);
//   error_reporting(E_ERROR | E_PARSE);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully"; 
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>