<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการข่าวสาร

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('projects'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('projects'); ?>"> จัดการข่าวสาร </a></li>
            <li class="active">+ ภาพประกอบข่าว </li>
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
                            <h3 class="box-title"> ชื่อโครงการ </h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                   
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pj_title" required value="<?php echo $result->pj_title; ?>" disabled>
                                </div>
                            </div>
                            <div class="row"> 
                                <hr />
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <h4> +ใบสมัครคูปองวิทย์เพื่อโอทอป</h4>
                                    <div class="col-sm-12" style="background-color: #f4f4f4">
                                        <form action="<?php echo site_url('projects/addimgdb'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col-sm-2  control-label">เลือกไฟล์ </div>
                                                <div class="col-sm-4">
                                                    <br /><br />
                                                    <input type="file" required accept="application/pdf" class="btn btn-info" name="userfile[]" multiple id="image_file">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="hidden" name="ref_pj_id" value="<?php echo $result->pj_id; ?>">
                                                    <br /><br />
                                                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                                                </div>
                                            </div>
                                        </form>
                                        <br />
                                        <br />
                                    </div>
                                    <div class="col-sm-5">
                                        รายการเอกสารใบสมัครคูปองวิทย์เพื่อโอทอป <br /><br />
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">id</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 80%;">ชื่อเอกสาร</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">DATE</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 5px;">ลบ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $k = 1;
                                                if (!empty($rsimg)) { 
                                                    foreach ($rsimg as $img) { ?>
                                                        <tr role="row">
                                                            <td align="center"><?php echo $k; ?></td>
                                                            <td>
                                                                <img src="<?php echo base_url('doc_regis/' . $img->pj_regis_doc); ?>" width="100px">
                                                                <?php // echo  $img->m_img; 
                                                                ?>
                                                            </td>
                                                            <td align="center"><?php echo date('d/m/Y', strtotime($img->pj_regis_date)); ?></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-xs" href="<?php echo  site_url('article/remove_img/' . $img->ref_pj_id); ?>?pj_regis_id=<?php echo $img->pj_regis_id; ?>&aid=<?php echo $img->ref_pj_id; ?>&act=del" role="button"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                                            </td>
                                                        </tr>
                                                <?php $k++;
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->