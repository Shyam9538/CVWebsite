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


//date('Format String', time());

//Below is example how you will insert data into the table you created in the previous step.
  mysqli_query($conn,'INSERT INTO posts (dateP, timeP,title,post) SELECT dateP, timeP,title,post FROM preview');
  mysqli_query($conn,'TRUNCATE TABLE preview');


header("refresh:1; URL=viewBlog.php");


 $conn->close();

 ?>
