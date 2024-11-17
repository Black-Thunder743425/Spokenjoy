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
        <link href="other/key-feature.css" rel="stylesheet">
</head>
	<body>
<!--header-->
<?php include_once('includes/header.php');?>
<!--header-->
<!-- About -->
<div class="container">
    <h1 class="title"><b><i>Key Features</i></b></h1>
    <div class="features">
      <div class="feature-card" id="card1">
        <h2>Personalized Learning Paths</h2>
        <p>We acknowledge that every individual has unique learning requirements. Regardless of your level of proficiency, our spoken English courses are tailored to meet your unique needs.</p>
      </div>
      <div class="feature-card" id="card2">
        <h2>Multiple Timetable</h2>
        <p>To fit your hectic schedule, we provide flexible online class times. Learn at your own speed with a variety of convenient options.</p>
      </div>
      <div class="feature-card" id="card3">
        <h2>Comprehensive Instruction</h2>
        <p>Our spoken English courses cover grammar, conversational skills, vocabulary, pronunciation, public speaking, and interview preparation.</p>
      </div>
      <div class="feature-card" id="card4">
        <h2>Qualified Trainers</h2>
        <p>Take classes from skilled teachers who provide personalized feedback and guidance to help you confidently speak English.</p>
      </div>
      <div class="feature-card" id="card5">
        <h2>Interactive Classes</h2>
        <p>Engage in LIVE discussions, role-plays, and real-life scenarios that simulate actual communication situations.</p>
      </div>
    </div>
  </div>
        <!-- About End -->
<!-- /About -->
<?php include_once('includes/footer.php');?>
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<!--/copy-rights-->
<script src="other/key-feature.js"></script>
	</body>
</html>
