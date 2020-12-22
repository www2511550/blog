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
            
			
        

    