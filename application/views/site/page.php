<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">คุณอยู่ที่นี้</li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>">หน้าหลัก</a></li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>home/page/<?php echo $pagecontent->id; ?>"><?php echo $pagecontent->pagetitle; ?></a></li>
      
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><?php echo $pagecontent->pagetitle; ?></h1>


      <div class="content">
        <?php echo $pagecontent->pagecontent; ?>
      </div>

 
    </div>
    <div class="column">
  
      <!--#ads-->
      <div class="tweets" >
<?php 
$details = $this->AdminModel->getdetails();
echo $details->twitterbox;
?>
<!--here tweets -->
      </div>
      
    <br class="clear" />
  </div>
</div>




 <br class="clear" />
<!-- ####################################################################################################### -->
