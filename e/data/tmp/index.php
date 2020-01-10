<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
$nav='home';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="save" content="history"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>手机游戏下载_好玩的手机游戏免费下载-下载59网</title>
<meta name="keywords" content="手机游戏,手机游戏下载,手机游戏排行榜,手机游戏大全,好玩的手机游戏,游戏下载" />
<meta name="description" content="手游5网是一家免费提供手机游戏下载的网站，包含了安卓游戏下载、苹果手机游戏下载、手机游戏排行榜，以及手游资讯、攻略、活动等相关内容，找手游看新闻就来下载59网" />
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<link rel="shortcut icon" href="/favicon.ico"/>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>"}})();
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
<div class="h20"></div>
<div class="index_wrap w1200">
  <section class="index_one bg">
    <div class="index1_one clearfix">
      <div class="hot_recommend fl">热<br>
        门<br>
        推<br>
        荐<br>
        <i class="arrow_right"></i></div>
      <ul class="fr clearfix">
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,12,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p><?=$bqr['title']?></p>
          </a> </li>
	  <?php
}
}
?>
      </ul>
    </div>
    <div class="index2_one">
      <ul>
        <li> <span>手游</span>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,12,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a>| 
		<?php
}
}
?>
        </li>
        <li> <span>专题</span>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from www_kaifamei_com_enewszt order by ztid DESC limit 15',8,24,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <a href="<?=$bqr['ztpath']?>"><?=$bqr['ztname']?></a>| 
        <?php
}
}
?>
        </li>
      </ul>
    </div>
  </section>
  <div class="h16"></div>
  <section class="w1168 clearfix index_two bg">
    <div class="index1_two fl">
      <div class="index11_two">
        <div class="slider_index fl" id="slider_index2">
          <div class="index_img">
            <div class="img_box">
              <ul class="clearfix">
			 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,5,2,0,"bigpic<>''");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> 
                <li> <a title="<?=$bqr['title']?>" href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['bigpic']?>" alt="<?=$bqr['title']?>"/>
                  <p><?=$bqr['title']?></p>
                  </a> </li>
			<?php
}
}
?>
              </ul>
            </div>
          </div>
          <em><i class="icon"></i></em> <span class="pre"><i class="icon"></i></span><span class="next"><i class="icon"></i></span>
          <div class="dot_box dot_circle">
            <ul class="clearfix">
            </ul>
          </div>
        </div>
      </div>
      <div class="index12_two">
        <div class="cont cover_img">
          <ul class="clearfix">
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,1,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="fl"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="cover_c">
                <p><?=$bqr['title']?></p>
              </div>
              </a> </li>
		  <?php
}
}
?>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'1,1',2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="fl"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <div class="cover_c">
                <p><?=$bqr['title']?></p>
              </div>
              </a> </li>
		  <?php
}
}
?>
          </ul>
        </div>
        <div class="info">
          <ul class="clearfix">
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'2,8',2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><i class="dot"></i><span><?=$bqr['title']?></span></a> </li>
		  <?php
}
}
?>
          </ul>
        </div>
      </div>
    </div>
    <div class="index2_two fl">
      <div class="txt_box">
        <div>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,1,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <h4><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><?=$bqr['title']?></a></h4>
		<?php
}
}
?> 
          <p>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'1,2',12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>">[<?=esub($bqr[title],25)?>]</a>
          <?php
}
}
?>
           </p>
        </div>
        <div>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'3,1',12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <h4><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><?=$bqr['title']?></a></h4>
		<?php
}
}
?> 
          <p>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'4,2',12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>">[<?=esub($bqr[title],25)?>]</a>
          <?php
}
}
?>
          </p>
        </div>
      </div>
      <div class="tab_cont">
        <div class="list_box">
          <div>
            <ul class="clearfix">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,7,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><i class="dot"></i>
                <p class="txt"><?=$bqr['title']?></p>
                <span class="date">[<?=date('m-d',$bqr[newstime])?>]</span></a> </li>
			<?php
}
}
?>
            </ul>
            <div class="title clearfix"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'7,1',0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"><em class="hot">热点</em><strong><?=$bqr['title']?></strong></a><?php
}
}
?> </div>
            <ul class="clearfix">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,'8,7',0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"><i class="dot"></i>
                <p class="txt"><?=$bqr['title']?></p>
                <span class="date">[<?=date('m-d',$bqr[newstime])?>]</span></a> </li>
			<?php
}
}
?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="index3_two fr">
      <!--<div class="index31_two"><script src=/d/js/acmsd/thea4.js></script></div>-->
      <div class="index32_two tab_conts">
        <div class="title_dl clearfix"> <span class="fl current tab_tit">新作发布</span><span class="fr tab_tit">热门手游</span> </div>
        <div>
          <ul class="cont">
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,17,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="clearfix"> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>">
              <p class="txt"><?=$bqr['title']?></p>
              <span class="date"><?=date('m-d',$bqr[newstime])?></span></a> </li>
          <?php
}
}
?>
          </ul>
          <ul class="cont hide">
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,17,9,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="clearfix"> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>">
              <p class="txt"><?=$bqr['title']?></p>
              <span class="date"><?=date('m-d',$bqr[newstime])?></span></a> </li>
          <?php
}
}
?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="h16"></div>
  <!--<div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea1.js></script></div>-->
  <section class="w1168 clearfix index_three bg index_tab_wrap">
    <div class="title_index m_game_tit clearfix">
      <h2 class="fl"><i class="icon"></i> 手机游戏</h2>
      <div class="info fl"></div>
      <div class="link fr"> <a href="/news/">资讯</a> | <a href="/zhuanti/">专题</a> | <a class="o"  href="/game/">游戏库</a> | <a href="/game/">进入手游频道</a> </div>
    </div>
    <div class="tab_box">
      <ul class="tab_menu index3_menu clearfix">
        <li class="current" > <span>热门手游</span><i class="arrow_bottom"></i> </li>
        <li  > <span>最新手游</span><i class="arrow_bottom"></i> </li>
      </ul>
      <div class="hot_app_wrap tab_cont">
        <div class="hot_wrap">
          <ul class="sub_box clearfix ">
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
		  <?php
}
}
?>
          </ul>
          <ul class="sub_box clearfix hide">
 		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
		  <?php
}
}
?>
          </ul>
        </div>
        <div class="sub_box small_tab_box">
          <div class="small_tab_menu" id="smallTab1">
            <div class="hidden_box">
              <ul class="clearfix">
                <li class="current">全部</li>
                <li>角色扮演</li>
                <li>动作格斗</li>
                <li>休闲益智</li>
                <li>枪战射击</li>
                <li>战争策略</li>
                <li>卡牌对战</li>
                <li>音乐舞蹈</li>
                <li>模拟经营</li>
                <li>体育竞技</li>
                <li>冒险解谜</li>
                <li>其他游戏</li>
              </ul>
            </div>
            <div class="dot_tab_box" id="dotTab1"><i class="current"></i></div>
          </div>
          <div class="small_tab_cont hide">
            <ul class="small_sub_box clearfix">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'','id asc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=2');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=3');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=4');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=5');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=6');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=7');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=8');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=9');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=10');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,21,0,0,'type=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a title="<?=$bqr['title']?>" target="_blank" href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="80" height="80" alt="<?=$bqr['title']?>">
              <p><?=$bqr['title']?></p>
              </a></li>
			<?php
}
}
?>
            </ul>
            <ul class="small_sub_box clearfix hide">
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="hot_tag_wrap">
      <div class="tit">热门手游标签</div>
      <ul class="clearfix">
        <li class="c1"><a target="_blank" title="角色" href="/zhuanti/juesebanyan/">角色<i class="triangle"></i><i class="plus"></i></a></li>
        <li class="c2"><a target="_blank" title="策略" href="/zhuanti/zhanzhengcelue/">策略<i class="triangle"></i><i class="plus"></i></a></li>
        <li class="c3"><a target="_blank" title="卡片" href="/zhuanti/kapaiduizhan/">卡片<i class="triangle"></i><i class="plus"></i></a></li>
        <li class="c4"><a target="_blank" title="射击" href="/zhuanti/qiangzhansheji/">射击<i class="triangle"></i><i class="plus"></i></a></li>
        <li class="c5"><a target="_blank" title="音乐" href="/zhuanti/yinyuewudao/">音乐<i class="triangle"></i><i class="plus"></i></a></li>
        <li class="c6"><a target="_blank" title="休闲" href="/zhuanti/xiuxianyizhi/">休闲<i class="triangle"></i><i class="plus"></i></a></li>
      </ul>
    </div>
  </section>
  <div class="h16"></div>
<!--  <div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea2.js></script></div>-->
  <div class="h16"></div>
  <!--<div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea3.js></script></div>-->
  <section class="w1168 clearfix index_six bg index_tab_wrap">
    <div class="title_index  web_game_tit clearfix">
      <h2 class="fl"><i class="icon"></i> 排行榜</h2>
      <div class="link fr"><a class="o" href="/rank/game/">手游排行榜</a> | <a href="/rank/">进入排行频道</a></div>
    </div>
      <div class="Min7">
        <div class="item all"> <span class="label">人气排行榜</span>
          <ul>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li <?php
if($bqno == 1){
?>
class="on"
<?php
}else{
?>
<?php }?>> <span><?=$bqno?></span> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
              <div class="info"> <a href="<?=$bqsr['titleurl']?>" class="img" target="_blank"><img src="<?=$bqr['titlepic']?>" alt=""></a> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
                <p> <?=$bqr['typei']?> <i><?=$bqr['size']?></i> </p>
              </div>
              <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl_ico"></a> </li>
		 <?php
}
}
?>
 
          </ul>
        </div>
        <div class="item az"> <span class="label">安卓排行榜</span>
          <ul>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li <?php
if($bqno == 1){
?>
class="on"
<?php
}else{
?>
<?php }?>> <span><?=$bqno?></span> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
              <div class="info"> <a href="<?=$bqsr['titleurl']?>" class="img" target="_blank"><img src="<?=$bqr['titlepic']?>" alt=""></a> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
                <p> <?=$bqr['typei']?> <i><?=$bqr['size']?></i> </p>
              </div>
              <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl_ico"></a> </li>
		 <?php
}
}
?>
 
          </ul>
        </div>
        <div class="item ios"> <span class="label">苹果排行榜</span>
          <ul>
		  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,9,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li <?php
if($bqno == 1){
?>
class="on"
<?php
}else{
?>
<?php }?>> <span><?=$bqno?></span> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="title"><?=$bqr['title']?></a>
              <div class="info"> <a href="<?=$bqsr['titleurl']?>" class="img" target="_blank"><img src="<?=$bqr['titlepic']?>" alt=""></a> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
                <p> <?=$bqr['typei']?> <i><?=$bqr['size']?></i> </p>
              </div>
              <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl_ico"></a> </li>
		 <?php
}
}
?>
          </ul>
        </div>
      </div>
  </section>
  <div class="h16"></div>
  <section class="w1168 clearfix index_seven bg clearfix">
    <div class="title_index  inter_link_tit">
      <h2 class="fl"><i class="icon"></i> 友情链接</h2>
    </div>
    <ul class="clearfix">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewslink where checked=1 order by myorder",20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqr[lurl]?>" target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a></li>
	<?php
}
}
?>
    </ul>
  </section>
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