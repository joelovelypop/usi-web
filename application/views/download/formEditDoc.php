<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         ฟอร์มแก้ไขข้อมูลเอกสาร
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('admin'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('admin/down'); ?>"> จัดการเอกสาร </a></li>
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
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('admin/editdoc_down'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                   
                                  
                                 
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ชื่อเอกสาร
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="doc_name" class="form-control" required value="<?php echo $rsedit->doc_name;?>">
                                        </div>
                                    </div>
                                 
                                   
                            
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ไฟล์เอกสาร
                                        </div>
                                        <div class="col-sm-3">
                                             <?php 
                                            $df = $rsedit->doc_file;
                                            if($df !=''){ ?>
                                            ไฟล์เก่า <br>

                                           
                                            <a href="<?php echo base_url('docs/'.$rsedit->doc_file);?>" target="_blank"> open file </a>
                                        <?php } ?>
                                            
                                            <input type="file" name="doc_file" class="form-control"  accept="application/pdf" >
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="hidden" name="doc_id" value="<?php echo $rsedit->doc_id;?>">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('admin/down'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->