<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ฟอร์มเพิ่มข้อมูลโครงการ
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li><a href="<?php echo site_url('admin/project'); ?>"> จัดการโครงการ </a></li>
                <li class="active">เพิ่มข้อมูลใหม่</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <!-- Your Page Content Here -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <!-- <h3 class="box-title"> +ข่าวใหม่ </h3> -->
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" action="<?php echo site_url('admin/project_adddata'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <h3>โครงการ</h3>
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <div class="col-sm-3 control-label">
                                                        ชื่อโครงการ
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" name="pj_name" class="form-control">
                                                    </div>
                                                </div>

                                                <p><u>เอกสารของสถานประกอบการ<u></p>

                                                <div class="col-sm-4 ">
                                                    ใบสมัครคูปองวิทย์เพื่อโอทอป
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_otop" class="form-control">
                                                        <input type="text" name="from_otop_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    สำเนาบัตรประชาชน
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_idcard" class="form-control">
                                                        <input type="text" name="from_idcard_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    สำเนาใบจดทะเบียนรัฐวิสาหกิจ
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_stateregis" class="form-control">
                                                        <input type="text" name="from_stateregis_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <p><u>เอกสารของที่ปรึกษา<u></p>

                                                <div class="col-sm-4 ">
                                                    ใบสมัครที่ปรึกษาวว.
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_consultant" class="form-control">
                                                        <input type="text" name="from_consultant_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    ซีวี
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_cv" class="form-control" >
                                                        <input type="text" name="from_cv_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    ข้อเสนอโครงการ
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                        <input type="file" name="from_project" class="form-control">
                                                        <input type="text" name="from_project_comment" class="form-control">
                                                    </div>
                                                </div>

                                                <h3>โครงการงวดที่ 1</h3>
                                                <div class="box-body">


                                                    <div class="col-sm-4 ">
                                                        รายงานตามข้อเสนอโครงการ
                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-sm-3">
                                                            <input type="file" name="from_fpj" class="form-control">
                                                            <input type="text" name="from_fpj_comment" class="form-control">
                                                        </div>
                                                    </div>

                                                    <h3>โครงการงวดที่ 2</h3>
                                                    <div class="box-body">


                                                        <div class="col-sm-4 ">
                                                            รายงานความก้าวหน้า
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="col-sm-3">
                                                                <input type="file" name="from_spj" class="form-control">
                                                                <input type="text" name="from_spj_comment" class="form-control">
                                                            </div>
                                                        </div>

                                                        <h3>โครงการงวดที่ 3</h3>
                                                        <div class="box-body">


                                                            <div class="col-sm-4 ">
                                                               รูปเล่มสมบูรณ์
                                                            </div>
                                                            <div class="form-group">

                                                                <div class="col-sm-3">
                                                                    <input type="file" name="from_tpj" class="form-control">
                                                                    <input type="text" name="from_tpj_comment" class="form-control">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                       
                                            <button class="btn btn-success" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('admin/project'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                                        </div>

                                                    </div>
                                                    <!-- /.box-body -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section><!-- /.content -->







    </div><!-- /.content-wrapper -->