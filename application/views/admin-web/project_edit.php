<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ฟอร์มแก้ไขข้อมูลโครงการ
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
                <li><a href="<?php echo site_url('admin/project'); ?>"> จัดการโครงการ </a></li>
                <li class="active">แก้ไขข้อมูลใหม่</li>
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
                                        <form role="form" action="<?php echo site_url('admin/project_editdata'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <h3>โครงการ</h3>
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <div class="col-sm-3 control-label">
                                                        ชื่อโครงการ
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" name="pj_name" class="form-control" value="<?php echo $rsedit->pj_name;?>" >
                                                    </div>
                                                </div>

                                                <p><u>เอกสารของสถานประกอบการ<u></p>

                                                <div class="col-sm-4 ">
                                                    ใบสมัครคูปองวิทย์เพื่อโอทอป
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">

                                                             <?php 
                                                            $df = $rsedit->from_otop; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_otop);?>" target="_blank"> open file </a>
                                                            <?php } ?>

                                                        <input type="file" name="from_otop" class="form-control">
                                                        <input type="text" name="from_otop_comment" class="form-control" value="<?php echo $rsedit->from_otop_comment;?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    สำเนาบัตรประชาชน
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                             <?php 
                                                            $df = $rsedit->from_idcard; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_idcard);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                        <input type="file" name="from_idcard" class="form-control">
                                                        <input type="text" name="from_idcard_comment" class="form-control" value="<?php echo $rsedit->from_idcard_comment;?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    สำเนาใบจดทะเบียนรัฐวิสาหกิจ
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                    <?php 
                                                            $df = $rsedit->from_stateregis; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_stateregis);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                        <input type="file" name="from_stateregis" class="form-control">
                                                        <input type="text" name="from_stateregis_comment" class="form-control" value="<?php echo $rsedit->from_idcard_comment;?>">
                                                    </div>
                                                </div>

                                                <p><u>เอกสารของที่ปรึกษา<u></p>

                                                <div class="col-sm-4 ">
                                                    ใบสมัครที่ปรึกษาวว.
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                    <?php 
                                                            $df = $rsedit->from_consultant; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_consultant);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                        <input type="file" name="from_consultant" class="form-control">
                                                        <input type="text" name="from_consultant_comment" class="form-control" value="<?php echo $rsedit->from_consultant_comment;?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    ซีวี
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                    <?php 
                                                            $df = $rsedit->from_cv; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_cv);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                        <input type="file" name="from_cv" class="form-control" >
                                                        <input type="text" name="from_cv_comment" class="form-control" value="<?php echo $rsedit->from_cv_comment;?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 ">
                                                    ข้อเสนอโครงการ
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-sm-3">
                                                    <?php 
                                                            $df = $rsedit->from_project; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า <br>
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_project);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                        <input type="file" name="from_project" class="form-control">
                                                        <input type="text" name="from_project_comment" class="form-control" value="<?php echo $rsedit->from_project_comment;?>">
                                                    </div>
                                                </div>

                                                <h3>โครงการงวดที่ 1</h3>
                                                <div class="box-body">


                                                    <div class="col-sm-4 ">
                                                        รายงานตามข้อเสนอโครงการ
                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-sm-3">
                                                        <?php 
                                                            $df = $rsedit->from_fpj; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_fpj);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                            <input type="file" name="from_fpj" class="form-control">
                                                            <input type="text" name="from_fpj_comment" class="form-control" value="<?php echo $rsedit->from_fpj_comment;?>">
                                                        </div>
                                                    </div>

                                                    <h3>โครงการงวดที่ 2</h3>
                                                    <div class="box-body">


                                                        <div class="col-sm-4 ">
                                                            รายงานความก้าวหน้า
                                                        </div>
                                                        <div class="form-group">

                                                            <div class="col-sm-3">
                                                            <?php 
                                                            $df = $rsedit->from_spj; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_spj);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                                <input type="file" name="from_spj" class="form-control">
                                                                <input type="text" name="from_spj_comment" class="form-control" value="<?php echo $rsedit->from_spj_comment;?>">
                                                            </div>
                                                        </div>

                                                        <h3>โครงการงวดที่ 3</h3>
                                                        <div class="box-body">


                                                            <div class="col-sm-4 ">
                                                               รูปเล่มสมบูรณ์
                                                            </div>
                                                            <div class="form-group">

                                                                <div class="col-sm-3">
                                                                <?php 
                                                            $df = $rsedit->from_tpj; 
                                                            if($df !=''){ ?>
                                                            ไฟล์เก่า 
                                                            <a href="<?php echo base_url('docs/'.$rsedit->from_tpj);?>" target="_blank"> open file </a>
                                                            <?php } ?>
                                                                    <input type="file" name="from_tpj" class="form-control">
                                                                    <input type="text" name="from_tpj_comment" class="form-control" value="<?php echo $rsedit->from_tpj_comment;?>">
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

                                                    <div id="comments">
        <h2>Comments</h2>
       
<ul class="commentlist">
       
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?php echo base_url(); ?>assets/images/demo/avatar.gif" width="32" height="32" alt="" />
            <span class="name"><a href="#"></a></span> 
             <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#"></a></div>
           
          </li>
       

</ul>

              <p>There is no comments .</p>
       
        
      </div>





      <h2>Write A Comment</h2>
      
      <div id="respond">
        <form action="<?php echo site_url('admin/addcomment'); ?>" method="post"> 
          <p>
            <input type="text" name="ref_m_id" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <textarea name="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Add a comment" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>



    </div><!-- /.content-wrapper -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section><!-- /.content -->

        