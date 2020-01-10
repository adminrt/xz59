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
    <title><?=$grpagetitle?>-<?=$public_r['add_www_kaifamei_com_name']?></title>
    <meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
    <meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <script type="text/javascript">
        (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>"}})();
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
    <div class="w1200"><i class="icon"></i>所在位置：<?=$grurl?>&nbsp;&gt;&nbsp;<?=$ecms_gr[title]?></div>
</div>
<!-- 中间内容 -->
<div class="news_wrap w1200 clearfix">
    <div class="news_l" >
        <div class="news_cont">
            <div class="tit">
                <h1><?=$ecms_gr[title]?></h1>
                <p class="source"><span>发布时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></span><span>来源：<em><?=$public_r['add_www_kaifamei_com_name']?></em></span><span>作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span></p>
            </div>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,1,"title like '%$navinfor[ftitle]%'");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <?php
            $fr=$empire->fetch1("select infotags from www_kaifamei_com_ecms_game_data_1 where id='$bqr[id]'");
            $infotags=$fr['infotags'];
            $tag='';
            $t=explode(',',$infotags);
            $d=count($t);
            for($i=0;$i<count($t);$i++)
            {
            if($t[$i])
            {
            $tag.="<em>".$t[$i]."</em> ";
            }
            }
            ?>
            <div class="news_download">
                <div class="pic"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></div>
                <div class="info">
                    <div><span><?=$bqr['title']?></span><span class="tags"><?=$tag?></div>
                    <ul>
                        <li>游戏类别：<em><?=$bqr['typei']?></em> </li>
                        <li>游戏大小：<em><?=$bqr['size']?></em></li>
                        <li>游戏语言：<em><?=$bqr['yy']?></em> </li>
                        <li>游戏版本：<em><?=$bqr['bb']?></em></li>
                    </ul>
                </div>
                <div class="look"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <i class="icon"></i><span>点击查看</span> </a>
                    <div> <i class="icon"></i><span>扫码查看</span> </div>
                    <i class="icon arrow"></i> </div>
                <div class="code">
                    <div class="qrcode" url="<?=$bqsr['titleurl']?>"><img src="/qr/api.php?url=<?=$public_r['add_www_kaifamei_com_m']?><?=$bqsr['titleurl']?>&p=2.8&m=0" style="display: block;"></div>
                </div>
            </div>
            <?php
}
}
?>
            <div class="cont">
                <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
            </div>
            <div class="next_pre clearfix" id="news_pages">
                <p> <i class="icon"></i>上一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></p>
                <p> <i class="icon"></i>下一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> </p>
            </div>
        </div>
        <div class="new_game" >
            <div class="title_l">
                <h2>最新游戏</h2>
            </div>
            <ul class="clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,8,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                    <div class="info">
                        <p class="name"><?=$bqr['title']?></p>
                        <p class="tag"><em><?=$bqr['typei']?></em></p>
                        <span class="btn btn_no">查看</span> </div>
                </a> </li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="link_guide" >
            <div class="title_l">
                <h2>相关资讯</h2>
            </div>
            <ul class="clearfix">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,10,0,1,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                    <p class="txt"><?=$bqr['title']?></p>
                </a> </li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="guess_youlike tab_box" >
            <div class="title_l">
                <h2>猜你喜欢</h2>
            </div>
            <div class="cont">
                <div class="sub_box ">
                    <ul class="clearfix" style="padding-top:25px;">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,0,1,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><a href="<?=$bqsr['titleurl']?>"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                            <div class="info"> <strong class="name"> <?=$bqr['title']?></strong> <span class="num"> <?=$bqr['size']?> </span>
                                <p class="intro"><span><?=$bqr['typei']?></span> </p>
                            </div>
                        </a> </li>
                        <?php
}
}
?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
/*
         <div class="about_review" >
        <div class="title_l">
            <h2>我要评价</h2>
        </div>
        <div class="doyo_comment">
            <!--PC版-->
<style type="text/css">#feedAv{ margin-top: -250px!important;transform: scale(0);}</style>
<div id="SOHUCS"></div>
<script charset="utf-8" type="text/javascript" src="/kaifamei/js/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cyumcQBCK',
conf: 'prod_23293e6c196daf771e01ad313dff5060'
});
</script>
        </div>
    </div>
    */
    ?>
</div>
<div class="news_detail_r" >
    <!--        <div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea5.js></script></div>-->
    <div class="news_rank tab_boxs" >
        <ul class="tab_menus clearfix">
            <li class="current">热门资讯</li>
            <li>最新资讯</li>
        </ul>
        <div class="cont">
            <ul class="sub_boxs tfBoxs ">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <div class="tBoxs <?if($bqno > 1){echo 'hide';}?>"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <i class="num"><?=$bqno?></i> <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <div class="info">
                            <p class="txt"><?=$bqr['title']?></p>
                            <p class="time"><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></p>
                        </div>
                    </a> </div>
                    <div class="fBoxs <?if($bqno < 1){echo 'hide';}?>"> <i class="num"><?=$bqno?></i>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <div class="tBoxs  <?if($bqno > 1){echo 'hide';}?>"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <i class="num"><?=$bqno?></i> <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$bqr['title']?>">
                        <div class="info">
                            <p class="txt"><?=$bqr['title']?></p>
                            <p class="time"><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></p>
                        </div>
                    </a> </div>
                    <div class="fBoxs <?if($bqno < 1){echo 'hide';}?>"> <i class="num"><?=$bqno?></i>
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
    <!--        <div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea6.js></script></div>-->
    <div class="ranking_rank tab_boxs" >
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
    <div class="hot_game_collection" >
        <div class="title_l">
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
    <!--        <div style="padding-top:16px;"><script src=/d/js/acmsd/thea7.js></script></div>-->
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
<script type="text/javascript" src="/xz59/js/index.js?v=1.2"></script>
<script type="text/javascript" src="/xz59/js/news-detail.js?v=1.2"></script>
<script type="text/javascript" src="/xz59/js/layer/layer.js"></script>
<div style="display:none;"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>