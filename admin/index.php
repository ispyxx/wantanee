<?php
	include("config.php");
	session_start();
?>

<style>
body {
  font-family: "Chakra Petch", sans-serif;
  color: #777;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- dataTable -->
		<!-- <link href="assets/datatables/css/jquery.dataTables.css" rel="stylesheet">
		<script src="assets/datatables/js/jquery.js"></script>
		<script src="assets/datatables/js/jquery.dataTables.min.js"></script> -->


</head>
<script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
</script>


<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<div id="hid">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?page=calendar">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3" >ร้านวันทนีบริการ</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?page=calendar">
                    <i class="fas fa-fw fa-table"></i>
                    <span>ปฏิทิน</span></a>
            </li>


      <!-- Divider -->
					   <hr class="sidebar-divider">
						<li class="nav-item">
								<a class="nav-link" href="?page=products_rentt">
										<span>ข้อมูลอุปกรณ์ให้เช่า</span></a>
						</li>



						<li class="nav-item">
								<a class="nav-link" href="?page=member_info">
										<span>ข้อมูลสมาชิก</span></a>
						</li>



						<li class="nav-item">
								<a class="nav-link" href="?page=rental_info">
										<span>ข้อมูลการเช่า</span></a>
						</li>

						<!-- <li class="nav-item">
								<a class="nav-link" href="?page=damaged_device_info">
										<span>แจ้งอุปกรณ์เสียหาย</span></a>
						</li> -->




            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
            </li> -->
						<!-- Divider -->
						<hr class="sidebar-divider">
						<div class="sidebar-heading">
								<h6>รายงานสารสนเทศ</h6>
						</div>

            <li class="nav-item">
                <a class="nav-link" href="?page=report_employer">
                    <span><i class="fas fa-fw fa-folder"></i>รายงานสรุปจำนวน<br>ผู้ว่าจ้างงาน</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=report_equip_type">
                    <span><i class="fas fa-fw fa-folder"></i>รายงานสถิติการเช่าอุปกรณ์<br>จำแนกตามประเภท</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=report_equip_rent_month">
                    <span><i class="fas fa-fw fa-folder"></i>รายงานสรุปการเช่าและค่าเช่าอุปกรณ์จำแนกตามเดือน</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=report_damaged_devices">
                    <span><i class="fas fa-fw fa-folder"></i>รายงานอุปกรณ์ที่ชำรุดเสียหาย</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="?page=car">
                    <span>รายงาน</span></a>
            </li> -->


					<hr class="sidebar-divider">

					<li class="col">
						<a class="btn btn-outline-dark" href="?page=admin_logout" role="button">ออกจากระบบ</a>
					</li>




            <!-- <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Addons
            </div>



            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="?page=test">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->
					</div>
        </ul>

        <!-- End of Sidebar -->
<div class="container">
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
        	require_once("center.php");
        }
        ?>

        </section>
</div>

    <!-- Bootstrap core JavaScript-->
     <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
