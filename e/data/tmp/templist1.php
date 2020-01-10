<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="save" content="history" />
<title>手游新闻资讯_手游新闻大全-最新游戏攻略-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="新闻资讯,游戏新闻,游戏攻略,游戏资讯,手游资讯,手游新闻大全" />
<meta name="description" content="86下载网新闻资讯频道为广大手游玩家提供，当前最热门新鲜的手游资讯，实用的游戏攻略技巧与最新的手游通关攻略。" />
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/">
<meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/">
<link rel="shortcut icon" href="/favicon.ico"/>
<link type="text/css" rel="stylesheet" href="/kaifamei/css/index.css" />
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/"}})();
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
  <div class="w1200"><i class="icon"></i>所在位置：[!--newsnav--]</div>
</div>
<div class="news_list_wrap w1200 clearfix">
  <div class="news_list_l fl bg">
    <ul>
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]

    </ul>
    <div class="pagecode">[!--show.listpage--]</div>
  </div>
  <div class="news_list_r fr">
  <div style="padding-bottom:16px;"><script src=/kaifamei/js/thea5.js></script></div>
    <div class="news_rank tab_boxs  bg">
      <ul class="tab_menus clearfix">
        <li class="current">热门资讯</li>
        <li>最新资讯</li>
      </ul>
      <div class="cont">
        <ul class="sub_boxs tfBoxs">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>
            <div class="tBoxs <?php
if($bqno == 1){
?>
<?php
}else{
?>
hide
<?php }?>"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <i class="num"><?=$bqno?></i> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="info">
                <p class="txt"><?=$bqr['title']?></p>
                <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
              </div>
              </a> </div>
            <div class="fBoxs <?php
if($bqno == 1){
?>
hide
<?php
}else{
?>
<?php }?>"> <i class="num"><?=$bqno?></i>
              <p class="info"><?=$bqr['title']?></p>
            </div>
          </li>
		 <?php
}
}
?>
        </ul>
        <ul class="sub_boxs tfBoxs hide">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>
            <div class="tBoxs <?php
if($bqno == 1){
?>
<?php
}else{
?>
hide
<?php }?>"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <i class="num"><?=$bqno?></i> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="info">
                <p class="txt"><?=$bqr['title']?></p>
                <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
              </div>
              </a> </div>
            <div class="fBoxs <?php
if($bqno == 1){
?>
hide
<?php
}else{
?>
<?php }?>"> <i class="num"><?=$bqno?></i>
              <p class="info"><?=$bqr['title']?></p>
            </div>
          </li>
		 <?php
}
}
?>
        </ul>
      </div>
    </div>
    <div style="padding-bottom:16px;"><script src=/kaifamei/js/thea6.js></script></div>
    <div class="ranking_rank tab_boxs  bg">
      <ul class="tab_menus clearfix">
        <li class="current">手游排行榜</li>
        <li>手游新品榜</li>
      </ul>
      <div class="cont">
        <ul class="sub_boxs tfBoxs">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>
            <div class="tBoxs <?php
if($bqno == 1){
?>
<?php
}else{
?>
hide
<?php }?>"> <i class="num"><?=$bqno?></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="game"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="info">
                <p class="name"><?=$bqr['title']?></p>
                <p class="tag"><?=$bqr['typei']?></p>
                <span class="btn">下载</span> </div>
              </a> </div>
            <div class="fBoxs <?php
if($bqno == 1){
?>
hide
<?php
}else{
?>
<?php }?>"> <i class="num num<?php
if($bqno <= 1){
?>
<?=$bqno?>
<?php
}else{
?>
<?php }?>"><?=$bqno?></i>
              <p class="game"><?=$bqr['title']?></p>
              <p class="tag"><?=$bqr['typei']?></p>
            </div>
          </li>
		<?php
}
}
?>
        </ul>
        <ul class="sub_boxs tfBoxs hide">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>
            <div class="tBoxs <?php
if($bqno == 1){
?>
<?php
}else{
?>
hide
<?php }?>"> <i class="num"><?=$bqno?></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="game"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="info">
                <p class="name"><?=$bqr['title']?></p>
                <p class="tag"><?=$bqr['typei']?></p>
                <span class="btn">下载</span> </div>
              </a> </div>
            <div class="fBoxs <?php
if($bqno == 1){
?>
hide
<?php
}else{
?>
<?php }?>"> <i class="num num<?php
if($bqno <= 1){
?>
<?=$bqno?>
<?php
}else{
?>
<?php }?>"><?=$bqno?></i>
              <p class="game"><?=$bqr['title']?></p>
              <p class="tag"><?=$bqr['typei']?></p>
            </div>
          </li>
		<?php
}
}
?>
        </ul>
      </div>
    </div>
    <div class="hot_game_collection bg">
      <div class="title_l clearfix">
        <h2>热门游戏分类</h2>
      </div>
      <ul class="clearfix">
        <li><a href="/game/1-0-0.html" target="_blank"> <i class="icon"></i> <span>角色扮演</span> </a></li>
        <li><a href="/game/2-0-0.html" target="_blank"> <i class="icon"></i> <span>动作格斗</span> </a></li>
        <li><a href="/game/3-0-0.html" target="_blank"> <i class="icon"></i> <span>休闲益智</span> </a></li>
        <li><a href="/game/4-0-0.html" target="_blank"> <i class="icon"></i> <span>枪战射击</span> </a></li>
        <li><a href="/game/5-0-0.html" target="_blank"> <i class="icon"></i> <span>战争策略</span> </a></li>
        <li><a href="/game/6-0-0.html" target="_blank"> <i class="icon"></i> <span>卡牌对战</span> </a></li>
        <li><a href="/game/7-0-0.html" target="_blank"> <i class="icon"></i> <span>音乐舞蹈</span> </a></li>
        <li><a href="/game/8-0-0.html" target="_blank"> <i class="icon"></i> <span>模拟经营</span> </a></li>
        <li><a href="/game/9-0-0.html" target="_blank"> <i class="icon"></i> <span>体育竞技</span> </a></li>
        <li><a href="/game/10-0-0.html" target="_blank"> <i class="icon"></i> <span>冒险解谜</span> </a></li>
        <li><a href="/game/11-0-0.html" target="_blank"> <i class="icon"></i> <span>其它游戏</span> </a></li>
      </ul>
    </div>
    <div style="padding-top:16px;"><script src=/kaifamei/js/thea7.js></script></div>
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
<script type="text/javascript" src="/kaifamei/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/kaifamei/js/index.js"></script> 
</body>
</html>