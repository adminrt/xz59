<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require('dp_funs.php');
require("dp_other.php");
require('dp_extend.php');
require('dp_version.php');
require('config.php');
$link=db_connect();
$empire=new mysqlquery();
$ecms_hashur=hReturnDPHashStrAll(1);

//系统模型
$m_sql=$empire->query("select mid,mname,usemod from {$dbtbpre}enewsmod order by myorder,mid");
while($m_r=$empire->fetch($m_sql))
{
	if(empty($m_r[usemod]))
	{
		if($m_r[mid]==$r[modid])
		{$m_d=" selected";}
		else
		{$m_d="";}
		$mod_options.="<option value=".$m_r[mid].$m_d.">".$m_r[mname]."</option>";
	}
	//列表模板
	$listtemp_options.="<option value=0 style='background:#99C4E3'>".$m_r[mname]."</option>";
	$lt_sql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewslisttemp")." where modid='$m_r[mid]'");
	while($lt_r=$empire->fetch($lt_sql))
	{
		if($lt_r[tempid]==$r[listtempid])
		{$lt_d=" selected";}
		else
		{$lt_d="";}
		$listtemp_options.="<option value=".$lt_r[tempid].$lt_d."> |-".$lt_r[tempname]."</option>";
	}
	//搜索模板
	$searchtemp.="<option value=0 style='background:#99C4E3'>".$m_r[mname]."</option>";
	$st_sql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewssearchtemp")." where modid='$m_r[mid]'");
	while($st_r=$empire->fetch($st_sql))
	{
		if($st_r[tempid]==$r[searchtempid])
		{$st_d=" selected";}
		else
		{$st_d="";}
		$searchtemp.="<option value=".$st_r[tempid].$st_d."> |-".$st_r[tempname]."</option>";
	}
	$newstemp_options.="<option value=0 style='background:#99C4E3'>".$m_r[mname]."</option>";
	$nt_sql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewsnewstemp")." where modid='$m_r[mid]'");
	while($nt_r=$empire->fetch($nt_sql))
	{
		if($nt_r[tempid]==$r[newstempid])
		{$nt_d=" selected";}
		else
		{$nt_d="";}
		$newstemp_options.="<option value=".$nt_r[tempid].$nt_d."> |-".$nt_r[tempname]."</option>";
	}
}
//会员组
$qgroup='';
$qgbr='';
$qgi=0;
$sql1=$empire->query("select groupid,groupname from {$dbtbpre}enewsmembergroup order by level");
while($l_r=$empire->fetch($sql1))
{
	if($r[groupid]==$l_r[groupid])
	{$select=" selected";}
	else
	{$select="";}
	$group.="<option value=".$l_r[groupid].$select.">".$l_r[groupname]."</option>";
	//投稿
	$qgi++;
	if($qgi%6==0)
	{
		$qgbr='<br>';
	}
	else
	{
		$qgbr='';
	}
	$qgchecked='';
	if(strstr($r[qaddgroupid],','.$l_r[groupid].','))
	{
		$qgchecked=' checked';
	}
	$qgroup.="<input type=checkbox name=qaddgroupidck[] value='".$l_r[groupid]."'".$qgchecked.">".$l_r[groupname]."&nbsp;".$br;
}
//封面模板
$classtempsql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewsclasstemp")." order by tempid");
while($classtempr=$empire->fetch($classtempsql))
{
	$select="";
	if($r[classtempid]==$classtempr[tempid])
	{
		$select=" selected";
	}
	$classtemp.="<option value='".$classtempr[tempid]."'".$select.">".$classtempr[tempname]."</option>";
}
//js模板
$jstempsql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewsjstemp")." order by tempid");
while($jstempr=$empire->fetch($jstempsql))
{
	$select="";
	if($r[jstempid]==$jstempr[tempid])
	{
		$select=" selected";
	}
	$jstemp.="<option value='".$jstempr[tempid]."'".$select.">".$jstempr[tempname]."</option>";
}
//评论模板
$pltempsql=$empire->query("select tempid,tempname from ".dp_GetTemptb("enewspltemp")." order by tempid");
while($pltempr=$empire->fetch($pltempsql))
{
	$select="";
	if($r[pltempid]==$pltempr[tempid])
	{
		$select=" selected";
	}
	$pltemp.="<option value='".$pltempr[tempid]."'".$select.">".$pltempr[tempname]."</option>";
}
//WAP模板
$wapstyles='';
$wapstyle_sql=$empire->query("select styleid,stylename from {$dbtbpre}enewswapstyle order by styleid");
while($wapstyle_r=$empire->fetch($wapstyle_sql))
{
	$select="";
	if($r[wapstyleid]==$wapstyle_r[styleid])
	{
		$select=" selected";
	}
	$wapstyles.="<option value='".$wapstyle_r[styleid]."'".$select.">".$wapstyle_r[stylename]."</option>";
}
//预设投票
$infovotesql=$empire->query("select voteid,ysvotename from {$dbtbpre}enewsvotemod order by voteid desc");
while($infovoter=$empire->fetch($infovotesql))
{
	$select="";
	if($r[definfovoteid]==$infovoter[voteid])
	{
		$select=" selected";
	}
	$definfovote.="<option value='".$infovoter[voteid]."'".$select.">".$infovoter[ysvotename]."</option>";
}
//--------------------操作的栏目
$fcfile="../data/fc/ListEnews.php";
$do_class="<script src=../data/fc/cmsclass.js></script>";
if(!file_exists($fcfile))
{$do_class=ShowClass_AddClass("","n",0,"|-",0,0);}

//页面标题
$thispage='设置移动端栏目模板';
//导航
$url='<a href="set.php'.$ecms_hashur['whehref'].'">移动端同步生成</a> -> '.$thispage.'';


db_close();
$empire=null;
//当前使用的模板组

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
  <tr>
    <td height="25">位置：<?=$url?></td>
	<td width=50% align=right><a href="do.php?enews=cleartemp<?=$ecms_hashur['href']?>">- 清空自定义的模板</a>&nbsp;&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="form1" method="post" action="do.php" onsubmit="return confirm('确认要操作?');">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2"><div align="center"><?=$thispage?></div></td>
    </tr>
    <tr> 
      <td width="23%" height="25" valign="top" bgcolor="#FFFFFF">
<div align="center">
          <select name="classid[]" size="73" multiple id="classid[]" style="width:180">
            <?=$do_class?>
          </select>
          <br>
          选择多个栏目请用CTRL/SHIFT</div></td>
      <td width="77%" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
          <tr> 
            <td height="25"><div align="center">修改</div></td>
            <td colspan="2">设置项目</td>
          </tr>
          <tr> 
            <td height="25" bgcolor="#FFFFFF"><div align="center"> 
                <input name="dolisttempid" type="checkbox" id="dolisttempid" value="1">
              </div></td>
            <td bgcolor="#FFFFFF">列表式栏目所属列表模板</td>
            <td bgcolor="#FFFFFF"><select name="listtempid" id="listtempid">
                <?=$listtemp_options?>
              </select></td>
          </tr>
          <tr> 
            <td height="25" bgcolor="#FFFFFF"><div align="center"> 
                <input name="doclasstempid" type="checkbox" id="doclasstempid" value="1">
              </div></td>
            <td bgcolor="#FFFFFF">封面式栏目封面模板</td>
            <td bgcolor="#FFFFFF"><select name="classtempid">
                <?=$classtemp?>
              </select>
            </td>
          </tr>
          <tr> 
            <td height="25" bgcolor="#FFFFFF"><div align="center"> 
                <input name="donewstempid" type="checkbox" id="donewstempid" value="1">
              </div></td>
            <td bgcolor="#FFFFFF">终极栏目所属内容模板</td>
            <td bgcolor="#FFFFFF"><select name="newstempid" id="newstempid">
                <?=$newstemp_options?>
              </select></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25"> <div align="center"> </div></td>
            <td colspan="2"> <input type="submit" name="Submit" value="提交">
              <input name="enews" type="hidden" id="enews" value="setmoreclass"></td>
          </tr>
        </table>
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<tr bgcolor="#ffffff">
	<td height="25">说明：未设置的栏目将采用与主端一致的模板。</td>
</tr>
</table>
		</td>
    </tr>
  </form>
</table>
</body>
</html>
