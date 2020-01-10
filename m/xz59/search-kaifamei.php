<?php
$ye=strFilter($_GET["next"]);
$key=strFilter($_GET["key"]);
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
require("../../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../../e/class/db_sql.php"); 
require("../../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
?>
<?php 
$yema= $ye*8;
$sql = "select * from www_kaifamei_com_ecms_game where classid=1 and title like '%$key%' order by newstime desc limit $yema,8";
$result=mysqli_query($link,$sql);
while($rs = mysqli_fetch_assoc($result)){
$src  = $rs[id];
$title=$rs['title'];
$titleurl=$rs['titleurl'];
$titlepic=$rs['titlepic'];
$typei=$rs['typei'];
$size=$rs['size'];
$newstime=$rs['newstime'];
$classid=$rs['classid'];
$yjh=$rs['yjh'];
$tsqlqq=$empire->query("select classname,classpath from www_kaifamei_com_enewsclass where classid='$classid'");
while($trssss=$empire->fetch($tsqlqq))
	{$classname=$trssss['classname']; $classpath=$trssss['classpath'];
}
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