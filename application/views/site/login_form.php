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

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <center><img src="assets/images/LOGO1.png" alt="USI" width="50%"></center>
          <h1 class="text-uppercase text-white font-weight-bold">UNISEARCH INSTITUTE RMUTI</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">สถาบันบริการวิชาการแห่งมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</p>
          <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">เข้าสู่เว็บไซค์</a>-->
        </div>
      </div>
    </div>
  </header>


  
  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">เข้าสู่ระบบ</h2>
      <hr class="divider my-5">
      <form action="<?php echo site_url('home/authen');?>" method="post" class="form-horizontal">
        <div class="form-group row">
          <div class="col-sm-2">
            User
          </div>
          <div class="col-sm-3">
            <input type="text" name="mem_username" class="form-control" placeholder="email" required minlength="3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            Password
          </div>
          <div class="col-sm-3">
            <input type="password" name="mem_password" class="form-control" placeholder="password" required minlength="3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </form>
   
    </div>
  </section>

 
  
 



