

	            {php}
                    $hotpag = $zbp->Config('fanghuxiu')->Hotart;
                {/php} 
                 {$hot=GetPost((int)$hotpag)}
    <div class="box-topic">
        <div class="topic-title">
            <h2 class="pull-left">热议话题</h2>
            <span class="pull-right">{$hot.CommNums}人讨论</span>
        </div>
        <div class="topic-content">
            <a href="{$hot.Url}" class="back-img" target="_blank">
                <img src="{fanghuxiu_FirstIMG($hot,340,190)}" alt="{$hot.Title}">
            </a>
            <a href="{$hot.Url}"  target="_blank">
                <div class="topic-pic-title big2-pic-content"><strong class="t-h1">{$hot.Title}</strong></div>
            </a>
        </div>
    </div>


 

    <div class="box-moder hot-article">
        <h3><b>热文</b></h3>
        <span class="span-mark"></span>
        <ul>
                 {php}
			      $stime = time();
			      $ytime = 90*24*60*60;
			      $ztime = $stime-$ytime;
			      $order = array('log_ViewNums'=>'DESC');
			      $where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
			      $array = $zbp->GetArticleList(array('*'),$where,$order,array(8),'');
			     {/php}
			    {foreach $array as $article}

                            <li>
                    <div class="hot-article-img">
                        <a href="{$article.Url}" target="_blank">
						
                            <img src="{fanghuxiu_FirstIMG($article,280,156)}" alt="{$article.Title}">
                        </a>
                    </div>
                    <a href="{$article.Url}" class="transition" target="_blank">{$article.Title}</a>
                       </li>
               {/foreach}
          </ul>
    </div>
    <div class="placeholder"></div>

    </div>

