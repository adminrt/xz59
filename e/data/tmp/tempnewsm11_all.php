<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?=$grpagetitle?>-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>" />
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/soft/1009.html"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg flex">
    <div class="flex flex_grow"> <a href="/" class="logo2"><i class="icon_i"></i></a>
      <p class="txt flex_grow"><span>手机软件</span></p>
    </div>
    <a href="/so/" class="search2"><i class="icon"></i></a> <a class="menu2" onclick="headerNav()"><i class="icon"></i></a>
    <div class="jg"></div>
    <!-- 导航 -->
    <div class="headerNav hide" id="headerNav">
      <ul class="flex">
        <li ><a href="/"><i class="icon sy"></i>首页</a></li>
        <li ><a href="/game/"><i class="icon su"></i>手游</a></li>
        <li ><a href="/rank/"><i class="icon ph"></i>排行</a></li>
        <li ><a href="/zhuanti/"><i class="icon zt"></i>专题</a></li>
        <li><a href="/news/"><i class="icon zx"></i>资讯</a></li>
        <li class="current"><a href="/soft/"><i class="icon yo"></i>软件</a></li>
      </ul>
      <div class="mask"></div>
    </div>
  </header>
  <nav class="bg nav_bar">
    <ul>
      <li class=""><a href="/">首页</a></li>
      <li class=""><a href="/game/">游戏</a></li>
      <li class=""><a href="/rank/">排行</a></li>
      <li class=""><a href="/zhuanti/">专题</a></li>
      <li class=""><a href="/news/">资讯</a></li>
      <li class="current"><a href="/soft/">软件</a></li>
    </ul>
  </nav>
  <section class="classify bg">
    <div class="classifyhead flex"><i class="icon_i"></i> <a class="classifyadd" href="/">首页</a> &gt;&nbsp;<a href="/soft/" target="_blank">手机软件</a>&nbsp;&gt;&nbsp;<?=$ecms_gr[title]?> </div>
  </section>
  <div class="game_detail bg ">
    <div class="cont">
      <div class="flex"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=empty($ecms_gr[titlepic])?$mob_r[newsurl].'e/data/images/notimg.gif':dp_PicToMLink($ecms_gr[titlepic])?>" alt="<?=$ecms_gr[title]?>">
        <div class="info flex_grow">
          <h1><?=$ecms_gr[title]?></h1>
          <p class="type "  ><span>类型：<em><?=$ecms_gr[typei]?></em></span></p>
          <ul>
            <li>安全</li>
            <li>人工检测</li>
            <li>官方版</li>
          </ul>
        </div>
        <div class="grade fr"> <span>评分</span>
      	<div class="no_grade"> <p>暂无评分</p></div>
        </div>
      </div>
<?php
if($navinfor['downurl']){
?>
<a href="<?=$ecms_gr[downurl]?>" target="_blank" class="btn" rel="nofollow" id="pageBtn"><i class="icon_i"></i>安卓下载</a>
<?
}
else{echo '<a class="btn" rel="nofollow" id="pageBtn" style="background: linear-gradient(to right, #c3bebe , #9e9e9e);">暂无下载</a>';}
?>
<?php
if($navinfor['downurli']){
?>
<a href="<?=$ecms_gr[downurli]?>" target="_blank" class="btn" rel="nofollow" id="pageBtn"><i class="icon_i"></i>苹果下载</a>
<?
}
else{echo '';}
?>
      </div>
  </div>
  <div class="h20"></div>
  <!-- 游戏介绍 -->
  <div class="game_info bg">
    <div class="game_intro">
      <h2 class="grade"><i class="icon_i ico_l"></i><em><?=$ecms_gr[yjh]?></em><i class="icon_i ico_r"></i></h2>
      <div class="game_img_hide"></div>
    </div>
    <div class="hidden_box" id="hiddenBox">
      <div class="cont" id="detailCont">
<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
      </div>
    </div>
    <div class="guarantee">
      <div class="safety flex">
        <ul class="flex flex_grow">
          <li><i class="icon"></i>无病毒</li>
          <li><i class="icon"></i>无广告</li>
          <li><i class="icon"></i>用户保障</li>
        </ul>
        <span class="open_hidden" id="openHidden">展开内容<i class="icon_i"></i></span> </div>
    </div>
  </div>
  
  <!-- 视频 --> 
  <!--截图-->
  <div class="hide_game_image hide">
    <div class="screenshot_img_show">
      <div class="screenshot_img">
        <div class="swiper-container1" id="xzImg">
          <div class="swiper-wrapper">
<?
    		$pd_record=explode("\r\n",$navinfor[morepic]);
    		for($i=0;$i<count($pd_record);$i++)
    		{
$pd_field=explode("::::::",$pd_record[$i]);
if ($pd_field[1]){
?>
        <div class="swiper-slide"> <img alt="<?=$ecms_gr[title]?>" src="<?=$public_r['add_www_kaifamei_com_www']?><?=$pd_field[1]?>"> </div>
<?}}?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="h20"></div>
  <!-- 游戏信息 -->
  <div class="title bg">
    <div class="flex">
      <h3>游戏信息</h3>
    </div>
  </div>
  <div class="game_information bg">
    <ul class="flex">
      <li>软件大小：<?=$ecms_gr[size]?></li>
      <li>当前版本：<?=$ecms_gr[bb]?></li>
      <li>更新时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></li>
      <li>游戏语言：<?=$ecms_gr[yy]?></li>
      <li>研发厂商：<?=$ecms_gr[kfs]?></li>
    </ul>
  </div>
  <div class="h20"></div>
  <!-- 游戏信息 -->
  <div class="title bg">
    <div class="flex">
      <h3>软件推荐</h3>
    </div>
  </div>
  <div class="game_detail_info tab_box bg">
    <div class="tab_menu flex">
	<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq("select * from www_kaifamei_com_enewszt where zcid=2 and ztimg<>'' order by ztid DESC limit 3",8,24,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
     <span  data-index="<?=$bqno?>" <?php
if($bqno == 1){
?>
class="current"
<?php
}else{
?>
<?php }?>><i><?=$bqr['ztname']?></i></span>
	<?php
}
}
?> 
    </div>
    <div class="tab_cont">
<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq("select * from www_kaifamei_com_enewszt where zcid=2 and ztimg<>'' order by ztid DESC limit 3",8,24,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="sub_box " data-index="<?=$bqno?>" <?php
if($bqno == 1){
?>
<?php
}else{
?>
style="display: none;"
<?php }?>>
        <h3><?=$bqr['ztname']?></h3>
        <p class="cont"><?=$bqr['intro']?></p>
        <ul class="flex">
<?php
$fr=$empire->query("select classid,id,newstime from www_kaifamei_com_enewsztinfo where ztid='$bqr[ztid]' order by newstime desc limit 8");
while($r=$empire->fetch($fr))
{
$ff=$empire->fetch1("select * from www_kaifamei_com_ecms_game where classid ='$r[classid]' and id ='$r[id]' order by newstime desc limit 1");
?>
          <li> <a href="<?=$ff[titleurl]?>"> <img src="<?=$ff[titlepic]?>" alt="<?=$ff[title]?>">
            <div class="info">
              <p> <?=$ff[title]?></p>
            </div>
            </a> </li>
<?php
}
?>
        </ul>
        <a href="/<?=$bqr['ztpath']?>" class="more_link3">查看更多<?=$bqr['ztname']?></a> </div>
	<?php
}
}
?> 
    </div>
  </div>
  <div class="h20"></div>
  <!-- 相关游戏攻略 -->
  <div class="title bg">
    <div class="flex">
      <h3>相关新闻</h3>
    </div>
  </div>
  <div class="game_detail_list bg">
    <ul>
	<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(3,10,0,0,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li class="flex"> <i class="o">攻略</i> <a class="flex_grow" href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a> </li>
	<?php
}
}
?>
    </ul>
  </div>
  <div class="h20"></div>
  <!-- 推荐下载 -->
  <div class="title bg">
    <div class="flex">
      <h3>精品软件</h3>
    </div>
  </div>
  <div class="guide_application bg">
    <ul>
	<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(2,6,0,1,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li class="flex"> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="info flex_grow">
          <p class="name"><?=$bqr['title']?></p>
          <p class="num"><span><?=$bqr['typei']?></span>&nbsp;|&nbsp;<span><?=$bqr['size']?></span></p>
          <p class="txt"><?=$bqr['yjh']?></p>
        </div>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn" title="下载">下载</a> </li>
	<?php
}
}
?>
    </ul>
  </div>
  <div class="pageBtn2 hide" id="pageBtn2">
<?php
if($navinfor['downurl']){
?>
<a href="<?=$ecms_gr[downurl]?>" target="_blank" class="btn" rel="nofollow" id="pageBtn" style="margin-bottom: 15px;"><i class="icon_i"></i>安卓下载</a>
<?
}
else{echo '<a class="btn" rel="nofollow" id="pageBtn" style="background: linear-gradient(to right, #c3bebe , #9e9e9e);">暂无下载</a>';}
?>
<?php
if($navinfor['downurli']){
?>
<a href="<?=$ecms_gr[downurli]?>" target="_blank" class="btn" rel="nofollow" id="pageBtn" style="background: linear-gradient(to right, #525151 , #666361);"><i class="icon_i"></i>苹果下载</a>
<?
}
else{echo '';}
?>
  </div>
  <div class="xzImgBig bg" id="xzImgBig">
    <div class="swiper-container-big">
      <div class="swiper-wrapper hide">
<?
    		$pd_record=explode("\r\n",$navinfor[morepic]);
    		for($i=0;$i<count($pd_record);$i++)
    		{
$pd_field=explode("::::::",$pd_record[$i]);
if ($pd_field[1]){
?>
        <div class="swiper-slide"> <img alt="<?=$ecms_gr[title]?>" src="<?=$pd_field[1]?>"> </div>
<?}}?>
      </div>
      <div class="pic-mask hide"></div>
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
  <script src="/kaifamei/js/game-detail.js" type="text/javascript" charset="utf-8"></script> 
</div>
<div style="display:none;"><script src=https://m.xz59.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>