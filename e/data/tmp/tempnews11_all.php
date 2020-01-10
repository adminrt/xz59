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
    <link type="text/css" rel="stylesheet" href="/kaifamei/css/index.css"/>
    <link rel="stylesheet" href="/kaifamei/css/screenshot.css">
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
<div class="game_wrap w1200 clearfix">
    <div class="game_l" >
        <div class="game_info" >
            <div class="img_logo"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>"></div>
            <div class="info">
                <h1><?=$ecms_gr[title]?></h1>
                <ul class="tag">
                    <li><em>安全</em></li>
                    <li><em>人工检测</em></li>
                    <li><em>官方版</em></li>
                </ul>
                <ul class="info_detail">
                    <li>软件类别：<a href="/soft/<?=$ecms_gr[type]?>-0-0.html" target="_blank"><em><?=$ecms_gr[typei]?></em></a></li>
                    <li>发布时间：<em><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></em></li>
                </ul>
                <div class="download_btn_address">
                    <?php
if($navinfor['downurl']){
?>
                    <a href="<?=$ecms_gr[downurl]?>" rel="nofollow">
                        <div class="download">
                            <i class="icon"></i>
                            <span>安卓下载</span>
                            <div class="ewm">
                                <u></u>
                                <div class="ewmbox">
                                    <!--                            <p>由网友 <i>拼命三娘</i> 提供</p>-->
                                    <div class="img" id="az_downurl_qrcode"></div>
                                    <span>手机扫描下载</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?}else{echo '<a href="javascript:;" class="not_downurl">暂无安卓版</a>';} ?>
                    <?php
if($navinfor['downurli']){
?>
                    <a href="<?=$ecms_gr[downurli]?>">
                        <div class="download_ios">
                            <i class="icon"></i>
                            <span>苹果下载</span>
                            <div class="ewm">
                                <u></u>
                                <div class="ewmbox">
                                    <!--                            <p>由网友 <i>拼命三娘</i> 提供</p>-->
                                    <div class="img" id="ios_downurl_qrcode"></div>
                                    <span>手机扫描下载</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?}else{echo '<a href="javascript:;" class="not_downurl">暂无苹果版</a>';} ?>
                </div>
            </div>
            <div class="grade"><span>评分</span>
                <div class="no_grade"> <p>暂无评分</p></div>
            </div>
        </div>
        <div class="recommend_comment" >
            <div class="title_l ">
                <h2>推荐评语</h2>
            </div>
            <p><?=$ecms_gr[yjh]?></p>
            <div class="game_img"></div>
        </div>
        <div class="game_intro ">
            <div class="title_l ">
                <h2>软件介绍</h2>
            </div>
            <div class="hidden_detail" id="hiddenDetail">
                <div class="cont">
                    <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>       </div>
            </div>
            <div class="open_detail ">
                <div class="advantage"><?=$ecms_gr[qx]?></div>
                <div class="btn" id="openDetail">展开<i class="icon"></i></div>
            </div>
        </div>
        <div class="hide_game_img hide">
            <div class="screenshot">
                <div class="intro">
                    <div class="slider-contain"> <em class=" a_left" onclick="hscroll2('slider3','right',1,1,2)"></em> <em class=" a_right" onclick="hscroll2('slider3','left',1,1,2)"></em>
                        <div class="slider-inner-contain" id="slider3">
                            <ul class="img-slider">
                                <?
    		$pd_record=explode("\r\n",$navinfor[morepic]);
    		for($i=0;$i<count($pd_record);$i++)
    		{
$pd_field=explode("::::::",$pd_record[$i]);
if ($pd_field[1]){
?>
                                <li> <a href="<?=$pd_field[1]?>"  onclick="return false;" data-lightbox="screenshots">
                                    <div class="img-item"><img src="<?=$pd_field[1]?>" alt="<?=$ecms_gr[title]?>"></div>
                                </a></li>
                                <?}}?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail_info" >
            <div class="title_l ">
                <h2>详细信息</h2>
            </div>
            <div class="info clearfix"> <span>软件大小：&nbsp;<em><?=$ecms_gr[size]?></em></span><span>软件版本：&nbsp;<em><?=$ecms_gr[bb]?></em></span> <span>系统要求：&nbsp;<em><?=$ecms_gr[xtyq]?></em></span><span>更新时间：&nbsp;<em><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></em></span> <span>语言：&nbsp;<em><?=$ecms_gr[yy]?></em></span><span>开发商：&nbsp;<em><?=$ecms_gr[kfs]?></em></span> </div>
        </div>
        <div class="guess_youlike tab_box" >
            <div class="title_l">
                <h2>猜你喜欢</h2>
            </div>
            <div class="cont">
                <div class="sub_box " data-index="0">
                    <ul class="clearfix" style="padding-top:25px;">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',9,0,1,"type=$navinfor[type]",'RAND()');
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
        <div class="link_news_guide" >
            <div class="title_l ">
                <h2>相关攻略</h2>
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
                <li> <a href="<?=$bqsr['titleurl']?>" target="_blank">
                    <p><?=$bqr['title']?></p>
                    <span><?=date('m-d',$bqr[newstime])?></span> </a> </li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="about_review" >
            <div class="title_l ">
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
    </div>
    <div class="game_detail_r">
        <!--<div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea5.js></script></div>-->
        <div class="ranking_rank tab_boxs " >
            <ul class="tab_menus clearfix">
                <li class="current">软件排行榜</li>
                <li>软件新品榜</li>
            </ul>
            <div class="cont">
                <ul class="sub_boxs tfBoxs">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,1,1);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,0,1);
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
        <!--<div style="padding-bottom:16px;"><script src=/d/js/acmsd/thea6.js></script></div>-->
        <div class="link_game_recommend " >
            <div class="title_l ">
                <h2>热点软件推荐</h2>
            </div>
            <ul>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,6,1,1,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                    <div class="info"> <strong class="name"><?=$bqr['title']?></strong>
                        <p class="intro"><?=$bqr['yjh']?></p>
                        <em class="grade">0.0分</em> </div>
                </a> </li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="hot_game_collection" >
            <div class="title_l">
                <h2>热门软件分类</h2>
            </div>
            <ul class="clearfix">
                <li><a href="/soft/1-0-0.html" target="_blank"><i class="icon"></i><span>社交聊天</span></a></li>
                <li><a href="/soft/2-0-0.html" target="_blank"><i class="icon"></i><span>系统工具</span></a></li>
                <li><a href="/soft/3-0-0.html" target="_blank"><i class="icon"></i><span>金融理财</span></a></li>
                <li><a href="/soft/4-0-0.html" target="_blank"><i class="icon"></i><span>时尚购物</span></a></li>
                <li><a href="/soft/5-0-0.html" target="_blank"><i class="icon"></i><span>旅游出行</span></a></li>
                <li><a href="/soft/6-0-0.html" target="_blank"><i class="icon"></i><span>影音播放</span></a></li>
                <li><a href="/soft/7-0-0.html" target="_blank"><i class="icon"></i><span>生活实用</span></a></li>
                <li><a href="/soft/8-0-0.html" target="_blank"><i class="icon"></i><span>办公学习</span></a></li>
                <li><a href="/soft/9-0-0.html" target="_blank"><i class="icon"></i><span>资讯阅读</span></a></li>
                <li><a href="/soft/10-0-0.html" target="_blank"><i class="icon"></i><span>拍摄美化</span></a></li>
                <li><a href="/soft/11-0-0.html" target="_blank"><i class="icon"></i><span>医疗健康</span></a></li>
                <li><a href="/soft/12-0-0.html" target="_blank"><i class="icon"></i><span>其它软件</span></a></li>
            </ul>
        </div>
        <!--<div style="padding-top:16px;"><script src=/d/js/acmsd/thea7.js></script></div>-->
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
<script type="text/javascript" src="/kaifamei/js/qrcode.min.js"></script>
<script type="text/javascript" src="/kaifamei/js/index.js"></script>
<script src="/kaifamei/js/lightbox.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/kaifamei/js/video.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/kaifamei/js/game-detail.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/kaifamei/js/layer.js"></script>
<div style="display:none;"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
<script>
    var qrcode2 = new QRCode(document.getElementById("az_downurl_qrcode"), {
        width: 175,
        height: 175,
        colorDark : '#000000',
        colorLight : '#ffffff',
        correctLevel : QRCode.CorrectLevel.H
    });
    qrcode2.makeCode("<?=$ecms_gr[downurl]?>");
</script>
<script>
    var qrcode = new QRCode(document.getElementById("ios_downurl_qrcode"), {
        width: 175,
        height: 175,
        colorDark : '#000000',
        colorLight : '#ffffff',
        correctLevel : QRCode.CorrectLevel.H
    });
    qrcode.makeCode("<?=$ecms_gr[downurli]?>");
</script>
</body>
</html>