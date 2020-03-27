<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการข่าวสาร

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('articles'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('articles'); ?>"> จัดการข่าวสาร </a></li>
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
                            <h3 class="box-title"> + ภาพประกอบข่าว </h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <img src="<?php echo base_url('aimg/' . $result->a_img); ?>" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="a_title" required value="<?php echo $result->a_title; ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <hr />
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <h4> +GALLERY </h4>
                                    <div class="col-sm-12" style="background-color: #f4f4f4">
                                        <form action="<?php echo site_url('articles/addimgdb'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col-sm-2  control-label">เลือกภาพ </div>
                                                <div class="col-sm-4">
                                                    <br /><br />
                                                    <input type="file" required accept="image/*" class="btn btn-info" name="userfile[]" multiple id="image_file">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="hidden" name="ref_a_id" value="<?php echo $result->a_id; ?>">
                                                    <br /><br />
                                                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                                                </div>
                                            </div>
                                        </form>
                                        <br />
                                        <br />
                                    </div>
                                    <div class="col-sm-5">
                                        LIST IMG <br /><br />
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">id</th>
                                                    <th tabindex="0" rowspan="1" colspan="1" style="width: 80%;">IMG</th>
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
                                                                <img src="<?php echo base_url('gall/' . $img->art_img); ?>" width="100px">
                                                                <?php // echo  $img->m_img; 
                                                                ?>
                                                            </td>
                                                            <td align="center"><?php echo date('d/m/Y', strtotime($img->art_date)); ?></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-xs" href="<?php echo  site_url('article/remove_img/' . $img->ref_a_id); ?>?art_id=<?php echo $img->art_id; ?>&aid=<?php echo $img->ref_a_id; ?>&act=del" role="button"><i class="fa fa-fw fa-trash"></i> ลบ</a>
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