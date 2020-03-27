<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ฟอร์มแก้ไข password
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo  site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li><a href="<?php echo  site_url('admin/member'); ?>"> จัดการสมาชิก </a></li>
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
                            <form role="form" action="<?php echo  site_url('admin/member_editpwd'); ?>" method="post"
                                class="form-horizontal">
                               
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Username
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_username" class="form-control" required
                                                value="<?php echo $rsedit->m_username;?>" disabled>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ชื่อ
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="m_name" class="form-control" required
                                                value="<?php echo $rsedit->m_name;?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            นามสกุล
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="m_lname" class="form-control" required
                                                value="<?php echo $rsedit->m_lname;?>" disabled>
                                            <input type="hidden" name="m_id" class="form-control" required
                                                value="<?php echo $rsedit->m_id;?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            New Password
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_password" class="form-control" required
                                                minlength="3">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">

                                        </div>
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('admin/member'); ?>"
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
    </div><!-- /.content-wrapper -->