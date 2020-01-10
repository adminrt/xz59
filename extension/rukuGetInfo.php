<?php
require('../e/class/connect.php');
require('../e/class/db_sql.php');
require('../e/class/functions.php');
require('../e/class/t_functions.php');
require('../e/data/dbcache/class.php');
global $empire, $dbtbpre,$public_r;
$par = $_POST;
if (!$par) {
    printerror('请求错误', 'history.go(-1)', 9);
}
$link   = db_connect();
$empire = new mysqlquery();
$add    = array();
//赋值接收到的参数
$add['classid']          = 1;
$add['dokey']            = 1;
$add['newstempid']       = 0;
$add['closepl']          = 0;
$add['haveaddfen']       = 0;
$add['title']            = $par['title'];
$add['writer']            = $par['writer'];
$add['size']             = $par['size'];
$add['bb']               = $par['bb'];
$add['downurl']          = $par['downurl'];
$add['downurli']         = $par['downurli'];
$add['smalltext']        = $par['smalltext'] ? $par['smalltext'] : "";
$add['kf_type']          = $par['kfs'];
$add['real_name']        = $par['real_name'];
$add['phone']            = $par['phone'];
$add['email']            = $par['email'];
$add['company']          = $par['company'];
$add['company_desc']     = $par['company_desc'];
$add['company_address']  = $par['company_address'];
$add['company_code']     = $par['company_code'];
$add['company_nickname'] = $par['company_nickname'];
$add['company_phone']    = $par['company_phone'];
$add['company_email']    = $par['company_email'];
$add['company_site']     = $par['company_site'];
//保存标题图片并获取图片地址参数
$icon            = upFileImg($_FILES['icon']);
$add['titlepic'] = $icon;
if ($par['kfs'] == 1) {
    //保存手持身份证照
    $check_verity_img = upFileImg($_FILES['idcard']);
} else {
    //营业执照扫描件
    $check_verity_img = upFileImg($_FILES['company_icon']);
}
$add['check_verity_img'] = $check_verity_img;
//截图
$add['morepic'] = "";
for ($i = 0; $i <= 3; $i++) {
    $name = $_FILES["jietu{$i}"];
    $img  = '';
    if (!$name['error']) {
        $img .= upFileImg($name);
    }
    if ($img) {
        $add['morepic'] .= $img . "::::::" . $img . "::::::" . $add['title'] . "
    ";
    }
}

$newstime   = time();
$truetime   = $newstime;
$lastdotime = $truetime;
$havehtml   = 0;

//索引表

$sql      = $empire->query1("insert into {$dbtbpre}ecms_game_index(classid,checked,newstime,truetime,lastdotime,havehtml) values(1,0,'$newstime','$truetime','$lastdotime','$havehtml');");
$id       = $empire->lastid();
$infotbr  = ReturnInfoTbname("game", 0);
$titleurl = "/game/{$id}.html";
//主表
$infosql = $empire->query("insert into " . $infotbr['tbname'] . "(id,classid,filename,userid,username,truetime,lastdotime,havehtml,titleurl,stb,fstb,restb,keyboard,title,newstime,titlepic,smalltext,`type`,typei,`size`,morepic,bb,downurl,downurli) values('$id','$add[classid]','$id','1','kaifamei','$truetime','$lastdotime','$havehtml','$titleurl','1','1','1','" . addslashes($add[keyboard]) . "','$add[title]','$newstime','$add[titlepic]','" . addslashes($add[smalltext]) . "',11,'其他游戏','$add[size]','$add[morepic]','$add[bb]','$add[downurl]','$add[downurli]');");
//副表
$finfosql = $empire->query("insert into " . $infotbr['datatbname'] . "(id,classid,dokey,newstempid,closepl,haveaddfen,infotags,`writer`,`newstext`,`kf_type`, `phone`, `email`, `real_name`, `check_verity_img`, `company_name`, `company_code`, `company_site`, `company_desc`, `company_address`) values('$id','$add[classid]','$add[dokey]','$add[newstempid]','$add[closepl]','$add[haveaddfen]','" . addslashes($add[infotags]) . "','$add[writer]','$add[smalltext]','$add[kf_type]','$add[phone]','$add[email]','$add[real_name]','$add[check_verity_img]','$add[company_name]','$add[company_code]','$add[company_site]','$add[company_desc]','$add[company_address]');");
if ($sql && $infosql && $finfosql) {
    //更新栏目信息数
    AddClassInfos(1,'+1','+1',0);
    //更新新信息数
    DoUpdateAddDataNum('info',9,1);
    echo '<img style="position: fixed;left:  50%;top:50%;margin-left:-150px;margin-top:-146px" src="/kaifamei/images/upload_success.png">';
    header("refresh:1;url={$public_r['add_www_kaifamei_com_www']}");
    exit;
}

/**
 * 上传图片
 * @param string $param
 * @return bool|false|string
 */
function upFileImg($param = array()) {
    $upfile = $param;
    //定义允许的类型
    $typelist = array("image/jpeg", "image/jpg", "image/png", "image/gif");
    $path     = "../d/file/titlepic/" . date("Ymd") . "/";//定义一个上传后的目录
    if (!is_dir($path)) mkdir($path, 0777);
    //2.过滤上传文件的错误号
    if ($upfile["error"] > 0) {
        switch ($upfile['error']) {//获取错误信息
            case 1:
                $info = "上传得文件超过了 php.ini中upload_max_filesize 选项中的最大值.";
                break;
            case 2:
                $info = "上传文件大小超过了html中MAX_FILE_SIZE 选项中的最大值.";
                break;
            case 3:
                $info = "文件只有部分被上传";
                break;
            case 4:
                $info = "没有文件被上传.";
                break;
            case 5:
                $info = "找不到临时文件夹.";
                break;
            case 6:
                $info = "文件写入失败！";
                break;
        }
        die("上传文件错误,原因:" . $info);
    }
    //3.本次上传文件大小的过滤（自己选择）
    //    if ($upfile['size'] > 10000000) {
    //        die("上传文件大小超出限制");
    //    }
    //4.类型过滤
    if (!in_array($upfile["type"], $typelist)) {
        die("上传文件类型非法!" . $upfile["type"]);
    }
    //5.上传后的文件名定义(随机获取一个文件名)
    $fileinfo = pathinfo($upfile["name"]);//解析上传文件名字
    do {
        $newfile  = date("YmdHis") . rand(1000, 9999) . "." . $fileinfo["extension"];
        $img_path = $path . $newfile;
    } while (file_exists($img_path));
    if (move_uploaded_file($upfile["tmp_name"], $img_path)) {
        return substr($img_path, '2');
    } else {
        return false;
    }
}
