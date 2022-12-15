




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
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST["action1"]) {
       echo "Hello";
      header("refresh:1; URL=addPost.php");

  }
  //You can do an else, but I prefer a separate statement
  if($_POST["action2"]) {
       echo "Welcome";
       header("refresh:1; URL=preview.php");
  }




  else {
 //echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }
 ?>
