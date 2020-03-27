<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
        <!-- Your Page Content Here -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card"> 
              <div class="card">
                <div class="card-body">
        <div class="box">
            <div class="box-header">

            <div class="page-header">  
            <h3 class="box-title">จัดการโครงการ</h3>
           

              <ol class="breadcrumb">
              <ul class="navbar-nav navbar-nav-right">
              <div class="form-group">
                                <a class="btn btn-success" href="<?php echo  site_url('admin/project_adding'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                <a class="btn btn-default" href="<?php echo  site_url('admin/project'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                            </div>
                    </div>
                  </div>
              </ol>
            </ul>
          </div>

                           
                                
                          
                      
                        <div class="row">
                            <div class="col-sm-12">
                                <br />
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">id</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อโครงการ</th>
                                          <!--  <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สถานะโครงการ</th> -->
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 40%;">เจ้าของโครงการ</th>
                                            
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($querypj as $ps) { ?>
                                        <tr role="row">
                                            <td align="center"><?php echo $ps->pj_id;?></td>
                                            <td><?php echo $ps->pj_name;?></td>
                                           <!-- <td><?php echo $ps->sp_name;?></td> -->
                                            <td>
                                                <?php echo 
                                                $ps->m_name
                                                .' '.$ps->m_lname;?>
                                                    
                                                </td>
                                           
                                                
                                            <td>
                                                    <a href="<?php   echo site_url('admin/project_edit/'.$ps->pj_id); ?>" class="btn btn-warning btn-xs">
                                                    <i class="mdi mdi-pen " ></i> แก้ไข 
                                                    </a>
                                                </td>
                                                <td>
                                        <a class="btn btn-danger btn-xs" href="<?php  echo  site_url('admin/project_del/'.$ps->pj_id); ?>" role="button" onclick="return confirm('confirm delete?');"><i class="fa fa-fw fa-trash" ></i> ลบ</a>
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
                                        </div>