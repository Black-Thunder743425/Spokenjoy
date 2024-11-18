<div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
            <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
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
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white"> <?php  echo htmlentities($row->PageDescription);?> </a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="mailto:<?php  echo htmlentities($row->Email);?>" class="text-white"> <?php  echo htmlentities($row->Email);?> </a></small><?php $cnt=$cnt+1;}} ?>
                    </div>
                    <div class="top-link pe-2">
                        <a href="https://www.facebook.com/profile.php?id=61568067790732&mibextid=ZbWKwL" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-secondary"></i></a>
                        <a href="https://x.com/Spokenjoyonline/status/1854079957074575804" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-twitter text-secondary"></i></a>
                        <a href="https://www.instagram.com/spokenjoyonlineclass?utm_source=qr&igsh=MXVjcmE2aWxrZ2hsMQ==" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                        <a href="https://www.linkedin.com/in/spokenjoy-onlineclass-92ab86336?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B0HlfvpD9RNKRhLiCydWOAg%3D%3D" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-secondary"></i></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl "><a href="index.html"><img src="includes/logo.png" alt="Logo" style="max-width: 200px; height: 60px; display: block;"></a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="public-notice.php" class="dropdown-item">Public Notice</a>
                                    <a href="key-features.php" class="dropdown-item">Key Features</a>
                                    <a href="mission.php" class="dropdown-item">Mission & Vission</a>
                                    <a href="notes/index.php" class="dropdown-item">Notes</a>
                                </div>
                            </div>
                          </div>
                        <div class="d-flex me-4">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                                <a href="tel://<?php  echo htmlentities($row->MobileNumber);?>/" class="position-relative wow tada" data-wow-delay=".9s" >
                                    <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                                    <div class="position-absolute" style="top: -7px; left: 20px;">
                                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column pe-3 border-primary">
                                <span class="text-primary">24/7 Support</span>
                                <a href="tel://<?php  echo htmlentities($row->MobileNumber);?>/"><span class="text-secondary">Call: <?php  echo htmlentities($row->MobileNumber);?></span></a>
                            </div>
                            <div class="d-flex flex-column pe-3 border-primary">
                                <span class="text-primary">Have any Queries?</span>
                                <a href="tel://6294892163/"><span class="text-secondary">Call: 6294892163</span></a>
                              </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
