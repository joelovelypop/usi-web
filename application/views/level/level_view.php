<div class="content-wrapper">
    <section class="content-header">
      <h1>
      จัดการสิทธิ์การใช้งาน
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
        <li class="active"> จัดการการใช้งาน </li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <!-- Your Page Content Here -->
              <div class="box">
                <div class="box-header">

                  <div class="page-header">
                    <h3 class="box-title">ตารางข้อมูล</h3>

                    <ol class="breadcrumb">
                      <ul class="navbar-nav navbar-nav-right">
                        <div class="form-group">
                        <a class="btn btn-success" href="<?php echo site_url('mylevel/form'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มสิทธิ์การใช้งาน</a>
                        <a class="btn btn-default" href="<?php echo site_url('mylevel'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> รีเฟรชข้อมูล</a>
            </div>
                  </div>
                  </ol>
                  </ul>
                </div>
              </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
  
            <div class="box-body">
                    <table id="example1" class="table table-striped">
                      <thead>
                      <tr class="danger">
                          <th>ID</th>
                          <th>ชื่อสิทธิการใช้งาน</th>
                          <th>แก้ไข</th>
                          <th>ลบ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($query as $row) { ?>
                          <tr>
                            <td><?php echo $row->l_id; ?></td>
                            <td><?php echo $row->l_name; ?></td>
                            <td><a href="<?php echo site_url('mylevel/edit/' . $row->l_id); ?>" class="btn btn-warning btn-xs"> แก้ไข</a></td>
                            <td>
                              <a href="<?php echo site_url('mylevel/del/' . $row->l_id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('ยืนยันการลบ');"> ลบ </a></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
                        </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  