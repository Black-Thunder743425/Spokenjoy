<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Spoken Joy </title>
<link rel="icon" type="image/png" href="includes/logo.png">
<!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="style.css" rel="stylesheet">
        <link href="other/mission.css" rel="stylesheet">
</head>
	<body>
<!--header-->
<?php include_once('includes/header.php');?>
<!--header-->
<!-- About -->
<header class="navbar2">
    <div class="logo2"></div>
    <nav>
      <ul>
        <li><a href="#mission">Mission</a></li>
        <li><a href="#vision">Vision</a></li>
        <li><a href="#goal">Goal</a></li>
      </ul>
    </nav>
  </header>

  <section id="hero" class="hero-section">
    <div class="hero-text">
      <h1>Our Mission & Vision</h1>
      <p>Enriching educational experiences and advancing knowledge in society.</p>
    </div>
  </section>

  <section id="mission" class="content-section">
    <h2>Our Mission</h2>
    <p>Our main goal is to <span class="highlight">enrich your educational experience</span> and knowledge while advancing education and knowledge in society.</p>
  </section>

  <section id="vision" class="content-section">
    <h2>Our Vision</h2>
    <p>We encourage <span class="highlight">digital and simple learning</span> with highly qualified professors, the greatest infrastructure, and the best technology because we believe in modern teaching methods.</p>
  </section>

  <section id="goal" class="content-section">
    <h2>Our Goal</h2>
    <p>Our primary objective is to become the biggest and most reputable educational platform in India by attracting motivated students and highly skilled, experienced professors who are the finest in their respective disciplines.</p>
  </section>

        <!-- About End -->
<!-- /About -->
<?php include_once('includes/footer.php');?>
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<!--/copy-rights-->
<script src="other/mission.js"></script>
	</body>
</html>
