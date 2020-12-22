<label id="cmt<?php  echo $comment->ID;  ?>"></label><ul>
	<li class="commentone">
		<div class="image">
			<img src="<?php  echo $comment->Author->Avatar;  ?>" alt="<?php  echo $comment->Author->Name;  ?>" />
		</div>
		<ul>
			<li>
				<span><a href="<?php  echo $comment->Author->HomePage;  ?>" target="_blank"><?php  echo $comment->Author->StaticName;  ?></a></span>&nbsp;&nbsp;&nbsp;
				<span><?php  echo $comment->Time('Y-m-d H:i:s');  ?></span>
				<?php if ($zbp->user->Level=='1') { ?><span>&nbsp;&nbsp;&nbsp;<i></i> <?php  echo $comment->IP;  ?></span><span>&nbsp;&nbsp;&nbsp;<i></i> <?php  echo $comment->Author->Email;  ?></span><?php } ?>
				<span><i style="color:#f60;" "></i> <a href="#comment" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">&nbsp;&nbsp;&nbsp;&nbsp;回复此评论</a></span>
			</li>
			<li>
				<?php  echo $comment->Content;  ?>              
				<?php  foreach ( $comment->Comments as $comment) { ?>
				<?php  include $this->GetTemplate('comment');  ?>
				<?php }   ?>
			</li>
		</ul>
		
	</li>
</ul>