<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php require_once('header.php'); ?>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <?php if(!empty($record)):?>
            <?php foreach($record as $row): ?>
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              <div class="post-thumbnail"><img src="<?php echo base_url().$row['featured_image'];?>" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="<?php echo base_url('home/katagori/'.$row['category'])?>"><?php echo $row['category']; ?></a></div>
                </div>
                <h1><?php echo $row['title'];?><a href="<?php echo base_url()?>home/read/<?php echo $row['ID']."/".strtolower($row['slug'])?>"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="<?php echo base_url().'assets/img/fotokita.jpg'?>" alt="..." class="img-fluid"></div>
                    <div class="title"><span><?php echo $row['author'];?></span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i><?php echo tgl_indo($row['date']);?></div>
                    <div class="views"><i class="icon-eye"></i> <?php echo $visit['visit']  ?></div>
                  </div>
                </div>
                <div class="post-body"><?php echo $row['content'];?></div>
              
                 
                  <div id="disqus_thread"></div>
                  <script>

                 
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                  })();
                  </script>
              </div>
            </div>
          </div>
        </main>
        <?php endforeach;?>
          <?php endif;?>  
<?php echo "<script>".$this->session->flashdata('message')."</script>"?>
  <?php require_once('sidebar.php'); ?>
  <?php require_once('footer.php'); ?>