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
<link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/news/<?=$bqr['id']?>.html"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<style>
    .tabBar ul li.information a i {
        background: url(/kaifamei/images/informationChecked.png);
        background-size: 100% 100%;
    }
</style>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg flex">
    <div class="flex flex_grow"> <a href="/" class="logo2"><i class="icon_i"></i></a></header>
  <div class="news_detail bg">
    <h1><?=$ecms_gr[title]?></h1>
    <p class="tips"><span><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></span><span>来源：<?=$public_r['add_www_kaifamei_com_name']?> </span><span>作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span></p>
    <div class="cont" id="detailCont">
     <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>    </div>
    <div class="detail_like flex" id="detailLike">
      <div class="share" id="share"><i><span class="icon"></span></i>分享</div>
    </div>
  </div>
  <div class="h20"></div>
  <!-- 相关游戏攻略 -->
  <div class="title bg">
    <div class="flex">
      <h3>最新资讯</h3>
    </div>
  </div>
  <div class="news_list bg">
    <ul>
	<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(3,5,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li> <a class="flex" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <div class="info flex_grow">
          <p><?=$bqr['title']?></p>
          <p><?=date('Y-m-d',$bqr[newstime])?></p>
        </div>
        </a> </li>
	<?php
}
}
?>
    </ul>
  </div>
  <div class="h20"></div>
  <!-- 相关游戏 -->
  <div class="title bg">
    <div class="flex">
      <h3>精品游戏</h3>
    </div>
  </div>
  <div class="recommend_game bg">
    <ul class="flex">
	<?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(1,8,0,1,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <p class="name"><?=$bqr['title']?></p>
        <p><?=$bqr['typei']?> <?=$bqr['size']?></p>
        </a> <a href="<?=$bqsr['titleurl']?>" class="btn">下载</a> </li>
	<?php
}
}
?>
    </ul>
  </div>
  <div class="share_wrap hide">
    <div class="share_tit">
      <h3>请选择分享方式</h3>
      <i class="close">×</i> </div>
    <div class="bdsharebuttonbox"><a href="javascript:void(0)" class="bds_weixin" data-cmd="weixin" title="分享到微信" id="bds_wx"></a><a
                href="javascript:void(0)" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="javascript:void(0)" class="bds_tsina"
                                                                                                data-cmd="tsina" title="分享到新浪微博"></a><a href="javascript:void(0)" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div>
    <script>
            window._bd_share_config = {
                "common": {
                    "bdSnsKey": {},
                    "bdText": "",
                    "bdMini": "1",
                    "bdMiniList":["weixin", "sqq", "tsina", "qzone"],
                    "bdPic": "",
                    "bdStyle": "1",
                    "bdSize": "32"
                },
                "share": {},
                "selectShare": {
                    "bdContainerClass": null,
                    "bdSelectMiniList": ["weixin", "sqq", "tsina", "qzone"]
                }
            };
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
                'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        </script> 
  </div>
  <div class="share_wrap_bg hide"></div>
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
  <script src="/kaifamei/js/zepto.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/fastclick.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/swiper.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/index.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/pinchzoom.js" type="text/javascript"></script> 
</div>
<div style="display:none;"><script src=https://m.xz59.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>