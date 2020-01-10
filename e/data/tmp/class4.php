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
    <title>手游合集_手机游戏合集_手游下载合集_手机游戏下载推荐-<?=$public_r['add_www_kaifamei_com_name']?></title>
    <meta name="keywords" content="手游合集,手机游戏专区合集,游戏合集,安卓游戏合集,苹果游戏合集,安卓游戏合集下载,苹果游戏合集下载" />
    <meta name="description" content="86下载网专题合集频道，为广大玩家整理了各类手游合集，手游分类合集，各位玩家可以在专题合集中，快速找到自己心仪的游戏，快来试试吧" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>/zhuanti/">
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>/zhuanti/">
    <link rel="shortcut icon" href="/favicon.ico" />
    <script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/zhuanti.html"}})();
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
        <div class="w1200"><i class="icon"></i>所在位置：<a href="/" target="_blank">首页</a>&nbsp;&gt;&nbsp;专题合集</div>
    </div>
    <div class="topic_list_wrap w1168 bg ">
        <div class="menu_tab_wrap ">
            <div class="title_gray clearfix">
                <a href="/zhuanti/game/"><h3>游戏专题</h3></a>
                <?php
                  /*
                      <ul class="tab_menu2">
                           <li><a href="/zhuanti/game/">更多</a></li>
                       </ul>
                    */
                ?>
            </div>
            <div class="tab_box">
                <div class="topic_lists tab_cont">
                    <div class="sub_box">
                        <ul class="clearfix">
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_kaifamei_com_enewszt where zcid=1 and ztimg<>'' order by ztid asc",11,24,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>
                                <a href="/<?=$bqr['ztpath']?>" target="_blank">
                                    <img src="<?=$bqr['ztimg']?>" alt="<?=$bqr['ztname']?>"> <strong><?=$bqr['ztname']?></strong>
                                    <p><?=$bqr['intro']?></p>
                                </a>
                            </li>
                            <?php
}
}
?>
                        </ul>
                    </div>
                </div>
            </div>
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