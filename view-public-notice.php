<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Spoken Joy</title>
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


<!--/script-->
</head>
	<body>
<?php include_once('includes/header.php');?>
<div class="banner banner5">
	<div class="container">
	<!-- <h2>Notice</h2> -->
	</div>
</div>
<!--weelcome-->
<div class="welcome">
	<div class="container">
		<table border="1" class="table table-bordered mg-b-0">
                      <?php
$vid=$_GET['viewid'];
$sql="SELECT * from tblpublicnotice where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
 <tr align="center" class="table-warning">
<td colspan="4" style="font-size:20px;color:blue">
 Notice</td></tr>
<tr class="table-info">
    <th>Notice Announced Date</th>
    <td><?php  echo $row->CreationDate;?></td>
  </tr>
    <tr class="table-info">
    <th>Noitice Title</th>
    <td><?php  echo $row->NoticeTitle;?></td>
  </tr>
  <tr class="table-info">
     <th>Message</th>
    <td><?php  echo $row->NoticeMessage;?></td>
     
  </tr>
  
  <?php $cnt=$cnt+1;}} ?>
</table>
	</div>
</div>
<!--/welcome-->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js2/main.js"></script>
	</body>
</html>
