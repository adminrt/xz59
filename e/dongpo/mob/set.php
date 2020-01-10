<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("dp_other.php");
require('dp_extend.php');
require('dp_version.php');
require('config.php');
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll();

$tgtemps='';
$tgsql=$empire->query("select gid,gname,isdefault from {$dbtbpre}enewstempgroup order by gid");
while($tgr=$empire->fetch($tgsql))
{
	$selected='';
	if($tgr['gid']==$mob_r['gid'])
	{
		$selected=' selected';
	}
	$tgtemps.="<option value='".$tgr['gid']."'".$selected.">".$tgr['gname']."</option>";
}

//当前使用的模板组
$thegid=GetDoTempGid();

//页面标题
$thispage='参数设置';
//导航
$url='<a href="set.php'.$ecms_hashur['whehref'].'">移动端同步生成</a> -> '.$thispage.'';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$pagechar?>">
<link href="../../data/images/qcss.css" rel="stylesheet" type="text/css">
<title><?=$thispage?></title>
<style type="text/css">
form{margin:0;padding:0}
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#FFFFFF">
    <td height="25">当前位置：<?=$url?></td>
	<td width=50% align=right><a href="setmoreclass.php<?=$ecms_hashur['whehref']?>">+ 设置移动端栏目模板</a>&nbsp;&nbsp;</td>
  </tr>
</table>
<form name="form1" method="post" action="do.php">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
	<?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2">插件设置 
        <input name="enews" type="hidden" id="enews" value="setextend"> </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>开启同步生成:</td>
      <td height="35"><input type="radio" name="mob_open" value=1 <?=$mob_r['mob_open']==1?'checked':''?>>开启 &nbsp; <input type="radio" value=0 name="mob_open"<?=$mob_r['mob_open']==0?'checked':''?>>关闭</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width=18%>移动端目录:</td>
      <td height="35"><input type="text" name="msitepath" value="<?=$mob_r['msitepath']?>" size=60> <span style="color:#666">（需填绝对地址）</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>移动端网址:</td>
      <td height="35"><input type="text" name="msiteurl" value="<?=$mob_r['msiteurl']?>" size=60> <span style="color:#666">（结尾需加斜杠“/”）</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>主端网址:</td>
      <td height="35"><input type="text" name="newsurl" value="<?=$mob_r['newsurl']?>" size=60> <span style="color:#666">（结尾需加斜杠“/”）</span></td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>移动端模板组设置:</td>
      <td height="35">
	    <select name="gid">
        <?=$tgtemps?>
      </select>
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>移动端网址模式:</td>
      <td height="35"><input type="radio" value=0 name="ltp" <?=$mob_r['ltp']==0?'checked':''?>>相对网址<span style="color:#666">（推荐）</span> &nbsp;<input type="radio" name="ltp" value=1 <?=$mob_r['ltp']==1?'checked':''?>>绝对网址</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>newstext字段主端网址处理:</td>
      <td height="35"><input type="radio" name="zkey" value=1 <?=$mob_r['zkey']==1?'checked':''?>>替换成移动端网址 &nbsp; <input type="radio" value=0 name="zkey" <?=$mob_r['zkey']==0?'checked':''?>>保持原样</td>
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td width=18%>正文站内图片处理:</td>
      <td height="35"><input type="radio" name="zpic" value=1 <?=$mob_r['zpic']==1?'checked':''?>>固定图片宽度，高度自适应 宽度<input type="text" name="zpicsize" value="<?=$mob_r['zpicsize']?>" size=6>px&nbsp; <input type="radio" value=0 name="zpic" <?=$mob_r['zpic']==0?'checked':''?>>保持原尺寸</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="35">&nbsp;</td>
      <td height="35"> <input type="submit" name="Submit" value="提交"></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr bgcolor="#ffffff">
	<td height="25">提示：请将 /e/dongpo/<?=$extend_r['path']?>/config.php 文件设置为 0777权限(Linux系统) 或 可读写权限(Win系统)，否则此设置将不能生效。</td>
</tr>
</table>
</form>
</body>
</html>
<?
//dp1037();
db_close();
$empire=null;
?>