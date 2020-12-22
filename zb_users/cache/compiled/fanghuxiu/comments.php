<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>

<div class="pl-form-wrap">
    <?php if ($article->CommNums>0) { ?>
    <span class="span-mark-author active">评论列表</span>
    <?php } ?>
    <div class="pl-form-box pl-article-wrap">
         <label id="AjaxCommentBegin"></label>
         <!--评论输出-->
         <?php  foreach ( $comments as $key => $comment) { ?>
         <?php  include $this->GetTemplate('comment');  ?>
         <?php }   ?>

          <!--评论翻页条输出-->
          <div class="pagebar commentpagebar">
          <?php  include $this->GetTemplate('pagebar');  ?>
          </div>
          <label id="AjaxCommentEnd"></label>

	</div>
</div>
<div class="pl-form-wrap">
      <!--评论框-->
     <?php  include $this->GetTemplate('commentpost');  ?>

     
	
</div>
<?php } ?>
