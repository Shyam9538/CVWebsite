<?php
$dbhost = "sql102.epizy.com";
$dbport = "3306";
$dbuser = "epiz_30397559";
$dbpwd = "hRPiHmcfyK4oPBf";
$dbname = "epiz_30397559_ecs417";
// Creates connection

$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

session_start();
date_default_timezone_set("Europe/London");
$date = date("y/m/d");
$time = date("H:i:s");
$title = $_POST["title"];
$post = $_POST["post"];

//date('Format String', time());

//Below is example how you will insert data into the table you created in the previous step.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$sql = "INSERT INTO posts (dateP, timeP, title, post)
VALUES ('$date', '$time', '$title', '$post')";
 if ($conn->query($sql) === TRUE) {
//Your code
 header("refresh:1; URL=viewBlog.php");

 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }
 ?>
