<div class="content-wrapper">
    <section class="content-header">
        <h1>
            จัดการสมาชิก
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active"> จัดการสมาชิก </li>
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
                                    <h3 class="box-title">รายการสมาชิก</h3>

                                    <ol class="breadcrumb">
                                        <ul class="navbar-nav navbar-nav-right">
                                            <div class="form-group">
                                                <a class="btn btn-success" href="<?php echo site_url('articles/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                                <a class="btn btn-default" href="<?php echo site_url('articles'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> รีเฟรชข้อมูล</a>
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
                                            <table id="example1" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr role="row" class="info">
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">id</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7%;">IMG</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 50%;">ชื่อข่าว</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">โดย</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">สถานะ</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">+ภาพ</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">แก้ไข</th>
                                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (!empty($results)) {
                                                        foreach ($results as $data) { ?>
                                                            <tr role="row">
                                                                <td align="center"><?php echo $data->a_id; ?></td>
                                                                <td><img src="<?php echo base_url('aimg/' . $data->a_img); ?>" width="100%"></td>
                                                                <td>
                                                                    <b>
                                                                        <?php echo  $data->a_title; ?>
                                                                    </b>
                                                                    <br />
                                                                    ว/ด/ป. <?php echo date('d/m/Y', strtotime($data->dateinsert)); ?>
                                                                    <br />
                                                                    views : <?php echo $data->a_view; ?>,
                                                                    last update : <?php echo $data->a_last_update; ?>
                                                                </td>
                                                                <td><?php echo $data->mem_name; ?></td>
                                                                <td align="center">
                                                                    <form action="<?php echo site_url('articles/chk/' . $data->a_id); ?>" method="post">
                                                                        <input type="hidden" name="a_id" value="<?php echo $data->a_id; ?>">
                                                                        <input type="hidden" name="a_status" value="<?php echo $data->a_status; ?>">
                                                                        <button class="btn btn-success btn-xs" type="submit">เปลี่ยน
                                                                        </button>
                                                                    </form>
                                                                    <?php
                                                                    $st =  $data->a_status;
                                                                    if ($st == 'show') {
                                                                        echo '<font color="green">';
                                                                        echo $st;
                                                                        echo '</font>';
                                                                    } else {
                                                                        echo '<font color="red">';
                                                                        echo $st;
                                                                        echo '</font>';
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <a href="<?php echo site_url('articles/addimg/' . $data->a_id); ?>" class="btn btn-info btn-xs" target="_blank">+img</a></td>

                                                                <td>
                                                                    <a href="<?php echo site_url('articles/edit/' . $data->a_id); ?>" class="btn btn-warning btn-xs">
                                                                        แก้ไข
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-danger btn-xs" href="<?php echo  site_url('articles/confrm/' . $data->a_id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                                </td>
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                        <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->