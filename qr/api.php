<?php
/**
* PHP������ַ��ά��APIԴ�����ʾ�� By �Ÿ격��(zhangge.net)
* ���µ�ַ��http://zhangge.net/5031.html
**/
 
//����qrcode��
include "./phpqrcode.php";
 
//ȡ��GET����
$url        = isset($_GET["url"]) ? $_GET["url"] : 'help';
$errorLevel = isset($_GET["e"]) ? $_GET["e"] : 'L';
$PointSize  = isset($_GET["p"]) ? $_GET["p"] : '3';
$margin     = isset($_GET["m"]) ? $_GET["m"] : '0';
preg_match('/http:\/\/([\w\W]*?)\//si', $url, $matches);
 

    createqr($url, $errorLevel, $PointSize, $margin);

 
//�򵥶�ά�����ɺ���
function createqr($value,$errorCorrectionLevel,$matrixPointSize,$margin) {
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize, $margin);
}
?>