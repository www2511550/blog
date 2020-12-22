{template:header}
<div class="container">
   <div class="wrap-left pull-left">
    {if $article.Type==ZC_POST_TYPE_ARTICLE}
    {template:post-single}
    {else}
    {template:post-page}
    {/if}
   </div>
    <!--  侧栏 --> 
     {if $zbp->Config('fanghuxiu')->Ceon=='1'} 
    <div class="wrap-right pull-right">
    {template:sidebar}
    </div>
    {else}
    <div class="wrap-right pull-right">
    {template:right}
    </div>
    {/if}
    
</div>
 <!-- 页脚 -->
{template:footer}
