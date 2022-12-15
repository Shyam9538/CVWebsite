<?php
session_start();

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
  <title>Shyam's webpage</title>
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
  <!-- Bootstrap core CSS -->


</head>

<body>
  <header>
    <hgroup>
      <div class="topsec">

      <!--<img class="code-icon" src="https://media.giphy.com/media/1ynCEtlgMPAeNAqdnu/giphy.gif" alt="">-->
      <img class="code-icon" src="circuit3.png" alt="" width="10%" height="10%">

      <button id="btn" type="button" name="" class="btn log bt3"><a class="link-button" href="login.php#login">Log in</a></button>
      <?php

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo '<script type="text/JavaScript">

        document.querySelector(".log").innerHTML="Log out";
        document.querySelector(".log").style.padding = "0.2em 0.6em";
        document.getElementById("btn").onclick = function () {
           location.href = "logout.php";
       };

        </script>';

      }
      else {

      }

       ?>

      <h1>Mohan Shyam Murugan</h1>
        <h3>Welcome to my portfolio</h3>
        <br>
        <br>
        <a href="#nav"><img class="scroll-gif" src="https://media.giphy.com/media/UrzWDQ3VTiDU84R5dx/giphy.gif" alt=""></a>
        <br>
        <br>
        <br>
        <br>
        <br>
          </div>
    </hgroup>
  </header>
  <nav id="nav" id class="navbar sticky-top navbar-expand-xl navbar-dark">
    <a class="navbar-brand" href="index.php#"><u><strong>MSM</strong></u></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
              <a  href="index.php#aboutMe">About me</a>
            </li>
            <li class="nav-item">
            <a class="anchor" href="index.php#skills">Skills and achievements</a>
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
  <article class="Main body">


            <section id="aboutMe">
            <center>
              <h4><strong>About Myself</strong></h4>
              <div class="row">
              <div class="col-xl-8 col-lg-12  order-xl-1  order-lg-2 order-sm-2 ">
        <br>
        <div class="text">
          <ul>
            <li>My name is Shyam and I am a first year Computer Science Student at Queen Mary University of London.</li>

            <li>I am interested in artificial intelligence and robotics.</li>
            <li>I would like to pursue a career related to smart, connected and automated vehicles.</li>

            <li>I will complete my Bachelors in 2024 and I am considering doing a Masters to specialise further.</li>
          </ul>
        </div>
        </div>
        <div class="col-xl-4 col-lg-12 order-xl-2 order-lg-1 order-sm-1">
          <div class="picture">
          <aside>
            <figure class="pic">
              <img class="myPicture" src="Shyam.jpg" alt="Image of Mohan Shyam Murugan">
            </figure>
          </aside>
        </div>
      </div>
            </div>
      </center>
    </section>


    <section id="skills">
      <center>

          <h4><strong>Skills and Achievements</strong></h4>

        <h2>Skills</h2>
        <div class="skill-row">
          <img class="Java-img" src="https://media.giphy.com/media/RxAdKu5nrs32vhKEUq/giphy.gif" alt="Image of coding">
          <h3 class="name">Java,PHP and Python</h3>
          <p>I am able to program with Java in both a procedural programming style and object orientated style. I can also code in PHP and Python.</p>
        </div>
        <div class="skill-row">
          <img class="Web-img" src="https://media.giphy.com/media/QssGEmpkyEOhBCb7e1/giphy.gif" alt="Image of coding">
          <h3 class="name">HTML, CSS and JS</h3>
          <p>I am able to design websites using these scripting languages.</p>
          <br>
        </div>
        <br>
        <h2>Achievements</h2>
        <div class="skill-row">
          <img class="AI-img" src="https://media.giphy.com/media/FsMbFa8s7pqU7xKy1G/giphy.gif" alt="Image AI">
          <h3 class="name">Elements of AI</h3>
          <p>I have completed the 'Elements of AI: Introduction to AI' course from the University of Helsinki and Reaktor.</p>
        </div>
        <div class="skill-row robskill">
          <img class="robot-img" src="https://media.giphy.com/media/QEYl03wwHwzXAiZlHN/giphy.gif" alt="Image of robot">
          <h3 class="name">AWS RoboMaker</h3>
          <p>I have currently completed three of the four sections of Amazon's RoboMaker course.</p>
        </div>
        <br>
      </center>
    </section>
    <section  id="education" >
      <center>

          <h4><strong>Education and Qualifications</strong></h4>

              <div class="table-responsive">
        <table>
          <tr>
            <td class=""><strong>Tiffin School</strong><br> 2012-2019 <br> 12 GCSES's and 3 A-Level's </td>
            <td><a href="http://www.tiffinschool.co.uk/home.html"><img class="tiffinpic edulink" src="https://d2yw9izrmawh7r.cloudfront.net/employers/1039608/photos/20130129_754PM_d_Front_of_school.JPG" alt="Tiffin School" width="300px" height="240px"></a></td>
          </tr>
          <tr>
            <td>
              <hr>
            </td>
            <td>
              <hr>
            </td>
          </tr>
          <tr>
            <td class=""><strong>Brunel University London</strong><br> 2019-2020 <br> Mathematics and Computing <br>Achieved First Class Grade</td>
            <td><a href="https://www.brunel.ac.uk/"><img class="bulpic edulink" src="https://d3d00swyhr67nd.cloudfront.net/_source/BUA_location_image_1.jpg" alt="Brunel University London" width="300px" height="240px"></a></td>
            </tr>
          <tr>
            <td>
              <hr>
            </td>
            <td>
              <hr>
            </td>
          </tr>

          <tr>
            <td class=""><strong>Queen Mary University Of London </strong><br> 2020-2024 <br> Computer Science with Industrial Experience <br>Predicted First Class Honours(85% average in First Year)</td>
            <td><a href="https://www.qmul.ac.uk/"><img class="qmpic edulink" src="https://www.qmul.ac.uk/media/qmul/media/2019/Queens-Building-2-640.jpg" alt="Queen Mary University Of London" width="300px" height="240px"></a></td>
            </td>
          </tr>
        </table>
        </div>
      </center>
    </section>

    <section id="contactDetails">
      <center>

          <h4><strong>Contact Details</strong></h4>

          <a href="https://www.linkedin.com/in/shyam-m-65a7a71b3"><i class="fab fa-linkedin fa-3x footer-link"></i></a>
          <a href="mailto:Shyammurugan95@gmail.com"><i class="far fa-envelope fa-3x footer-link"></i></a>
          <a href="https://github.com/Shyam9538/ecs-417"><i class="fab fa-github-square fa-3x footer-link"></i></a>
            <h5>© Copyright 2021 Mohan Shyam Murugan</h5>
      </center>
    </section>
  </article>
  <footer>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="index.js" defer ></script>
</body>

</html>
