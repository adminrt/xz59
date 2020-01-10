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
<title>应用排行榜 - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<link rel="shortcut icon" href="/favicon.ico"/>
<link type="text/css" rel="stylesheet" href="/kaifamei/css/index.css"/>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/rank.html"}})();
</script>
</head>
<body>
<div class="top_wrap">
  <div class="top_box w1200 clearfix">
    <div class="top_l">
      <p> <?=$public_r['add_www_kaifamei_com_name']?>：值得大家信赖的游戏下载站！</i></p>
      <div class="top_nav">
        <div class="nav_box hide">
          <div>
            <a href="/game/" target="_blank">手游</a><br>
            <a href="/zhuanti/" target="_blank">专题</a><br>
          </div>
          <div>
          	<a href="/news/" target="_blank">资讯</a><br>
            <a href="/rank/" target="_blank">排行</a><br>
          </div>
        </div>
        <div class="t"><i class="icon"></i>导航</div>
      </div>
      <div class="care_doyo">
        <div class="care_box hide">
          <div class="wechat"> <img src="/kaifamei/images/wechat.jpg" title="微信"> 微信：KaiFaMei </div>
          <div class="weibo"> <img src="/kaifamei/images/weibo.jpg" title="微博"> <a href="#" class="weibo_link" target="_blank"> <i class="icon"></i> </a> </div>
        </div>
        <div class="t">关注我们 <i class="icon"></i></div>
      </div>
    </div>
    <div class="top_r"><span class="login"></span> <a id="collection" onclick="AddFavorite('<?=$public_r['add_www_kaifamei_com_www']?>','仿逗游网');return false;" href="javascript:void(0)" target="_self"><i class="icon"></i>收藏</a> </div>
  </div>
</div>
<div class="logo_wrap">
  <div class="w1200 clearfix"> <a class="logo" href="/" title="<?=$public_r['add_www_kaifamei_com_name']?>" target="_blank"> <img src="/kaifamei/images/logo.png" alt="<?=$public_r['add_www_kaifamei_com_name']?>"> </a>
    <div class="search_box">
      <div class="search_bar clearfix">
        <form id="search_form" target="_blank" action="/search/search.php" method="get">
          <div class="txt_box"><i class="icon"></i>
            <input type="text" name="q" placeholder="请输入搜索的关键词" value="">
          </div>
          <div class="btn_box">
            <input type="submit" class="btn btn_search" value="搜索">
          </div>
        </form>
      </div>
      <div class="hotkey"></div>
    </div>
  </div>
</div>
<div class="nav">
  <div class="w1200">
    <ul class="clearfix">
      <li <?if ($nav=='home'){?> class="current"<?}?>><a href="/">首页</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid='0' order by myorder,classid ASC limit 11",0,24,0);
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
  <div class="w1200"><i class="icon"></i>所在位置：<a href="/" target="_blank">首页</a>&nbsp;&gt;&nbsp;<a href="/rank/hsoft/" target="_blank">排行榜</a>&nbsp;&gt;&nbsp;排行榜详情页</div>
</div>
<div class="ranking_list_wrap w1200 clearfix tab_box">
  <div class="ranking_list_f fl bg">
    <div class="title_p clearfix">
      <h3>排行榜导航</h3>
    </div>
    <ul class="tab_menu ranking_ul">
      <li> <a href="/rank/game/">手游排行榜</a> </li>
      <li> <a href="/rank/hgame/">手游推荐榜</a> </li>
      <li> <a href="/rank/soft/">软件排行榜</a> </li>
      <li class="current"> <a href="/rank/hsoft/">软件推荐榜</a> </li>
    </ul>
  </div>
  <div class="ranking_list_detail tab_cont fr bg">
    <div class="sub_box current">
      <div class="title_p clearfix">
        <h3>软件推荐榜</h3>
      </div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,2,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li>
          <div class="clearfix"> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" class="fl"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
            <div class="info"> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="tag"> <span><?=$bqr['typei']?></span> </p>
              <p class="txt"><?=$bqr['smalltext']?></p>
            </div>
          </div>
          <a href="<?=$bqsr['titleurl']?>"  class="btn">下载</a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
</div>
<div class="h20"></div>
<footer>
    <div class="cont"><i class="icon_i"></i>
        <p>Copyright &copy; 2019-2025.<?=$public_r['add_www_kaifamei_com_name']?></p>
        <p><?=$public_r['add_www_kaifamei_com_beian']?></p>
    </div>
</footer>

<script type="text/javascript" src="/kaifamei/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/kaifamei/js/index.js"></script> 
</body>
</html>