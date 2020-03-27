<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            ส่วนของพนักงานสารบรรณ
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active"> จัดการหนังสือ </li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); ?>
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
              <a class="btn btn-success" href="<?php echo site_url('admin/doc_adding'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo site_url('admin'); ?>" role="button"><i
                                    class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                                
                    </div>
                  </div>
              </ol>
            </ul>
          </div>
            </div>
    
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ID</th>


                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 45%;">ชื่อเอกสาร</th>


                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">docs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row) {?>
                                    <tr role="row">
                                        <td align="center">
                                            <?php echo $row->doc_id; ?>
                                        </td>


                                        <td>
                                            <?php                                         
                                                    echo '<font color="blue"><b>';
                                                    echo $row->doc_name;
                                                    echo '</b></font>';
                                             ?>


                                        </td>



                                        <td>
                                            <a href="<?php echo site_url('admin/doc_edit/' . $row->doc_id); ?>" class="btn btn-warning btn-xs">
                                            <i class="mdi mdi-pen " ></i> แก้ไข
                                            </a>
                                        </td>
                                        <td>
                                            <?php
$df = $row->doc_file;
    if ($df != '') {?>

                                                <a href="<?php echo base_url('docs/' . $row->doc_file); ?>" target="_blank" class="btn btn-info btn-xs"><i class="mdi mdi-archive " ></i> เปิดดูเอกสาร </a>
                                                <?php } else {
        echo '-';

    }?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->