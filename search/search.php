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
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$key?> 搜索结果-<?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link type="text/css" rel="stylesheet" href="/kaifamei/css/index_1.css"/>
<link type="text/css" rel="stylesheet" href="/kaifamei/css/search.css"/>
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
            <a href="/soft/" target="_blank">软件</a><br>
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
    <div class="top_r"><span class="login"></span> <a id="collection" onclick="AddFavorite('<?=$public_r['add_www_kaifamei_com_www']?>','<?=$public_r['add_www_kaifamei_com_name']?>');return false;" href="javascript:void(0)" target="_self"><i class="icon"></i>收藏</a> </div>
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
            <input type="button" class="btn btn_search" value="搜索">
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
      <li class="current"><a href="/search/search.php?q=<?=$key?>">全部结果</a></li>
      <li><a href="/e/search/?searchget=1&tempid=1&tbname=game&keyboard=<?=$key?>&show=title">手机游戏</a></li>
      <li><a href="/e/search/?searchget=1&tempid=2&tbname=app&keyboard=<?=$key?>&show=title">手机软件</a></li>
      <li><a href="/e/search/?searchget=1&tempid=3&tbname=news&keyboard=<?=$key?>&show=title">新闻资讯</a></li>
    </ul>
  </div>
</div>

<!-- content -->
<div class="content"> 
<?php
$numapp=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_game where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
$numgame=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_app where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
$numnews=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_news where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
if($numapp<1 && $numgame<1 &&$numnews<1){
?>
  <!-- 无结果 -->
  <div class="search_warp">
    <div class="title"> 无" <span><?=$key?></span> "相关内容</div>
    <div class="tips">
      <p> 1、建议缩短或更换搜索词；</p>
      <p> 2、查看输入的搜索词是否输入正确；</p>
      <p> 3、进入 <a href="/"><?=$public_r['add_www_kaifamei_com_name']?></a> 首页，浏览其它精彩内容；</p>
    </div>
    <!-- 推荐 -->
    <div class="tj_item">
<?php 
$query = "select * from www_kaifamei_com_ecms_game order by newstime limit 9"; 
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
		<a href="<?=$titleurl?>" target="_blank"> <img alt="<?=$title?>" src="<?=$titlepic?>">
      <p><?=$title?></p>
      <span>下载</span> </a>
<?php } ?> 
	</div>
  </div>
</div>

<?php }else{} ?>
<?php
$numgame=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_game where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
if($numgame<1){}else{
?>
  <!-- 游戏 -->
  <div class="list game_item">
    <div class="title"> <span>手机游戏</span>搜索结果</div>
    <ul class="game_item">
<?php 
$query = "select * from www_kaifamei_com_ecms_game where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6"; 
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
      <li> <a href="<?=$titleurl?>" target="_blank" class="img"><img src="<?=$titlepic?>" alt="<?=$title?>"></a>
        <div class="info"> <a href="<?=$titleurl?>" target="_blank" class="bt"><?=$title?></a>
          <div class="start"> <i style="width:80%;"></i></div>
          <p><?=$typei?> | <?=$size?></p>
        </div>
        <a href="<?=$titleurl?>" target="_blank" class="downl">立即下载</a> </li>
<?php } ?> 
    </ul>
    <a href="/e/search/?searchget=1&tempid=1&tbname=game&keyboard=<?=$key?>&show=title" class="more">更多<span><?=$key?></span>手机游戏 >></a> </div>

 <?php } ?>

<?php
$numgame=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_app where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
if($numgame<1){}else{
?>
  <!-- 软件 -->
  <div class="list game_item">
    <div class="title"> <span>手机软件</span>搜索结果</div>
    <ul class="game_item">
<?php 
$query = "select * from www_kaifamei_com_ecms_app where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6"; 
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
      <li> <a href="<?=$titleurl?>" target="_blank" class="img"><img src="<?=$titlepic?>" alt="<?=$title?>"></a>
        <div class="info"> <a href="<?=$titleurl?>" target="_blank" class="bt"><?=$title?></a>
          <div class="start"> <i style="width:80%;"></i></div>
          <p><?=$typei?> | <?=$size?></p>
        </div>
        <a href="<?=$titleurl?>" target="_blank" class="downl">立即下载</a> </li>
<?php } ?> 
    </ul>
    <a href="/e/search/?searchget=1&tempid=2&tbname=app&keyboard=<?=$key?>&show=title" class="more">更多<span><?=$key?></span>手机软件 >></a> </div>

 <?php } ?>

<?php
$numnews=$empire->gettotal("select count(*) as total from www_kaifamei_com_ecms_news where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6");
if($numnews<1){}else{
?>  
  <!-- 攻略 -->
  <div class="list gl_item">
    <div class="title"> <span>新闻资讯</span>搜索结果</div>
    <ul class="news_item">
<?php 
$queryal = "select * from www_kaifamei_com_ecms_news where title like '%$key%' or instr('$key',title)>0 order by newstime limit 6"; 
$result=mysqli_query($link,$queryal);
while($ral = mysqli_fetch_assoc($result)){
$src  = $ral[id];
$title=$ral['title'];
$titleurl=$ral['titleurl'];
$titlepic=$ral['titlepic'];
$smalltext=$ral['smalltext'];
$newstime=date('Y-m-d',$ral['newstime']);
?>	
      <li> <a href="<?=$titleurl?>" target="_blank" class="img"><img src="<?=$titlepic?>" alt="<?=$title?>"></a>
        <div class="info"> <a href="<?=$titleurl?>" target="_blank" class="bt"><?=$title?></a>
          <div class="dece"><?=$smalltext?></div>
          <span><i></i> 时间：<?=$newstime?> </span> <a href="<?=$titleurl?>" target="_blank" class="btn">+ 阅读全文</a> </div>
      </li>
<?php } ?>   
    </ul>
    <a href="/e/search/?searchget=1&tempid=3&tbname=news&keyboard=<?=$key?>&show=title" class="more">更多<span><?=$key?></span>新闻攻略 >></a> </div>
</div>
<?php } ?> 
</div>
<!-- footer -->
<?php include(ECMS_PATH.'/html/footer.html');?>
<script type="text/javascript" src="/kaifamei/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/kaifamei/js/index2.js"></script> 
</body>
</html>
<?php } ?>