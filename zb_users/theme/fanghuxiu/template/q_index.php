

<div class="container">

    <div class="top-box-ad top-box-ad-banner clearfix"><!-- 广告位：首页顶部通栏-新版虎嗅 -->
	{$zbp->Config('fanghuxiu')->Bannerad}
	</div>    <div class="wrap-left pull-left">
                <!--一级banner图-->
                {php}
                    $tuiid = $zbp->Config('fanghuxiu')->Tui1;
                {/php} 
                 {$tui=GetPost((int)$tuiid)}
				
        <div class="big-pic">
            <div class="back-img">

                <img src="{fanghuxiu_FirstIMG($tui,800,450)}" alt="{$tui.Title}">
            </div>
            <a href="{$tui.Url}" target="_blank">
                <div class="big-pic-content">
                    <h1 class="t-h1">{$tui.Title}</h1>
                </div>
            </a>
        </div>
        
        <!--二级banner图-->
		        {php}
                    $tuileft = $zbp->Config('fanghuxiu')->Tui2;
                {/php} 
                 {$tleft=GetPost((int)$tuileft)}
                <div class="big2-pic pull-left">
            <a href="{$tleft.Url}" class="back-img" target="_blank">
                <img src="{fanghuxiu_FirstIMG($tleft,385,217)}" alt="{$tleft.Title}">
            </a>
            <a href="{$tleft.Url}" target="_blank">
                <div class="big2-pic-content">
                    <h2 class="t-h1">{$tleft.Title}</h2>
                </div>
            </a>
        </div>
               {php}
                    $tuiright = $zbp->Config('fanghuxiu')->Tui3;
                {/php} 
                 {$tright=GetPost((int)$tuiright)}
                <div class="big2-pic pull-right">
            <a href="{$tright.Url}" class="back-img" target="_blank">
                <img src="{fanghuxiu_FirstIMG($tright,385,217)}" alt="{$tright.Title}">
            </a>
            <a href="{$tright.Url}" target="_blank">
                <div class="big2-pic-content">
                    <h2 class="t-h1">{$tright.Title}</h2>
                </div>
            </a>
        </div>
        
                <!--文章列表-->
        <div class="mod-info-flow">
		 {foreach $articles as $article}
              <div class="mod-b mod-art " >
                    <div class="mod-thumb">
                     <a class="transition" href="{$article.Url}" target="_blank">

                        <img src="{fanghuxiu_FirstIMG($article,220,143)}" alt="{$article.Title}">
                     </a>
                    </div>
                    <div class="mob-ctt">
                        <h3><a href="{$article.Url}" class="transition" target="_blank">{$article.Title}</a></h3>
                        <div class="mob-author">
                            <div class="author-face">
                                <a href="{$article.Author.Url}" target="_blank"><img src="{$article.Author.Avatar}"></a>
                            </div>
                                                        <a href="{$article.Author.Url}" target="_blank"><span class="author-name  ">{$article.Author.Name}</span></a>

                            <span class="time">{fanghuxiu_TimeAgo($article.Time())}</span>
                            <i class="icon icon-cmt"></i><em>{$article.CommNums}</em>
                            <i class="icon icon-fvr"></i><em>{$article.ViewNums}</em>
                            
                        </div>
                        <div class="mob-sub">{fanghuxiu_jj($article,1,50,'...')}</div>
                    </div>
                </div>
             {/foreach}                                                                                                
         </div>
        


  <!-- 分页开始 -->
       <div class="pagebar">
    {template:pagebar}
	   </div>
  <!-- 分页结束 -->
        
    </div>
<div class="wrap-right pull-right">
 {template:right}
 </div>
    