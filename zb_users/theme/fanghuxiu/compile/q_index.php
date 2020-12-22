

<div class="container">

    <div class="top-box-ad top-box-ad-banner clearfix"><!-- 广告位：首页顶部通栏-新版虎嗅 -->
	<?php  echo $zbp->Config('fanghuxiu')->Bannerad;  ?>
	</div>    <div class="wrap-left pull-left">
                <!--一级banner图-->
                <?php 
                    $tuiid = $zbp->Config('fanghuxiu')->Tui1;
                 ?> 
                 <?php  $tui=GetPost((int)$tuiid);  ?>
				
        <div class="big-pic">
            <div class="back-img">

                <img src="<?php  echo fanghuxiu_FirstIMG($tui,800,450);  ?>" alt="<?php  echo $tui->Title;  ?>">
            </div>
            <a href="<?php  echo $tui->Url;  ?>" target="_blank">
                <div class="big-pic-content">
                    <h1 class="t-h1"><?php  echo $tui->Title;  ?></h1>
                </div>
            </a>
        </div>
        
        <!--二级banner图-->
		        <?php 
                    $tuileft = $zbp->Config('fanghuxiu')->Tui2;
                 ?> 
                 <?php  $tleft=GetPost((int)$tuileft);  ?>
                <div class="big2-pic pull-left">
            <a href="<?php  echo $tleft->Url;  ?>" class="back-img" target="_blank">
                <img src="<?php  echo fanghuxiu_FirstIMG($tleft,385,217);  ?>" alt="<?php  echo $tleft->Title;  ?>">
            </a>
            <a href="<?php  echo $tleft->Url;  ?>" target="_blank">
                <div class="big2-pic-content">
                    <h2 class="t-h1"><?php  echo $tleft->Title;  ?></h2>
                </div>
            </a>
        </div>
               <?php 
                    $tuiright = $zbp->Config('fanghuxiu')->Tui3;
                 ?> 
                 <?php  $tright=GetPost((int)$tuiright);  ?>
                <div class="big2-pic pull-right">
            <a href="<?php  echo $tright->Url;  ?>" class="back-img" target="_blank">
                <img src="<?php  echo fanghuxiu_FirstIMG($tright,385,217);  ?>" alt="<?php  echo $tright->Title;  ?>">
            </a>
            <a href="<?php  echo $tright->Url;  ?>" target="_blank">
                <div class="big2-pic-content">
                    <h2 class="t-h1"><?php  echo $tright->Title;  ?></h2>
                </div>
            </a>
        </div>
        
                <!--文章列表-->
        <div class="mod-info-flow">
		 <?php  foreach ( $articles as $article) { ?>
              <div class="mod-b mod-art " >
                    <div class="mod-thumb">
                     <a class="transition" href="<?php  echo $article->Url;  ?>" target="_blank">

                        <img src="<?php  echo fanghuxiu_FirstIMG($article,220,143);  ?>" alt="<?php  echo $article->Title;  ?>">
                     </a>
                    </div>
                    <div class="mob-ctt">
                        <h3><a href="<?php  echo $article->Url;  ?>" class="transition" target="_blank"><?php  echo $article->Title;  ?></a></h3>
                        <div class="mob-author">
                            <div class="author-face">
                                <a href="<?php  echo $article->Author->Url;  ?>" target="_blank"><img src="<?php  echo $article->Author->Avatar;  ?>"></a>
                            </div>
                                                        <a href="<?php  echo $article->Author->Url;  ?>" target="_blank"><span class="author-name  "><?php  echo $article->Author->Name;  ?></span></a>

                            <span class="time"><?php  echo fanghuxiu_TimeAgo($article->Time());  ?></span>
                            <i class="icon icon-cmt"></i><em><?php  echo $article->CommNums;  ?></em>
                            <i class="icon icon-fvr"></i><em><?php  echo $article->ViewNums;  ?></em>
                            
                        </div>
                        <div class="mob-sub"><?php  echo fanghuxiu_jj($article,1,50,'...');  ?></div>
                    </div>
                </div>
             <?php }   ?>                                                                                                
         </div>
        


  <!-- 分页开始 -->
       <div class="pagebar">
    <?php  include $this->GetTemplate('pagebar');  ?>
	   </div>
  <!-- 分页结束 -->
        
    </div>
<div class="wrap-right pull-right">
 <?php  include $this->GetTemplate('right');  ?>
 </div>
    