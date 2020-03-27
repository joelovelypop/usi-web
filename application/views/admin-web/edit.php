<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการข่าวสาร
        
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('articles'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('articles'); ?>"> จัดการข่าวสาร </a></li>
            <li class="active">ปรับปรุงข้อมูล</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> ปรับปรุงข้อมูล </h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('articles/update'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            หัวข้อ
                                        </div>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="a_title" required value="<?php echo $result->a_title;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รายละเอียด
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea id="a_detail"  name="a_detail"  class="ckeditor"  rows="10" cols="60" required="required"><?php echo $result->a_detail;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รูปปกข่าว
                                        </div>
                                        <div class="col-sm-3">
                                            <br />
                                            รูปเก่า <br />
                                            <br />
                                            
                                            
                                            <img src="<?php echo base_url('aimg/'.$result->a_img);?>" width="100px">
                                            <br />
                                            <br />
                                            เลือกใหม่
                                            <br />
                                            <br />
                                            
                                            <input type="file" name="a_img" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Youtube 
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea id="a_vdo"  name="a_vdo"  class="form-control"  rows="3" cols="60" placeholder="tag iframe"><?php echo $result->a_vdo;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="hidden" name="a_id" value="<?php echo $result->a_id;?>">
                                            <input type="hidden" name="a_img2" value="<?php echo $result->a_img;?>">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('articles'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->