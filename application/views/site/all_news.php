
	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="latest-news block color-blue">
						<h3 class="block-title"><span>ข่าวทั้งหมด
						 <?php echo  $total_rows; ?> ข่าว</span></h3>

		 
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
					<center>
                                <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                    <?php echo $link; ?>
                                </div>
                          </center> 
                            
                         
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
						</div><!-- Widget Social end -->

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





	