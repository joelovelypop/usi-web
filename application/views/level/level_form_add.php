<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    จัดการ Level
    </h1>
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
                  <h3 class="box-title">Form Update level</h3>
                
                  <ol class="breadcrumb">
                    <ul class="navbar-nav navbar-nav-right">
                  
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
         
          <!-- /.box-header -->
          <div class="box-body">
            <form action="<?php echo site_url('mylevel/form_save');?>" method="post" class="form-horizontal">

              <div class="form-group row">
                <div class="col-sm-2 control-label">
                </div>
                <div class="col-sm-4">
                  <h3>Form level</h3>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-sm-2 control-label">
                  ชื่อสิทธิการใช้งาน
                </div>
                <div class="col-sm-4">
                  <input type="text" name="l_name" class="form-control" placeholder="ชื่อสิทธิการใช้งาน" required minlength="3" value="<?php echo set_value('l_name'); ?>">
                  <span class="fr">
                  <?php echo form_error('l_name'); ?>
                </span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-primary" style="width: 50%;">SAVE</button>
                
                </div>
              </div>
              
            </form>
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