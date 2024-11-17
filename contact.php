<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Spoken English</title>
<link rel="icon" type="image/png" href="includes/logo.png">
<!--bootstrap-->
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
<!--/script-->
</head>
	<body>
<!--header-->
		<?php include_once('includes/header.php');?>
<!-- Top Navigation -->

<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
