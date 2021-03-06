<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        ฟอร์มเพิ่มข้อมูลสมาชิก
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo site_url('admin/member'); ?>"> จัดการสมาชิก </a></li>
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
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo site_url('admin/member_adddata'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data" >
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ชื่อตำแหน่ง
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="ref_pid" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                 <?php foreach ($rspo as $rs) {?>
                                                <option value="<?php echo $rs->pid; ?>">-<?php echo $rs->pname; ?>-</option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Username
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_username" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            Password
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="password" name="m_password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            บัตรประจำตัวประชาชนเลขที่
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_card" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            เพศ
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="m_sex" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                <option value="หญิง">-หญิง-</option>
                                                <option value="ชาย">-ชาย-</option>                                           
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            คำนำหน้า
                                        </div>
                                        <div class="col-sm-3">
                                        <select name="m_fid" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                 <?php foreach ($rsti as $rs) {?>
                                                <option value="<?php echo $rs->m_fid; ?>">-<?php echo $rs->m_fname; ?>-</option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ชื่อ
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="m_name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            นามสกุล
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="m_lname" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                        วันเกิด
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" name="m_hbd" class="form-control"  required>
                                        </div>
                                    </div>    
                               
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            ที่อยู่
                                        </div>
                                        <div class="col-sm-3">
                                        <textarea  rows="10" cols="60" name="m_address" class="form-control" required> </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            เบอร์โทร
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_phone" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            อีเมล์
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="m_email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                          คณะ
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="fa_id" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                 <?php foreach ($rsfa as $fa) {?>
                                                <option value="<?php echo $fa->fa_id; ?>">-<?php echo $fa->fa_name; ?>-</option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                          สังกัด
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="un_id" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                 <?php foreach ($rsun as $un) {?>
                                                <option value="<?php echo $un->un_id; ?>">-<?php echo $un->un_name; ?>-</option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                          วิทยาเขต
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="ca_id" class="form-control" required>
                                                <option value="">-เลือกข้อมูล-</option>
                                                 <?php foreach ($rsca as $ca) {?>
                                                <option value="<?php echo $ca->ca_id; ?>">-<?php echo $ca->ca_name; ?>-</option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>

                                 <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รูปประจำตัว
                                        </div>
                                        <div class="col-sm-3"> 
                                        <input type="file" name="m_imgpro" />
                                        </div>
                                    </div> 

                                  

                        
                                    

                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">

                                        </div>
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo site_url('admin/member'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>


                                        </div>
                                    </div>

                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->