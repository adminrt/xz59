<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php $cr=$empire->fetch1("select classid,classname,bname from {$dbtbpre}enewsclass where classid='".$GLOBALS[navclassid]."' limit 1");echo $cr['bname'];?>-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/soft/"/>
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
  <div class="game_tags bg">
    <ul class="flex">
<?=user_softi()?>
    </ul>
  </div>
  <div class="h20"></div>
  <div class="list_titles bg">
    <ul class="flex">
      <li class="current"><a href="/soft/0-0-0.html"><i class="icon"></i>最新</a><span></span></li>
      <li ><a href="/soft/0-1-0.html"><i class="icon"></i>热门</a><span></span></li>
    </ul>
  </div>
  <div class="game_list bg">
    <ul>

[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]

    </ul>
    <div class="pageWrap flex bg">[!--show.listpage--]</div>
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