<?php
session_start();

$dbhost = "127.0.0.1";
$dbport = "MYSQL_SERVICE_PORT";
$dbuser = "root";
$dbpwd = "";
$dbname = "ecs417";
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
    <h3>Mohan Shyam Murugan</h3>
    <button type="button" name="" class="btn btn2"><a class="link-button" href="login.html#login">Log in</a></button>
    <?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo '<script type="text/JavaScript">
      document.querySelector(".log").innerHTML="Log out";
      document.querySelector(".log").style.padding = "0.2em 0.6em";
      document.getElementById("bt").onclick = function () {
         location.href = "logout.php";
     };

      </script>';

    }
    else {

    }

     ?>
  </div>
  </header>

    <nav id="nav">
      <span><a href="index.php#">Home</a></span>
      <span><a href="index.php#aboutMe">About me</a></span>
      <span><a href="index.php#skills">Skills and achievements</a></span>
      <span><a href="index.php#education">Education and qualifications</a></span>
      <span><a href="#experience">Experience</a></span>
      <span><a href="portfolio.php#portfolio">Portfolio</a></span>
      <span><a href="viewBlog.php#login">Blog</a></span>
      <span><a href="#contactDetails">Contact details</a></span>
    </nav>
  </header>
  <article class="">
    <section id="experience">
      <center>
        <a href="#nav">
          <h4><strong>Experience</strong></h4>
        </a>
        <div class="expTable">
          <table>
            <thead>
              <tr>
                <th class="role">Role:</th>
                <th class="place">Place:</th>
                <th class="date">Dates:</th>
                <th class="doing">What I did:</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mapper</td>
                <td>
                  <img class="logo1" src="hotLogo.png" alt="Missing maps logo"> Missing Maps
                </td>
                <td>Feb 2021-Present</td>
                <td>
                  <ul>
                    <li>Providing map data to health workers and humanitarian responders for vulnerable communities during the COVID-19 pandemic.</li>
                    <li>Updating and adding infrastructure data to satellite imagery.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>Volunteer tutor</td>
                <td>
                  <img class="logo" src="codeLogo.png" alt="Code CLub logo"> Code Club
                </td>
                <td>Nov 2019-Feb 2020</td>
                <td>
                  <ul>
                    <li>Organised and managed a Code Club for children aged between 9-13.</li>
                    <li>Helped children create their own projects using the programming languages 'Scratch''.</li>
                    <li>Prepared material for each of the sessions beforehand.</li>
                    <li>Took leadership for the group and was responsible for the students attending.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>Prefect</td>
                <td>
                  <img class="logo" src="tiffinLogo.png" alt="tiffin School logo"> Tiffin School
                </td>
                <td>Sep 2017-Feb 2018</td>
                <td>
                  <ul>
                    <li>Managed large groups of people by keeping them organised.</li>
                    <li>Required to make decisions and helped to resolve disputes and maintain order.</li>
                    <li>Helping parents on open days by guiding them and providing them with information.</li>
                    <li>Represented the school's Design and Technology department.</li>
                    <li>Volunteered to help out at the local church before and after school.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>Intern</td>
                <td>
                  <img class="logo1" src="bpLogo.png" alt="BP logo">
                  <br> BP
                </td>
                <td> June 2017-July 2017</td>
                <td>
                  <ul>
                    <li>Completed a work experience placement at BP's International Centre for Business and Technology.</li>
                    <li>Learnt about the wide range of processes and technologies involved with the detection and extraction of oil and gas.</li>
                    <li>Learnt about the different human and physical factors affecting oil exploration methods.</li>
                    <li>Learnt about concept technologies, such as using autonomous, AI-powered drones to scan for oil.</li>
                    <li>Presented to the New Well Delivery team the different procedures used to create 3D models of the subsurface and received high commendation.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>Mentor</td>
                <td>
                  <img class="logo" src="karateLogo.png" alt="Karate logo">
                  <br> Goju Kai Karate
                </td>
                <td>Sep 2012-Nov 2018</td>
                <td>
                  <ul>
                    <li>Attended sessions an hour early twice a week to mentor lower grade students.</li>
                    <li>Taught students by helping them with both katas and sparring, demonstrating leadership.</li>
                    <li>Kept students disciplined by being confident, showing respect and motivating them by encouragement.</li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
          <br>
        </div>
      </center>
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
        <h5>© Copyright 2021 Mohan Shyam Murugan</h5>
      </center>
    </section>
  </footer>
    <script src="index.js" ></script>
</body>

</html>
