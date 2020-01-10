<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="save" content="history"/>
<title>热门游戏排行榜_游戏排行榜大全_最好玩的游戏排行榜-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="86下载为大家提供手机游戏排行榜和安卓游戏排行榜,苹果游戏排行榜,推荐最热门的手机游戏,更多精彩尽在86下载网。">
<meta name="keywords" content="热门游戏排行榜,安卓游戏,苹果游戏,手机游戏,苹果游戏排行榜,安卓游戏排行榜,86下载网">
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<link rel="shortcut icon" href="/favicon.ico"/>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/rank.html"}})();
</script>
</head>
<body>
<link type="text/css" rel="stylesheet" href="/xz59/css/index.css"/>
<link type="text/css" rel="stylesheet" href="/xz59/css/rank.css"/>
<div class="top_wrap">
  <div class="top_box w1200 clearfix">
    <div class="top_l">
      <p> <?=$public_r['add_www_kaifamei_com_name']?>：手机游戏最新的游戏下载站！</i></p>
      <div class="top_nav">
        <div class="nav_box hide">
          <div>
            <a href="/game/" target="_blank">手游</a><br>
            <a href="/zhuanti/" target="_blank">专题</a><br>
          </div>
          <div>
          	<a href="/news/" target="_blank">资讯</a><br>
          </div>
        </div>
        <div class="t"><i class="icon"></i>导航</div>
      </div>
<?php
/*
      <div class="care_doyo">
        <div class="care_box hide">
          <div class="wechat"> <img src="/xz59/images/wechat.jpg" title="微信"> 微信：KaiFaMei </div>
          <div class="weibo"> <img src="/xz59/images/weibo.jpg" title="微博"> <a href="#" class="weibo_link" target="_blank"> <i class="icon"></i> </a> </div>
        </div>
        <div class="t">关注我们 <i class="icon"></i></div>
      </div>
*/
?>
   </div>
    <div class="top_r"><span class="login"></span> <a id="collection" onclick="AddFavorite('<?=$public_r['add_www_kaifamei_com_www']?>','<?=$public_r['add_www_kaifamei_com_name']?>');return false;" href="javascript:void(0)" target="_self"><i class="icon"></i>收藏</a> </div>
  </div>
</div>
<div class="logo_wrap">
  <div class="w1200 clearfix"> <a class="logo" href="/" title="<?=$public_r['add_www_kaifamei_com_name']?>" target="_blank"> <img src="/xz59/images/logo.png" alt="<?=$public_r['add_www_kaifamei_com_name']?>"> </a>
  </div>
</div>
<div class="nav">
  <div class="w1200">
    <ul class="clearfix">
      <li <?if ($nav=='home'){?> class="current"<?}?>><a href="/">首页</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid='0' order by myorder,classid ASC limit 3",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$classurl=sys_ReturnBqClassname($bqr,9);
$bgcolor="";
if($GLOBALS[navclassid])
{
$fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
$topbclassid=$fcr[1]?$fcr[1]:$GLOBALS[navclassid];
if($bqr[classid]==$topbclassid)
{
$bgcolor="current";
}
}
?>
      <li class="<?=$bgcolor?>"><a href="<?=$classurl?>"><?=$bqr[classname]?></a></li>
<?php
}
}
?>
    </ul>
  </div>
</div>
<div class="crumb">
  <div class="w1200"><i class="icon"></i> 所在位置：<a href="/" target="_blank">首页</a>&nbsp;&gt;&nbsp;排行榜 </div>
</div>
<div class="ranking_list_wrap w1200 clearfix tab_box">
  <div class="ranking_list_f fl bg">
    <div class="rank_menu">
      <ul>
        <li>
          <h2 class="current"><i class="icon ico_l"></i> <a target="_self" href="/rank.html">热门游戏排行榜</a> <i class="icon ico_r"></i> </h2>
        </li>
        <li>
          <h2><i class="icon ico_l"></i><a target="_self" href="#">手机游戏排行榜</a> <i class="icon ico_r"></i> </h2>
          <div class="game_type clearfix"> <a target="_blank" href="/rank/game/">手游排行榜</a> <a target="_blank" href="/rank/hgame/">手游推荐榜</a> </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="ranking_list_r tab_cont fr">
    <ul class="sub_box  clearfix">
      <li class="ranking_lists">
        <div class="title_p clearfix">
          <h3>手游排行榜</h3>
          <a class="more fr" target="_blank" href="/rank/game/">更多&nbsp;&gt;&gt;</a> </div>
        <ul>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="fl"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a>
            <div> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="descri"><?=$bqr['title']?></p>
              <p class="intro"><?=$bqr['smalltext']?>  </p>
            </div>
          </li>		  
		<?php
}
}
?>
        </ul>
      </li>
      <li class="ranking_lists">
        <div class="title_p clearfix">
          <h3>手游推荐榜</h3>
          <a class="more fr" target="_blank" href="/rank/hgame/">更多&nbsp;&gt;&gt;</a> </div>
        <ul>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="fl"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a>
            <div> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="descri"><?=$bqr['title']?></p>
              <p class="intro"><?=$bqr['smalltext']?>  </p>
            </div>
          </li>		  
		<?php
}
}
?>
        </ul>
      </li>
    </ul>
  </div>
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
</body>
</html>