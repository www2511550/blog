<?php

RegisterPlugin("fanghuxiu","ActivePlugin_fanghuxiu");

function ActivePlugin_fanghuxiu(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','fanghuxiu_AddMenu');
}

function fanghuxiu_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/fanghuxiu/main.php","","topmenu_fanghuxiu"));
}

function fanghuxiu_TimeAgo( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return '刚刚';
    $interval = array (
        12 * 30 * 24 * 60 * 60  =>  '年前 ('.date('Y-m-d', $ptime).')',
        30 * 24 * 60 * 60       =>  '个月前 ('.date('m-d', $ptime).')',
        7 * 24 * 60 * 60        =>  '周前 ('.date('m-d', $ptime).')',
        24 * 60 * 60            =>  '天前',
        60 * 60                 =>  '小时前',
        60                      =>  '分钟前',
        1                       =>  '秒前'
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };}

function fanghuxiu_jj($as,$type,$long,$other) {
    global $zbp;
    $str = '';
    if ($type=='0') {
    $str .= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($as->Intro,'[nohtml]'),$long)).$other);
    } else {
    $str .= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other);
    }
    return $str;
}

function fanghuxiu_Thumbs($src,$width,$height) {
    global $zbp;
    if (!$zbp->CheckPlugin('sf_img1')) {
        $thumbs_src=$src;
    } else {
        $thumbs_src=SF_img1::getPicUrlBy($src,$width,$height,4);
    }
    return $thumbs_src;
}

function fanghuxiu_FirstIMG($as,$width,$height) {
    global $zbp;   
    $temp=mt_rand(1,4);
    $pattern = "/<img.*src\s*=\s*[\"|\']?\s*([^>\"\'\s]*)/i";   
    $content = $as->Content;
    preg_match_all($pattern,$content,$matchContent);
    if(isset($matchContent[1][0])){
        $temp=$matchContent[1][0];
    } else {
        $temp=$zbp->host . "zb_users/theme/" .$zbp->theme. "/include/random/" .$temp. ".jpg";
    }
    $src = fanghuxiu_Thumbs($temp,$width,$height);
    return $src;
}




function InstallPlugin_fanghuxiu(){
	global $zbp;
	if(!$zbp->Config('fanghuxiu')->HasKey('Version')){
		$zbp->Config('fanghuxiu')->Version = '1.0';
        $zbp->Config('fanghuxiu')->Webkeywords = '';
		$zbp->Config('fanghuxiu')->Webdescription = '';
		$zbp->Config('fanghuxiu')->Logourl = '<a href="#"><img src="'.$zbp->host.'zb_users/theme/fanghuxiu/include/logo.png" alt="祥云千寻广告" /></a>';    
		$zbp->Config('fanghuxiu')->Bannerad = '<a href="#"><img src="'.$zbp->host.'zb_users/theme/fanghuxiu/include/tu1.jpg"  alt="首页通栏广告" /></a>';
		$zbp->config('fanghuxiu')->Tui1 ='1';
        $zbp->config('fanghuxiu')->Tui2 ='1';
        $zbp->config('fanghuxiu')->Tui3 ='1';
        $zbp->config('fanghuxiu')->Hotart ='1';
		$zbp->config('fanghuxiu')->Ceon ='0';
		$zbp->config('fanghuxiu')->Footnav ='<a href="#" target="_blank">关于我们</a>
            <a href="#" target="_blank">加入我们</a>
            <a href="#" target="_blank">合作伙伴</a>';
        $zbp->config('fanghuxiu')->Footad ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/fanghuxiu/include/tu1.jpg"  alt="首页通栏广告" /></a>';
        $zbp->config('fanghuxiu')->Weibo ='';
		$zbp->config('fanghuxiu')->Weixin =''.$zbp->host.'zb_users/theme/fanghuxiu/include/weixin.png';
		$zbp->SaveConfig('fanghuxiu');
	}
}


//卸载主题
function UninstallPlugin_fanghuxiu(){
	global $zbp;
}


?>