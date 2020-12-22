<span class="span-mark-author active">{if $user.ID>0}{$user.StaticName}{/if}发表评论</span><a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;"><small>取消回复</small></a>
<div class="pl-form-box pl-article-wrap">
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />	
{else}
	<p><input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="28" tabindex="1" placeholder="您的昵称" /> 昵称(必填)</p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="28" tabindex="2" placeholder="格式：xxx@xx.com"/> 邮箱(选填)</p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" size="28" tabindex="3" placeholder="网址前必须加http://"/> 网址(选填)</p>
     {if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<p>
        <input type="text" name="inpVerify" id="inpVerify" value="" size="28" tabindex="5" /><img src="{$article.ValidCodeUrl}" class="verifyimg" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();" /> <font color="#ff6f3d">必填</font></p>
    {/if}
{/if}
	<!--verify-->
	<p>正文(必填)</p>
	<p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return VerifyMessage()" class="button" /></p>
	</form>
	<p class="postbottom">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p>
</div>

