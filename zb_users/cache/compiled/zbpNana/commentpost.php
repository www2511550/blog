
<div id="divCommentPost" class="comment-divCommentPost">
			<h3 id="reply-title" class="comment-reply-title">发表评论
			<small><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;">取消回复</a></small>
			</h3>
			<form action="<?php  echo $article->CommentPostUrl;  ?>" method="post" id="frmSumbit" target="_self" >
			<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
			<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
			<?php if ($user->ID>0) { ?>
				<?php $avatar = md5(strtolower($user->Email));
				$zmavatar=zbpNana_tt_touxiang_generate_first_letter_uri($user->StaticName); ?>
				<div class="user_avatar"><img alt="<?php  echo $user->StaticName;  ?>" src="http://cn.gravatar.com/avatar/<?php  echo $avatar;  ?>&amp;r=X&amp;s=50?d=404" onerror='javascript:this.src="<?php  echo $zmavatar;  ?>";this.onerror=null;' class="avatar avatar-50 photo" height="50" width="50">当前用户：
				<a href="<?php  echo $user->Url;  ?>"><?php  echo $user->StaticName;  ?></a>
				<a href="<?php  echo $host;  ?>zb_system/cmd.php?act=logout" title="退出">&nbsp;退出</a>
		<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->StaticName;  ?>" />
		<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
		<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />
				</div>
			<?php }else{  ?>
				<div id="comment-author-info">
					<p class="comment-form-author">
						<input type="text" name="inpName" id="inpName" class="commenttext" value="<?php  echo $user->Name;  ?>" tabindex="1" />
						<label for="author">昵称</label>
					</p>
					<p class="comment-form-email">
						<input type="text" name="inpEmail" id="inpEmail" class="commenttext" value="<?php  echo $user->Email;  ?>" tabindex="2" />
						<label for="email">邮箱</label>
					</p>
					<p class="comment-form-url">
						<input type="text" name="inpHomePage" id="inpHomePage" class="commenttext" value="<?php  echo $user->HomePage;  ?>" tabindex="3" />
						<label for="url">网址</label>
					</p>
					<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> 
<img style="width:<?php  echo $option['ZC_VERIFYCODE_WIDTH'];  ?>px;height:<?php  echo $option['ZC_VERIFYCODE_HEIGHT'];  ?>px;cursor:pointer;" src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/></p><?php } ?>
				</div>
				<?php } ?>

				<p class="smiley-box">
<a href="javascript:grin('[face_01]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_01.gif" alt="" title="呵呵" /></a><a href="javascript:grin('[face_02]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_02.gif" alt="" title="嘻嘻" /></a><a href="javascript:grin('[face_03]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_03.gif" alt="" title="哈哈" /></a><a href="javascript:grin('[face_04]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_04.gif" alt="" title="偷笑" /></a><a href="javascript:grin('[face_05]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_05.gif" alt="" title="挖鼻屎" /></a><a href="javascript:grin('[face_06]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_06.gif" alt="" title="互粉" /></a><a href="javascript:grin('[face_07]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_07.gif" alt="" title="吃惊" /></a><a href="javascript:grin('[face_08]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_08.gif" alt="" title="疑问" /></a><a href="javascript:grin('[face_09]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_09.gif" alt="" title="怒火" /></a><a href="javascript:grin('[face_10]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_10.gif" alt="" title="睡觉" /></a><a href="javascript:grin('[face_11]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_11.gif" alt="" title="鼓掌" /></a><a href="javascript:grin('[face_12]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_12.gif" alt="" title="抓狂" /></a><a href="javascript:grin('[face_13]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_13.gif" alt="" title="黑线" /></a><a href="javascript:grin('[face_14]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_14.gif" alt="" title="阴险" /></a><a href="javascript:grin('[face_15]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_15.gif" alt="" title="懒得理你" /></a><a href="javascript:grin('[face_16]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_16.gif" alt="" title="嘘" /></a><a href="javascript:grin('[face_17]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_17.gif" alt="" title="亲亲" /></a><a href="javascript:grin('[face_18]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_18.gif" alt="" title="可怜" /></a><a href="javascript:grin('[face_19]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_19.gif" alt="" title="害羞" /></a><a href="javascript:grin('[face_20]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_20.gif" alt="" title="思考" /></a><a href="javascript:grin('[face_21]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_21.gif" alt="" title="失望" /></a><a href="javascript:grin('[face_22]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_22.gif" alt="" title="挤眼" /></a><a href="javascript:grin('[face_23]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_23.gif" alt="" title="委屈" /></a><a href="javascript:grin('[face_24]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_24.gif" alt="" title="太开心" /></a><a href="javascript:grin('[face_26]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_25.gif" alt="" title="哈欠" /></a><a href="javascript:grin('[face_26]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_26.gif" alt="" title="晕" /></a><a href="javascript:grin('[face_27]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_27.gif" alt="" title="泪" /></a><a href="javascript:grin('[face_28]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_28.gif" alt="" title="困" /></a><a href="javascript:grin('[face_29]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_29.gif" alt="" title="悲伤" /></a><a href="javascript:grin('[face_30]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_30.gif" alt="" title="衰" /></a><a href="javascript:grin('[face_31]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_31.gif" alt="" title="围观" /></a><a href="javascript:grin('[face_32]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_32.gif" alt="" title="给力" /></a><a href="javascript:grin('[face_33]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_33.gif" alt="" title="囧" /></a><a href="javascript:grin('[face_34]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_34.gif" alt="" title="威武" /></a><a href="javascript:grin('[face_35]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_35.gif" alt="" title="OK" /></a><a href="javascript:grin('[face_36]')"><img src="<?php  echo $host;  ?>zb_users/theme/zbpNana/image/smilies/face_36.gif" alt="" title="赞" /></a><br />
		        </p>
		        <p class="comment-form-comment"><textarea id="txaArticle" name="txaArticle" rows="4" tabindex="4"></textarea></p>

				<p class="comment-tool"><span class="single-tag"><a class="smiley" href="" title="插入表情">表情</a></span></p>

				<p class="form-submit">
					<input id="submit" name="sumbit" type="submit" tabindex="5" value="提交评论" onclick="return zbp.comment.post()"/>
				</p>
			</form>
			<script type="text/javascript">
				document.getElementById("txaArticle").onkeydown = function (moz_ev){
				var ev = null;
				if (window.event){
				ev = window.event;
				}else{
				ev = moz_ev;
				}
				if (ev != null && ev.ctrlKey && ev.keyCode == 13){
				document.getElementById("submit").click();}
				}
			</script>
		</div>




