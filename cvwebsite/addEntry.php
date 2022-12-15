<?php
session_start();

$dbhost = "sql102.epizy.com";
$dbport = "3306";
$dbuser = "epiz_30397559";
$dbpwd = "hRPiHmcfyK4oPBf";
$dbname = "epiz_30397559_ecs417";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
$name=$_SESSION["name"];}
else{
  $name="";
}
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

//Below is example how you will insert data into the table you created in the previous step.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

 if ($conn->query($sql) === TRUE) {
//Your code
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Blog</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Bootstrap core JavaScript
    ================================================== -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="reset/reset.css">
   <link rel="stylesheet" href="style/style.css">
 </head>

 <body>
   <header>
   <div class="headerTwo">
    <h3><?php echo $name ?></h3>
   <button id="btn" type="button" name="" class="btn btn2 log bt4"><a class="link-button" href="login.php#login">Log in</a></button>
   <?php

   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

     echo '<script type="text/JavaScript">

     document.querySelector(".log").innerHTML="Log out";
     document.querySelector(".log").style.padding = "0.2em 0.6em";
     document.getElementById("btn").style.position = "relative";
     document.getElementById("btn").style.bottom = "3.2em";
     document.getElementById("btn").onclick = function () {
        location.href = "logout.php";
    };

     </script>';

   }
   else {

   }

    ?>
 </div>
   </header>
   <nav id="nav" id class="navbar sticky-top navbar-expand-xl navbar-dark">
     <a class="navbar-brand" href="index.php#"><u><strong>MSM</strong></u></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent" data-toggle="collapse" data-target=".navbar-collapse">
              <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
               <a href="index.php#aboutMe">About me</a>
             </li>
             <li class="nav-item">
             <a href="index.php#skills">Skills and achievements</a>
             </li>
             <li class="nav-item">
               <a href="index.php#education">Education and qualifications</a>
                         </li>
             <li class="nav-item">
               <a href="experience.php#experience">Experience</a>
             </li>
             <li class="nav-item">
             <a href="portfolio.php#portfolio">Portfolio</a>
                       </li>
             <li class="nav-item">
             <a href="viewBlog.php#login">Blog</a>
             </li>
             <li class="nav-item">
             <span><a href="#contactDetails">Contact details</a></span>
             </li>
           </ul>
         </div>
       </nav>

   <article class="">
     <section id="login">
       <a href="#nav">
         <br>
         <br>
         <h4><strong>Blog entry</strong></h4>
       </a>
       <div class="loginBox">
         <form class="" action="index.php " method="post">
           <label for="title">Title:</label>
           <br>
           <input class="title clearBlog" type="text" name="title" placeholder="Enter title here" >
           <br>
           <br>
           <label for="blog">Post:</label>
           <br>
           <textarea class="clearBlog"  name="post" rows="10" cols="60" placeholder="Enter post here" ></textarea>
           <br>
           <button class="submitButton" type="submit" formaction="addPost.php" >Submit</button>
           <button class="clearButton" type="button" >Clear</button>
          <button class="submitButton" type="submit" formaction="preview.php">Preview</button>
         </form>

       </div>
       <br>
     </section>
   </article>
   <footer>
     <section id="contactDetails">
       <center>
         <a href="#nav">
           <h4><strong>Contact Details</strong></h4>
         </a>
         <a href="https://www.linkedin.com/in/shyam-m-65a7a71b3"><i class="fab fa-linkedin fa-3x footer-link"></i></a>
         <a href="mailto:Shyammurugan95@gmail.com"><i class="far fa-envelope fa-3x footer-link"></i></a>
         <a href="https://github.com/Shyam9538/ecs-417"><i class="fab fa-github-square fa-3x footer-link"></i></a>
         <h5>© Copyright 2021 Mohan Shyam Murugan</h5>
       </center>
     </section>
   </footer>
   <script src="index.js"></script>
   </script>
 </body>

 </html>
