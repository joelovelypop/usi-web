<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ส่วนของพนักงานสารบรรณ
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('#'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active"> จัดการหนังสือ </li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); 
    ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="<?php echo  site_url('admin/adding_down'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo  site_url('admin/down'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th style="width: 45%;">ID</th>
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ว/ด/ป</th> -->
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขที่</th> -->
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 45%;">ชื่อเอกสาร</th>
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">จาก</th>-->
                                        <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ถึง</th>-->
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">docs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($query as $row) { ?>
                                        <tr role="row">
                                            <td><?php echo $row->doc_id; ?></td>
                                            <!--   <td align="center">
                                                <?php echo date('Y-m-d', strtotime($row->doc_save)); ?>

                                            </td> -->
                                            <!--  <td align="center"><?php echo $row->doc_num; ?></td> -->
                                            <td> <?php echo $row->doc_name; ?></td>
                                            <!--  <td><?php echo $row->doc_from; ?></td> -->
                                            <!--  <td><?php echo $row->doc_to; ?></td> -->

                                            <td>
                                                <a href="<?php echo site_url('admin/edit_down/' . $row->doc_id); ?>" class="btn btn-warning btn-xs">
                                                    แก้ไข
                                                </a>
                                            </td>
                                            <td>
                                                <?php
                                                $df = $row->doc_file;
                                                if ($df != '') { ?>

                                                    <a href="<?php echo base_url('docs/' . $row->doc_file); ?>" target="_blank" class="btn btn-info btn-xs"> เปิดดูเอกสาร </a>
                                                <?php } else {
                                                    echo '-';
                                                } ?>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->