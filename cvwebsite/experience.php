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
  <title>Experience</title>
  <!-- Bootstrap core JavaScript
   ================================================== -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                <a href="#experience">Experience</a>
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
      <section id="experience">
        <center>
          <div class="row">
        <div class="col-sm-12">
          <h4><strong>Work experience</strong></h4>

          <section class="colored-section" id="testimonials">
  <div id="carousel" class="carousel slide" data-ride="false" data-interval="false" data-touch="true">
    <div class="carousel-indicators">
    <button class="cbut" type="button" data-target="#carousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button class="cbut" type="button" data-target="#carousel" data-slide-to="1" aria-label="Slide 2"></button>
    <button class="cbut" type="button" data-target="#carousel" data-slide-to="2" aria-label="Slide 3"></button>
    <button class="cbut" type="button" data-target="#carousel" data-slide-to="3" aria-label="Slide 4"></button>
    <button class="cbut" type="button" data-target="#carousel" data-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <br>
    <h6>Demonstrator</h6>
    <h6>Queen Mary University of London</h6>
    <h6>Sep 2021 - Present</h6>
    <br>
    <img class="logo" src="qm.jpg" alt="">
    <br>
    <br>
    <ul>
      <li>Demonstrating for the 'Procedural Programming' and 'Computer Systems and Networks' modules.</li>
      <li>Explaining any concepts and adapting my approach according to their individual needs.</li>
    </ul>
    <br>
    <br>
    </div>
    <div class="carousel-item">
    <br>
    <h6>Technology Intern</h6>
    <h6>Bright Network</h6>
    <h6>Aug 2021 - Aug 2021</h6>
    <br>
    <img class="logo" src="bn.png" alt="">
    <br>
    <br>
    <ul>
      <li>Learnt about data analytics, internet of things, cyber security, agile development, how project works from companies such as Amazon, Bloomberg, EY, Goldman Sachs, etc.</li>
      <li>Completed a consulting project with EY by implementing technological solutions to help a bank meet regulations.</li>
      <li>Created a vendor system and made a succinct summary of my findings.</li>
      </ul>
    <br>
    <br>
    </div>
    <div class="carousel-item">
    <br>
    <h6>Engineering and Infrastructure Intern</h6>
    <h6>Bright Network</h6>
    <h6>Aug 2021 - Aug 2021</h6>
    <br>
    <img class="logo" src="bn.png" alt="">
    <br>
    <br>
    <ul>
      <li>Learnt about cyber security, automation, product design, energy, and control system electronics from companies such as Vodafone, Rolls Royce, etc.</li>
      <li>Designed an automated electronics recycling machine with PA Consulting by researching about PCB’s and WEEE waste.</li>
      <li>Identified possible problems with process and provided realistic solutions. Also created a system architecture.</li>
    </ul>
    <br>
    <br>
    </div>
        <div class="carousel-item">
        <br>
        <h6>Sales Advisor</h6>
        <h6>Stevensons</h6>
        <h6>June 2021 - Aug 2021</h6>
        <br>
        <img class="logo2" src="Stevos.png" alt="">
        <br>
        <br>
        <ul>
          <li>Sold items to customers making multiple sales worth hundreds of pounds each, requiring good persuasion and negotiation.</li>
          <li>Helped customers by advising them about the different school uniforms and answering their queries, showing good customer service and communication skills.</li>
          <li>Learnt about the selling points of products to up-sell, showing good product knowledge.</li>
          <li>Learnt the locations of 37 different schools in both the shop floors and stockrooms to find products for customers, showing ability to learn new information quickly.</li>
          <li>Worked in teams to collect deliveries, restock the shop floors and label the individual items neatly, demonstrating attention to detail.</li>
          <li>Picked items from the shop floors and stock-rooms accurately and efficiently for multiple online orders, demonstrating the ability to multi-task and follow instructions.</li>
          <li>Managed customers at the door by checking if they booked an appointment and directed them to their pod.</li>
          <li>Attended both normal and late shifts demonstrating flexibility and reliability.</li>
        </ul>
        <br>
        <br>
        </div>
      <div class="carousel-item">
        <br>
        <h6>Intern</h6>
        <h6>BP</h6>
        <h6>June 2017</h6>
        <br>
        <img class="logo1" src="bpLogo.png" alt="">
        <br>
        <br>
        <ul>
          <li>Completed a work experience placement at BP's International Centre for Business and Technology.</li>
          <li>Learnt about the wide range of processes and technologies involved with the detection and extraction of oil and gas.</li>
          <li>Learnt about the different human and physical factors affecting oil exploration methods.</li>
          <li>Learnt about concept technologies, such as using autonomous, AI-powered drones to scan for oil.</li>
          <li>Presented to the New Well Delivery team the different procedures used to create 3D models of the subsurface and received high commendation.</li>
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
<h4><strong>Volunteering</strong></h4>

<section class="colored-section" id="testimonial2">
<div id="carousel2" class="carousel slide" data-ride="false" data-touch="true">
<div class="carousel-indicators">
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="1" aria-label="Slide 2"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="2" aria-label="Slide 3"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="3" aria-label="Slide 4"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="4" aria-label="Slide 5"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="5" aria-label="Slide 6"></button>
<button class="cbut" type="button" data-target="#carousel2" data-slide-to="6" aria-label="Slide 7"></button>

</div>
<div class="carousel-inner">
  <div class="carousel-item active">
  <br>
  <h6>Senior Electronics Team</h6>
  <h6>Queen Mary Formula Student</h6>
  <h6>Oct 2021 - Present</h6>
  <br>
  <img class="logo2" src="formula.png" alt="">
  <br>
  <br>
  <ul>
  <li>Will be working on the wiring loom and the ECU.</li>
  </ul>
  <br>
  <br>
  </div>
  <div class="carousel-item">
  <br>
  <h6>Publicity Officer</h6>
  <h6>Queen Mary University of London</h6>
  <h6>Sep 2021 - Present</h6>
  <br>
  <img class="logo3" src="qmairs.png" alt="">
  <br>
  <br>
  <ul>
  <li>Redesigning and updating the QMAIRS website to have a modern-technological aesthetic.</li>
  <li>Modifying the HTML and CSS code and updated the information on the website for the new year.</li>
  <li>Made posts to promote the society's events on Instagram.</li>
  </ul>
  <br>
  <br>
  </div>
  <div class="carousel-item">
  <br>
  <h6>Social Secretary</h6>
  <h6>Queen Mary University of London</h6>
  <h6>Sep 2021 - Present</h6>
  <br>
  <img class="logo3" src="qmairs.png" alt="">
  <br>
  <br>
  <ul>
  <li>Helped to make membership sales by recruiting new members for the society using good persuasion skills.</li>
  <li>Answered any questions people had regarding the society.</li>
  <li>Helped to organise social events.</li>
  </ul>
  <br>
  <br>
  </div>
<div class="carousel-item">
<br>
<h6>Mapper</h6>
<h6>Humanitarian OpenStreetMap Team</h6>
<h6>Feb 2021 - Present</h6>
<br>
<img class="logo1" src="hotLogo.png" alt="">
<br>
<br>
<ul>
<li>Providing map data to health workers and humanitarian responders for vulnerable communities during the COVID-19 pandemic.</li>
<li>Updating and adding infrastructure data to satellite imagery.</li>
</ul>
<br>
<br>
</div>
<div class="carousel-item">
<br>
<h6>Tutor</h6>
<h6>Code Club</h6>
<h6>Nov 2020 - Feb 2021</h6>
<br>
<img class="logo" src="codeLogo.png" alt="">
<br>
<br>
<ul>
  <li>Organised and managed a Code Club for children aged between 9-13.</li>
  <li>Helped children create their own projects using the programming languages 'Scratch'.</li>
  <li>Prepared material for each of the sessions beforehand.</li>
  <li>Took leadership for the group and was responsible for the students attending.</li>
</ul>
<br>
<br>
</div>
<div class="carousel-item">
<br>
<h6>Prefect</h6>
<h6>Tiffin School</h6>
<h6>Sep 2017 - Feb 2018</h6>
<br>
<img class="logo" src="tiffinLogo.png" alt="">
<br>
<br>
<ul>
  <li>Managed large groups of people by keeping them organised.</li>
  <li>Required to make decisions and helped to resolve disputes and maintain order.</li>
  <li>Helping parents on open days by guiding them and providing them with information.</li>
  <li>Represented the school's Design and Technology department.</li>
  <li>Volunteered to help out at the local church before and after school.</li>
</ul>
<br>
<br>
</div>

<div class="carousel-item">
<br>
<h6>Mentor</h6>
<h6>Feb 2012 - Nov 2018</h6>
<br>
<img class="logo" src="karateLogo.png" alt="">
<br>
<br>
<ul>
  <li>Attended sessions an hour early twice a week to mentor lower grade students.</li>
  <li>Taught students by helping them with both katas and sparring, demonstrating leadership.</li>
  <li>Kept students disciplined by being confident, showing respect and motivating them by encouragement.</li>
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
