<div class="container">

    <div class="wrap-left pull-left">
		 <div class="mod-info-flow">
<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>

          
		  </div>
    <div class="pagebar">
    <?php  include $this->GetTemplate('pagebar');  ?>
	</div>
 </div>
        
 
        
  <?php if ($zbp->Config('fanghuxiu')->Ceon=='1') { ?> 
<div class="wrap-right pull-right">
 <?php  include $this->GetTemplate('sidebar');  ?>
 </div>
 <?php }else{  ?>
<div class="wrap-right pull-right">
 <?php  include $this->GetTemplate('right');  ?>
</div>
<?php } ?>
</div>