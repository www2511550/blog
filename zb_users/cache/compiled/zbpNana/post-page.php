
<article id="post-<?php  echo $article->ID;  ?>" class="post-<?php  echo $article->ID;  ?> post type-page status-publish hentry">

	<header class="entry-header">
		<h1 class="entry-title"><?php  echo $article->Title;  ?></h1>	
						<div class="single_info">
							<span class="date"><?php  echo $article->Time('Y-m-d');  ?>&nbsp;</span>
							<span class="views">  阅读 <?php  echo $article->ViewNums;  ?> 次  </span>
							<span class="comment">评论 <?php  echo $article->CommNums;  ?> 条</span>		
							<?php if ($user->ID>0) { ?><span class="edit"><a href="<?php  echo $host;  ?>zb_system/cmd.php?act=PageEdt&id=<?php  echo $article->ID;  ?>" rel="nofollow">编辑</a></span><?php } ?>
						</div>						
	</header><!-- .entry-header -->
<?php if ($zbp->Config('zbpNana')->DisplayAd4=='1') { ?>
<div id="abcbt" class="abc-pc abc-site">
	<?php if (zbpNana_is_mobile()) { ?>
		<?php  echo $zbp->Config('zbpNana')->Adm4;  ?>
	<?php }else{  ?>
		<?php  echo $zbp->Config('zbpNana')->Ad4;  ?>
	<?php } ?>
</div>
<?php } ?>
	<div class="entry-content">
					<div class="single-content">									
					<?php  echo $article->Content;  ?>	
	</div>
<div class="clear"></div>
<?php  include $this->GetTemplate('social');  ?>			
<div class="clear"></div>
	</div><!-- .entry-content -->

	</article><!-- #post -->	
<?php if ($zbp->Config('zbpNana')->DisplayAd6=='1') { ?>
<div id="abcpl" class="abc-pc abc-site">
	<?php if (zbpNana_is_mobile()) { ?>
		<?php  echo $zbp->Config('zbpNana')->Adm6;  ?>
	<?php }else{  ?>
		<?php  echo $zbp->Config('zbpNana')->Ad6;  ?>
	<?php } ?>
</div>
<?php } ?>

	<div class="clear"></div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php }else{  ?>
<p class="no-comments">评论已关闭！</p>
<?php } ?>