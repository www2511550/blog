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
            
			
        

    