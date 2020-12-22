<ul>
	<li class="commentone">
		<div class="image">
			<img src="{$comment.Author.Avatar}" alt="{$comment.Author.Name}" />
		</div>
		<ul>
			<li>
				<span><a href="{$comment.Author.HomePage}" target="_blank">{$comment.Author.StaticName}</a></span>&nbsp;&nbsp;&nbsp;
				<span>{$comment.Time('Y-m-d H:i:s')}</span>
				{if $zbp->user->Level=='1'}<span>&nbsp;&nbsp;&nbsp;<i></i> {$comment.IP}</span><span>&nbsp;&nbsp;&nbsp;<i></i> {$comment.Author.Email}</span>{/if}
				<span><i style="color:#f60;" "></i> <a href="#comment" onclick="RevertComment('{$comment.ID}')">&nbsp;&nbsp;&nbsp;&nbsp;回复此评论</a></span>
			</li>
			<li>
				{$comment.Content}              
				{foreach $comment.Comments as $comment}
				{template:comment}
				{/foreach}
			</li>
		</ul>
		
	</li>
</ul>