<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการโครงการ

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('projects'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('projects'); ?>"> จัดการโครงการ </a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                       
                        <!-- form start -->
                        <form role="form" action="<?php echo  site_url('projects/adding'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                        ชื่อโครงการ 
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="pj_title" required> 
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <div class="col-sm-2 control-label">

                                    </div>
                                    <div class="col-sm-3">
                                 
                                        <?php $mem_id =  $_SESSION['l_id']; ?> 
                                        <input type="hidden" name="ref_mem_id" value="<?php echo $mem_id; ?>">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" href="<?php echo site_url('projects'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->