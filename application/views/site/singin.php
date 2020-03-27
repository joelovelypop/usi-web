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
          <center><img src="img/LOGO1.png" alt="USI" width="50%"></center>
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
      <h2 class="text-center mt-0">การบริการ</h2>
      <hr class="divider my-5">
      <form action="<?php echo site_url('homepage/authen');?>" method="post" class="form-horizontal">
        <div class="form-group row">
          <div class="col-sm-2">
            user
          </div>
          <div class="col-sm-3">
            <input type="text" name="mem_username" class="form-control" placeholder="email" required minlength="3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-2">
            password
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

 
  
 


<!-- Contact Section -->
<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">ติดต่อเรา</h2>
        <hr class="divider my-4">
        <p class="text-muted mb-5">สถาบันบริการวิชาการแห่งมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน

          ตั้งอยู่ที่ชั้น 1 อาคารสำนักงานกิจการสภาของมหาวิทยาลัย (อาคาร 7) มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน

        เลขที่ 744 ถนน สุรนารายณ์ อำเภอ เมือง จังหวัด นครราชสีมา 30000</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
        <div>044-233-000 ต่อ 5100-5101</div>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
        <!-- Make sure to change the email address in anchor text AND the link below! -->
        <div href="unisearch.rmuti@gmail.com"> unisearch.rmuti@gmail.com</div>
      </div>
    </div>
  </div>
</section>


<!-- Portfolio Section -->
<section id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
          <!--<div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>-->
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
          <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</section>



 <!---------------------------------------------------------------------------------------------------------->
<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
						 <?php if(!empty($result)){ foreach ($result as $data) { ?>
						<div class="item" style="background-image:url(<?php echo base_url('aimg/'.$data->a_img);?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">
						 				<?php echo date('d/m/Y',strtotime($data->a_datesave));?>
						 					
						 				</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="<?php echo site_url('homepage/scoop/'.$data->a_id);?>" target="_blank"><?php echo $data->a_title;?></a>
						 			</h2>
						 			<!-- <span class="post-date"><?php echo date('d/m/Y',strtotime($data->a_datesave));?></span> -->
						 		</div>
						 	</div><!--/ Featured post end -->
							
						</div><!-- Item 1 end -->
						<?php } } ?>
		
					</div><!-- Featured owl carousel end-->
				</div><!-- Col 7 end -->

				<div class="col-lg-5 col-md-12 pad-l">
					<div class="row">
						<div class="col-md-12">
							<div class="post-overaly-style contentTop hot-post-top clearfix">
								<?php if(!empty($result1)){ foreach ($result1 as $data2) { ?>
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data2->a_img);?>" alt="" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data2->a_datesave));?></a>
						 			<h2 class="post-title title-large">
						 				<a href="<?php echo site_url('homepage/scoop/'.$data2->a_id);?>" target="_blank"><?php echo $data2->a_title;?></a>
						 			</h2>
						 			<!-- <span class="post-date">February 19, 2017</span> -->
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
							<?php } } ?>
						</div><!-- Col end -->

						<div class="col-md-6 pad-r-small">
							<?php if(!empty($result2)){ foreach ($result2 as $data3) { ?>
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data3->a_img);?>" alt="" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data3->a_datesave));?></a>
						 			<h2 class="post-title title-medium">
						 				<a href="<?php echo site_url('homepage/scoop/'.$data3->a_id);?>" target="_blank"><?php echo $data3->a_title;?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
							<?php } } ?>
						</div><!-- Col end -->

						<div class="col-md-6 pad-l-small">
							<?php if(!empty($result3)){ foreach ($result3 as $data4) { ?>
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data4->a_img);?>" alt="" />
										</a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data4->a_datesave));?></a>
						 			<h2 class="post-title title-medium">
						 				<a href="<?php echo site_url('homepage/scoop/'.$data4->a_id);?>" target="_blank"><?php echo $data4->a_title;?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
						<?php } } ?>

					</div>
				</div><!-- Col 5 end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Trending post end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="latest-news block color-blue">
						<h3 class="block-title"><span>ข่าวล่าสุด</span></h3>

		 
			<div class="row">
				<?php if(!empty($relastnews)){ foreach ($relastnews as $data5) { ?>
				
				<div class="col-lg-4 col-md-6">
					<div class="item">
								<ul class="list-post">
									<li>
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="<?php echo site_url('homepage/scoop/'.$data5->a_id);?>" target="_blank">
													<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data5->a_img);?>" alt="" />
										</a>
											</div>
				
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="<?php echo site_url('homepage/scoop/'.$data5->a_id);?>" target="_blank"><?php echo $data5->a_title;?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">
									 					<?php echo date('d/m/Y',strtotime($data5->a_datesave));?>
									 			</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->								

									<div class="gap-30">
										
									</div>
							</div><!-- Item 4 end -->
				</div>
				<?php } } ?>
				<div class="col-lg-12 col-md-12">
					<p align="right"> <a href="<?php echo site_url('homepage/all');?>" class="btn btn-blue"> ข่าวทั้งหมด </a>  </p>
				</div>
			</div>
		 
						 

					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						 
						<div class="widget">
							<h3 class="block-title"><span>Follow Us</span></h3>

							<ul class="social-icon">
								<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div> 
					 

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="list-post-block">
								<ul class="list-post">
									<?php if(!empty($rshit)){ foreach ($rshit as $data6) { ?>
				
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="<?php echo site_url('homepage/scoop/'.$data6->a_id);?>" target="_blank">
													<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data6->a_img);?>" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="<?php echo site_url('homepage/scoop/'.$data6->a_id);?>" target="_blank"><?php echo $data6->a_title;?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date"><?php echo date('d/m/Y',strtotime($data6->a_datesave));?></span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->
									<?php } } ?>

									
								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="images/banner-ads/ad-content-one.jpg" alt="" />
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
  </section><!-- Ad content top end -->
  <!---------------------------------------------------------------------------------------------------------->