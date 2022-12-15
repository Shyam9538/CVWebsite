<?php
session_start();


$dbhost = "sql102.epizy.com";
$dbport = "3306";
$dbuser = "epiz_30397559";
$dbpwd = "hRPiHmcfyK4oPBf";
$dbname = "epiz_30397559_ecs417";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
$name=$_SESSION["name"];
}
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
  <title>Portfolio</title>
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
              <a href="#portfolio">Portfolio</a>
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
          <section id="portfolio">
            <center>
              <div class="row">
            <div class="col-sm-12">
              <h4><strong>Coding projects</strong></h4>


              <section class="colored-section" id="testimonials">
      <div id="carousel" class="carousel slide" data-interval="false">
        <div class="carousel-indicators">
        <button class="cbut" type="button" data-target="#carousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button class="cbut" type="button" data-target="#carousel" data-slide-to="1" aria-label="Slide 2"></button>
        <button class="cbut" type="button" data-target="#carousel" data-slide-to="2" aria-label="Slide 3"></button>
        <button class="cbut" type="button" data-target="#carousel" data-slide-to="3" aria-label="Slide 4"></button>
        <button class="cbut" type="button" data-target="#carousel" data-slide-to="4" aria-label="Slide 5"></button>
      </div>
          <div class="carousel-inner">
          <div class="carousel-item active align-middle">
            <br>
            <h6><a href="https://github.com/Shyam9538/ecs-417">CV website</a></h6>
            <br>
            <img class="website" src="website.png" alt="">
            <br>
            <br>
            <ul>
              <li>Designed and programmed a personal website that showcased my skills and experience demonstrating attention to detail and creativity</li>
              <li>Used HTML, CSS, Bootstrap, JavaScript and PHP to build this website</li>
              <li>The Blog and Login were connected to a MySQl database</li>
              <li>Achieved full marks for it</li>
              </ul>
              <br>
              <br>
          </div>
          <div class="carousel-item align-middle">
            <br>
            <h6><a href="https://github.com/Shyam9538/ecs-417">QM AI and Robotics Society website</a></h6>
            <br>
            <img class="website" src="qmairsWebsite.png" alt="">
            <br>
            <br>
            <ul>
              <li>Redesigning and updating the QMAIRS website to have a modern-technological aesthetic.</li>
              <li>Modifying ​the HTML and CSS code and updated the information on the website for the new year.</li>
              </ul>
              <br>
              <br>
          </div>
          <div class="carousel-item align-middle">
            <br>
            <h6><a href="https://github.com/Shyam9538/ecs-417">Adventure game</a></h6>
            <br>
            <img class="adventureGame" src="adventureGame.png" alt="adventure game image">
            <br>
            <br>
            <ul>
              <li>Created a text-based action role playing game in Java using an Object Orientated Programming style</li>
              <li>Implemented features such as file input/output, an emailing system, exception throws, etc</li>
              <li>Achieved a score of 18.5/20 for it</li>
              </ul>
              <br>
              <br>
          </div>
          <div class="carousel-item align-middle">
            <br>
            <h6><a href="https://github.com/Shyam9538/ecs-417">Chatbot</a></h6>
            <br>
            <img class="chatBot" src="chatBot.PNG" alt="chatbot code image">
            <br>
            <br>
            <ul>
              <li>Programmed a chatbot in Java in a procedural programming style</li>
              <li>Used different programming constructs like for loops, while loops, arrays, records, file I/O, etc</li>
            </ul>
              <br>
              <br>
          </div>
          <div class="carousel-item align-middle">
            <br>
            <h6><a href="https://github.com/Shyam9538/ecs-417">Short Exercises</a></h6>
            <br>
            <img class="chatBot" src="short.PNG" alt="short code image">
            <br>
            <br>
            <ul>
              <li>Built many small programs with varying levels of complexity using Java</li>
            </ul>
              <br>
              <br>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
      </section>
      </div>
      </div>


      <div class="row">
            <div class="col-sm-12">
              <br>
      <h4><strong>Other projects</strong></h4>

      <section class="colored-section" id="testimonial2">
      <div id="carousel2" class="carousel slide" data-interval="false">
      <div class="carousel-indicators">
      <button class="cbut" type="button" data-target="#carousel2" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button class="cbut" type="button" data-target="#carousel2" data-slide-to="1" aria-label="Slide 2"></button>
      <button class="cbut" type="button" data-target="#carousel2" data-slide-to="2" aria-label="Slide 3"></button>
      <button class="cbut" type="button" data-target="#carousel2" data-slide-to="3" aria-label="Slide 4"></button>
      <button class="cbut" type="button" data-target="#carousel2" data-slide-to="4" aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <br>
        <h6>Formula Student Car</h6>
        <br>
        <img class="" src="engine.png" alt="Formula Student Project">
        <br>
        <br>
        <ul>
          <li>Helping to build a race car for QMUL</li>
          </ul>
        <br>
        <br>
        </div>

        <div class="carousel-item">
        <br>
        <h6>Graphic Design</h6>
        <br>
        <img class="" src="graphic.png" alt="Graphic Design">
        <br>
        <br>
        <ul>
          <li>Making professional looking posts, gifs, stories and posters to promote the society and its events on social media platforms-Making professional looking posts, gifs, stories and posters to promote the society and its events on social media platforms</li>
          </ul>
        <br>
        <br>
        </div>

        <div class="carousel-item">
        <br>
        <h6>Nursebot Project</h6>
        <br>
        <img class="" src="niko.png" alt="Nurse Bot project">
        <br>
        <br>
        <ul>
          <li>Helped to build a robotic personal healthcare companion in a small group of 8</li>
          <li>Attended weekly meetings to discuss how to solve problems and implement solutions for both hardware and software</li>
          <li>Worked on the autonomous systems for the robot’s chassis using ultrasonic sensors</li>
          <li>Helped to debug the C++ program which helped to control the motors for movement</li>
          <li>Pitched the idea to use a Qi wireless charging system</li>
          <li>Helped construct the thermometer for the arm which was controlled by a linear actuator</li>
          </ul>
        <br>
        <br>
        </div>

      <div class="carousel-item ">
      <br>
      <h6>Eddy Currents project</h6>
      <br>
      <img class="eddy" src="eddy.png" alt="Eddy Currents project">
      <br>
      <br>
      <ul>
        <li>Researched and created a braking system using Eddy currents and Lenz's law</li>
        <li>Worked in a team of 4 to complete the project within the 2 week deadline</li>
        <li>Bicycles were the practical application for the technology</li>
        <li>Constructed and tested a prototype system, which constituted of a metal wheel connected to a motor controlled by batteries of different voltages, and magnets to stop the rotation</li>
        <li>Results concluded that magnetic braking was quicker and more efficient than friction based braking</li>
        <li>Presented our concept to a panel of judges and received high commendation</li>
        </ul>
      <br>
      <br>
      </div>
      <div class="carousel-item">
      <br>
      <h6>Lamp project</h6>
      <br>
      <img class="lamp" src="lamp.jpg" alt="Lamp projects">
      <br>
      <br>
      <ul>
      <li>Made an adjustable multi-functional lamp that can be used as both a night light and study light</li>
      <li>Soldered the lights to a PCB and then connected it to a battery</li>
      </ul>
      <br>
      <br>
      </div>



      </div>
      <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>
      </section>
      </div>
      </div>
      <br>

              </center>
          </section>
        </article>
      <footer>
        <div class="row">
      <div class="col-sm-12" style="padding:0 0;">
        <section id="contactDetails">
          <center>

              <h4><strong>Contact Details</strong></h4>
            <a href="https://www.linkedin.com/in/shyam-m-65a7a71b3"><i class="fab fa-linkedin fa-3x footer-link"></i></a>
            <a href="mailto:Shyammurugan95@gmail.com"><i class="far fa-envelope fa-3x footer-link"></i></a>
            <a href="https://github.com/Shyam9538/ecs-417"><i class="fab fa-github-square fa-3x footer-link"></i></a>
            <h5>© Copyright 2021 Mohan Shyam Murugan</h5>
          </center>
        </section>
      </div>
      </div>
      </footer>
    <script src="index.js" ></script>
</body>

</html>
