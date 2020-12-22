           <div class="mod-b mod-art mod-b-push">
                    <a class="transition" href="{$article.Url}" target="_blank">
                        <div class="mod-thumb">
                            <img src="{fanghuxiu_FirstIMG($article,500,281)}" alt="{$article.Title}">
                        </div>
                    </a>
                    <div class="mob-ctt">
                        <h3><a href="{$article.Url}" class="transition" target="_blank">{$article.Title}</a></h3>
                        <div class="mob-author">
                                                        <div class="author-face">
                                <a href="{$article.Author.Url}" target="_blank"><img src="{$article.Author.Avatar}"></a>
                            </div>
                                                        <a href="{$article.Author.Url}" target="_blank"> <span class="author-name">{$article.Author.Name}</span></a>
                            <span class="time">{fanghuxiu_TimeAgo($article.Time())}</span>
                        </div>
                        <div class="mob-sub">{fanghuxiu_jj($article,1,50,'...')}</div>
                    </div>
                </div>