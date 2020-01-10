<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>搜索 - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg flex"> <a href="javascript:history.go(-1)" class="back"><i class="icon"></i></a>
    <div class="search_txt flex flex_grow">
      <input type="text" class="text flex_grow" id="searchKey" onkeyup="if(event.keyCode==13){Javascript:search();}else{Javascript:liftSearch();}" value="" />
      <span class="close_txt" id="closeTxt"><i class="icon"></i></span>
      <div class="search_ul hide">
        <ul class="search_ul_txt">
          <li>王者荣耀</li>
          <li>绝地求生刺激战场</li>
          <li>阴阳师</li>
        </ul>
      </div>
    </div>
    <input type="hidden" id="baseUrl" value="/">
    <a href="javascript:void(0)" class="search2" id="dosearch"><i class="icon"></i></a> </header>
  <!-- 搜索首页 -->
  <div class="search_wrap bg">
    <div class="near_fridends">附近好友在玩：
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a>
	<?php
}
}
?>
    </div>
    <div class="tit flex">
      <h3 class="flex_grow">热门</h3>
      <a href="/game/" class="more">更多 &gt;</a> </div>
    <ul class="img_list flex">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,5,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <p class="name"><?=$bqr['title']?></p>
        <p class="size"><?=$bqr['size']?></p>
        </a></li>
<?php
}
}
?>
    </ul>
    <ul class="txt_list flex">
    </ul>
    <div class="green_line"></div>
    <div class="tit flex">
      <h3 class="flex_grow">手机应用</h3>
    </div>
    <ul class="txt_list flex">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,3,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
	<?php
}
}
?>
    </ul>
    <div class="green_line"></div>
    <div class="tit flex">
      <h3 class="flex_grow">手机游戏</h3>
    </div>
    <ul class="txt_list flex">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
	<?php
}
}
?>
    </ul>
    <div class="green_line"></div>
    <div class="tits"> <a href="/game/" target="_blank"><i class="icon_i"></i> 更多游戏</a> </div>
  </div>
  
  <!-- 搜索列表 -->
  <div class="search_list_wrap_div bg hide">
    <ul class="search_list_wrap">
    </ul>
  </div>
  <div class="h20"></div>
<footer>
  <div class="footer w1200">
    <div class="bottom_footer"> 游戏版权归原作者享有，如无意之中侵犯了您的版权，请按照《版权保护投诉指引》</a> 来信告知，本站将应您的要求删除<br>
      健康游戏提示：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活<br>
          <div class="footer-links"> <a href="/support/about.html" rel="nofollow" target="_blank">关于本站</a> <a href="/link/" rel="nofollow" target="_blank">友情链接</a> <a href="/support/contact.html" rel="nofollow" target="_blank">联系我们</a> <a href="/support/jzjh.html" rel="nofollow" target="_blank">家长监护</a> <a href="/ruku.html" rel="nofollow" target="_blank">游戏入库</a></div>
      Copyright 2019-2025 <a href="/" class="s"><strong><?=$public_r['add_www_kaifamei_com_www']?></strong></a>. Some rights reserved.<?=$public_r['add_www_kaifamei_com_name']?> 版权所有 </div>
  </div>
</footer>
<script type="text/javascript" src="/xz59/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/xz59/js/index.js"></script> 
</div>
<script src="/kaifamei/js/zepto.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="/kaifamei/js/fastclick.min.js" type="text/javascript"></script> 
<script src="/kaifamei/js/swiper.min.js" type="text/javascript"></script> 
<script src="/kaifamei/js/index.js" type="text/javascript"></script>
</body>
</html>