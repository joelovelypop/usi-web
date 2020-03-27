<!-- Page Head -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h2>จัดการข่าวสาร</h2>

            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('#'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li class="active"> จัดการข่าวสาร </li>
            </ol>
        </section>
            <div class="content-box">
                <!-- Start Content Box -->

                <?php // echo $this->session->flashdata('msginfo'); ?>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-header">
                                    <div class="page-header">
                                        <h3 class="box-title">ตารางข้อมูล</h3>
                                        <ol class="breadcrumb">
                                            <ul class="navbar-nav navbar-nav-right">
                                                <div class="form-group">
                                                <a class="btn btn-success" href=" <?php echo  site_url('admin/addnews'); ?>" data-target="#addpos-Modal" role="button"><i
											class="fa fa-fw fa-plus-circle"></i>
										เพิ่มข้อมูล</a>
                                    <a class="btn btn-default" href="<?php echo  site_url('admin/managenews'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                               
                                                </div>
                                    </div>
                                </div>
                                </ol>
                                </ul>
                            </div>


                                  
              
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tab-content default-tab" id="tab1">
                                        <!-- This is the target div. id must match the href of this div's tab -->
                                        <table class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                                            <br />
                                            <thead>
                                                <tr role="row" class="info">
                                                    <th tabindex="0" rowspan="1" colspan="1">Id</th>
                                                    <th tabindex="0" rowspan="1" colspan="1">News Title</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">
                                                        แก้ไข</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">
                                                        ลบ</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php foreach($news as $row): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row->news_id; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->title; ?>
                                                    </td>
                                                    <td>
                                                        <!-- Icons -->
                                                        <a href="<?php   echo site_url('admin/editnews/'.$row->news_id); ?>" class="btn btn-warning btn-xs" title="Edit" alt="Edit">
                                                        <i class="mdi mdi-pen " ></i> แก้ไข
														</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-xs" href="<?php  echo  site_url('admin/deletenews/'.$row->news_id); ?>" role="button" onclick="return confirm('Are You really want to Delete ?');" title="Delete"><i class="fa fa-fw fa-trash"
																alt="Delete"></i> ลบ</a>

                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>

                                            </tbody>

                                        </table>

                                        <!--here will be navigation-->
                                        <div class="pagination">
                                            <?php echo $this->pagination->create_links(); ?>
                                        </div>
                                    </div>
                                    <!-- End #tab1 -->



                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="main-content">
                <!-- Main Content Section with everything -->
                <?php if($this->session->flashdata('deleted')): ?>
                <div class="notification success png_bg">
                    <a href="#" class="close"><img
							src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png"
							title="Close this notification" alt="close" /></a>
                    <div>
                        <?php echo $this->session->flashdata('deleted'); ?>
                    </div>
                </div>
                <?php endif; ?>