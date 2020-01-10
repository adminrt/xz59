<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>手机游戏下载_好玩的手机游戏免费下载-下载59网</title>
    <meta name="keywords" content="手机游戏,手机游戏下载,手机游戏排行榜,手机游戏大全,好玩的手机游戏,游戏下载" />
    <meta name="description" content="手游5网是一家免费提供手机游戏下载的网站，包含了安卓游戏下载、苹果手机游戏下载、手机游戏排行榜，以及手游资讯、攻略、活动等相关内容，找手游看新闻就来下载59网" />
    <meta name="applicable-device" content="mobile">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_www']?>"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/xz59/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/xz59/css/swiper.min.css"/>
    <script src="/xz59/js/main.js" type="text/javascript"></script>
</head>
<style>
    .tabBar ul .index a i {
        display: block;
        background: url(/xz59/images/indexChecked.png);
        width: 0.54rem;
        height: 0.52rem;
        background-size: 100% 100%;
        margin: 0 auto;
    }
</style>
<body>
<div class="wrap">
    <!-- 顶部 -->
    <header class="green_bg">
    <div> <a href="/" class="logo2"><i class="icon_i"></i></a></div>
</header>
    <div class="slider">
        <!-- Swiper -->
        <div class="swiper-container swiper-container-horizontal swiper-container-android swiper-container-wp8-horizontal">
            <div class="swiper-wrapper">
                <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(3,5,2,0,"bigpic<>''");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <div class="swiper-slide swiper_pre swiper-slide-active"> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['bigpic']?>" alt="<?=$bqr['title']?>"> </a> </div>
                <?php
}
}
?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-bullets"> <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span> <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span> </div>
        </div>
    </div>
    <!-- 热门游戏 -->
    <div class="recommend_game bg">
        <div class="title bg">
            <div class="flex">
                <h3>热门游戏</h3>
            </div>
        </div>
        <ul class="flex">
            <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(1,8,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                <p class="name"><?=$bqr['title']?></p>
                <p><?=$bqr['typei']?></p>
            </a> <a href="<?=$bqsr['titleurl']?>" rel="nofollow"  target="_blank"> <span class="btn "><i class="icon"></i>下载</span> </a> </li>
            <?php
}
}
?>
        </ul>
        <div class="more_check">
            <a class="load_link_more" href="/game/0-1-0.html">更多&nbsp;&gt;</a> </div>
        </div>
    </div>
    <div class="h20"></div>
    <!-- 安卓游戏 -->
    <div class="index_phb tab_box bg">
        <div class="title bg">
            <div class="flex">
                <h3>安卓游戏</h3>
            </div>
        </div>
        <div class="tab_cont div_pad">
            <div class="sub_box ">
                <ul>
                    <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(1,6,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li class="flex "> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>">
                        <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
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
                <div class="more_check">
                    <a class="load_link_more" href="/game/">更多&nbsp;&gt;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="h20"></div>
    <!-- 苹果游戏 -->
    <div class="index_phb tab_box bg">
        <div class="title bg">
            <div class="flex">
                <h3>苹果游戏</h3>
            </div>
        </div>
        <div class="tab_cont div_pad">
            <div class="sub_box ">
                <ul>
                    <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(1,6,1,0,"downurli != ''",'id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li class="flex "> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>">
                        <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
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
                <div class="more_check">
                    <a class="load_link_more" href="/game/0-0-0.html">更多&nbsp;&gt;</a></div>
            </div>
            </div>
        </div>
    <div class="h20"></div>
    <!-- 新闻资讯 -->
    <div class="title bg">
        <div class="flex">
            <h3>最新资讯</h3>
        </div>
    </div>
    <div class="article_list bg">
        <ul>
            <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq(3,5,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="flex"> <a href="<?=$bqsr['titleurl']?>" class="flex flex_grow" title="<?=$bqr['title']?>"> <img src="<?=$public_r['add_www_kaifamei_com_www']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                <div class="info flex_grow">
                    <p><?=$bqr['title']?></p>
                    <div class="flex"> <span class="type">新闻</span> <em class="time"><?=date('Y-m-d',$bqr[newstime])?></em> </div>
                </div>
            </a> </li>
            <?php
}
}
?>
        </ul>
            <a class="link_more" href="/news/">更多分类资讯&nbsp;&gt;</a></div>
    <div class="h20"></div>
    <!-- 友链 -->
    <div class="title bg">
        <div class="flex">
            <h3>友情链接</h3>
        </div>
    </div>
    <div class="friend_link_list bg">
        <div class="friendlink" id="friend_link">
            <?php
$bqno=0;
$ecms_bq_sql=msys_ReturnEcmsLoopBq("select * from [!db.pre!]enewslink where checked=1 order by myorder",20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=msys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqr[lurl]?>" target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a>
            <?php
}
}
?>
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
    <script src="/xz59/js/zepto.min.js" type="text/javascript"></script>
    <script src="/xz59/js/fastclick.min.js" type="text/javascript"></script>
    <script src="/xz59/js/swiper.min.js" type="text/javascript"></script>
    <script src="/xz59/js/index.js" type="text/javascript"></script>
    <script src="/xz59/js/pinchzoom.js" type="text/javascript"></script>
</div>
</body>
</html>