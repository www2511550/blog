
     <!--文章内容页-->
     <div class="article-wrap">
         <h1 class="t-h1">{$article.Title}</h1>
         <div class="article-author">
             <span class="author-name">{$article.Author.Name}</span>
             <i class="icon icon-line"></i>
             <span class="article-time">{$article.Time('Y年m月d日')}</span>
             <span class="article-share">{$article.ViewNums}0</span>
             <span class="article-pl">评论{$article.CommNums}</span>
         </div>
         <div id="article_content" class="article-content-wrap">
              {$article.Content}              
              <div class="neirong-shouquan">
                <span>本文由 <a href="{$article.Author.Url}" target="_blank">{$article.Author.Name}</a>发表。转载请注明出处(<a href="{$host}">{$name}</a>)及本页链接。原文链接{$article.Url}<br></span>
              </div>
         </div>
         <div class="tag-box ">
             <ul class="transition">
			 {foreach $article.Tags as $tag}
             <a href="{$tag.Url}" target="_blank"><li class="transition">{$tag.Name}</li></a>{/foreach}
             </ul>
         </div>
         <div class="feed-box-ad article-box-ad"><!-- 广告位：内容页内容底部 -->
			{$zbp->Config('fanghuxiu')->Footad}
         </div>
	     <!-- 相关文章 -->
         <div class="interested-article-box">
                <span class="span-mark-author">相关文章</span>
                <div class="article-list-box">
                   	{foreach GetList(6,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}
                        <div class="article-box transition">
                            <a href="{$related.Url}" target="_blank">
                                  <img src="{fanghuxiu_FirstIMG($related,218,124)}">
                            </a>
                            <div class="article-title">
                                 <a href="{$related.Url}" target="_blank">{$related.Title}</a>
                            </div>
                        </div>
                     {/foreach}
               </div>
        </div>
            <!--公共评论-->
        <div class="pl-wrap" id="pl-wrap-article">
			{if !$article.IsLock}
            {template:comments}
            {/if}
		</div>

    </div>



