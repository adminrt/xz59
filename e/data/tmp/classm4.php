<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>手游合集_手机游戏合集_手游下载合集_手机游戏下载推荐-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="手游合集,手机游戏专区合集,游戏合集,安卓游戏合集,苹果游戏合集,安卓游戏合集下载,苹果游戏合集下载" />
<meta name="description" content="86下载网专题合集频道，为广大玩家整理了各类手游合集，手游分类合集，各位玩家可以在专题合集中，快速找到自己心仪的游戏，快来试试吧" />
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/zhuanti/"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/xz59/css/index.css" />
<link rel="stylesheet" type="text/css" href="/xz59/css/swiper.min.css" />
<script src="/xz59/js/main.js" type="text/javascript"></script>
</head>
<style>
    .tabBar ul li.Topic a i {
        background: url(/xz59/images/TopicChecked.png) !important;
        background-size: 100% 100% !important;
    }
</style>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg">
    <div> <a href="/" class="logo2"><i class="icon_i"></i></a></div>
</header>
  <div class="topic_list bg">
    <ul class="flex">
		 <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq("select * from www_kaifamei_com_enewszt where showzt=0 and ztimg<>'' order by ztid ASC  limit 12",8,24,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li class="flex"> <a href="/<?=$bqr['ztpath']?>" title="<?=$bqr['ztname']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['ztimg']?>" alt="<?=$bqr['ztname']?>">
        <div class="info flex">
          <p><?=$bqr['ztname']?></p>
          <p>共<?=$bqr['ztnum']?>款</p>
        </div>
        </a> </li>
      <?php
}
}
?>
    </ul>
  </div>
  <div class="h20"></div>
<footer>
    <div class="cont"><i class="icon_i"></i>
        <p>Copyright &copy; 2019-2025.<?=$public_r['add_www_kaifamei_com_name']?></p>
        <p><?=$public_r['add_www_kaifamei_com_beian']?></p>
    </div>
</footer>

<div class="tabBar">
    <ul>
        <li class="index">
            <a href="/">
                <i></i>
                <span>首页</span>
            </a>
        </li>

        <li class="GameModel">
            <a href="/game/">
                <i></i>
                <span>游戏</span>
            </a>
        </li>
        <li class="Topic">
            <a href="/zhuanti/">
                <i></i>
                <span>专题</span>
            </a>
        </li>

        <li class="information">
            <a href="/news/">
                <i></i>
                <span>资讯</span>
            </a>
        </li>
    </ul>
</div>
  <script src="/xz59/js/zepto.min.js" type="text/javascript"></script> 
  <script src="/xz59/js/fastclick.min.js" type="text/javascript"></script> 
  <script src="/xz59/js/swiper.min.js" type="text/javascript"></script> 
  <script src="/xz59/js/index.js" type="text/javascript"></script> 
  <script src="/xz59/js/pinchzoom.js" type="text/javascript"></script> 
</div>
</body>
</html>