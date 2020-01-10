<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'><input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'><input name="ftitle" type="text" size=42 id="ftitle" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'ftitle',stripSlashes($r[ftitle]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>内容简介</td><td bgcolor='ffffff'><textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'smalltext',stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作者</td><td bgcolor='ffffff'><input name="writer" type="text" id="writer" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'writer',stripSlashes($r[writer]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>信息来源</td><td bgcolor='ffffff'><input name="befrom" type="text" id="befrom" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'befrom',stripSlashes($r[befrom]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件类型</td><td bgcolor='ffffff'><select name="type" id="type"><option value="1"<?=$r[type]=="1"?' selected':''?>>社交聊天</option><option value="2"<?=$r[type]=="2"?' selected':''?>>系统工具</option><option value="3"<?=$r[type]=="3"?' selected':''?>>金融理财</option><option value="4"<?=$r[type]=="4"?' selected':''?>>时尚购物</option><option value="5"<?=$r[type]=="5"?' selected':''?>>旅游出行</option><option value="6"<?=$r[type]=="6"?' selected':''?>>影音播放</option><option value="7"<?=$r[type]=="7"?' selected':''?>>生活实用</option><option value="8"<?=$r[type]=="8"?' selected':''?>>办公学习</option><option value="9"<?=$r[type]=="9"?' selected':''?>>资讯阅读</option><option value="10"<?=$r[type]=="10"?' selected':''?>>拍摄美化</option><option value="11"<?=$r[type]=="11"?' selected':''?>>医疗健康</option><option value="12"<?=$r[type]=="12"?' selected':''?>>其它软件</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件类型</td><td bgcolor='ffffff'>
<input name="typei" type="text" id="typei" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'typei',stripSlashes($r[typei]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>大小</td><td bgcolor='ffffff'>
<input name="size" type="text" id="size" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'size',stripSlashes($r[size]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件版本</td><td bgcolor='ffffff'>
<input name="bb" type="text" id="bb" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'bb',stripSlashes($r[bb]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>系统要求</td><td bgcolor='ffffff'>
<input name="xtyq" type="text" id="xtyq" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'xtyq',stripSlashes($r[xtyq]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>语言</td><td bgcolor='ffffff'>
<input name="yy" type="text" id="yy" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'yy',stripSlashes($r[yy]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>开发商</td><td bgcolor='ffffff'>
<input name="kfs" type="text" id="kfs" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'kfs',stripSlashes($r[kfs]))?>" size="60">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>安卓下载地址</td><td bgcolor='ffffff'><input name="downurl" type="text" id="downurl" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'downurl',stripSlashes($r[downurl]))?>" size="90">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>ios下载地址</td><td bgcolor='ffffff'><input name="downurli" type="text" id="downurli" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'downurli',stripSlashes($r[downurli]))?>" size="90">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>推荐评语</td><td bgcolor='ffffff'>
<input name="yjh" type="text" id="yjh" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'yjh',stripSlashes($r[yjh]))?>" size="90">
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>新闻正文</div></td></tr></table><div style='background-color:#D0D0D0'><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":DoReqValue($mid,'newstext',stripSlashes($r[newstext])),"Default","","300","100%")?>
</div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>顶</td><td bgcolor='ffffff'>
<input name="diggtop" type="text" id="diggtop" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'diggtop',stripSlashes($r[diggtop]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件截图</td><td bgcolor='ffffff'>
<script>
function dopicadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.morepicnum.value);
for(i=1;i<=document.add.downmorepicnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=7%><div align=center>"+j+"</div></td><td width=33%><div align=center><input name=msmallpic[] type=text size=28 id=msmallpic"+j+"></div></td><td width=30%><div align=center><input name=mbigpic[] type=text size=28 id=mbigpic"+j+"></div></td><td width=30%><div align=center><input name=mpicname[] type=text></div></td></tr>";
}
document.getElementById("addpicdown").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">
	图片地址前缀:
      <input name="mpicurl_qz" type="text" id="mpicurl_qz" size="32">
      &nbsp;</td>
  </tr>
  <tr> 
    <td><table width=100% border=0 align=center cellpadding=3 cellspacing=1>
  <tr bgcolor='#DBEAF5'> 
    <td width=7%><div align=center>编号</div></td>
    <td width=33%><div align=center>缩图</div></td>
    <td width=30%><div align=center>大图</div></td>
    <td width=30%><div align=center>图片说明</div></td>
  </tr>
</table></td>
  </tr>
  <tr> 
    <td id=defmorepicid> 
    <?php
    if($ecmsfirstpost==1)
    {
	?>
	<table width='100%' border=0 align=center cellpadding=3 cellspacing=1>
	<?php
	$morepicnum=3;
	for($mppathi=1;$mppathi<=$morepicnum;$mppathi++)
	{
	?>
	<tr> 
		<td width='7%'><div align=center><?=$mppathi?></div></td>
		<td width='33%'><div align=center>
		<input name=msmallpic[] type=text id=msmallpic[] size=28>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mbigpic[] type=text id=mbigpic[] size=28>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mpicname[] type=text id=mpicname[]>
		</div></td>
	</tr>
	<?php
	}
	?>
	</table>
	<?php
    }
    else
    {
	$morepicpath="";
	$morepicnum=0;
	if($r[morepic])
	{
		$r[morepic]=stripSlashes($r[morepic]);
		//地址
		$j=0;
		$pd_record=explode("\r\n",$r[morepic]);
		for($i=0;$i<count($pd_record);$i++)
		{
			$j=$i+1;
			$pd_field=explode("::::::",$pd_record[$i]);
			$morepicpath.="<tr> 
	<td width='7%'><div align=center>".$j."</div></td>
    <td width='33%'><div align=center>
        <input name=msmallpic[] type=text value='".$pd_field[0]."' size=28>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mbigpic[] type=text value='".$pd_field[1]."' size=28>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mpicname[] type=text value='".$pd_field[2]."'><input type=hidden name=mpicid[] value=".$j."><input type=checkbox name=mdelpicid[] value=".$j.">删
      </div></td></tr>";
		}
		$morepicnum=$j;
		$morepicpath="<table width='100%' border=0 cellspacing=1 cellpadding=3>".$morepicpath."</table>";
	}
	echo $morepicpath;
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">地址扩展数量: <input name="morepicnum" type="hidden" id="morepicnum" value="<?=$morepicnum?>">
      <input name="downmorepicnum" type="text" value="1" size="6"> <input type="button" name="Submit5" value="输出地址" onclick="javascript:dopicadd();"></td>
  </tr>
  <tr> 
    <td id=addpicdown></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>权限</td><td bgcolor='ffffff'>
<textarea name="qx" cols="60" rows="10" id="qx"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'qx',stripSlashes($r[qx]))?></textarea>
</td></tr></table>