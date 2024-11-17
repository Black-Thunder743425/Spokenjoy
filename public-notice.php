<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Notices</title>
    <link rel="icon" type="image/png" href="includes/logo.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">

    <!-- Hover Grids -->
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/component.css"> -->

    <!-- Scripts -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
</head>
<body>
   <!-- header -->
<div class="container-fluid border-bottom wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(45deg, #1e3c72, #2a5298); ">
    <div class="container topbar d-none d-lg-block py-2" style="border-radius: 0 40px; background-color: rgba(255, 255, 255, 0.1);">
        <div class="d-flex justify-content-between text-white">
            <div class="top-info ps-2" style="font-size: 14px;">
                <?php
                $sql = "SELECT * FROM tblpage WHERE PageType='contactus'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);

                if ($query->rowCount() > 0) {
                    foreach ($results as $row) {
                ?>
                <small class="me-3"><i class="fas fa-map-marker-alt me-2"></i><a href="#" class="text-white" style="font-size: 20px; color: white; margin-right: 120px;"><?php echo htmlentities($row->PageDescription); ?></a></small>
                <small class="me-3"><i class="fas fa-envelope me-2"></i><a href="mailto:<?php echo htmlentities($row->Email); ?>" class="text-white" style="font-size: 20px; color: white; margin-left: 150px;"><?php echo htmlentities($row->Email); ?></a></small>
                <?php }
                } ?>
            </div>
            
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light navbar-expand-xl" style="padding: 10px 0;">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto" style="font-size: 16px; font-weight: bold;">
                <a href="index.php" style="margin-right: 20px;"><img src="includes/logo.png" alt="Logo" style="max-width: 200px; height: 60px;"></a>

                    <a href="index.php" class="nav-item nav-link text-white" style="margin: 0 15px;">Home</a>
                    <a href="about.php" class="nav-item nav-link text-white" style="margin: 0 15px;">About</a>
                    <a href="contact.php" class="nav-item nav-link text-white" style="margin: 0 15px;">Contact</a>
                    <a href="tel://<?php echo htmlentities($row->MobileNumber); ?>" class="text-white me-3" style="text-decoration: none; font-size: 16px;"><i class="fa fa-phone-alt me-2"></i>Call: <?php echo htmlentities($row->MobileNumber); ?></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- header end -->

            <!-- Testimonials Section -->
    <div class="testimonials">
        <div class="container">
            <div class="testimonial-nfo">
                <h3 style="color: #ff305d;">Public Notices</h3>
                <marquee style="height: 350px;" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php
                    $sql = "SELECT * FROM tblpublicnotice";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if ($query->rowCount() > 0) {
                        foreach ($results as $row) {
                            ?>
                            <a href="view-public-notice.php?viewid=<?php echo htmlentities($row->ID); ?>" target="_blank" style="color: #fff;">
                                <?php echo htmlentities($row->NoticeTitle); ?> (<?php echo htmlentities($row->CreationDate); ?>)
                            </a>
                            <hr /><br />
                            <?php
                        }
                    }
                    ?>
                </marquee>
            </div>
        </div>
    </div>
    <!-- Testimonials End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Footer About -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h2 class="fw-bold mb-3"><span class="text-primary">Spoken</span><span class="text-secondary">Joy</span></h2>
                        <p class="mb-4">Quotes</p>
                        <div class="border border-primary p-3 rounded bg-light">
                            <?php
                            $sql = "SELECT * FROM tblpage WHERE PageType='aboutus'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            if ($query->rowCount() > 0) {
                                foreach ($results as $row) {
                                    ?>
                                    <h5 class="mb-3"><?php echo htmlentities($row->PageTitle); ?></h5>
                                    <p><?php echo htmlentities($row->PageDescription); ?></p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Footer Hours -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary" style="border-radius: 50% 20% / 10% 40%;">
                            <p>Monday: 8am to 5pm</p>
                            <p>Tuesday: 8am to 5pm</p>
                            <p>Wednesday: 8am to 5pm</p>
                            <p>Thursday: 8am to 5pm</p>
                            <p>Friday: 8am to 5pm</p>
                            <p>Saturday: 8am to 5pm</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Footer Location -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
                        <div class="d-flex flex-column align-items-start">
                            <?php
                            $sql = "SELECT * FROM tblpage WHERE PageType='contactus'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            if ($query->rowCount() > 0) {
                                foreach ($results as $row) {
                                    ?>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo htmlentities($row->PageDescription); ?></p>
                                    <p><i class="fa fa-phone-alt text-primary me-2"></i><?php echo htmlentities($row->MobileNumber); ?></p>
                                    <p><i class="fas fa-envelope text-primary me-2"></i><?php echo htmlentities($row->Email); ?></p>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>
