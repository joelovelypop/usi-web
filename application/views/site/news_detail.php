<!DOCTYPE html>


<head>
  <title>TITLE WEB</title>
  <link rel="icon" href="<?php echo base_url(); ?>/assets/images/LOGO USI-01.png" type="image/gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/styles/layout.css" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo base_url(); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url(); ?>/css_c/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">UNISEARCH INSTITUTE RMUTI</a>-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('homepage');?>">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">การบริการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">ติดต่อเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">ผลงานของเรา</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



<!--start  product -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">
      <h3>
      ::News Detail::
      </h3>
    </div>
    <div class="col-12 col-sm-4 col-md-4">
      <img src="<?php echo base_url('news_img/'.$rsnews->news_img);?>" width="100%">
    </div>
    <div class="col-12 col-sm-8 col-md-8">
      <b>
        ชื่อสินค้า : <?php echo $rsnews->news_name;?>
        <br>
      </b>
      <p> 
        <b>รายละเอียดสินค้า</b>
        <?php echo $rsnews->news_shortdetail;?>
          <b>จำนวนการเข้าชม <?php echo $rsnews->news_view;?> ครั้ง </b> 
        <br>
       <div class="sharethis-inline-share-buttons"></div> 

         <?php echo $_SERVER['REMOTE_ADDR'];?> 
      </p>
    </div>
  </div>
</div>
<!--end  product -->

<!-- Footer -->
<footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">UNISEARCH INSTITUTE RMUTI <br>สถาบันบริการวิชาการแห่งมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>/js/creative.min.js"></script>

</body>

</html>