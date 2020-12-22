
     <!--文章内容页-->
     <div class="article-wrap">
         <h1 class="t-h1"><?php  echo $article->Title;  ?></h1>
         <div class="article-author">
             <span class="author-name"><?php  echo $article->Author->Name;  ?></span>
             <i class="icon icon-line"></i>
             <span class="article-time"><?php  echo $article->Time('Y年m月d日');  ?></span>
             <span class="article-share"><?php  echo $article->ViewNums;  ?>0</span>
             <span class="article-pl">评论<?php  echo $article->CommNums;  ?></span>
         </div>
         <div id="article_content" class="article-content-wrap">
              <?php  echo $article->Content;  ?>              
              <div class="neirong-shouquan">
                <span>本文由 <a href="<?php  echo $article->Author->Url;  ?>" target="_blank"><?php  echo $article->Author->Name;  ?></a>发表。转载请注明出处(<a href="<?php  echo $host;  ?>"><?php  echo $name;  ?></a>)及本页链接。原文链接<?php  echo $article->Url;  ?><br></span>
              </div>
         </div>
         <div class="tag-box ">
             <ul class="transition">
			 <?php  foreach ( $article->Tags as $tag) { ?>
             <a href="<?php  echo $tag->Url;  ?>" target="_blank"><li class="transition"><?php  echo $tag->Name;  ?></li></a><?php }   ?>
             </ul>
         </div>
         <div class="feed-box-ad article-box-ad"><!-- 广告位：内容页内容底部 -->
			<?php  echo $zbp->Config('fanghuxiu')->Footad;  ?>
         </div>
	     <!-- 相关文章 -->
         <div class="interested-article-box">
                <span class="span-mark-author">相关文章</span>
                <div class="article-list-box">
                   	<?php  foreach ( GetList(6,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
                        <div class="article-box transition">
                            <a href="<?php  echo $related->Url;  ?>" target="_blank">
                                  <img src="<?php  echo fanghuxiu_FirstIMG($related,218,124);  ?>">
                            </a>
                            <div class="article-title">
                                 <a href="<?php  echo $related->Url;  ?>" target="_blank"><?php  echo $related->Title;  ?></a>
                            </div>
                        </div>
                     <?php }   ?>
               </div>
        </div>
            <!--公共评论-->
        <div class="pl-wrap" id="pl-wrap-article">
			<?php if (!$article->IsLock) { ?>
            <?php  include $this->GetTemplate('comments');  ?>
            <?php } ?>
		</div>

    </div>



