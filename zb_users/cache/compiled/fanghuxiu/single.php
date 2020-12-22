<?php  include $this->GetTemplate('header');  ?>
<div class="container">
   <div class="wrap-left pull-left">
    <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
    <?php  include $this->GetTemplate('post-single');  ?>
    <?php }else{  ?>
    <?php  include $this->GetTemplate('post-page');  ?>
    <?php } ?>
   </div>
    <!--  侧栏 --> 
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
 <!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
