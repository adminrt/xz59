<?php 
/* 开发妹原创源码 www.kaifamei.com QQ:208115365 */
$key=urldecode($_GET["q"]);
$key=strFilter($key);
function strFilter($str){
    $str = str_replace('`', '', $str);
    $str = str_replace('·', '', $str);
    $str = str_replace('~', '', $str);
    $str = str_replace('!', '', $str);
    $str = str_replace('！', '', $str);
    $str = str_replace('@', '', $str);
    $str = str_replace('#', '', $str);
    $str = str_replace('$', '', $str);
    $str = str_replace('￥', '', $str);
    $str = str_replace('%', '', $str);
    $str = str_replace('^', '', $str);
    $str = str_replace('……', '', $str);
    $str = str_replace('&', '', $str);
    $str = str_replace('*', '', $str);
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace('（', '', $str);
    $str = str_replace('）', '', $str);
    $str = str_replace('-', '', $str);
    $str = str_replace('_', '', $str);
    $str = str_replace('——', '', $str);
    $str = str_replace('+', '', $str);
    $str = str_replace('=', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);
    $str = str_replace('【', '', $str);
    $str = str_replace('】', '', $str);
    $str = str_replace('{', '', $str);
    $str = str_replace('}', '', $str);
    $str = str_replace(';', '', $str);
    $str = str_replace('；', '', $str);
    $str = str_replace(':', '', $str);
    $str = str_replace('：', '', $str);
    $str = str_replace('\'', '', $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('“', '', $str);
    $str = str_replace('”', '', $str);
    $str = str_replace(',', '', $str);
    $str = str_replace('，', '', $str);
    $str = str_replace('<', '', $str);
    $str = str_replace('>', '', $str);
    $str = str_replace('《', '', $str);
    $str = str_replace('》', '', $str);
    $str = str_replace('.', '', $str);
    $str = str_replace('。', '', $str);
    $str = str_replace('/', '', $str);
    $str = str_replace('、', '', $str);
    $str = str_replace('?', '', $str);
    $str = str_replace('？', '', $str);
    return trim($str);
}
if($key=='' || $key==null){}else{
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?=$key?> 搜索结果 - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="<?=$key?>">
<meta name="description" content="<?=$key?>">
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg flex"> <a href="javascript:history.go(-1)" class="back"><i class="icon"></i></a>
    <div class="search_txt flex flex_grow">
      <input type="text" class="text flex_grow" id="searchKey" onkeyup="if(event.keyCode==13){Javascript:search();}else{Javascript:liftSearch();}" value="<?=$key?>" />
      <span class="close_txt" id="closeTxt"><i class="icon"></i></span>
      <div class="search_ul hide">
        <ul class="search_ul_txt">
        </ul>
      </div>
    </div>
    <input type="hidden" id="baseUrl" value="/">
    <a href="javascript:void(0)" class="search2" id="dosearch"><i class="icon"></i></a> </header>
  <!-- 导航 -->
  <nav class="bg">
    <ul class="flex">
      <li ><a href="/">首页</a></li>
      <li ><a href="/game/">游戏</a></li>
      <li ><a href="/soft/">软件</a></li>
      <li ><a href="/rank/">排行</a></li>
      <li ><a href="/zhuanti/">专题</a></li>
    </ul>
  </nav>
  <!-- 搜索首页 -->
  <div class="search_wrap search_wrap2 bg">
    <ul class="search_list_wrap">
<?php 
$query = "select * from www_kaifamei_com_ecms_game where title like '%$key%' or instr('$key',title)>0 order by newstime limit 2"; 
$result=mysqli_query($link,$query);
while($rs = mysqli_fetch_assoc($result)){
$src  = $rs[id];
$title=$rs['title'];
$titleurl=$rs['titleurl'];
$titlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$size=$rs['size'];
$typei=$rs['typei'];
$newstime=date('Y-m-d',$rs['newstime']);
$cr=$empire->fetch1("select bname from www_kaifamei_com_enewsclass where classid='".$rs[classid]."' limit 1"); 
$slei=$cr['bname']; 
?>	
      <li><a href="<?=$titleurl?>" class="flex" title="<?=$title?>"> <img src="<?=$titlepic?>" alt="<?=$title?>">
        <div class="info flex flex_grow">
          <div class="info_c flex_grow">
            <p class="name"><?=$title?></p>
            <p class="tips"><?=$typei?>   <?=$size?></p>
            <p class="txt"><?=$yjh?></p>
          </div>
        </div>
        </a><a href="<?=$titleurl?>" class="btn ">下载</a></li>
<?php } ?>         
    </ul>
	<div class="over_game flex"><i class="icon"></i><p>您可能还喜欢</p></div>
	<ul class="img_list flex">
<?php 
$query = "select * from www_kaifamei_com_ecms_game order by newstime limit 5"; 
$result=mysqli_query($link,$query);
while($rs = mysqli_fetch_assoc($result)){
$src  = $rs[id];
$title=$rs['title'];
$titleurl=$rs['titleurl'];
$titlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$size=$rs['size'];
$typei=$rs['typei'];
$newstime=date('Y-m-d',$rs['newstime']);
$cr=$empire->fetch1("select bname from www_kaifamei_com_enewsclass where classid='".$rs[classid]."' limit 1"); 
$slei=$cr['bname']; 
?>		
		<li><a href="<?=$titleurl?>">
			<img src="<?=$titlepic?>" alt="<?=$title?>">
			<p class="name"><?=$title?></p>
			<p class="size"><?=$size?></p>
		</a></li>
<?php } ?>
	</ul>
	<div class="green_line green_line2"></div>
    <ul class="search_list_wrap" id="search_KaiFaMei">
<?php 
$query = "select * from www_kaifamei_com_ecms_game where title like '%$key%' or instr('$key',title)>0 order by newstime limit 2,6"; 
$result=mysqli_query($link,$query);
while($rs = mysqli_fetch_assoc($result)){
$src  = $rs[id];
$title=$rs['title'];
$titleurl=$rs['titleurl'];
$titlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$size=$rs['size'];
$typei=$rs['typei'];
$newstime=date('Y-m-d',$rs['newstime']);
$cr=$empire->fetch1("select bname from www_kaifamei_com_enewsclass where classid='".$rs[classid]."' limit 1"); 
$slei=$cr['bname']; 
?>
      <li><a href="<?=$titleurl?>" class="flex" title="<?=$title?>"> <img src="<?=$titlepic?>" alt="<?=$title?>">
        <div class="info flex flex_grow">
          <div class="info_c flex_grow">
            <p class="name"><?=$title?></p>
            <p class="tips"><?=$typei?>   <?=$size?></p>
            <p class="txt"><?=$yjh?></p>
          </div>
        </div>
        </a><a href="<?=$titleurl?>" class="btn ">下载</a></li>
<?php } ?>  
 
    </ul>
    <span class="more_link2" id="search_more" >更多 &gt;</span>
    <div class="green_line"></div>
    <div class="tit flex">
      <h3 class="flex_grow">还为您推荐</h3>
      <a href="/zhuanti/" class="more green_m">查看全部</a> </div>
    <div class="swiper_hidden_box swiper-container-horizontal swiper-container-ios swiper-container-wp8-horizontal">
      <ul class="today_play swiper-wrapper">
<?php
$aa=$empire->query("select * from www_kaifamei_com_enewszt where zcid =1 order by ztid desc limit 5");
while($a=$empire->fetch($aa))
{
?>
        <li class="swiper-slide">
          <p class="txt"><?=$a[ztname]?></p>
          <a href="/<?=$a[ztpath]?>/"><img class="big" src="<?=$a[ztimg]?>" alt="<?=$a[ztname]?>"></a>
          <div class="info flex">
<?php
$fr=$empire->query("select classid,id,newstime from www_kaifamei_com_enewsztinfo where ztid='$a[ztid]' order by newstime desc limit 5");
while($r=$empire->fetch($fr))
{
$ff=$empire->fetch1("select * from www_kaifamei_com_ecms_game where classid ='$r[classid]' and id ='$r[id]' order by newstime desc limit 1");
?>
<a href="<?=$ff[titleurl]?>"><img src="<?=$ff[titlepic]?>" alt="<?=$ff[title]?>"></a>
<?php
}
?>
		  <a href="/<?=$a[ztpath]?>/">…</a>
		  </div>
        </li>
<?php
}
?>	
      </ul>
    </div>
  </div>
  <!-- 搜索列表 -->
  <div class="search_list_wrap_div bg hide">
    <ul class="search_list_wrap">
    </ul>
  </div>
  <div class="h20"></div>
  <div class="h20"></div>
<?php include(ECMS_PATH.'/html/footer.html');?>
  <script src="/kaifamei/js/zepto.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/fastclick.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/swiper.min.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/index.js" type="text/javascript"></script> 
  <script src="/kaifamei/js/pinchzoom.js" type="text/javascript"></script> 
</div>
<script>
	//加载更多 最热
	var is_have_cons = "Y";
	$(function(){
		var pagenums = 1; //设置当前页数
		var www_kaifmei_com_zongpage = 14;
		$('#search_more').on('click',function(){
			if(is_have_cons=="Y"){
				$.ajax({
					url : '/kaifamei/search-kaifamei.php',
					type:'get',
					data:{"next":pagenums,"key":'<?=$key?>'},
					dataType : 'html',
					beforeSend:function(){
						$("#search_more").text('努力加载中...');
					},
					success : function(data){
						if(www_kaifmei_com_zongpage>=pagenums){
							$("#search_KaiFaMei").append(data);
							$("#search_more").text('更多 >');
							pagenums++; 
						}else{
							$("#search_more").text('加载完毕！');
							is_have_cons = "N";
							return false;
						}
					}
				});
			}
		});
	});
</script>
</body>
</html>
<?php
}
?>