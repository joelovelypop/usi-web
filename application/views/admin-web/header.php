<?php defined('BASEPATH') or exit('No direct script access allowed');
$mlevel = $_SESSION['l_id'];
if ($mlevel == 1) {
  $mylink = 'admin';
} else {
  $mylink = 'staff';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript">
    function disableselect(e) {
      return false
    }

    function reEnable() {
      return true
    }

    //if IE4+   
    document.onselectstart = new Function("return false")
    document.oncontextmenu = new Function("return false")
    //if NS6  
    if (window.sidebar) {
      document.onmousedown = disableselect
      document.onclick = reEnable
    }
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ผู้ใช้</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/vendors/css/vendor.bundle.base.css">
  <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets-otop/img/favicon.ico">
  <!-- Google Fonts
    ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/bootstrap.min.css">
  <!-- Ionicons -->
  <?php echo link_tag('bower_components/Ionicons/css/ionicons.min.css'); ?>
  <!-- DataTables -->
  <?php echo link_tag('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>
  <!-- Bootstrap CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/font-awesome.min.css">
  <!-- owl.carousel CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/owl.transitions.css">
  <!-- meanmenu CSs
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/meanmenu/meanmenu.min.css">
  <!-- animate CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/animate.css">
  <!-- normalize CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/normalize.css">
  <!-- mCustomScrollbar CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- jvectormap CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/jvectormap/jquery-jvectormap-2.0.3.css">
  <!-- notika icon CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/notika-custom-icon.css">
  <!-- select2 CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/select2/select2.min.css">
  <!-- wave CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/wave/waves.min.css">
  <!-- Data Table JS
    ============================================ -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/jquery.dataTables.min.css"> -->

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>


  <!-- main CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/main.css">
  <!-- style CSS
    ============================================ -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/style.css">-->
  <!-- responsive CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/responsive.css">
  <!-- modernizr JS
    ============================================ -->
  <script src="<?php echo base_url(); ?>/assets-otop/js/vendor/modernizr-2.8.3.min.js"></script>

  <!-- jquery
        ============================================ -->
  <script src="<?php echo base_url(); ?>/assets-otop/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets-otop/css/style.css">
  <!-- endinject -->
  <!--<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets-otop/images/favicon.png" />-->



  <!--                       Javascripts                       -->


  <!-- jQuery Configuration -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/simpla.jquery.configuration.js"></script>

  <!-- Facebox jQuery Plugin -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/facebox.js"></script>

  <!-- jQuery WYSIWYG Plugin -->
  <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/jquery.wysiwyg.js"></script>-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/tinymce/tinymce.min.js"></script>

  <!-- jQuery Datepicker Plugin -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/jquery.datePicker.html"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/jquery.date.js"></script>
  <!--[if IE]><script type="text/javascript" src="<?php echo base_url(); ?>assets-otop/resources/scripts/jquery.bgiframe.js"></script><![endif]-->

  <!-- ckeditor-->
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style type="text/css">
    .fr {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url(); ?>/assets-otop/images/logo.gif" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url(); ?>/assets-otop/images/mini-logo.gif" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <!--   <i class="input-group-text border-0 mdi mdi-magnify"></i> -->
              </div>
              <!--   <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects"> -->
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <!--    <div class="nav-profile-img"> -->
              <!--        <img src="<?php echo base_url(); ?>/assets-otop/images/faces/face_jane.jpg" alt="image">-->
              <!--   <span class="availability-status online"></span> -->
              <!--   </div> -->
              <!-- User image -->
              <img class="profile-img img-sm img-thumbnail" src="<?php echo base_url('uploads/' . $_SESSION['img']); ?>" alt="profile image">
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?php echo $this->session->userdata('mem_name'); ?> <?php echo $this->session->userdata('mem_lname'); ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-account mr-2 text-success"></i>
                ประวัติส่วนตัว
              </a>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-star-circle mr-2 text-success"></i>
                ประวัติความเชี่ยวชาญ
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo site_url('Home/logout'); ?>" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่??');">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                ออกจากระบบ
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>

          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <?php

          if ($mlevel == 1) { ?>

            <li class="nav-item nav-profile">
              <a href="<?php echo base_url("admin"); ?>" class="nav-link">
                <!--   <div class="nav-profile-image">
               <img src="<?php echo base_url(); ?>/assets-otop/images/faces/face_jane.jpg" alt="profile"> 
                <span class="login-status online"></span>
              </div> -->

                <img class="profile-img img-lg img-thumbnail" src="<?php echo base_url('uploads/' . $_SESSION['img']); ?>" alt="profile image">
                <form role="form" action="<?php echo  site_url('admin/member_editdata'); ?>" method="post" class="form-horizontal">
                  <!-- <div class="display-avatar animated-avatar"> -->

                  <!--  </div> -->
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('mem_name'); ?> <?php echo $this->session->userdata('mem_lname'); ?></span>
                    <span class="text-secondary text-small">ผู้ดูแลระบบ</span>
                  </div>
                </form>
                <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>

            <li class="nav-item sidebar-actions">
              <a class="nav-link" href="<?php echo  site_url('admin/project_adding'); ?>">
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">สร้างโครงการ</button>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('mylevel'); ?>">
                <span class="menu-title">สิทธิ์การใช้งาน</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('member'); ?>">
                <span class="menu-title">สมาชิก</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('articles'); ?>">
                <span class="menu-title">จัดการข่าว</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('projects'); ?>">
                <span class="menu-title">จัดการโครงการ</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/down'); ?>">
                <span class="menu-title">จัดการเอกสารดาวน์โหลด</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/logout'); ?>">
                <span class="menu-title">Logout</span>

                <i class="fa fa-edit menu-icon"></i>
              </a>
            </li>

          <?php } else { ?>

            <li class="nav-item nav-profile">
              <a href="<?php echo base_url("admin"); ?>" class="nav-link">
                <!--   <div class="nav-profile-image">
               <img src="<?php echo base_url(); ?>/assets-otop/images/faces/face_jane.jpg" alt="profile"> 
                <span class="login-status online"></span>
              </div> -->

                <img class="profile-img img-lg img-thumbnail" src="<?php echo base_url('uploads/' . $_SESSION['img']); ?>" alt="profile image">
                <form role="form" action="<?php echo  site_url('admin/member_editdata'); ?>" method="post" class="form-horizontal">
                  <!-- <div class="display-avatar animated-avatar"> -->

                  <!--  </div> -->
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('mem_name'); ?> <?php echo $this->session->userdata('mem_lname'); ?></span>
                    <span class="text-secondary text-small">เจ้าหน้าที่</span>
                  </div>
                </form>
                <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>

            <li class="nav-item sidebar-actions">
              <a class="nav-link" href="<?php echo  site_url('admin/project_adding'); ?>">
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">สร้างโครงการ</button>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('staff'); ?>">
                <span class="menu-title">HOME</span>

                <i class="fa fa-home menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('staff/pwd'); ?>">
                <span class="menu-title">แก้ไขรหัสผ่าน</span>

                <i class="fa fa-home menu-icon"></i>
              </a>
            </li>


          <?php } ?>

        </ul>
      </nav>