<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					
					<div class="single-post">
						
						<div class="post-title-area">
							<a class="post-cat" href="#">รายละเอียดข่าว</a>
							<h2 class="post-title">
								<?php echo $result->a_title;?>
				 			</h2>
				 			<div class="post-meta">
								<span class="post-date"><i class="fa fa-clock-o"></i> 
									<?php echo date('d/m/Y',strtotime($result->a_datesave));?>
								</span>
								<span class="post-hits"><i class="fa fa-eye"></i>
									<?php echo $result->a_view;?>
								</span>
								<span class="post-hits"><i class="fa fa-user"></i>
									<?php echo $result->mem_name;?>
								</span>
								
									 <?php 
									$ld = $result->a_last_update;
									if($ld==''){

									}else{
										echo '<span class="post-hits"><i class="fa fa-calendar"></i>';
										echo 'ปรับปรุงล่าสุด : ';
										echo date('d/m/Y',strtotime($ld));
									}
									?>
								</span>
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
							
									<img src="<?php echo base_url();?>aimg/<?php echo $result->a_img;?>" class="img-fluid" alt="">

							</div>
							<div class="entry-content">
								<?php echo $result->a_detail;?>
								<br />
								<h3> ภาพประกอบ </h3>

								 
									<?php if(!empty($rsgall)){ foreach ($rsgall as $dg) { ?>
									<div class="col-lg-12 col-md-12">
								<div class="post-media post-featured-image">
								
									<img src="<?php echo base_url();?>gall/<?php  echo $dg->art_img;?>" class="img-fluid" alt="">
								 
									 
									</a>
								</div>

									</div>
								<?php }} ?>

								<br />

								<h3>วิดีโอที่เกี่ยวข้อง </h3>
								<br />
								<?php echo $result->a_vdo;?>
								 <p align="right">
                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5500ee80057fdb99"></script>
                    
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_r64r"></div>
                </p>
							 



							</div><!-- Entery content end -->

						</div><!-- post-content end -->
					</div><!-- Single post end -->




					<div class="gap-50"></div>

					</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">

						

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>


							<div class="list-post-block">
								<ul class="list-post">
									<?php if(!empty($rshit)){ foreach ($rshit as $data6) { ?>
				
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="<?php echo site_url('homepage/scoop/'.$data6->a_id);?>">
													<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data6->a_img);?>" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="<?php echo site_url('homepage/scoop/'.$data6->a_id);?>"><?php echo $data6->a_title;?></a>
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





	