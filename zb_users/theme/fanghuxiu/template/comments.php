{if $socialcomment}
{$socialcomment}
{else}

<div class="pl-form-wrap">
    {if $article.CommNums>0}
    <span class="span-mark-author active">评论列表</span>
    {/if}
    <div class="pl-form-box pl-article-wrap">
         <label id="AjaxCommentBegin"></label>
         <!--评论输出-->
         {foreach $comments as $key => $comment}
         {template:comment}
         {/foreach}

          <!--评论翻页条输出-->
          <div class="pagebar commentpagebar">
          {template:pagebar}
          </div>
          <label id="AjaxCommentEnd"></label>

	</div>
</div>
<div class="pl-form-wrap">
      <!--评论框-->
     {template:commentpost}

     
	
</div>
{/if}
