<?php
/**
* PHP在线网址二维码API源码分享示例 By 张戈博客(zhangge.net)
* 文章地址：http://zhangge.net/5031.html
**/
 
//载入qrcode类
include "./phpqrcode.php";
 
//取得GET参数
$url        = isset($_GET["url"]) ? $_GET["url"] : 'help';
$errorLevel = isset($_GET["e"]) ? $_GET["e"] : 'L';
$PointSize  = isset($_GET["p"]) ? $_GET["p"] : '3';
$margin     = isset($_GET["m"]) ? $_GET["m"] : '0';
preg_match('/http:\/\/([\w\W]*?)\//si', $url, $matches);
 

    createqr($url, $errorLevel, $PointSize, $margin);

 
//简单二维码生成函数
function createqr($value,$errorCorrectionLevel,$matrixPointSize,$margin) {
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize, $margin);
}
?>