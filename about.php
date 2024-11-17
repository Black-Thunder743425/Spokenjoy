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
        <link href="other/about.css" rel="stylesheet">
</head>
	<body>
<!--header-->
<?php include_once('includes/header.php');?>
<!--header-->
<!-- About -->
<section class="hero">
        <h1>Why You Should Choose SpokenJoy Online Classes?</h1>
        <p>Experience engaging, flexible, and effective learning with SpokenJoy’s expert-led online English classes.</p>
    </section>
    
    <section class="features">
        <div class="feature-card">
            <h2>Experienced Instructors</h2>
            <p>Skilled instructors focus on practical spoken English to build confidence and fluency.</p>
        </div>
        <div class="feature-card">
            <h2>Flexible Scheduling</h2>
            <p>Learn at your convenience with flexible class times that suit your busy lifestyle.</p>
        </div>
        <div class="feature-card">
            <h2>Interactive Learning</h2>
            <p>Engage in lively, interactive sessions that enhance your skills faster and keep you motivated.</p>
        </div>
        <div class="feature-card">
            <h2>Customized Lessons</h2>
            <p>Lessons are tailored to your needs, ensuring the right balance of challenge and support.</p>
        </div>
        <div class="feature-card">
            <h2>Affordable Pricing</h2>
            <p>Get high-quality lessons at a price that makes learning English accessible for everyone.</p>
        </div>
        <div class="feature-card">
            <h2>Supportive Community</h2>
            <p>Join a positive community of learners who encourage each other’s progress and success.</p>
        </div>
        <div class="feature-card">
            <h2>Real-World Application</h2>
            <p>Practical lessons for real-life situations, work, and social interactions.</p>
        </div>
        <div class="feature-card">
            <h2>Confidence Building</h2>
            <p>Classes designed to help you gain confidence speaking English in any setting.</p>
        </div>
        <div class="feature-card">
            <h2>Regular Feedback</h2>
            <p>Constructive feedback helps you track progress and improve specific areas of English.</p>
        </div>
        <div class="feature-card">
            <h2>Access Anytime, Anywhere</h2>
            <p>Learn from anywhere at any time with just an internet connection!</p>
        </div>
        <div class="feature-card">
            <h2>Progressive Learning Path</h2>
            <p>The structured learning path ensures steady progress with each class, making sure you continually improve your speaking skills.</p>
        </div>
        <div class="feature-card">
            <h2>Personalized Attention</h2>
            <p>With small class sizes, you receive more one-on-one attention from your instructor, maximizing your learning experience.</p>
        </div>
    </section>
        <!-- About End -->
<!-- /About -->
<?php include_once('includes/footer.php');?>
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<!--/copy-rights-->
	</body>
</html>
