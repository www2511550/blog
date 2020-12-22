           <div class="mod-b mod-art mod-b-push">
                    <a class="transition" href="<?php  echo $article->Url;  ?>" target="_blank">
                        <div class="mod-thumb">
                            <img src="<?php  echo fanghuxiu_FirstIMG($article,500,281);  ?>" alt="<?php  echo $article->Title;  ?>">
                        </div>
                    </a>
                    <div class="mob-ctt">
                        <h3><a href="<?php  echo $article->Url;  ?>" class="transition" target="_blank"><?php  echo $article->Title;  ?></a></h3>
                        <div class="mob-author">
                                                        <div class="author-face">
                                <a href="<?php  echo $article->Author->Url;  ?>" target="_blank"><img src="<?php  echo $article->Author->Avatar;  ?>"></a>
                            </div>
                                                        <a href="<?php  echo $article->Author->Url;  ?>" target="_blank"> <span class="author-name"><?php  echo $article->Author->Name;  ?></span></a>
                            <span class="time"><?php  echo fanghuxiu_TimeAgo($article->Time());  ?></span>
                        </div>
                        <div class="mob-sub"><?php  echo fanghuxiu_jj($article,1,50,'...');  ?></div>
                    </div>
                </div>