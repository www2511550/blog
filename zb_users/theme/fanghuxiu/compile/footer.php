
<footer class="footer">
	<div class="container copy-right">
         <div class="footer-tag-list">
             <?php  echo $zbp->Config('fanghuxiu')->Footnav;  ?>
            
          </div>
          <span><?php  echo $copyright;  ?>
            <i class="footer-bull">&bull;</i><em class="bull-right">Powed by <?php  echo $zblogphpabbrhtml;  ?>.Theme by <a href="http://www.ynjuyi.com/">千寻广告</a>
          </span>
          <div class="footer-icon-list pull-right">
                 <ul>
                    <a href=" <?php  echo $zbp->Config('fanghuxiu')->Weibo;  ?>" target="_blank"><li><i class="icon icon-footer icon-footer-wb"></i></li></a>
                    <a href="javascript:" onMouseOut="hideImg()"  onmouseover="showImg()">
                    <li class="Qr-code-footer">
                        <div class="app-qrcode" id="wxImg">
                            <img src=" <?php  echo $zbp->Config('fanghuxiu')->Weixin;  ?>">
                        </div>
                        <i class="icon icon-footer icon-footer-wx"></i>
                    </li>
                   </a>     
                   <a href="<?php  echo $feedurl;  ?>" target="_blank"><li><i class="icon icon-footer icon-footer-rss"></i></li></a>
               </ul>
          </div>
    </div>
</footer>
<script type="text/javascript">
function  showImg(){
document.getElementById("wxImg").style.display='block';
}
function hideImg(){
document.getElementById("wxImg").style.display='none';
}
</script>
<!--[if lt IE 10]>

    <script type="text/javascript">

    if( !('placeholder' in document.createElement('input')) ){
        $('input[placeholder],textarea[placeholder]').each(function(){
            var that = $(this),
                text= that.attr('placeholder');
            if(that.val()===""){
                that.val(text).addClass('placeholder');
            }
            that.focus(function(){
                if(that.val()===text){
                    that.val("").removeClass('placeholder');
                }
            })
                .blur(function(){
                    if(that.val()===""){
                        that.val(text).addClass('placeholder');
                    }
                })
                .closest('form').submit(function(){
                    if(that.val() === text){
                        that.val('');
                    }
                });
        });
    }
</script>
<![endif]-->

<?php  echo $footer;  ?></body>
</html>
