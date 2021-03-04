<?php
	include("config.php");
	session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Wantanee</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-login.css" rel="stylesheet">

  <!-- regis -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="assets/jquery.min.js"></script> <!-- เลือกตำบลและอำเภอ -->
	<script src="assets/script.js"></script>  <!-- เลือกตำบลและอำเภอ -->



<!-- เลือกตำบลและอำเภอ -->
  <!-- =======================================================
  * Template Name: Amoeba - v2.2.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap');
 #header  {

	  height: 80px;
	  transition: all 0.5s;
	  z-index: 997;
	  transition: all 0.5s;
	  padding: 20px 0;
	  background: #2d6760;
	    font-family: 'Chakra Petch', sans-serif;

}
body {
  font-family: "Chakra Petch", sans-serif;
  color: #222020;
}

a {
  color: #43aea0;
}

a:hover {
  color: #00d3b8;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6,p,pre,li .font-primary {
  font-family: "Chakra Petch", sans-serif;
}

#p {
  font-family: "Chakra Petch", sans-serif;
}

li {
  font-family: "Chakra Petch", sans-serif;
}

#bg123{
	background-color: #52978E;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #d2ece9;
  padding: 10px 20px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Chakra Petch", sans-serif;
}

#header.header-scrolled {
  background: #1d443f;
  height: 60px;
  padding: 0px 0;
}



/* /************************************************************* */


</style>



<!--4.3-->
<header id="header" class="fixed-top" >
	<div class="container">

		<div class="logo float-left">
			<h1 class="text-light"><a href="?page=main"><span>ร้านวันทนีบริการ</span></a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		</div>

		<nav class="nav-menu float-right d-none d-lg-block">
			<ul>
				<li class="active"><a href="?page=main">หน้าแรก</a></li>
				<li><a href="#about">เกี่ยวกับร้าน</a></li>
				<li><a href="#bg123">วิธีการเช่า</a></li>
				<li><a href="#contact">ติดต่อเรา</a></li>
				<?php
				if(@$_SESSION["sess_username"]){
				?>
					<li><a href="?page=my_list">รายการเช่าของฉัน</a></li>

				<?php
				}
				?>



					<li>

							<?php

							if(@!$_SESSION["sess_username"]){
							?>
							<a href="?page=login" id="btn-login" class="btn btn-success btn-sm">เข้าสู่ระบบ</a>
							<?php
							}
								else{
								?>

								<a href="?page=logout" onclick="return confirm('คุณต้องการออกจากระบบ ใช่ หรือ ไม่');" class="btn btn-dark btn-lg">ออกจากระบบ</a>


								<?php
								}
								?>


				</li>
			</ul>
		</nav><!-- .nav-menu -->

	</div>
</header><!-- End #header -->


<body>

  <section class="page-section" id="services">

  <?php
  if(@$_GET['fd'])
  	$file=$_GET['fd']."/".$_GET['page'].".php";
  else
  	$file=@$_GET['page'].".php";
  if(is_file($file)){
  	require_once("$file");
  }
  else{
  	require_once("main.php");
  }
  ?>

  </section>



</body>
<footer id="footer">
	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>Amoeba</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<!-- <a class="btn btn-outline-info" href="?page=admin_login" role="button">เข้าสู่ระบบสำหรับผู้ดูแลระบบ</a> -->
	</div>
		</div>

</footer><!-- End #footer -->



</html>
