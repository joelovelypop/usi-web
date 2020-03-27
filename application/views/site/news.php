<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">คุณอยู่ที่นี้</li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>">หน้าหลัก</a></li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>home/category/<?php echo $news->cat_id; ?>"><?php echo $cat; ?></a></li>
      <li>&#187;</li>
      <li class="current"><a href="#"><?php echo $news->title; ?></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<style type="text/css">
  .content img{
    max-width: 630px;
  }
</style>
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><?php echo $news->title; ?></h1>
      <div class="content">
        <img width="600px" height="200px" src="<?php echo base_url().'assets/uploads/'.$news->image; ?>" />
        <?php echo $news->content; ?>
        <br />
        By :  <?php echo $username; ?> - <?php echo $news->dateposted; ?> 
        <br /><br />
      </div>

      <div class="sharebox">
      
      </div>
      <br />

      <div id="comments">
        <?php if($commentsnum != 0): ?> 
<ul class="commentlist">
        <?php foreach($comments as $row): ?>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?php echo base_url(); ?>assets/images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $row->poster_name; ?></a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#"><?php echo $row->date; ?></a></div>
            <p><?php echo $row->comment; ?></p>
          </li>
        <?php endforeach; ?>  

</ul>

        <?php else: ?>
        <?php endif; ?>  
        
      </div>



      
    
      <div id="respond">
        
      </div>
    </div>
    <div class="column">
      <div class="subnav">
        <h2>ข่าวฮิต</h2>
        <ul>
        <?php foreach($mostreadnews as $row): ?>
          <li><a href="<?php echo base_url(); ?>home/news/<?php echo $row->news_id; ?>"><?php echo $row->title;  ?></a></li>
        <?php endforeach; ?>  
        </ul>
      </div>
      
      <div class="subnav">
        <h2>ข่าวอื่นๆ</h2>
        <ul>
        <?php foreach($relatednews as $row): ?>
          <li><a href="<?php echo base_url(); ?>home/news/<?php echo $row->news_id; ?>"><?php echo $row->title;  ?></a></li>
        <?php endforeach; ?>  
        </ul>
      </div>
      
<div class="tweets" >
<!--here tweets -->          
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
