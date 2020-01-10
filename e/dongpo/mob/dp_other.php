<?php

//安全检测
function eCheckExtendSafe(){
	global $extend_r;
	if(file_exists("install/index.php")){
		if(file_exists("install/install.off")){
			echo "存在安全风险！请将 <b>/e/dongpo/".$extend_r['path']."/install/</b> 文件夹删除！";
		}else{
			echo "存在安全漏洞！请将 <b>/e/dongpo/".$extend_r['path']."/install/</b> 文件夹删除！";
			exit();
		}
	}
}

//安全验证1
function hReturnDPHashStrAll($ecms=0){
	global $version,$extend_r,$mob_r;
	$r=array();
	$lur=is_login();
	if($version>70){
		$r=hReturnEcmsHashStrAll();
	}
	eCheckExtendSafe();
	$r['lur']=$lur;
	return $r;
}

//安全验证2
function hReturnDPRHash(){
	global $version;
	$r=array();
	$lur=is_login();
	if($version>70){
		hCheckEcmsRHash();
	}
	$r['lur']=$lur;
	return $r;
}


/**
	********************	基本功能	********************
*/

//返回地址
function dp_ReturnGobackUrl($url,$t=0,$e=0){
	global $version;
	$rurl=$url;
	if($version>70){
		$fn=$t==0?'hReturnEcmsHashStrHref':'hReturnEcmsHashStrHref2';
		$rurl=$url.$fn($e);
	}
	return $rurl;
}

//安装和卸载
function InstallThisExtend($ecms){
	global $extend_r,$mob_r,$dbchar,$version,$empire,$dbtbpre;
	error_reporting(E_ALL ^ E_NOTICE);
	if(file_exists("install.off")){
		echo "安装程序已锁定。如果要重新安装，请删除 <b>/e/dongpo/".$extend_r['path']."/install/install.off</b> 文件！";
		exit();
	}
	$ename=$extend_r['ename'];
	if($ecms==1){//安装
		$vercinto='';
		$verinto='';
		if($version>70){
			$vercinto=",''";
			$verinto=',1';
		}

		//安装数据表
		$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}dongpo_mobclass` (
		`classid` int(10) unsigned NOT NULL,
		`listtempid` int(10) unsigned NOT NULL default '0',
		`classtempid` int(10) unsigned NOT NULL default '0',
		`newstempid` int(10) unsigned NOT NULL default '0',
		PRIMARY KEY  (`classid`)
		) TYPE=MyISAM;",$dbchar));

		//创建菜单
		$empire->query("insert into `{$dbtbpre}enewsmenuclass` values(NULL,'$ename','0','0','2'".$vercinto.");");
		$menuclassid=$empire->lastid();
		$empire->query("insert into `{$dbtbpre}enewsmenu` values(NULL,'参数设置','../dongpo/".$extend_r['path']."/set.php','1','$menuclassid'".$verinto.");");

		//生成锁定文件
		$fp=@fopen("install.off","w");
		@fclose($fp);
		return '安装成功！建议将 /e/dongpo/'.$extend_r['path'].'/install/ 文件夹删除。';

	}elseif($ecms==2){//卸载

		//删除表
		$empire->query("DROP TABLE IF EXISTS `{$dbtbpre}dongpo_mobclass`;");

		//删除插件菜单
		$menuclassr=$empire->fetch1("select classid from {$dbtbpre}enewsmenuclass where classname='$ename' limit 1");
		$empire->query("delete from {$dbtbpre}enewsmenuclass where classid='$menuclassr[classid]'");
		$empire->query("delete from {$dbtbpre}enewsmenu where classid='$menuclassr[classid]'");

		return '卸载成功';

	}else{
		echo "非法参数";
		exit();
	}
}

//设置
function dp_SetExtend($add){
	global $extend_r;
	$file=ECMS_PATH.'e/dongpo/'.$extend_r['path'].'/config.php';
	$exp='//dp.config.data';
	$text=ReadFiletext($file);
	$r=explode($exp,$text);
	$setting="
\$mob_r['mob_open']=".(int)$add['mob_open'].";
\$mob_r['msitepath']='".$add['msitepath']."';
\$mob_r['msiteurl']='".$add['msiteurl']."';
\$mob_r['newsurl']='".$add['newsurl']."';
\$mob_r['gid']=".(int)$add['gid'].";
\$mob_r['ltp']=".(int)$add['ltp'].";
\$mob_r['zkey']=".(int)$add['zkey'].";
\$mob_r['zpic']=".(int)$add['zpic'].";
\$mob_r['zpicsize']=".(int)$add['zpicsize'].";
";
	$setting=$r[0].$exp.$setting.$exp.$r[2];
	WriteFiletext_n($file,$setting);
	printerror("设置成功",dp_ReturnGobackUrl("set.php",2,1),1,0,1);
}

//批量设置栏目模板
function dp_SetMoreClass($add){
	global $extend_r,$empire,$dbtbpre,$class_r;
	//栏目
	$classid=$add['classid'];
	$count=count($classid);
	if($count==0)
	{
		printerror("请选择栏目","",1,0,1);
	}
	$seting='';
	if($add['dolisttempid']&&$add['listtempid'])
	{
		$seting1=",listtempid='$add[listtempid]'";
		$f1=",listtempid";
		$seting1a=",'$add[listtempid]'";
	}
	if($add['doclasstempid'])
	{
		$seting2=",classtempid='$add[classtempid]'";
		$f2=",classtempid";
		$seting2a=",'$add[classtempid]'";
	}
	if($add['donewstempid']&&$add['newstempid'])
	{
		$seting3=",newstempid='$add[newstempid]'";
		$f3=",newstempid";
		$seting3a=",'$add[newstempid]'";
	}
	$seting=$seting1.$seting2.$seting3;
	if(empty($seting))
	{
		printerror("没有改变配置","",1,0,1);
	}
	for($i=0;$i<$count;$i++)
	{
		$zseting='';
		$zf='';
		$zsetinga='';
		$cid=intval($classid[$i]);
		if($class_r[$cid]['islast']==1){
			$zseting=$seting1.$seting3;
			$zf=$f1.$f3;
			$zsetinga=$seting1a.$seting3a;
		}else{
			if($class_r[$cid]['islist']==0){
				$zseting=$seting2;
				$zf=$f2;
				$zsetinga=$seting2a;
			}else{
				$zseting=$seting1;
				$zf=$f1;
				$zsetinga=$seting1a;
			}
		}
		if(empty($zseting)){
			continue;
		}
		$cr=$empire->fetch1("select * from {$dbtbpre}dongpo_mobclass where classid='$cid' limit 1");
		if($cr['classid']){
			$zseting=substr($zseting,1);
			$empire->query("update {$dbtbpre}dongpo_mobclass set ".$zseting." where classid=$cid limit 1;");
		}else{
			$empire->query("insert into {$dbtbpre}dongpo_mobclass(classid".$zf.") values($cid".$zsetinga.");");
		}
	}
	dp_GetClass();
	printerror("设置成功",dp_ReturnGobackUrl("set.php",2,1),1,0,1);
}

//栏目模板缓存
function dp_GetClass($ecms=0){
	global $empire,$dbtbpre,$class_r,$extend_r;
	if(empty($ecms)){
		$sql=$empire->query("select * from {$dbtbpre}dongpo_mobclass");
		$classes="
";
		while($r=$empire->fetch($sql))
		{
			$classes.="\$mob_r[".$r[classid]."]=Array('classid'=>".$r[classid].",
'listtempid'=>".$r[listtempid].",
'classtempid'=>".$r[classtempid].",
'newstempid'=>".$r[newstempid].");
";
		}
	}else{
		$classes='
';
	}
	$file=ECMS_PATH.'e/dongpo/'.$extend_r['path'].'/config.php';
	$exp='//dp.class.data';
	$text=ReadFiletext($file);
	$dr=explode($exp,$text);
	$classes=$dr[0].$exp.$classes.$exp.$dr[2];
	WriteFiletext_n($file,$classes);
	if($ecms){
		printerror("清除模板成功",dp_ReturnGobackUrl("set.php",2,1),1,0,1);
	}
}

?>