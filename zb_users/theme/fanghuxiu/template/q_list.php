<div class="container">

    <div class="wrap-left pull-left">
		 <div class="mod-info-flow">
{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}

          
		  </div>
    <div class="pagebar">
    {template:pagebar}
	</div>
 </div>
        
 
        
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