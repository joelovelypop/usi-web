<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ฟอร์มแก้ไขข้อมูลสังกัด
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li><a href="<?php echo site_url('admin/under'); ?>"> จัดการสังกัด </a></li>
                <li class="active">เพิ่มข้อมูลใหม่</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                        <!-- Your Page Content Here -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                            </div><!-- /.box-header -->
                            <!-- form start -->

                            <form role="form" action="<?php echo site_url('admin/under_editdata'); ?>" method="post"
                                class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ชื่อตำแหน่ง
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="un_name" required
                                                value="<?php echo $rsedit->un_name; ?>">
                                            <input type="hidden" name="un_id" value="<?php echo $rsedit->un_id; ?>"">
                                        </div>
                                    </div>


           
                                    <div class=" form-group">
                                            <div class="col-sm-2 control-label">

                                            </div>
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/under'); ?>"
                                                    role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


                                            </div>
                                        </div>

                                    </div><!-- /.box-body -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.content -->