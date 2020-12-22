<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="renderer" content="webkit">
<meta name="applicable-device" content="pc,mobile">
<meta name="HandheldFriendly" content="true"/>
<meta name="robots" content="index,follow"/>
<?php  include $this->GetTemplate('seo');  ?>
<link rel="shortcut icon" href="<?php zbpNana_Get_Logo('favicon','ico'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!--[if lt IE 9]><script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/html5-css3.js"></script><![endif]-->
<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
<script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/slides.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/stickySidebar.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/script.js" type="text/javascript"></script>
<?php if ($zbp->Config('zbpNana')->Displaytb1=='1' || $zbp->Config('zbpNana')->Displaytb2=='1') { ?>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/flexisel.js" type="text/javascript"></script>
<?php } ?>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/scrollmonitor.js" type="text/javascript"></script>
<?php if ($zbp->Config('zbpNana')->cblbiaoqian=='3' && $zbp->Config('zbpNana')->cebianlanbj !== '3') { ?>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/3dtag.js" type="text/javascript"></script>
<?php } ?>
<!--[if IE]>
<div class="tixing"><strong>温馨提示：感谢您访问本站，经检测您使用的浏览器为IE浏览器，为了获得更好的浏览体验，请使用Chrome、Firefox或其他浏览器。</strong>
</div>
<![endif]-->
<link rel="stylesheet" id="font-awesome-four-css" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/fonts/font-awesome.min.css" type='text/css' media='all'/>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" /> 
<?php } ?>
<?php  echo $zbp->Config('zbpNana')->baidutongji;  ?>
</head>
<body class="<?php  echo $type;  ?>">
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header">
		<nav id="top-header">
			<div class="top-nav">
				<div id="user-profile">
				<?php  echo $zbp->Config('zbpNana')->zuoshangjue;  ?>
				</div>	
				<div class="menu-youshangjiao-container">
					<ul id="menu-youshangjiao" class="top-menu"><?php  echo $zbp->Config('zbpNana')->youshangjue;  ?></ul>
				</div>		
			</div>
		</nav><!-- #top-header -->
		<div id="menu-box">
			<div id="top-menu">
				<div class="logo-site">
					<<?php if ($type=='index') { ?>h1<?php }else{  ?>div<?php } ?> class="site-title">
						<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>-<?php  echo $title;  ?>">
							<img src="<?php zbpNana_Get_Logo('logo','png'); ?>" width="220" height="50" alt="<?php  echo $name;  ?>-<?php  echo $title;  ?>" title="<?php  echo $name;  ?>-<?php  echo $title;  ?>"/>
							<span><?php  echo $name;  ?></span>
						</a>
					</<?php if ($type=='index') { ?>h1<?php }else{  ?>div<?php } ?>>
				</div><!-- .logo-site -->			
				<span class="nav-search"><i class="fa fa-search"></i></span>
				<div id="site-nav-wrap">
					<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close">X</a></div>
					<nav id="site-nav" class="main-nav"> 
						<a href="#sidr-main" id="navigation-toggle" class="bars"><i class="fa fa-bars"></i></a> 
						<div id="divNavBar-main">
							<ul id="menu-main" class="down-menu nav-menu">
								<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
							</ul>
						</div> 
					</nav>
				</div><!-- #site-nav-wrap -->
			</div><!-- #top-menu -->
		</div><!-- #menu-box -->
	</header><!-- #masthead -->
<div id="main-search">
	<div id="searchbar">
	<form id="searchform" name="search" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
	<input type="text" name="q" placeholder="输入搜索内容"> 
	<button type="submit" id="searchsubmit">搜索</button>
	</form>
	</div>
	<div id="sstags" class="plxiaoshi">
	<ul id="alert_box_tags">
	<?php echo zbpNana_remenTags(); ?>
	<div class="clear"></div>
            </ul>
			<ul id="alert_box_more">
                <li class="alert_box_more_left"></li>
                <p class="alert_box_more_main"><a href="<?php  echo $zbp->Config('zbpNana')->rementags_url;  ?>"  target="_blank">查看更多热门标签</a></p>
                <li class="alert_box_more_right"></li>
            </ul>
</div>		
	<div class="clear"></div>
</div>
<?php if ($type=='index') { ?>
<?php if ($zbp->Config('zbpNana')->syggl_kg=='1') { ?>
<nav class="breadcrumb" style="height:1px;line-height:1px;"></nav>
<?php }else{  ?>
<nav class="breadcrumb">	
<div id="scrolldiv">
	<div class="bull"></div>
		<div class="scrolltext">
			<ul style="margin-top: 0px;"><?php  echo $zbp->Config('zbpNana')->gonggaolan;  ?></ul>
		</div>
</div> 
<script type="text/javascript">$(document).ready(function() {$("#scrolldiv").textSlider({line: 1, speed: 1000, timer: 3000});})</script>
</nav>	
<?php } ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('breadcrumb');  ?>
<?php } ?>