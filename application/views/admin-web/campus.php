<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                จัดการวิทยาเขต
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('#'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li class="active"> จัดการวิทยาเขต </li>
            </ol>
        </section>
        <!-- Top menu -->
        <?php // echo $this->session->flashdata('msginfo'); ?>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
                                <div class="box-header">
                                    <div class="page-header">
                                        <h3 class="box-title">ตารางข้อมูล</h3>


                                        <ol class="breadcrumb">
                                            <ul class="navbar-nav navbar-nav-right">
                                                <div class="form-group">
                                                    <a class="btn btn-success" href=" <?php echo  site_url('admin/campus_adding'); ?>" data-target="#addpos-Modal" role="button"><i class="fa fa-fw fa-plus-circle"></i>
                            เพิ่มข้อมูล</a>
                                                    <a class="btn btn-default" href="<?php echo  site_url('admin/campus'); ?>" role="button"><i
                              class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                                                </div>
                                    </div>
                                </div>
                                </ol>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="col-xl">
                                    <br />
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="info">
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">id</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 70%;">ชื่อวิทยาเขต</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($query as $rs) { ?>
                                            <tr role="row">
                                                <td align="center">
                                                    <?php echo $rs->ca_id;?>
                                                </td>
                                                <td>
                                                    <?php echo $rs->ca_name;?> 
                                                </td>
                                                <td>
                                                    <a href="<?php   echo site_url('admin/campus_edit/'.$rs->ca_id); ?>" class="btn btn-warning btn-xs">
                                                    <i class="mdi mdi-pen " ></i> แก้ไข
                          </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="<?php  echo  site_url('admin/campus_del/'.$rs->ca_id); ?>" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash"></i>
                            ลบ</a>
                                                </td>
                                            </tr>
                                            <?php  } ?>
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