<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        [!--pagetitle--]-<?=$public_r['add_www_kaifamei_com_name']?>
    </title>
    <meta name="keywords" content="[!--class.keywords--]" />
    <meta name="description" content="<?=$public_r['add_www_kaifamei_com_name']?>汇集了[!--pagetitle--]游戏下载资源，每天不停更新最新[!--pagetitle--]手游信息，包括好玩[!--pagetitle--]手游推荐，玩家们可以在[!--pagetitle--]专题找到自己喜欢的[!--pagetitle--]游戏进行免费下载！" />
    <meta name="applicable-device" content="mobile">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="yes" name="apple-touch-fullscreen" />
    <link rel="canonical" href="<?=$public_r['add_www_kaifamei_com_m']?>/zhuanti/doudizhu/" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
    <script src="/kaifamei/js/main.js" type="text/javascript"></script>
    <style>
        .three_behind .top_three li .num1 {
            background-position: -4.39rem -.9rem;
            position: absolute;
            z-index: 2;
            top: -.3rem;
            left: 50%;
        }

        .three_behind .top_three li .num2 {
            background-position: -3.55rem -.9rem;
            position: absolute;
            z-index: 2;
            top: -.66rem;
            left: 50%;
        }
        .tabBar ul li.GameModel a i {
            background: url(/kaifamei/images/game.png);
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
<div class="wrap">
    <!-- 顶部 -->
    <header class="green_bg">
    <div> <a href="/" class="logo2"><i class="icon_i"></i></a></div>
</header>
    <div class="gametype">
        <ul>
            <li class="<?php if($_GET['orderby'] == 'onclick'){echo 'active';}else{ echo '';}?>">
                <span><a href="/game/0-1-0.html">热门游戏</a></span>
                <i>|</i>
            </li>
            <li class="">
                <span><a href="/game/">安卓游戏</a> </span>
                <i>|</i>
            </li>
            <li class="<?php if($_GET['orderby'] == 'newstime'){echo 'active';}else{ echo '';}?>">
                <span><a href="/game/0-0-0.html">苹果游戏</a> </span>
            </li>
        </ul>
    </div>
    <div class="three_behind">
        <div class="h20"></div>
        <ul>
            <div class="ranking_list">


                <div class="sort flex">
                    <img src="/kaifamei/images/phb_play.jpg" alt="游戏排行榜">
                    <label class="flex"></label>
                    <div></div>
                </div>
            </div>
            [!--empirenews.listtemp--]
            <!--list.var1-->
            <!--list.var2-->
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
</body>

</html>