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
    <link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>/game/<?=$ecms_gr[id]?>.html"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
    <script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<style>
    .tabBar ul li.GameModel a i {
        background: url(/kaifamei/images/game.png);
        background-size: 100% 100%;
    }
</style>
<body>
<div class="wrap">
    <!-- 顶部 -->
    <header class="green_bg">
    <div> <a href="/" class="logo2"><i class="icon_i"></i></a></div>
</header>
    <section class="classify bg">
        <div class="classifyhead flex"><i class="icon_i"></i> <a class="classifyadd" href="/">首页</a> &gt;&nbsp;<a href="/game/" target="_blank">手机游戏</a>&nbsp;&gt;&nbsp;<?=$ecms_gr[title]?> </div>
    </section>
    <div class="game_detail bg ">
        <div class="cont">
            <div class="flex"> <img src="<?=empty($ecms_gr[titlepic])?$mob_r[newsurl].'e/data/images/notimg.gif':dp_PicToMLink($ecms_gr[titlepic])?>" alt="<?=$ecms_gr[title]?>">
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
            $city_arr = explode(',',ReturnPublicAddVar('city_restrictions'));
            //远程城市数据返回点
	        $filename = "http://api.map.baidu.com/location/ip?ak=F454f8a5efe5e577997931cc01de3974&ip=".egetip()."&coor=bd09ll";
	        //使用file_get_contents返回json数据,确认程序是否开启file_get_contents
	        $json = json_decode(file_get_contents($filename),true);
	        $city = $json['content']['address_detail']['province'];
	        $key = array_search($city,$city_arr,true);
	        if($key !== false){
	            $navinfor['downurl'] = $navinfor['downurl2'];
	            $navinfor['downurli'] = $navinfor['downurli2'];
	        }
            if($navinfor['downurl'] || $navinfor['downurli']){
?>
            <a href="<?=$navinfor['downurl']?>"  class="btn" rel="nofollow" id="pageBtn"><i class="icon_i"></i>下载</a>
            <?
}
else{echo '<a class="btn" rel="nofollow" id="pageBtn" style="background: linear-gradient(to right, #c3bebe , #9e9e9e);">暂无下载</a>';}
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
            <li>游戏大小：<?=$ecms_gr[size]?></li>
            <li>当前版本：<?=$ecms_gr[bb]?></li>
            <li>更新时间：<?=date('Y-m-d',$ecms_gr[newstime])?></li>
            <li>游戏语言：<?=$ecms_gr[yy]?></li>
            <li>研发厂商：<?=$ecms_gr[kfs]?></li>
        </ul>
    </div>
    <div class="h20"></div>
    <!-- 推荐下载 -->
    <div class="title bg">
        <div class="flex">
            <h3>同类推荐</h3>
        </div>
    </div>
    <div class="guide_application bg">
        <ul>
            <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(1,4,0,0,"type='$navinfor[type]'",'RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="flex"> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
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
<div class="pageBtn2 hide" id="pageBtn2">
    <?php
if($navinfor['downurl'] || $navinfor['downurli']){
?>
    <a href="javascript:;"  class="btn" rel="nofollow" id="pageBtn1" style="margin-bottom: 15px;"><i class="icon_i"></i>下载</a>
    <?
}
else{echo '<a class="btn" rel="nofollow" id="pageBtn" style="background: linear-gradient(to right, #c3bebe , #9e9e9e);">暂无下载</a>';}
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
            <div class="swiper-slide"> <img alt="<?=$ecms_gr[title]?>" src="<?=$public_r['add_www_kaifamei_com_www']?><?=$pd_field[1]?>"> </div>
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
<script src="/kaifamei/js/game-detail.js" type="text/javascript" charset="utf-8"></script>
</div>
<script>
    isPhoneType()
    function isPhoneType() {
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
           $("#pageBtn").attr("href","<?=$navinfor['downurli']?>")
           $("#pageBtn1").attr("href","<?=$navinfor['downurli']?>")
        } else if (/(Android)/i.test(navigator.userAgent)) {
            $("#pageBtn").attr("href","<?=$navinfor['downurl']?>")
            $("#pageBtn1").attr("href","<?=$navinfor['downurl']?>")
        }
    }
</script>
<div style="display:none;"><script src=https://m.xz59.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>