
<?php include('h.php');?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->

      <!-- Header Navbar: style can be found in header.less -->
      <?php include('navbar.php');?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('menu_left.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <div class="box-body">
        <div class="small-box bg-blue">
                      <div class="inner">
                        <h3> ยินดีต้อนรับ </h3>
                        <p>
                        ระบบบริหารจัดการหลังร้านจำหน่ายกลุ่มสินค้า OTOP ตำบลตลุกกลางทุ่ง
                        </p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>

                    </div>
                  </div>

        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <?php include('footer.php');?>

อันนี้ index.php


<a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"></span>
    </a>
 <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">n</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">


      </div>

    </nav>

อันนี้ navbar.php

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/login_a.jpeg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">

         <p>ADMIN</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
          <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">ระบบร้านค้าออนไลน์</li>
      <li>
        <a href="index.php">
          <i class="fa fa-home"></i> <span>หน้าหลัก</span>

        </a>

      </li>
        <li>
        <a href="order.php">
          <i class="fa fa-list"></i> <span>จัดการคำสั่งซื้อ</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li>
        <a href="member.php">
          <i class="fa fa-user"></i> <span>จัดการสมาชิก</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
           <li>
        <a href="bank.php">
          <i class="fa fa-briefcase"></i> <span>จัดการธนาคาร</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li>
        <a href="type.php">
          <i class="fa fa-folder"></i>
          <span>ประเภทสินค้า</span>

        </a>
      </li>



      <li>
        <a href="product.php">
          <i class="fa fa-edit"></i>
          <span>จัดการสินค้า</span>

        </a>

      </li>

      <li>
        <a href="lowproduct.php">
          <i class="fa fa-wrench"></i>
          <span>แจ้งเตือนสินค้าใกล้หมด</span>

        </a>

      </li>

      <li>
        <a href="show_inbox.php">
          <i class="fa fa-comment"></i>
          <span>ข้อความ</span>

        </a>

      </li>
            <li>
        <a href="report.php">
          <i class="fa fa-signal"></i>
          <span>ออกรายงาน</span>

        </a>

      </li>

      <li><a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')"><i class="fa fa-share "></i> <span>ออกจากระบบ</span></a></li>

    </section>
    <!-- /.sidebar -->
  </aside>

อันนี้ menuleft.php


<?php
session_start();
    // print_r($_SESSION);
    // exit();
// if (!$_SESSION["UserID"]){  //check session
//  Header("Location: form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
// }
  include("connections.php");



    // print_r($_SESSION);

    $member_id = $_SESSION['member_id'];
    //$m_name = $_SESSION['m_name'];
    $m_level = $_SESSION['m_level'];
    if($m_level!='admin'){
    Header("Location: ../logout.php");
    }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP by IT RMUTL TAK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
อันนี้ h.php เป็นเทมเพลตที่ใช้
