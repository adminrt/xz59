<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>热门游戏排行榜_游戏排行榜大全_最好玩的游戏排行榜 - <?=$public_r['add_www_kaifamei_com_name']?></title>
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
<link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/rank"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
<header class="green_bg">
    <div> <a href="/" class="logo2"><i class="icon_i"></i></a></div>
</header>
  <div class="ranking_list">
    <div class="sort flex"> <img src="/kaifamei/images/phb_play.jpg" alt="游戏排行榜">
      <label class="flex">
      <span></span> <i class="icon_i ico_l"></i>
      <h2>游戏排行榜</h2>
      <i class="icon_i ico_r"></i> <span></span>
      </label>
      <div></div>
    </div>

  <div class="game_tags bg">
    <?=user_gamei()?>
  </div>
    <div class="top_three">
      <ul class="flex">
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <i class="icon_i num2"></i> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="name"><?=$bqr['title']?></p>
          <p class="grade"><i class="icon_i"></i><em><?=$bqr['typei']?></em>&nbsp;|&nbsp;<span><?=$bqr['size']?></span></p>
          </a> <a href="<?=$bqsr['titleurl']?>"><span class="btn">下载</span></a> </li>
		<?php
}
}
?>
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,'1,1',1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <i class="icon_i num1"></i> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="name"><?=$bqr['title']?></p>
          <p class="grade"><i class="icon_i"></i><em><?=$bqr['typei']?></em>&nbsp;|&nbsp;<span><?=$bqr['size']?></span></p>
          </a> <a href="<?=$bqsr['titleurl']?>"><span class="btn">下载</span></a> </li>
		<?php
}
}
?>
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,'2,1',1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <i class="icon_i num3"></i> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="name"><?=$bqr['title']?></p>
          <p class="grade"><i class="icon_i"></i><em><?=$bqr['typei']?></em>&nbsp;|&nbsp;<span><?=$bqr['size']?></span></p>
          </a> <a href="<?=$bqsr['titleurl']?>"><span class="btn">下载</span></a> </li>
		<?php
}
}
?>
      </ul>
    </div>
    <div class="h10"></div>
    <div class="three_behind">
      <ul>
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,'3,7',1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li class="flex"> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>"> <i class="num"><?=$bqno+3?></i> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="info flex_grow">
            <p class="name"><?=$bqr['title']?></p>
            <p class="grade"><i class="icon_i"></i><em><?=$bqr['typei']?></em>&nbsp;|&nbsp;<span><?=$bqr['size']?></span></p>
            <p class="txt"><?=$bqr['yjh']?></p>
          </div>
          </a> <a href="<?=$bqsr['titleurl']?>" class="btn" >下载</a> </li>
		<?php
}
}
?>
      </ul>
    </div>
  </div>
  <div class="h20"></div>
<footer>
    <div class="cont"><i class="icon_i"></i>
        <p>Copyright &copy; 2019-2025.<?=$public_r['add_www_kaifamei_com_name']?></p>
        <p><?=$public_r['add_www_kaifamei_com_beian']?></p>
    </div>
</footer>

  <script src="/kaifamei/js/zepto.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/fastclick.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/swiper.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/index.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/pinchzoom.js" type="text/javascript"></script> 
</div>
</body>
</html>