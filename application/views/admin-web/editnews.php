
<div class="main-panel">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h2>แก้ไขข่าวสารประชาสัมพันธ์ </h2>
<ol class="breadcrumb">
        <li><a href="<?php echo  site_url(''); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
				<li><a href="<?php echo  site_url('admin/managenews'); ?>"> จัดการตำแหน่งงาน </a></li>
        <li class="active">แก้ไขข่าวสาร</li>
				</ol>
    </section>
<div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
<form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/editnews/'.$newsdata->news_id); ?>">
<table>
	<tr>
		<td>หัวข้อข่าวสาร : </td>
		<td><input type="text" name="title" size="40" value="<?php echo  $newsdata->title; ?>" /> *</td>
	</tr>

	<tr>
		<td>รูปข่าวสาร : </td>
		<td>
			<img src="<?php echo base_url().'/assets/uploads/'.$newsdata->image; ?>" width="100px" height="100px" /> 
		</td>
	</tr>
	
	<tr>
		<td>ข้อมูลข่าวสาร : </td>
		<td>
			<textarea name="content" id="textarea"><?php echo  $newsdata->content; ?></textarea>
		</td>
	</tr>
	<tr>
	<td></td>
    <td colspan="2">
      <button  type="submit" class="btn btn-primary" class="fa fa-fw fa-save" name="add" value="Edit News" > บันทึกข้อมูล</button>
			<a class="btn btn-danger" href="<?php echo  site_url('admin/managenews'); ?>" role="button"><i
                          class="fa fa-fw fa-close"></i> ยกเลิก</a>
		</td>
	</tr>
</table>
</form>		
			
			
			
			
<div class="clear"></div> <!-- End .clear -->
</div>
</div>
</div>
</div>
</div>






<div id="main-content"> <!-- Main Content Section with everything -->
<?php if($this->session->flashdata('edited')): ?>
<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo $this->session->flashdata('edited'); ?>
				</div>
</div>
<?php endif; ?>

<?php if(validation_errors()): ?>
<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo validation_errors(); ?>
				</div>
</div>
<?php endif; ?>
<script type="text/javascript">
	tinymce.init({
  selector: 'textarea',
  height: 150,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
			
			