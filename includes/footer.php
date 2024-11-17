<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Spoken</span><span class="text-secondary">Joy</span></h2>
                            <p class="mb-4">Quotes</p>
                            <div class="border border-primary p-3 rounded bg-light">
                            <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                <h5 class="mb-3"><?php  echo $row->PageTitle;?></Q></h5>
                                <div class="position-relative" style="max-width: 400px;">
                                <p><?php  echo ($row->PageDescription);?></p><?php $cnt=$cnt+1;}} ?>
                                </div>
                                <!-- <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white">SignUp</button> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <div class="d-flex flex-column p-4 ps-5 text-dark border border-primary" 
                            style="border-radius: 50% 20% / 10% 40%;">
                                <p>Monday: 6am to 9pm</p>
                                <p>Tuesday: 6am to 9pm</p>
                                <p>Wednes: 6am to 9pm</p>
                                <p>Thursday: 6am to 9pm</p>
                                <p>Friday: 6am to 9pm</p>
                                <p>Saturday: 6am to 9pm</p>
                                <p class="mb-0">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
                            <div class="d-flex flex-column align-items-start">
                                 <?php
                                    $sql="SELECT * from tblpage where PageType='contactus'";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);

                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $row)
                                    {               ?>
                                <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> <?php  echo htmlentities($row->PageDescription);?></a>
                                <a href="tel://<?php  echo htmlentities($row->MobileNumber);?>/" class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> <?php  echo htmlentities($row->MobileNumber);?></a>
                                <a href="mailto:<?php  echo htmlentities($row->Email);?>" class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> <?php  echo htmlentities($row->Email);?></a>
                                <!-- <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-clock text-primary me-2"></i> 24/7 Hours Service</a> -->
                                <div class="footer-icon d-flex">
                                    <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href="https://www.facebook.com/profile.php?id=61568067790732&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href="https://x.com/Spokenjoyonline/status/1854079957074575804"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/spokenjoyonlineclass?utm_source=qr&igsh=MXVjcmE2aWxrZ2hsMQ==" class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/spokenjoy-onlineclass-92ab86336?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B0HlfvpD9RNKRhLiCydWOAg%3D%3D" class="btn btn-primary btn-sm-square rounded-circle text-white"><i class="fab fa-linkedin-in"></i></a>
                                    <?php $cnt=$cnt+1;}} ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">OUR GALLARY</h4>
                            <div class="row g-3">
                                <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-1.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                               <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-2.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-3.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-4.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-5.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-galary-img rounded-circle border border-primary">
                                        <img src="img/galary-6.jpg" class="img-fluid rounded-circle p-2" alt="">
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->