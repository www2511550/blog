<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/build.css">
    <script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
    <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="{$host}zb_users/theme/{$theme}/script/respond.min.js"></script>
    <script src="{$host}zb_users/theme/{$theme}/script/html5shiv.min.js"></script>
    <![endif]-->
    {if $type=='article'}
  <title>{$title}_{$article.Category.Name}_{$name}</title>
  {php}
    $aryTags = array();
    foreach($article->Tags as $key){
      $aryTags[] = $key->Name;
    }
    if(count($aryTags)>0){
        $keywords = implode(',',$aryTags);
    } else {
        $keywords = $zbp->name;
    }
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
  {/php}
  <meta name="keywords" content="{$keywords}" />
  <meta name="description" content="{$description}" />
  <meta name="author" content="{$article.Author.StaticName}" />
{elseif $type=='page'}
  <title>{$title}_{$name}_{$subname}</title>
  <meta name="keywords" content="{$title},{$name}" />
  {php}
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
  {/php}
  <meta name="description" content="{$description}" />
  <meta name="author" content="{$article.Author.StaticName}" />
{elseif $type=='index'}
  <title>{$name}{if $page>'1'}_第{$pagebar.PageNow}页{/if}_{$subname}</title>
  <meta name="Keywords" content="{$zbp->Config('fanghuxiu')->Webkeywords}" />
  <meta name="description" content="{$zbp->Config('fanghuxiu')->Webdescription}" />
  <meta name="author" content="{$zbp.members[1].StaticName}" />
{else}
  <title>{$title}_{$name}_第{$pagebar.PageNow}页</title>
  <meta name="Keywords" content="{$title},{$name}" />
  <meta name="description" content="{$title}_{$name}_当前是第{$pagebar.PageNow}页" />
  <meta name="author" content="{$zbp.members[1].StaticName}" />
{/if}
  
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" /> 
{/if}

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    
</head>
<body>

<!--[if lt IE 9]>
    <style>
        .search-box{
            background-color: #fff !important;
        }
        header .header-column{
            background-color: #fff !important;
        }
        header .navbar-right,header .navbar-left{
            margin-top: -15px;
        }
        .icon-search{
            position: relative;
            top: 18px;
        }
        body{
            border: none;
        }
        .praise-box-add,.icon-like-prompt,.icon-no-like-prompt{
            display: none;
        }
    </style>

    <script>
        function hasClass(element, className) {
            var reg = new RegExp('(\\s|^)'+className+'(\\s|$)');
            return element.className.match(reg);
        }
        function addClass(element, className) {
            if (!this.hasClass(element, className))
            {
                element.className += " "+className;
            }
        }
        function removeClass(element, className) {
            if (hasClass(element, className)) {
                var reg = new RegExp('(\\s|^)'+className+'(\\s|$)');
                element.className = element.className.replace(reg,' ');
            }
        }
        var search = document.getElementById('search-box');
        addClass(search, 'search-box-last');
        addClass(search, 'hide');
    </script>

<![endif]--><header id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <a href="/"><img src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="logo.png" /></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            {module:navbar}
        </ul>
        <ul class="nav navbar-nav navbar-right">
		   <form name="search" method="post" action="{$host}zb_system/cmd.php?act=search">
		                <input class="input" name="q" type="text" placeholder="输入关键词..." />
		   			 <input class="icon icon-search js-show-search-box" value="提交" name="submit" type="image" src="{$host}zb_users/theme/{$theme}/style/img/icon.png" /> 
           </form>
                       
        </ul>
    </div>
   
</header>

