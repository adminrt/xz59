<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>[!--pagetitle--] - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="/kaifamei/css/about.css"/>
</head>

<body>
<!-- head -->
<?php
$pageid=str_replace("page","",$classid);
?>
<div class="about_head"> <a href="/" class="logo fl"><img src="/kaifamei/images/logo.png" alt="<?=$public_r['add_www_kaifamei_com_name']?>"></a>
  <div class="links fr"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select id,title,path as classidi from [!db.pre!]enewspage limit 1,5",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><a href="/<?=str_replace('../../','',$bqr[classidi])?>" <?if ($bqr['id']==$pageid){?> class="on"<?}?>><?=$bqr['classid']?><?=$bqr[title]?></a> <?php
}
}
?></div>
</div>
<div class="about_bg"></div>

<!-- content -->
<div class="content">
  <div class="about_wrap">
    <div class="about_title">[!--pagetitle--]</div>
    <div class="about_cont">
[!--pagetext--]
    </div>
  </div>
</div>

<!-- footer -->
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