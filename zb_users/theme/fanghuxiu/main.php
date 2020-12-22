<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('fanghuxiu')) {$zbp->ShowError(48);die();}
$blogtitle='主题配置';

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

if(isset($_POST['Logourl'])){
  $zbp->Config('fanghuxiu')->Webkeywords = $_POST['Webkeywords'];
  $zbp->Config('fanghuxiu')->Webdescription = $_POST['Webdescription'];
  $zbp->Config('fanghuxiu')->Logourl = $_POST['Logourl'];
  $zbp->Config('fanghuxiu')->Bannerad = $_POST['Bannerad'];
  $zbp->Config('fanghuxiu')->Tui1 = $_POST['Tui1'];
  $zbp->Config('fanghuxiu')->Tui2 = $_POST['Tui2'];
  $zbp->Config('fanghuxiu')->Tui3 = $_POST['Tui3'];
  $zbp->Config('fanghuxiu')->Hotart = $_POST['Hotart'];
  $zbp->Config('fanghuxiu')->Ceon = $_POST['Ceon'];
  $zbp->Config('fanghuxiu')->Footnav = $_POST['Footnav'];
  $zbp->Config('fanghuxiu')->Footad = $_POST['Footad'];
  $zbp->Config('fanghuxiu')->Weibo = $_POST['Weibo'];
  $zbp->Config('fanghuxiu')->Weixin = $_POST['Weixin'];
  $zbp->SaveConfig('fanghuxiu');
  $zbp->ShowHint('good');
}
?>
<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
  <div id="divMain2">
  <form id="form1" name="form1" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
  <th width="25%"><p align="center">配置说明</p></th>

  </tr>
    <tr>
    <td><label for="Webkeywords"><p align="center">网站关键词</p></label></td>
    <td><p align="left"><textarea name="Webkeywords" type="text" id="Webkeywords" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Webkeywords;?></textarea></p></td>
  <td><p align="left">输入网站关键词，多个词用半角逗号隔开</p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Webdescription"><p align="center">网站描述</p></label></td>
    <td><p align="left"><textarea name="Webdescription" type="text" id="Webdescription" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Webdescription;?></textarea></p></td>
  <td><p align="left">输入网站描述</p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Logourl"><p align="center">网站LOGO</p></label></td>
    <td><p align="left"><textarea name="Logourl" type="text" id="Logourl" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Logourl;?></textarea></p></td>
  <td><p align="left">网站LOGO地址，大小为220*60</p></td>
  </tr>
  
  <tr>
    <td><label for="Bannerad"><p align="center">首页通栏广告位</p></label></td>
    <td><p align="left"><textarea name="Bannerad" type="text" id="Bannerad" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Bannerad;?></textarea></p></td>	
  <td><p align="left">请输入首页通栏广告位代码</p></td>
  </tr>

    <tr>
    <td><label for="Tui1"><p align="center">首页推广文章（大）</p></label></td>
    <td><p align="left"><textarea name="Tui1" type="text" id="Tui1" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Tui1;?></textarea></p></td>	
  <td><p align="left">请输入首页推广文章ID*仅限1个</p></td>
  </tr>
  
      

  <tr>
    <td><label for="Tui2"><p align="center">首页推广文章（左）</p></label></td>
    <td><p align="left"><textarea name="Tui2" type="text" id="Tui2" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Tui2;?></textarea></p></td>	
  <td><p align="left">请输入首页推广文章ID</p></td>
  </tr>

  <tr>
    <td><label for="Tui3"><p align="center">首页推广文章（右）</p></label></td>
    <td><p align="left"><textarea name="Tui3" type="text" id="Tui3" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Tui3;?></textarea></p></td>	
  <td><p align="left">请输入首页推广文章ID</p></td>
  </tr>

  <tr>
    <td><label for="Hotart"><p align="center">侧栏热评文章</p></label></td>
    <td><p align="left"><textarea name="Hotart" type="text" id="Hotart" style="width:98%;"><?php echo $zbp->Config('fanghuxiu')->Hotart;?></textarea></p></td>	
  <td><p align="left">侧栏热评文章ID*仅限1个</p></td>
  </tr>

  <tr>
    <td><label for="Ceon"><p align="center">调用系统侧栏</p></label></td>
    <td><p>启用开关*开关打开调用系统侧栏，开关关闭则调用主题自带侧栏<input name="Ceon" type="text" value="<?php echo $zbp->Config('fanghuxiu')->Ceon; ?>" class="checkbox" style="display:none;" /></p></td>	
  <td><p align="left">作用范围：列表页和文章页</p></td>
  </tr>

  <tr>
    <td><label for="Footnav"><p align="center">脚部导航栏</p></label></td>
    <td><p align="left"><textarea name="Footnav" type="text" id="Footnav" style="width:98%; height:100px;"><?php echo $zbp->Config('fanghuxiu')->Footnav;?></textarea></p></td>	
  <td><p align="left">请输入脚步导航栏代码</p></td>
  </tr>
        
  <tr>
    <td><label for="Footad"><p align="center">文章底部广告</p></label></td>
    <td><p align="left"><textarea name="Footad" type="text" id="Footad" style="width:98%; height:100px;"><?php echo $zbp->Config('fanghuxiu')->Footad;?></textarea></p></td>	
  <td><p align="left">请输入文章底部广告代码</p></td>
  </tr>
  
  <tr>
    <td><label for="Weibo"><p align="center">微博地址</p></label></td>
    <td><p align="left"><textarea name="Weibo" type="text" id="Weibo" style="width:98%; height:100px;"><?php echo $zbp->Config('fanghuxiu')->Weibo;?></textarea></p></td>	
  <td><p align="left">请输入微博地址</p></td>
  </tr>

  <tr>
    <td><label for="Weixin"><p align="center">微信二维码</p></label></td>
    <td><p align="left"><textarea name="Weixin" type="text" id="Weixin" style="width:98%; height:100px;"><?php echo $zbp->Config('fanghuxiu')->Weixin;?></textarea></p></td>	
  <td><p align="left">请输入微信二维码地址</p></td>
  </tr>


</table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>
<br />
  </div>
</div>
<script type="text/javascript">ActiveTopMenu("topmenu_fanghuxiu");</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>