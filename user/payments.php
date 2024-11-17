<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payments</title>
    <link rel="icon" type="image/png" href="../includes/logo.png">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <style>
      body {
        background-color: #f4f5f7;
        position: relative;
        overflow: hidden;
      }
      body::before {
        content: "Spoken Joy Online Classes";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5rem;
        color: rgba(0, 0, 0, 0.1);
        white-space: nowrap;
        z-index: -1;
      }
      .bank-details {
        text-align: center;
        margin: 20px 0;
        font-size: 18px;
        font-weight: bold;
      }
      .popup-btn {
        margin: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }
      .popup-btn:hover {
        background-color: #0056b3;
      }
      /* PhonePe Button */
      .phonepe-btn {
        margin: 10px;
        padding: 10px 30px;
        background-color: #5d1ebf;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .phonepe-btn img {
        width: 24px;
        height: 24px;
      }
      .phonepe-btn:hover {
        background-color: #4a19a3;
      }
    </style>
    <!-- endinject -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include_once('includes/header.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                  <div class="card-body">
                    <div class="bank-details">
                      Bank Name: Indian Post Payments Bank<br>
                      Account No: 063110060816<br>
                      IFSC: IPOS0000001  <br>
                      RAJAT PYNE
                    </div>
                    <div style="text-align:center;">
                      <!-- PhonePe Styled Button -->
                      <button class="phonepe-btn" onclick="openPopup('includes/Phonepe-QR-code.jpg')">
                        <img src="includes/phonepe.png" alt="PhonePe Logo">
                       Scan To Pay
                      </button>
                      <!-- <button class="popup-btn" onclick="openPopup('img2.jpg')">Image 2</button>
                      <button class="popup-btn" onclick="openPopup('img3.jpg')">Image 3</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include_once('includes/footer.php'); ?>
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script>
      function openPopup(imageSrc) {
        const popup = window.open("", "_blank", "width=500,height=1200");
        popup.document.write(`<html><body style="text-align:center; margin:0;"><img src="${imageSrc}" style="width:100%; height:100%;"></body></html>`);
      }
    </script>
    <!-- endinject -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <script src="./js/dashboard.js"></script>
  </body>
</html>
<?php } ?>
