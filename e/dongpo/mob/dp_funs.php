<?php


/***************链接******************/

//图片地址转换 
function dp_PicToMLink($picurl){
	global $mob_r;
	if(empty($picurl)){
		return '';
	}
	if(!stristr($picurl,'://')){
		$picurl=$mob_r['newsurl'].substr($picurl,1);
	}
	return $picurl;
}

//信息地址转换
function dp_InfoToMLink($url){
	global $mob_r;
	if(empty($url)){
		return '';
	}
	if(stristr($url,'://')){
		$url=str_replace($mob_r['newsurl'],"/",$url);
	}
	if($mob_r['ltp']){
		$url=$mob_r['msiteurl'].substr($url,1);
	}
	return $url;
}

//首页地址
function dp_mindexurl(){
	global $mob_r;
	if($mob_r['ltp']){
		$url=$mob_r['msiteurl'];
	}else{
		$url="/";
	}
	return $url;
}

//栏目链接
function m_ReturnBqClassname($classid,$have_class=0){
	global $class_r,$mob_r;
	if($have_class)
	{
		//外部栏目
		if($class_r[$classid][wburl])
		{
			$classurl=$class_r[$classid][wburl];
		}
		//动态列表
		elseif($class_r[$classid][listdt])
		{
			$rewriter=eReturnRewriteClassUrl($r['classid'],1);
			$classurl=$rewriter['pageurl'];
		}
		elseif($class_r[$classid][classurl])
		{
			$classurl=$class_r[$classid][classurl];
		}
		else
		{
			if($mob_r['ltp']){
				$classurl=$mob_r['msiteurl'].$class_r[$classid][classpath]."/";
			}else{
				$classurl="/".$class_r[$classid][classpath]."/";
			}
		}
		if(empty($class_r[$classid][bname]))
		{$classname=$class_r[$classid][classname];}
		else
		{$classname=$class_r[$classid][bname];}
		$myadd="[<a href=".$classurl.">".$classname."</a>]";
		//只返回链接
		if($have_class==9)
		{$myadd=$classurl;}
	}
	else
	{$myadd="";}
	return $myadd;
}

//栏目链接字符串
function m_ReturnClassLink($classid){
	global $class_r,$public_r,$fun_r,$mob_r;
	if(empty($class_r[$classid][featherclass]))
	{$class_r[$classid][featherclass]="|";}
	$r=explode("|",$class_r[$classid][featherclass].$classid."|");
	if($mob_r['ltp']){
		$string="<a href=\"".$mob_r['msiteurl']."\">".$fun_r['index']."</a>";
	}else{
		$string="<a href=\"/\">".$fun_r['index']."</a>";
	}
	for($i=1;$i<count($r)-1;$i++)
	{
		$url=m_ReturnBqClassname($r[$i],9);
		$string.="&nbsp;".$public_r[navfh]."&nbsp;<a href=\"".$url."\">".$class_r[$r[$i]][classname]."</a>";
	}
	return $string;
}

//栏目地址伪静态
function m_eReturnRewriteClassUrl($classid,$ecms=0){
	global $public_r,$mob_r;
	if(empty($public_r['rewriteclass']))
	{
		$r['pageurl']=$mob_r['newsurl']."e/action/ListInfo/?classid=$classid";
		$r['rewrite']=0;
	}
	else
	{
		if($ecms==1)
		{
			$r['pageurl']=$mob_r['newsurl'].str_replace(array('[!--classid--]','[!--page--]'),array($classid,0),$public_r['rewriteclass']);
		}
		else
		{
			$r['pageurl']=$mob_r['newsurl'].str_replace('[!--classid--]',$classid,$public_r['rewriteclass']);
		}
		$r['rewrite']=1;
	}
	return $r;
}

//专题链接
function m_ReturnBqZtname($ztid){
	global $mob_r,$class_zr;
	if($mob_r['ltp']){
		$zturl=$mob_r['msiteurl'].$class_zr[$ztid][ztpath]."/";
	}else{
		$zturl="/".$class_zr[$ztid][ztpath]."/";
	}
	return $zturl;
}

//专题链接字符串
function m_ReturnZtLink($ztid){
	global $class_zr,$mob_r,$fun_r,$public_r;
	if($mob_r['ltp']){
		$string="<a href=\"".$mob_r['msiteurl']."\" class='nav_one'>".$fun_r['index']."</a>";
	}else{
		$string="<a href=\"/\" class='nav_one'>".$fun_r['index']."</a>";
	}
	$zturl=m_ReturnBqZtname($ztid);
    $string.="&nbsp;".$public_r[navfh]."&nbsp;<a href=\"".$zturl."\" class='nav_one'>".$class_zr[$ztid][ztname]."</a>";
	return $string;
}

//返回标题分类链接字符串
function m_ReturnInfoTypeLink($typeid){
	global $class_tr,$public_r,$fun_r,$mob_r;
	if($mob_r['ltp']){
		$string="<a href=\"/\">".$fun_r['index']."</a>";
		$url=$mob_r['msiteurl'].$class_tr[$typeid][tpath]."/";
	}else{
		$string="<a href=\"".$mob_r['msiteurl']."\">".$fun_r['index']."</a>";
		$url="/".$class_tr[$typeid][tpath]."/";
	}
    $string.="&nbsp;".$public_r[navfh]."&nbsp;<a href=\"".$url."\">".$class_tr[$typeid][tname]."</a>";
	return $string;
}

//返回TAGS列表伪静态
function m_eReturnRewriteTagsUrl($tagid,$tagname,$ecms=0){
	global $public_r,$mob_r;
	$tagname=urlencode($tagname);
	if($mob_r['ltp']){
		$uqz=$mob_r['msiteurl'];
	}else{
		$uqz="/";
	}
	if(empty($public_r['rewritetags']))
	{
		$r['pageurl']=$uqz."e/tags/?tagname=".$tagname;
		$r['rewrite']=0;
	}
	else
	{
		if($ecms==1)
		{
			$r['pageurl']=$uqz.str_replace(array('[!--tagname--]','[!--page--]'),array($tagname,0),$public_r['rewritetags']);
		}
		else
		{
			$r['pageurl']=$uqz.str_replace('[!--tagname--]',$tagname,$public_r['rewritetags']);
		}
		$r['rewrite']=1;
	}
	return $r;
}


/***************模板******************/

//模板表转换
function dp_GetTemptb($temptb){
	global $mob_r,$dbtbpre;
	$en='';
	if(!empty($mob_r['gid'])&&$mob_r['gid']!=1)
	{
		$en="_".$mob_r['gid'];
	}
	return $dbtbpre.$temptb.$en;
}

//取得列表模板
function mGetListTemp($tempid){
	global $empire;
	$r=$empire->fetch1("select temptext,subnews,listvar,rownum,showdate,modid,subtitle,docode from ".dp_GetTemptb("enewslisttemp")." where tempid='$tempid'");
	$r[temptext]=mInfoNewsBq('list'.$tempid,$r[temptext]);
	return $r;
}

//取得封面模板
function mGetClassTemp($tempid){
	global $empire;
	$r=$empire->fetch1("select temptext from ".dp_GetTemptb("enewsclasstemp")." where tempid='$tempid'");
	return $r['temptext'];
}

//取得首页模板
function mGetIndextemp(){
	global $empire,$dbtbpre,$public_r;
	if($public_r['indexpageid'])
	{
		$r=$empire->fetch1("select temptext from {$dbtbpre}enewsindexpage where tempid='".$public_r['indexpageid']."'");
		return $r['temptext'];
	}
	$r=$empire->fetch1("select indextemp from ".dp_GetTemptb("enewspubtemp")." limit 1");
	return $r['indextemp'];
}

/***************标签******************/

//替换灵动标签
function mDoRepEcmsLoopBq($temp){
	$yzz="/\[e:loop={(.+?)}\](.+?)\[\/e:loop\]/is";
	$xzz="<?php
\$bqno=0;
\$ecms_bq_sql=msys_ReturnEcmsLoopBq(\\1);
if(\$ecms_bq_sql){
while(\$bqr=\$empire->fetch(\$ecms_bq_sql)){
\$bqsr=msys_ReturnEcmsLoopStext(\$bqr);
\$bqno++;
?>\\2<?php
}
}
?>";
	$temp=preg_replace($yzz,$xzz,$temp);
	$temp=mDoRepEcmsIndexLoopBq($temp);
	return $temp;
}

//替换索引灵动标签
function mDoRepEcmsIndexLoopBq($temp){
	$yzz="/\[e:indexloop={(.+?)}\](.+?)\[\/e:indexloop\]/is";
	$xzz="<?php
\$bqno=0;
\$ecms_bq_sql=msys_ReturnEcmsIndexLoopBq(\\1);
if(\$ecms_bq_sql){
while(\$indexbqr=\$empire->fetch(\$ecms_bq_sql)){
if(empty(\$class_r[\$indexbqr['classid']]['tbname'])){continue;}
\$bqr=\$empire->fetch1(\"select * from {\$dbtbpre}ecms_\".\$class_r[\$indexbqr['classid']]['tbname'].\" where id='\$indexbqr[id]'\");
\$bqsr=msys_ReturnEcmsLoopStext(\$bqr);
\$bqno++;
?>\\2<?php
}
}
?>";
	return preg_replace($yzz,$xzz,$temp);
}

/***************列表生成******************/

//建立移动目录
function mFormatClassPath($classpath){
	global $mob_r;
	$r=explode("/",$classpath);
	$count=count($r)-1;
	$returnpath="";
	for($i=0;$i<$count;$i++)
	{
		if($i>0)
		{
			$returnpath.="/".$r[$i];
		}
		else
		{
			$returnpath.=$r[$i];
		}
		$createpath=$mob_r['msitepath'].$returnpath;

		$mk=DoMkdir($createpath);
		if(empty($mk))
		{
			printerror("CreatePathFail","");
		}
	}
	return $createpath;
}

//无信息的信息列表
function mNotinfoListHtml($path,$list_r,$classlevel,$pcdolink){
	global $fun_r,$public_r;
	$word=$fun_r['HaveNotListInfo'];
	$pagetext=$list_r[0].$word.$list_r[2];
	$pagetext=str_replace('[!--show.page--]','',$pagetext);
	$pagetext=str_replace('[!--show.listpage--]','',$pagetext);
	$pagetext=str_replace('[!--list.pageno--]','',$pagetext);
	$pagetext=str_replace('[--pcurl--]',$pcdolink,$pagetext);
	WriteFiletext($path,$classlevel.$pagetext);
}

//生成信息列表
function m_ListHtml($classid,$fields,$enews=0,$userlistr=""){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r,$etable_r,$mob_r;
	if(!$mob_r[mob_open]){
		return '';
	}
	//不生成栏目
	if(($enews==0||$enews==3)&&($class_r[$classid]['listdt']||$class_r[$classid]['wburl']||strstr($public_r['nreclass'],','.$classid.',')))
	{
		return '';
	}
	$GLOBALS['navclassid']=$classid;
	$doclass="index";
	$classlevel='';
	$yhvar='qlist';
	if($enews==0)//子栏目列表
	{
		if(InfoIsInTable($class_r[$classid][tbname]))//内部表
		{
			return '';
		}
		$selfclassid=$classid;
		$doenews=0;
		$cr=$empire->fetch1("select classpagekey,intro,classimg,cgroupid,repagenum,bdinfoid from {$dbtbpre}enewsclass where classid='$classid'");
		//绑定信息
		if(!empty($cr['bdinfoid']))
		{
			ReClassBdInfo($classid);
			return '';
		}
		$mid=$class_r[$classid][modid];
		//权限
		if($cr['cgroupid'])
		{
			$classlevel=AddCheckClassLevel($classid,$cr['cgroupid'],'');
		}
		//页面
		$pagetitle=ehtmlspecialchars($class_r[$classid][classname]);
		$pagekey=ehtmlspecialchars($cr['classpagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['classimg'];
		$url=m_ReturnClassLink($classid);
		$haveclass=0;
		//排序
		if(empty($class_r[$classid][reorder]))
		{
			$addorder="newstime desc";
	    }
		else
		{
			$addorder=$class_r[$classid][reorder];
	    }
		//分页参数
		$pagefunr=m_eReturnRewriteClassUrl($classid);
		$pagefunr['repagenum']=$cr['repagenum'];
		$totalrepage=$cr['repagenum']*$class_r[$classid][lencord];
		if($totalrepage)
		{
			$limit=" limit ".$totalrepage;
		}
		if($class_r[$classid][maxnum])//总记录数
		{
			if($class_r[$classid][maxnum]<$totalrepage)
			{
				$limit=" limit ".$class_r[$classid][maxnum];
			}
			$limitnum=$class_r[$classid][maxnum];
		}
		//优化
		$yhid=$class_r[$classid][yhid];
		if($yhid)
		{
			$yhadd=ReturnYhSql($yhid,$yhvar,1);
		}
		$query="select ".ReturnSqlListF($mid)." from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$yhadd."classid='$classid' order by ".ReturnSetTopSql('list').$addorder.$limit;
		$totalquery="select count(*) as total from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$yhadd."classid='$classid'";//统计
		$doclasspath=ReturnSaveClassPath($classid,0);
		$dopath=$mob_r['msitepath'].$doclasspath."/";
		$dolink=dp_mindexurl().$doclasspath."/";
		$pcdolink=$mob_r['newsurl'].$doclasspath."/";
		$dotype=$class_r[$classid][classtype];
		$classname=$class_r[$classid][classname];
		$lencord=$class_r[$classid][lencord];//记录数
		$onclick="<script src='".$public_r[newsurl]."e/public/onclick/?enews=doclass&classid=$classid'></script>";
		//模板
		$listtempid=$mob_r[$classid][listtempid]?$mob_r[$classid][listtempid]:$class_r[$classid][listtempid];
	}
	elseif($enews==5)//标题分类列表
	{
		$mid=$class_tr[$classid]['mid'];
		$tbname=$emod_r[$mid]['tbname'];
		if(InfoIsInTable($tbname))//内部表
		{
			return '';
		}
		$selfclassid=$classid;
		$doenews=1;
		$cr=$empire->fetch1("select tnum,listtempid,maxnum,reorder,timg,intro,pagekey,listdt,repagenum from {$dbtbpre}enewsinfotype where typeid='$classid'");
		//页面
		$pagetitle=ehtmlspecialchars($class_tr[$classid]['tname']);
		$pagekey=ehtmlspecialchars($cr['pagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['timg'];
		$url=ReturnInfoTypeLink($classid);
		$haveclass=1;
		if($cr['listdt'])//动态页面
		{
			return '';
		}
		//排序
		if(empty($cr['reorder']))
		{
			$addorder='newstime desc';
	    }
		else
		{
			$addorder=$cr['reorder'];
	    }
		//分页参数
		$pagefunr=eReturnRewriteLink('ttpage',$classid,0);
		$pagefunr['repagenum']=$cr['repagenum'];
		$totalrepage=$cr['repagenum']*$cr['tnum'];
		if($totalrepage)
		{
			$limit=" limit ".$totalrepage;
		}
		if($cr['maxnum'])
		{
			if($cr['maxnum']<$totalrepage)
			{
				$limit=" limit ".$cr['maxnum'];
			}
			$limitnum=$cr['maxnum'];
		}
		//优化
		$yhid=$class_tr[$classid]['yhid'];
		if($yhid)
		{
			$yhadd=ReturnYhSql($yhid,$yhvar,1);
		}
		$query="select ".ReturnSqlListF($mid)." from {$dbtbpre}ecms_".$tbname." where ".$yhadd."ttid='$classid' order by ".$addorder.$limit;
		$totalquery="select count(*) as total from {$dbtbpre}ecms_".$tbname." where ".$yhadd."ttid='$classid'";//统计
		$doclasspath=ReturnSaveInfoTypePath($classid,0);
		$dopath=$mob_r['msitepath'].$doclasspath."/";
		$dolink=dp_mindexurl().$doclasspath."/";
		$pcdolink=$mob_r['newsurl'].$doclasspath."/";
		$dotype=$class_tr[$classid]['ttype'];
		$classname=$class_tr[$classid]['tname'];
		$lencord=$cr['tnum'];//记录数
		$onclick="";
		//模板
		$listtempid=$cr['listtempid'];
	}
	elseif($enews==3)//大栏目列表
	{
		if(InfoIsInTable($class_r[$classid][tbname]))//内部表
		{
			return '';
		}
		$selfclassid=$classid;
		$doenews=0;
		$cr=$empire->fetch1("select classpagekey,intro,classimg,cgroupid,repagenum from {$dbtbpre}enewsclass where classid='$classid'");
		$mid=$class_r[$classid][modid];
		//权限
		if($cr['cgroupid'])
		{
			$classlevel=AddCheckClassLevel($classid,$cr['cgroupid'],'');
		}
		//页面
		$pagetitle=ehtmlspecialchars($class_r[$classid][classname]);
		$pagekey=ehtmlspecialchars($cr['classpagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['classimg'];
		$url=m_ReturnClassLink($classid);
		$haveclass=1;
		//排序
		if(empty($class_r[$classid][reorder]))
		{
			$addorder="newstime desc";
	    }
		else
		{
			$addorder=$class_r[$classid][reorder];
	    }
		//分页参数
		$pagefunr=m_eReturnRewriteClassUrl($classid);
		$pagefunr['repagenum']=$cr['repagenum'];
		$totalrepage=$cr['repagenum']*$class_r[$classid][lencord];
		if($totalrepage)
		{
			$limit=" limit ".$totalrepage;
		}
		if($class_r[$classid][maxnum])
		{
			if($class_r[$classid][maxnum]<$totalrepage)
			{
				$limit=" limit ".$class_r[$classid][maxnum];
			}
			$limitnum=$class_r[$classid][maxnum];
		}
		$whereclass=ReturnClass($class_r[$classid][sonclass]);
		//优化
		$yhid=$class_r[$classid][yhid];
		if($yhid)
		{
			$yhadd=ReturnYhSql($yhid,$yhvar,1);
		}
		$query="select ".ReturnSqlListF($mid)." from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$yhadd."(".$whereclass.") order by ".ReturnSetTopSql('list').$addorder.$limit;
		$totalquery="select count(*) as total from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$yhadd."(".$whereclass.")";//统计
		$doclasspath=ReturnSaveClassPath($classid,0);
		$dopath=$mob_r['msitepath'].$doclasspath."/";
		$dolink=dp_mindexurl().$doclasspath."/";
		$pcdolink=$mob_r['newsurl'].$doclasspath."/";
		$dotype=$class_r[$classid][classtype];
		$classname=$class_r[$classid][classname];
		$lencord=$class_r[$classid][lencord];//记录数
		$onclick="<script src='".$public_r[newsurl]."e/public/onclick/?enews=doclass&classid=$classid'></script>";
		//模板
		$listtempid=$mob_r[$classid][listtempid]?$mob_r[$classid][listtempid]:$class_r[$classid][listtempid];
	}
	elseif($enews==4)//按sql语句生成列表
	{
		$selfclassid=0;
		$doenews=1;
		$userlistr['listsql']=RepSqlTbpre($userlistr['listsql']);
		$userlistr['totalsql']=RepSqlTbpre($userlistr['totalsql']);
		//页面
		$pagetitle=ehtmlspecialchars($userlistr['pagetitle']);
		$pagekey=ehtmlspecialchars($userlistr['pagekeywords']);
		$pagedes=ehtmlspecialchars($userlistr['pagedescription']);
		$haveclass=1;
		if($userlistr['maxnum'])//最大查询数
		{
			$limit=" limit ".$userlistr['maxnum'];
			$limitnum=$userlistr['maxnum'];
		}
		$query=stripSlashes($userlistr['listsql']).$limit;
		//统计
		$totalquery=stripSlashes($userlistr['totalsql']);
		$dopath=$mob_r['msitepath'].str_replace('../','',$userlistr['filepath']);
		$dolink=dp_mindexurl().str_replace($userlistr['addpath'].'../','',$userlistr['filepath']);
		$pcdolink=$mob_r['newsurl'].str_replace($userlistr['addpath'].'../','',$userlistr['filepath']);
		$dotype=$userlistr['filetype'];
		$classname=$userlistr['pagetitle'];
		$lencord=$userlistr['lencord'];//记录数
		$onclick='';
		$url=ReturnUserPLink($pagetitle,$dolink);
		//模板
		$listtempid=$userlistr['listtempid'];
		mFormatClassPath(str_replace('../','',$userlistr['filepath']));
	}
	if(empty($lencord))
	{
		$lencord=25;
	}
	mFormatClassPath($doclasspath."/");
	//列表模板
	$listtemp_r=mGetListTemp($listtempid);
    $listtemp=$listtemp_r[temptext];
	$subnews=$listtemp_r[subnews];
	$subtitle=$listtemp_r[subtitle];
	$docode=$listtemp_r[docode];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$listtemp_r[listvar]);
	$rownum=$listtemp_r[rownum];
	$formatdate=$listtemp_r[showdate];
	if(empty($rownum))
	{
		$rownum=1;
	}
	if(empty($mid))
	{
		$mid=$listtemp_r[modid];
	}
	$field=ReturnReplaceListF($mid);
	//分页参数
	$pagefunr['dofile']=$dofile;
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun='msys_ShowListPage';
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun='msys_ShowListMorePage';
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='msys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}
	//替换模板变量
	$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	$listtemp=mClass_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--page.stats--]',$onclick,$listtemp);
	$no=1;
	$ok=0;
	$changerow=1;
	$num=$empire->gettotal($totalquery);
	//最大数
	if($limitnum&&$limitnum<$num)
	{
		$num=$limitnum;
	}
	$page=ceil($num/$lencord);
	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(empty($num))
	{
		$noinfopath=$dopath."index".$dotype;
		$nolink=$dolink."index".$dotype;
		mNotinfoListHtml($noinfopath,$list_r,$classlevel,$pcdolink);
		return "";
	}
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	while($k=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$k,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath."index".$dotype;
			}
			else
			{
				$path=$dopath."index_".$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions,$pagefunr);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//pc端网址
			if($pagenum==1){
				$pcurl=$pcdolink;
			}else{
				$pcurl=$pcdolink."index_".$ok.$dotype;
			}
			$string=str_replace('[--pcurl--]',$pcurl,$string);
			//替换分页数
			$string=str_replace('[!--list.pageno--]',($pagenum==1?'':$pagenum),$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
}

//生成索引类信息列表
function m_ListHtmlIndex($classid,$fields,$enews=0,$userlistr=""){
	global $empire,$dbtbpre,$emod_r,$public_r,$class_r,$class_zr,$fun_r,$class_tr,$level_r,$etable_r,$mob_r;
	if(!$mob_r[mob_open]){
		return '';
	}
	$GLOBALS['navclassid']=$classid;
	$dofile="index";
	$classlevel='';
	$yhvar='qlist';
	$mid=0;
	if($enews==0)//专题列表
	{
		$selfclassid=$classid;
		$doenews=1;
		$cr=$empire->fetch1("select ztpagekey,intro,ztimg,classtempid from {$dbtbpre}enewszt where ztid='$classid'");
		//页面
		$pagetitle=ehtmlspecialchars($class_zr[$classid][ztname]);
		$pagekey=ehtmlspecialchars($cr['ztpagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['ztimg'];
		$url=m_ReturnZtLink($classid);
		$haveclass=1;
		if($class_zr[$classid][islist]!=1)//非列表式
		{
			$classtemp=$class_zr[$classid][islist]==2?GetZtText($classid):mGetClassTemp($cr['classtempid']);
			mNewsBq($classid,$classtemp,3,0);
			return "";
		}
		//排序
		if(empty($class_zr[$classid][reorder]))
		{
			$addorder='newstime desc';
	    }
		else
		{
			$addorder=$class_zr[$classid][reorder];
	    }
		if($class_zr[$classid][maxnum])
		{
			$limit=' limit '.$class_zr[$classid][maxnum];
			$limitnum=$class_zr[$classid][maxnum];
		}
		//优化
		$yhid=$class_zr[$classid][yhid];
		if($yhid)
		{
			$yhadd=ReturnYhSql($yhid,$yhvar,1);
		}
		$query="select ztid,cid,classid,id,isgood from {$dbtbpre}enewsztinfo where ".$yhadd."ztid='$classid' order by ".$addorder.$limit;
		$totalquery="select count(*) as total from {$dbtbpre}enewsztinfo where ".$yhadd."ztid='$classid'";//统计
		$doclasspath=ReturnSaveZtPath($classid,0);
		$dopath=$mob_r['msitepath'].$doclasspath."/";
		$dolink=dp_mindexurl().$doclasspath."/";
		$pcdolink=$mob_r['newsurl'].$doclasspath."/";
		$dotype=$class_zr[$classid][zttype];
		$classname=$class_zr[$classid][ztname];
		$lencord=$class_zr[$classid][ztnum];//记录数
		$onclick="<script src='".$public_r[newsurl]."e/public/onclick/?enews=dozt&ztid=$classid'></script>";
		//模板
		$listtempid=$class_zr[$classid][listtempid];
	}
	elseif($enews==1)//专题子类列表
	{
		$selfclassid=$classid;
		$doenews=1;
		$cr=$empire->fetch1("select ztid,cname,islist,listtempid,maxnum,tnum,reorder,ttype from {$dbtbpre}enewszttype where cid='$classid'");
		$GLOBALS['navinfor']['ecmsbid']=$cr['ztid'];
		//页面
		$pagetitle=ehtmlspecialchars($cr['cname']);
		$pagekey=ehtmlspecialchars($cr['cname']);
		$pagedes=ehtmlspecialchars($cr['cname']);
		$url=m_ReturnZtLink($cr['ztid']);
		$haveclass=1;
		if($cr['islist']!=1)//非列表式
		{
			$classtemp=GetZtcText($classid);
			mNewsBq($classid,$classtemp,4,0);
			return '';
		}
		//排序
		if(empty($cr['reorder']))
		{
			$addorder='newstime desc';
	    }
		else
		{
			$addorder=$cr['reorder'];
	    }
		if($cr['maxnum'])
		{
			$limit=" limit ".$cr['maxnum'];
			$limitnum=$cr['maxnum'];
		}
		//优化
		$ztid=$cr['ztid'];
		$yhid=$class_zr[$ztid][yhid];
		if($yhid)
		{
			$yhadd=ReturnYhSql($yhid,$yhvar,1);
		}
		$query="select ztid,cid,classid,id,isgood from {$dbtbpre}enewsztinfo where ".$yhadd."cid='$classid' order by ".$addorder.$limit;
		$totalquery="select count(*) as total from {$dbtbpre}enewsztinfo where ".$yhadd."cid='$classid'";//统计
		$doclasspath=ReturnSaveZtPath($ztid,0);
		$dopath=$mob_r['msitepath'].$doclasspath."/";
		$pcdolink=$mob_r['newsurl'].$doclasspath."/";
		$dofile='type'.$classid;//文件名
		$dotype=$cr['ttype'];
		$classname=$cr['cname'];
		$lencord=$cr['tnum'];//记录数
		$onclick="<script src='".$public_r[newsurl]."e/public/onclick/?enews=dozt&ztid=$ztid'></script>";
		//模板
		$listtempid=$cr['listtempid'];
	}
	elseif($enews==4)//按sql语句生成列表
	{
		$selfclassid=0;
		$doenews=1;
		$userlistr['listsql']=RepSqlTbpre($userlistr['listsql']);
		$userlistr['totalsql']=RepSqlTbpre($userlistr['totalsql']);
		//页面
		$pagetitle=ehtmlspecialchars($userlistr['pagetitle']);
		$pagekey=ehtmlspecialchars($userlistr['pagekeywords']);
		$pagedes=ehtmlspecialchars($userlistr['pagedescription']);
		$haveclass=1;
		if($userlistr['maxnum'])//最大查询数
		{
			$limit=" limit ".$userlistr['maxnum'];
			$limitnum=$userlistr['maxnum'];
		}
		$query=stripSlashes($userlistr['listsql']).$limit;
		//统计
		$totalquery=stripSlashes($userlistr['totalsql']);
		$dopath=$userlistr['addpath'].$userlistr['filepath'];
		$dolink=$public_r[newsurl].str_replace($userlistr['addpath'].'../../','',$dopath);
		$pcdolink=$mob_r['newsurl'].str_replace($userlistr['addpath'].'../../','',$dopath);
		$dotype=$userlistr['filetype'];
		$classname=$userlistr['pagetitle'];
		$lencord=$userlistr['lencord'];//记录数
		$onclick='';
		$url=ReturnUserPLink($pagetitle,$dolink);
		//模板
		$listtempid=$userlistr['listtempid'];
	}
	if(empty($lencord))
	{
		$lencord=25;
	}
	$lencord=12;
	mFormatClassPath($doclasspath."/");
	//列表模板
	$listtemp_r=mGetListTemp($listtempid);
    $listtemp=$listtemp_r[temptext];
	$subnews=$listtemp_r[subnews];
	$subtitle=$listtemp_r[subtitle];
	$docode=$listtemp_r[docode];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$listtemp_r[listvar]);
	$rownum=$listtemp_r[rownum];
	$formatdate=$listtemp_r[showdate];
	if(empty($rownum))
	{
		$rownum=1;
	}
	if(empty($mid))
	{
		$mid=$listtemp_r[modid];
	}
	$field=ReturnReplaceListF($mid);
	//分页参数
	$pagefunr['dofile']=$dofile;
	//分页列表函数
	if(!empty($public_r['listpagefun'])||!empty($public_r['listpagelistfun']))
	{
		if(strstr($listtemp,'[!--show.page--]'))//下拉式
		{
			$thefun=$public_r['listpagefun'];
			$bereplistpage='[!--show.page--]';
		}
		else//列表式
		{
			$thefun='msys_ShowListMorePage';
			$bereplistpage='[!--show.listpage--]';
		}
	}
	else
	{
		$thefun='sys_ShowListPage';
		$bereplistpage='[!--show.page--]';
	}
	//替换模板变量
	$listtemp=str_replace('[!--newsnav--]',$url,$listtemp);//位置导航
	$listtemp=mClass_ReplaceSvars($listtemp,$url,$selfclassid,$pagetitle,$pagekey,$pagedes,$classimg,$add,$doenews);
	$listtemp=str_replace('[!--page.stats--]',$onclick,$listtemp);
	$no=1;
	$ok=0;
	$changerow=1;
	$num=$empire->gettotal($totalquery);
	//最大数
	if($limitnum&&$limitnum<$num)
	{
		$num=$limitnum;
	}
	$page=ceil($num/$lencord);
	//取得列表模板
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	//无信息
	if(empty($num))
	{
		$noinfopath=$dopath.$dofile.$dotype;
		mNotinfoListHtml($noinfopath,$list_r,$classlevel,$nolink);
		return "";
	}
	$sql=$empire->query($query);
	$listtext=$list_r[1];
	while($k=$empire->fetch($sql))
	{
		if(empty($class_r[$k[classid]][tbname]))
		{
			continue;
		}
		$infor=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$k[classid]][tbname]." where id='$k[id]' limit 1");
		if(empty($infor['id']))
		{
			continue;
		}
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$subtitle,$formatdate,$url,$haveclass,$infor,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		if($no%$lencord==0||($num%$lencord<>0&&$num==$no))
		{
			$ok+=1;
			$pagenum=ceil($no/$lencord);
			//首页
			if($pagenum==1)
			{
				$path=$dopath.$dofile.$dotype;
			}
			else
			{
				$path=$dopath.$dofile.'_'.$ok.$dotype;
			}
			//取得分页参数
			$returnpager=$thefun($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$myoptions,$pagefunr);
			$showpage=$returnpager['showpage'];
			$myoptions=$returnpager['option'];
			$list1=str_replace($bereplistpage,$showpage,$list_r[0]);
			$list2=str_replace($bereplistpage,$showpage,$list_r[2]);
			//多余数据
			if($changerow<=$rownum&&$listtext<>$list_r[1])
			{
				$string.=$listtext;
			}
			$listtext=$list_r[1];
			$changerow=1;
			$string=$list1.$string.$list2;
			//pc端网址
			if($pagenum==1){
				$pcurl=$pcdolink;
			}else{
				$pcurl=$pcdolink."index_".$ok.$dotype;
			}
			$string=str_replace('[--pcurl--]',$pcurl,$string);
			//替换分页数
			$string=str_replace('[!--list.pageno--]',($pagenum==1?'':$pagenum),$string);
			WriteFiletext($path,$classlevel.$string);
			$string='';
		}
		$no++;
	}
}

//替换列表模板/标签模板/搜索模板
function mReplaceListVars($no,$listtemp,$subnews,$subtitle,$formatdate,$url,$haveclass=0,$r,$field,$docode=0){
	global $empire,$public_r,$class_r,$class_zr,$fun_r,$dbtbpre,$emod_r,$class_tr,$level_r,$navclassid,$etable_r,$mob_r;
	if($haveclass)
	{
		$add=m_ReturnBqClassname($r['classid'],$haveclass);
	}
	if(empty($r[oldtitle]))
	{
		$r[oldtitle]=$r[title];
	}
	if($docode==1)
	{
		$listtemp=stripSlashes($listtemp);
		eval($listtemp);
	}
	$ylisttemp=$listtemp;
	$mid=$field['mid'];
	$fr=$field['fr'];
	$fcount=$field['fcount'];
	for($i=1;$i<$fcount;$i++)
	{
		$f=$fr[$i];
		$value=$r[$f];
		$spf=0;
		if($f=='title')//标题
		{
	        if(!empty($subtitle))//截取字符
	        {
				$value=sub($value,0,$subtitle,false);
	        }
			$value=DoTitleFont($r[titlefont],$value);
			$spf=1;
		}
		elseif($f=='newstime')//时间
		{
			//$value=date($formatdate,$value);
			$value=format_datetime($value,$formatdate);
			$spf=1;
		}
		elseif($f=='titlepic')//标题图片
		{
			if(empty($value))
		    {
				$value=$public_r[newsurl].'e/data/images/notimg.gif';
			}
			$value=dp_PicToMLink($value);
			$spf=1;
		}
		elseif(strstr($emod_r[$mid]['smalltextf'],','.$f.','))//简介
		{
			if(!empty($subnews))//截取字符
			{
				$value=sub($value,0,$subnews,false);
			}
		}
		elseif($f=='befrom')//信息来源
		{
			$spf=1;
		}
		elseif($f=='writer')//作者
		{
			$spf=1;
		}
		if($spf==0&&!strstr($emod_r[$mid]['editorf'],','.$f.','))
		{
			if(strstr($emod_r[$mid]['tobrf'],','.$f.','))//加br
			{
				$value=nl2br($value);
			}
			if(!strstr($emod_r[$mid]['dohtmlf'],','.$f.','))//去除html
			{
				$value=RepFieldtextNbsp(ehtmlspecialchars($value));
			}
		}
		$listtemp=str_replace('[!--'.$f.'--]',$value,$listtemp);
	}
	$titleurl=dp_InfoToMLink($r['titleurl']);//链接
	$listtemp=str_replace('[!--id--]',$r[id],$listtemp);
	$listtemp=str_replace('[!--classid--]',$r[classid],$listtemp);
	$listtemp=str_replace('[!--class.name--]',$add,$listtemp);
	$listtemp=str_replace('[!--ttid--]',$r[ttid],$listtemp);
	$listtemp=str_replace('[!--tt.name--]',$class_tr[$r[ttid]][tname],$listtemp);
	$listtemp=str_replace('[!--userfen--]',$r[userfen],$listtemp);
	$listtemp=str_replace('[!--titleurl--]',$titleurl,$listtemp);
	$listtemp=str_replace('[!--no.num--]',$no,$listtemp);
	$listtemp=str_replace('[!--plnum--]',$r[plnum],$listtemp);
	$listtemp=str_replace('[!--userid--]',$r[userid],$listtemp);
	$listtemp=str_replace('[!--username--]',$r[username],$listtemp);
	$listtemp=str_replace('[!--onclick--]',$r[onclick],$listtemp);
	$listtemp=str_replace('[!--oldtitle--]',$r[oldtitle],$listtemp);
	$listtemp=str_replace('[!--totaldown--]',$r[totaldown],$listtemp);
	//栏目链接
	if(strstr($ylisttemp,'[!--this.classlink--]'))
	{
		$thisclasslink=m_ReturnBqClassname($r['classid'],9);
		$listtemp=str_replace('[!--this.classlink--]',$thisclasslink,$listtemp);
	}
	$thisclassname=$class_r[$r[classid]][bname]?$class_r[$r[classid]][bname]:$class_r[$r[classid]][classname];
	$listtemp=str_replace('[!--this.classname--]',$thisclassname,$listtemp);
	return $listtemp;
}

//栏目页替换公共标记
function mClass_ReplaceSvars($temp,$url,$classid,$title,$key,$des,$classimg,$add,$enews=0){
	global $public_r,$class_r,$class_zr,$mob_r;
	$temp=str_replace('[!--class.menu--]',$public_r['classnavs'],$temp);//栏目导航
	$temp=str_replace('[!--pagetitle--]',$title,$temp);
	$temp=str_replace('[!--pagekey--]',$key,$temp);
	$temp=str_replace('[!--pagedes--]',$des,$temp);
	$temp=str_replace('[!--class.intro--]',$des,$temp);
	$temp=str_replace('[!--class.keywords--]',$key,$temp);
	$temp=str_replace('[!--class.classimg--]',$classimg,$temp);
	$temp=str_replace('[!--self.classid--]',$classid,$temp);
	if($enews==0)//栏目
	{
		$temp=str_replace('[!--class.name--]',$class_r[$classid]['classname'],$temp);
		$bclassid=$class_r[$classid]['bclassid'];
		$temp=str_replace('[!--bclass.id--]',$bclassid,$temp);
		$temp=str_replace('[!--bclass.name--]',$class_r[$bclassid]['classname'],$temp);
		$path=$public_r['newsurl'].'d/js/class/class'.$classid.'_';
	}
	else//专题
	{
		$temp=str_replace('[!--class.name--]',$class_zr[$classid]['ztname'],$temp);
		$path=$public_r['newsurl'].'d/js/class/zt'.$classid.'_';
	}
	$allpath=$public_r[newsurl].'d/js/js/';
	//热门文章
	$temp=str_replace("[!--hotnews--]","<script src='".$allpath."hotnews.js'></script>",$temp);
	$temp=str_replace("[!--self.hotnews--]","<script src='".$path."hotnews.js'></script>",$temp);
	//点击排行
	$temp=str_replace("[!--newnews--]","<script src='".$allpath."newnews.js'></script>",$temp);
	$temp=str_replace("[!--self.newnews--]","<script src='".$path."newnews.js'></script>",$temp);
	//推荐
	$temp=str_replace("[!--goodnews--]","<script src='".$allpath."goodnews.js'></script>",$temp);
	$temp=str_replace("[!--self.goodnews--]","<script src='".$path."goodnews.js'></script>",$temp);
	//评论排行
	$temp=str_replace("[!--hotplnews--]","<script src='".$allpath."hotplnews.js'></script>",$temp);
	$temp=str_replace("[!--self.hotplnews--]","<script src='".$path."hotplnews.js'></script>",$temp);
	//头条排行
	$temp=str_replace("[!--firstnews--]","<script src='".$allpath."firstnews.js'></script>",$temp);
	$temp=str_replace("[!--self.firstnews--]","<script src='".$path."firstnews.js'></script>",$temp);
	$temp=str_replace('[!--news.url--]',dp_mindexurl(),$temp);
	return $temp;
}

/***************信息生成******************/

//替换正文图片地址 图片链接到主站网址
function mReplacePcurl($newstext){
	global $mob_r,$public_r;
	$newstext=stripSlashes($newstext);
	$ppath='src="/d/file/';
	if(stristr($public_r['fileurl'],'://')){
		$oldpath='src="'.$public_r['fileurl'];
	}else{
		$oldpath='src="'.$mob_r['newsurl'].'d/file/';
	}
	$newstext=str_ireplace($ppath,$oldpath,$newstext);
	if($mob_r['zpic']){
		//处理图片宽度和高度
		$im1="/width=(.?)\"[0-9]*(.?)\"/";
		$im2="width=$1\"".$mob_r['zpicsize']."$2\" ";
		$im3="/height=(.?)\"[0-9]*(.?)\"/";
		$newstext=preg_replace($im1,$im2,$newstext);
		$newstext=preg_replace($im3,"",$newstext);
	}
	$newstext=addslashes($newstext);
	return $newstext;
}

//正文的摘要和描述
function mdp_mszy($j,$smalltext,$newstext,$e){
	global $public_r,$navinfor;
	if($j==1){
		$str=$smalltext;
	}else{
		$str=esub(strip_tags($newstext),$public_r['smalltextlen']);
	}
	$pa=array("&amp;ldquo;","&amp;rdquo;","&amp;hellip;","&amp;mdash;","&rdquo;","&ldquo;","\r","\n");
	$str=str_replace($pa,'',$str);
	$str=preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/","",$str);
	if($e==1){
		return $str;
	}
	if($j==1&&$str){
		$str='<div class="zhaiyao"><strong>摘要：</strong>'.$str.'</div>';
	}else{
		$str='';
	}
	return $str;
}

//替换关键字
function mReplaceKey($newstext,$classid=0){
	global $mob_r;
	$old='href=\"'.$mob_r['newsurl'];
	$new='href=\"'.$mob_r['msiteurl'];
	$newstext=str_replace($old,$new,$newstext);
	return $newstext;
}

//取得相关链接
function mGetKeyboard($keyboard,$keyid,$classid,$id,$link_num){
	global $empire,$public_r,$class_r,$fun_r,$dbtbpre;
	if($keyid&&$link_num)
	{
		$add="id in (".$keyid.")";
		$tr=$empire->fetch1("select otherlinktemp,otherlinktempsub,otherlinktempdate from ".dp_GetTemptb("enewspubtemp")." limit 1");//取得相关链接模板
		$temp_r=explode("[!--empirenews.listtemp--]",$tr[otherlinktemp]);
		$key_sql=$empire->query("select id,newstime,title,isurl,titleurl,classid,titlepic,newspath,filename,groupid from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$add." order by newstime desc limit $link_num");
		while($link_r=$empire->fetch($key_sql))
		{
			$keyboardtext.=mRepOtherTemp($temp_r[1],$link_r,$tr);
		}
		$keyboardtext=$temp_r[0].$keyboardtext.$temp_r[2];
	}
	else
	{
		$keyboardtext=$fun_r['NotLinkNews'];
	}
	return $keyboardtext;
}

//替换相关链接模板
function mRepOtherTemp($temptext,$r,$tr){
	global $public_r,$class_r;
	$title=sub($r[title],0,$tr['otherlinktempsub'],false);
	$r['newstime']=date($tr['otherlinktempdate'],$r['newstime']);
	$titlelink=dp_InfoToMLink($r['titleurl']);//标题链接
	$temptext=str_replace("[!--title--]",$title,$temptext);
	$temptext=str_replace("[!--oldtitle--]",$r[title],$temptext);
	$temptext=str_replace("[!--titleurl--]",$titlelink,$temptext);
	$temptext=str_replace("[!--newstime--]",$r[newstime],$temptext);
	if(empty($r[titlepic]))
	{
		$titlepic=$public_r[newsurl]."e/data/images/notimg.gif";
	}
	else
	{
		$titlepic=$r[titlepic];
	}
	$titlepic=dp_PicToMLink($titlepic);
	$temptext=str_replace("[!--titlepic--]",$titlepic,$temptext);
	return $temptext;
}

//标签替换2
function mInfoNewsBq($classid,$indextext){
	global $empire,$dbtbpre,$public_r,$emod_r,$class_r,$class_zr,$fun_r,$navclassid,$navinfor,$class_tr,$level_r,$etable_r;
	if(!defined('EmpireCMSAdmin'))
	{
		$_GET['reallinfotime']=0;
	}
	if($_GET['reallinfotime'])
	{
		$classid.='_all';
	}
	$file=ECMS_PATH.'e/data/tmp/tempm'.$classid.'.php';
	if($_GET['reallinfotime']&&file_exists($file))
	{
		$filetime=filemtime($file);
		if($_GET['reallinfotime']<=$filetime)
		{
			ob_start();
			include($file);
			$string=ob_get_contents();
			ob_end_clean();
			$string=RepExeCode($string);//解析代码
			return $string;
		}
	}

	$indextext=stripSlashes($indextext);
	$indextext=mReplaceTempvar($indextext);//替换全局模板变量
	//替换标签
	$indextext=mDoRepEcmsLoopBq($indextext);
	$indextext=mRepBq($indextext);
	//写文件
	WriteFiletext($file,AddCheckViewTempCode().$indextext);
	//读取文件内容
    ob_start();
	include($file);
	$string=ob_get_contents();
	ob_end_clean();
	$string=RepExeCode($string);//解析代码
	return $string;
}

//替换标签
function mRepBq($indextext){
	global $empire,$dbtbpre;
	$sql=$empire->query("select bq,funname from {$dbtbpre}enewsbq where isclose=0 order by bqid");
	while($r=$empire->fetch($sql))
	{
        $preg_str="/\[".$r[bq]."\](.+?)\[\/".$r[bq]."\]/is";
		$indextext=preg_replace($preg_str,"<? @m".$r[funname]."(\\1);?>",$indextext);
	}
	return $indextext;
}


//标签替换3
function mGetInfoNewsBq($classid,$newstemp_r,$ecms_gr,$docheckrep){
	global $empire,$dbtbpre,$public_r,$emod_r,$class_r,$class_zr,$fun_r,$navclassid,$navinfor,$class_tr,$level_r,$etable_r,$mob_r;
	if(!defined('EmpireCMSAdmin'))
	{
		$_GET['reallinfotime']=0;
	}
	if($_GET['reallinfotime'])
	{
		$file=ECMS_PATH.'e/data/tmp/tempnewsm'.$newstemp_r['tempid'].'_all.php';
	}
	else
	{
		$file=ECMS_PATH.'e/data/tmp/tempnewsm'.$newstemp_r['tempid'].'.php';
	}
	
	//变量处理
	$grurl=m_ReturnClassLink($ecms_gr['classid']);//导航
	$grpagetitle=ehtmlspecialchars($ecms_gr['title']);
	$grbclassid=$class_r[$ecms_gr['classid']]['bclassid'];
	$grtitleurl=dp_InfoToMLink($ecms_gr['titleurl']);
	$grclassurl=m_ReturnBqClassname($ecms_gr['classid'],9);
	if($_GET['reallinfotime']&&file_exists($file))
	{
		$filetime=filemtime($file);
		if($_GET['reallinfotime']<=$filetime)
		{
			ob_start();
			include($file);
			$string=ob_get_contents();
			ob_end_clean();
			$string=RepExeCode($string);//解析代码
			return $string;
		}
	}
	$formatdate=$newstemp_r['showdate'];

	$newstemp_r['temptext']=stripSlashes($newstemp_r['temptext']);
	$newstemp_r['temptext']=mReplaceTempvar($newstemp_r['temptext']);//替换全局模板变量
	//替换标签
	$newstemp_r['temptext']=mDoRepEcmsLoopBq($newstemp_r['temptext']);
	$newstemp_r['temptext']=mRepBq($newstemp_r['temptext']);
	//替换变量
	$indextext=mGetHtmlRepVar($newstemp_r,$ecms_gr['classid']);

	//写文件
	WriteFiletext($file,AddCheckViewTempCode().$indextext);
	//读取文件内容
    ob_start();
	include($file);
	$string=ob_get_contents();
	ob_end_clean();
	$string=RepExeCode($string);//解析代码
	return $string;
}

//替换全局模板变量
function mReplaceTempvar($temp){
	global $empire;
	if(empty($temp))
	{return $temp;}
	$sql=$empire->query("select myvar,varvalue from ".dp_GetTemptb("enewstempvar")." where isclose=0 order by myorder desc,varid");
	while($r=$empire->fetch($sql))
	{
		$temp=str_replace('[!--temp.'.$r[myvar].'--]',$r[varvalue],$temp);
    }
	return $temp;
}

//内容变量处理
function mGetHtmlRepVar($tempr,$classid){
	global $public_r,$class_r,$class_zr,$fun_r,$empire,$dbtbpre,$emod_r,$class_tr,$level_r,$etable_r,$mob_r;
	$mid=$class_r[$classid]['modid'];
	$tbname=$class_r[$classid][tbname];
	$newstemptext=$tempr[temptext];
	$formatdate=$tempr[showdate];
	//分页字段
	$expage='[!--empirenews.page--]';//分页符
	$pf=$emod_r[$mid]['pagef'];
	//变量
	$tempf=$emod_r[$mid]['tempf'];
	$fr=explode(',',$tempf);
	$fcount=count($fr)-1;
	//变量替换
	$newstempstr=$newstemptext;//模板
	//总体页面变量
	$newstempstr=str_replace('[!--class.menu--]',$public_r['classnavs'],$newstempstr);//栏目导航
	$newstempstr=str_replace('[!--newsnav--]','<?=$grurl?>',$newstempstr);//位置导航
	$newstempstr=str_replace('[!--pagetitle--]','<?=$grpagetitle?>',$newstempstr);
	$newstempstr=str_replace('[!--pagekey--]','<?=$ecms_gr[keyboard]?>',$newstempstr);
	$newstempstr=str_replace('[!--pagedes--]','<?=$grpagetitle?>',$newstempstr);
	$newstempstr=str_replace('[!--self.classid--]','<?=$ecms_gr[classid]?>',$newstempstr);
	$newstempstr=str_replace('[!--bclass.id--]','<?=$grbclassid?>',$newstempstr);
	$newstempstr=str_replace('[!--bclass.name--]','<?=$class_r[$grbclassid][classname]?>',$newstempstr);
	$newstempstr=str_replace('[!--news.url--]',dp_mindexurl(),$newstempstr);
	//信息字段变量
	for($i=1;$i<$fcount;$i++)
	{
		$f=$fr[$i];
		$value='$ecms_gr['.$f.']';
		if($f==$pf)//分页字段
		{
			$value='strstr('.$value.',\''.$expage.'\')?\'[!--'.$f.'--]\':'.$value;
		}
		elseif($f=='downpath')//下载地址
		{
			$value='ReturnDownSoftHtml($ecms_gr)';
		}
		elseif($f=='onlinepath')//观看地址
		{
			$value='ReturnOnlinepathHtml($ecms_gr)';
		}
		elseif($f=='morepic')//图片集
		{
			$value='ReturnMorepicpathHtml($ecms_gr)';
		}
		elseif($f=='newstime')//时间
		{
			$value='date(\''.$formatdate.'\','.$value.')';
		}
		elseif($f=='befrom')//信息来源
		{
			$value='$docheckrep[1]?ReplaceBefrom('.$value.'):'.$value;
		}
		elseif($f=='writer')//作者
		{
			$value='$docheckrep[2]?ReplaceWriter('.$value.'):'.$value;
		}
		elseif($f=='titlepic')//标题图片
		{
			$value='empty('.$value.')?$mob_r[newsurl].\'e/data/images/notimg.gif\':dp_PicToMLink('.$value.')';
		}
		elseif($f=='title')//标题
		{
		}
		else//正常字段
		{
			if(!strstr($emod_r[$mid]['editorf'],','.$f.','))
			{
				if(strstr($emod_r[$mid]['tobrf'],','.$f.','))//加br
				{
					$value='nl2br('.$value.')';
				}
				if(!strstr($emod_r[$mid]['dohtmlf'],','.$f.','))//去除html
				{
					$value='RepFieldtextNbsp(ehtmlspecialchars('.$value.'))';
				}
			}
		}
		$newstempstr=str_replace('[!--'.$f.'--]','<?='.$value.'?>',$newstempstr);
	}
	//固定变量
	$newstempstr=str_replace('[!--id--]','<?=$ecms_gr[id]?>',$newstempstr);
	$newstempstr=str_replace('[!--classid--]','<?=$ecms_gr[classid]?>',$newstempstr);
	$newstempstr=str_replace('[!--class.name--]','<?=$class_r[$ecms_gr[classid]][classname]?>',$newstempstr);
	$newstempstr=str_replace('[!--ttid--]','<?=$ecms_gr[ttid]?>',$newstempstr);
	$newstempstr=str_replace('[!--tt.name--]','<?=$class_tr[$ecms_gr[ttid]][tname]?>',$newstempstr);
	$newstempstr=str_replace('[!--onclick--]','<?=$ecms_gr[onclick]?>',$newstempstr);
	$newstempstr=str_replace('[!--userfen--]','<?=$ecms_gr[userfen]?>',$newstempstr);
	$newstempstr=str_replace('[!--username--]','<?=$ecms_gr[username]?>',$newstempstr);
	//带链接的用户名
	$newstempstr=str_replace('[!--linkusername--]','<?=$ecms_gr[ismember]==1&&$ecms_gr[userid]?\'<a href="\'.$public_r[newsurl].\'e/space/?userid=\'.$ecms_gr[userid].\'" target=_blank>\'.$ecms_gr[username].\'</a>\':$ecms_gr[username]?>',$newstempstr);
	$newstempstr=str_replace('[!--userid--]','<?=$ecms_gr[userid]?>',$newstempstr);
	//相关链接
	$keyboardtext='<?=mGetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?>';
	$newstempstr=str_replace('[!--other.link--]',$keyboardtext,$newstempstr);
	$newstempstr=str_replace('[!--plnum--]','<?=$ecms_gr[plnum]?>',$newstempstr);
	$newstempstr=str_replace('[!--totaldown--]','<?=$ecms_gr[totaldown]?>',$newstempstr);
	$newstempstr=str_replace('[!--keyboard--]','<?=$ecms_gr[keyboard]?>',$newstempstr);
	//链接
	$newstempstr=str_replace('[!--titleurl--]','<?=$grtitleurl?>',$newstempstr);
	//点击
	$onclick='<?=\'<script src="\'.$public_r[newsurl].\'e/public/onclick/?enews=donews&classid=\'.$ecms_gr[classid].\'&id=\'.$ecms_gr[id].\'"></script>\'?>';
	$newstempstr=str_replace('[!--page.stats--]',$onclick,$newstempstr);
	$newstempstr=str_replace('[!--class.url--]','<?=$grclassurl?>',$newstempstr);
	//下一篇
	if(strstr($newstemptext,'[!--info.next--]'))
	{
	$infonext='<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title,newspath,filename,groupid from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid=\'$ecms_gr[classid]\' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href=\'".$grclassurl."\'>'.$fun_r['HaveNoNextLink'].'</a>";}
	else
	{
		$nexttitleurl=dp_InfoToMLink($next_r[titleurl]);
		$infonext="<a href=\'".$nexttitleurl."\'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?>';
	$newstempstr=str_replace('[!--info.next--]',$infonext,$newstempstr);
	}
	//上一篇
	if(strstr($newstemptext,'[!--info.pre--]'))
	{
	$infopre='<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title,newspath,filename,groupid from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid=\'$ecms_gr[classid]\' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href=\'".$grclassurl."\'>'.$fun_r['HaveNoNextLink'].'</a>";}
	else
	{
		$nexttitleurl=dp_InfoToMLink($next_r[titleurl]);
		$infonext="<a href=\'".$nexttitleurl."\'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?>';
	$newstempstr=str_replace('[!--info.pre--]',$infopre,$newstempstr);
	}
	//投票
	if(strstr($newstemptext,'[!--info.vote--]'))
	{
		$newstempstr=str_replace('[!--info.vote--]','<?=sys_GetInfoVote($ecms_gr[classid],$ecms_gr[id])?>',$newstempstr);
	}
	return $newstempstr;
}

//移动站生成内容文件
function mGetHtml($classid,$id,$add,$ecms=0,$doall=0){
	global $public_r,$class_r,$class_zr,$fun_r,$empire,$dbtbpre,$emod_r,$class_tr,$level_r,$etable_r,$mob_r;
	if(!$mob_r[mob_open]){
		return '';
	}
	$mid=$class_r[$classid]['modid'];
	$tbname=$class_r[$classid][tbname];
	$add['id']=$id;
	$add['classid']=$classid;
	//路径
	$iclasspath=ReturnSaveInfoPath($add[classid],$add[id]);
	$doclasspath=$mob_r['msitepath'].$iclasspath;
	$createinfopath=$doclasspath;
	mFormatClassPath($iclasspath);
	//建立日期目录
	$newspath='';
	if($add[newspath])
	{
		$createpath=$doclasspath.$add[newspath];
		$iclasspath2=ReturnSaveInfoPath($add[classid],$add[id]).$add[newspath].'/';
		if(!file_exists($createpath))
		{
			$r[newspath]=mFormatClassPath($iclasspath2);
		}
		$createinfopath.=$add[newspath].'/';
		$newspath=$add[newspath].'/';
	}
	//新建存放目录
	if($class_r[$add[classid]][filename]==3)
	{
		$createinfopath.=ReturnInfoSPath($add['filename']);
		DoMkdir($createinfopath);
		$fn3=1;
	}
	$GLOBALS['navclassid']=$add[classid];
	$GLOBALS['navinfor']=$add;
	//取得内容模板
	if($mob_r[$classid][newstempid]){
		$newstempid=$mob_r[$classid][newstempid];
	}else{
		$newstempid=$add[newstempid]?$add[newstempid]:$class_r[$add[classid]][newstempid];
	}
	
	$newstemp_r=$empire->fetch1("select temptext,showdate from ".dp_GetTemptb("enewsnewstemp")." where tempid='$newstempid' limit 1");
	$newstemp_r['tempid']=$newstempid;
	if($public_r['opennotcj'])//启用反采集
	{
		$newstemp_r['temptext']=ReturnNotcj($newstemp_r['temptext']);
	}
	$newstemptext=$newstemp_r[temptext];
	$formatdate=$newstemp_r[showdate];
	//文件类型/权限
	if($add[groupid]||$class_r[$add[classid]]['cgtoinfo'])
	{
		if(empty($add[newspath]))
		{
			$include='';
	    }
		else
		{
			$pr=explode('/',$add[newspath]);
			for($i=0;$i<count($pr);$i++)
			{
				$include.='../';
			}
		}
		if($fn3==1)
		{
			$include.='../';
		}
		$pr=explode('/',$iclasspath);
		$pcount=count($pr);
		for($i=0;$i<$pcount-1;$i++)
		{
			$include.='../';
		}
		$include1=$include;
		$include.='e/class/CheckLevel.php';
		$filetype='.php';
		$addlevel="<?php
		define('empirecms','wm_chief');
		\$check_tbname='".$class_r[$add[classid]][tbname]."';
		\$check_infoid=".$add[id].";
		\$check_classid=".$add[classid].";
		\$check_path=\"".$include1."\";
		require(\"".$include."\");
		?>";
    }
	else
	{
		$filetype=$class_r[$add[classid]][filetype];
		$addlevel='';
	}
	//取得本目录链接
	$dolink=dp_mindexurl().$iclasspath.$newspath;
	//pc端本目录链接
	$pcdolink=$mob_r['newsurl'].$iclasspath.$newspath;
	//返回替换验证字符
	$docheckrep=ReturnCheckDoRepStr();
	if($add[newstext])
	{
		$add[newstext]=mReplacePcurl($add['newstext']);
		if($mob_r['zkey']){
			$add[newstext]=mReplaceKey($add['newstext']);
		}
	}
	//返回编译
	$newstemptext=mGetInfoNewsBq($classid,$newstemp_r,$add,$docheckrep);
	//分页字段
	$expage='[!--empirenews.page--]';//分页符
	$pf=$emod_r[$mid]['pagef'];
	//变量替换
	$newstempstr=$newstemptext;//模板
	//分页
	if($pf&&strstr($add[$pf],$expage))//有分页
	{
		$n_r=explode($expage,$add[$pf]);
		$thispagenum=count($n_r);
		//取得分页
		$thefun='msys_ShowTextPage';
		//下拉式分页
		if(strstr($newstemptext,'[!--title.select--]'))
		{
			$dotitleselect=sys_ShowTextPageSelect($thispagenum,$dolink,$add,$filetype,$n_r);
		}
		for($j=1;$j<=$thispagenum;$j++)
		{
			$string=$newstempstr;//模板
			$truepage='';
			$titleselect='';
			//下一页链接
			if($thispagenum==$j)
			{
				$thisnextlink=$dolink.$add[filename].$filetype;
			}
			else
			{
				$thisj=$j+1;
				$thisnextlink=$dolink.$add[filename].'_'.$thisj.$filetype;
			}
			$k=$j-1;
			if($j==1)
			{
				$file=$doclasspath.$newspath.$add[filename].$filetype;
				$ptitle=$add[title];
			}
			else
			{
				$file=$doclasspath.$newspath.$add[filename].'_'.$j.$filetype;
				$ti_r=explode('[/!--empirenews.page--]',$n_r[$k]);
				if(count($ti_r)>=2)
				{
					$ptitle=$ti_r[0];
					$n_r[$k]=$ti_r[1];
				}
				else
				{
					$ptitle=$add[title].'('.$j.')';
				}
			}
			//取得当前页
			if($thispagenum!=1)
			{
				$truepage=$thefun($thispagenum,$j,$dolink,$add,$filetype,'');
				$titleselect=str_replace("?".$j."\">","?".$j."\" selected>",$dotitleselect);
			}
			//替换变量
			$newstext=$n_r[$k];
			if(!strstr($emod_r[$mid]['editorf'],','.$pf.','))
			{
				if(strstr($emod_r[$mid]['tobrf'],','.$pf.','))//加br
				{
					$newstext=nl2br($newstext);
				}
				if(!strstr($emod_r[$mid]['dohtmlf'],','.$pf.','))//去除html
				{
					$newstext=ehtmlspecialchars($newstext);
					$newstext=RepFieldtextNbsp($newstext);
				}
			}
			$string=str_replace('[!--'.$pf.'--]',$newstext,$string);
			$string=str_replace('[!--p.title--]',strip_tags($ptitle),$string);
			$string=str_replace('[!--next.page--]',$thisnextlink,$string);
			$string=str_replace('[!--page.url--]',$truepage,$string);
			$string=str_replace('[!--title.select--]',$titleselect,$string);
			//pc端当前页网址
			if($j==1){
				$pcurl=$pcdolink.$add[filename].$filetype;
			}else{
				$pcurl=$pcdolink.$add[filename].'_'.$j.$filetype;
			}				
			$string=str_replace('[--pcurl--]',$pcurl,$string);
			//描述
			$string=str_replace('[!--dp_ms--]',mdp_mszy($j,$add['smalltext'],$newstext,1),$string);
			//摘要
			$string=str_replace('[!--dp_zy--]',mdp_mszy($j,$add['smalltext'],$newstext,0),$string);
			//写文件
			WriteFiletext($file,$addlevel.$string);
		}
	}
	else
	{
		$file=$doclasspath.$newspath.$add[filename].$filetype;
		$string=$newstempstr;//模板
		//替换变量
		$string=str_replace('[!--p.title--]',$add[title],$string);
		$string=str_replace('[!--next.page--]','',$string);
		$string=str_replace('[!--page.url--]','',$string);
		$string=str_replace('[!--title.select--]','',$string);
		//pc端当前页网址
		$pcurl=$pcdolink.$add[filename].$filetype;
		$string=str_replace('[--pcurl--]',$pcurl,$string);
		//描述
		$string=str_replace('[!--dp_ms--]',mdp_mszy(1,$add['smalltext'],'',1),$string);
		//摘要
		$string=str_replace('[!--dp_zy--]',mdp_mszy(1,$add['smalltext'],'',0),$string);
		//写文件
		WriteFiletext($file,$addlevel.$string);
	}
}

//标签替换
function mNewsBq($classid,$indextext,$enews=0,$doing=0){
	global $empire,$dbtbpre,$public_r,$emod_r,$class_r,$class_zr,$fun_r,$navclassid,$navinfor,$class_tr,$level_r,$etable_r,$mob_r;
	if(!$mob_r[mob_open]){
		return '';
	}
	if($enews==0){
		$indextext='';
		if($mob_r[$classid][classtempid]){
			$classr['classtempid']=$mob_r[$classid][classtempid];
		}else{
			$classr=$empire->fetch1("select classid,classtempid,islast,islist from {$dbtbpre}enewsclass where classid=$classid limit 1");
		}
		$indextext=mGetClassTemp($classr['classtempid']);
	}
	if($enews==1){
		$indextext=mGetIndextemp();//取得首页模板
	}
	$indextext=stripSlashes($indextext);
	$indextext=mReplaceTempvar($indextext);//替换全局模板变量
	$classlevel='';
	if($enews==0)//生成大栏目
	{
		if($class_r[$classid]['listdt']||$class_r[$classid]['wburl']||strstr($public_r['nreclass'],','.$classid.',')||InfoIsInTable($class_r[$classid]['tbname']))//不生成栏目
		{
			return '';
		}
		$GLOBALS['navclassid']=$classid;
		$url=m_ReturnClassLink($classid);//导航
		$cf=$doing==1?',classpath,classtype,classname':'';
		$cr=$empire->fetch1("select classpagekey,intro,classimg,cgroupid".$cf." from {$dbtbpre}enewsclass where classid='$classid'");
		if(!empty($cf))
		{
			$class_r[$classid][classpath]=$cr[classpath];
			$class_r[$classid][classtype]=$cr[classtype];
			$class_r[$classid][classname]=$cr[classname];
		}
		//权限
		if($cr['cgroupid'])
		{
			$classlevel=AddCheckClassLevel($classid,$cr['cgroupid'],'');
		}
		//页面
		$pagetitle=ehtmlspecialchars($class_r[$classid][classname]);
		$pagekey=ehtmlspecialchars($cr['classpagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['classimg'];
		$onclick="<script src=".$public_r[newsurl]."e/public/onclick/?enews=doclass&classid=$classid></script>";
		$truefile=$mob_r['msitepath'].ReturnSaveClassPath($classid,1);
		$file=ECMS_PATH.'e/data/tmp/classm'.$classid.'.php';
		$indextext=str_replace("[!--newsnav--]",$url,$indextext);//位置导航
		$indextext=mClass_ReplaceSvars($indextext,$url,$classid,$pagetitle,$pagekey,$pagedes,$classimg,$add,0);
		mFormatClassPath($class_r[$classid][classpath]."/");
		$pcurl=$mob_r['newsurl'].$class_r[$classid][classpath]."/";
	}
	elseif($enews==3)//专题
	{
		$GLOBALS['navclassid']=$classid;
		$url=m_ReturnZtLink($classid);//导航
		$cf=$doing==1?',ztpath,zttype,ztname':'';
		$cr=$empire->fetch1("select ztid,ztpagekey,intro,ztimg".$cf." from {$dbtbpre}enewszt where ztid='$classid'");
		if(!empty($cf))
		{
			$class_zr[$classid][ztpath]=$cr[ztpath];
			$class_zr[$classid][zttype]=$cr[zttype];
			$class_zr[$classid][ztname]=$cr[ztname];
	    }
		$pagetitle=ehtmlspecialchars($class_zr[$classid][ztname]);
		$pagekey=ehtmlspecialchars($cr['ztpagekey']);
		$pagedes=ehtmlspecialchars($cr['intro']);
		$classimg=$cr['ztimg'];
		$onclick="<script src=".$public_r[newsurl]."e/public/onclick/?enews=dozt&ztid=$classid></script>";
		$truefile=$mob_r['msitepath'].'/'.ReturnSaveZtPath($classid,1);
		$file=ECMS_PATH.'e/data/tmp/ztm'.$classid.'.php';
		$indextext=str_replace("[!--newsnav--]",$url,$indextext);//位置导航
		$indextext=mClass_ReplaceSvars($indextext,$url,$classid,$pagetitle,$pagekey,$pagedes,$classimg,$add,1);
		mFormatClassPath($class_zr[$classid][ztpath]."/");
		$pcurl=$mob_r['newsurl'].$class_zr[$classid][ztpath]."/";
	}
	elseif($enews==4)//专题子类
	{
		$cr=$empire->fetch1("select ztid,cname,ttype from {$dbtbpre}enewszttype where cid='$classid'");
		$GLOBALS['navclassid']=$classid;
		$GLOBALS['navinfor']['ecmsbid']=$cr['ztid'];
		$url=m_ReturnZtLink($cr['ztid']);//导航
		$pagetitle=ehtmlspecialchars($cr['cname']);
		$pagekey=ehtmlspecialchars($cr['cname']);
		$pagedes=ehtmlspecialchars($cr['cname']);
		$onclick="<script src=".$public_r[newsurl]."e/public/onclick/?enews=dozt&ztid=$cr[ztid]></script>";
		$truefile=$mob_r['msitepath'].'/'.ReturnSaveZtPath($cr['ztid'],0).'/type'.$classid.$cr['ttype'];
		$file=ECMS_PATH.'e/data/tmp/ztcm'.$classid.'.php';
		$indextext=str_replace("[!--newsnav--]",$url,$indextext);//位置导航
		$indextext=mClass_ReplaceSvars($indextext,$url,$classid,$pagetitle,$pagekey,$pagedes,$classimg,$add,1);
		mFormatClassPath($class_zr[$classid][ztpath]."/");
		$pcurl=$mob_r['newsurl'].$class_zr[$classid][ztpath]."/type".$classid.$cr['ttype'];
	}
	elseif($enews==1)//生成首页文件
	{
		$pr=$empire->fetch1("select sitekey,siteintro,indexpagedt from {$dbtbpre}enewspublic limit 1");
		if($pr['indexpagedt'])
		{
			return '';
		}
		//页面
		$pagetitle=ehtmlspecialchars($public_r['sitename']);
		$pagekey=ehtmlspecialchars($pr['sitekey']);
		$pagedes=ehtmlspecialchars($pr['siteintro']);
		$url="<a href=\"".dp_mindexurl()."\">".$fun_r['index']."</a>";//栏目导航
		$onclick='';
		$truefile=$mob_r['msitepath'].'/'.ReturnSaveIndexFile();
		$file=ECMS_PATH.'e/data/tmp/indexm.php';
		$indextext=mReplaceSvars($indextext,$url,0,$pagetitle,$pagekey,$pagedes,$add,0);
		$pcurl=$mob_r['newsurl'];
	}
	$indextext=str_replace("[!--page.stats--]",$onclick,$indextext);
	$indextext=str_replace('[--pcurl--]',$pcurl,$indextext);
	//替换标签
	$indextext=mDoRepEcmsLoopBq($indextext);
	$indextext=mRepBq($indextext);
	//写文件
	WriteFiletext($file,AddCheckViewTempCode().$indextext);
	//读取文件内容
    ob_start();
	include($file);
	$string=ob_get_contents();
	ob_end_clean();
	$string=RepExeCode($string);//解析代码
	WriteFiletext($truefile,$classlevel.$string);
}

//替换公共标记
function mReplaceSvars($temp,$url,$classid,$title,$key,$des,$add,$repvar=1){
	global $public_r,$class_r,$class_zr,$mob_r;
	if($repvar==1)//全局模板变量
	{
		$temp=mReplaceTempvar($temp);
	}
	$temp=str_replace('[!--class.menu--]',$public_r['classnavs'],$temp);//栏目导航
	$temp=str_replace('[!--newsnav--]',$url,$temp);//位置导航
	$temp=str_replace('[!--pagetitle--]',$title,$temp);
	$temp=str_replace('[!--pagekey--]',$key,$temp);
	$temp=str_replace('[!--pagedes--]',$des,$temp);
	$temp=str_replace('[!--self.classid--]',0,$temp);
	$temp=str_replace('[!--news.url--]',dp_mindexurl(),$temp);
	return $temp;
}

//标签替换4
function mDtNewsBq($classid,$indextext,$ecms=0){
	global $empire,$dbtbpre,$public_r,$emod_r,$class_r,$class_zr,$fun_r,$navclassid,$navinfor,$class_tr,$level_r,$etable_r;
	$cachetime=$ecms==1?$public_r['dtncachetime']:$public_r['dtcachetime'];
	$file=ECMS_PATH.'e/data/tmp/dt_tempm'.$classid.'.php';
	if($cachetime&&file_exists($file))
	{
		$filetime=filemtime($file);
		if(time()-$cachetime*60<=$filetime)
		{
			ob_start();
			include($file);
			$string=ob_get_contents();
			ob_end_clean();
			$string=RepExeCode($string);//解析代码
			return $string;
		}
	}
	$indextext=stripSlashes($indextext);
	$indextext=mReplaceTempvar($indextext);//替换全局模板变量
	//替换标签
	$indextext=mDoRepEcmsLoopBq($indextext);
	$indextext=mRepBq($indextext);
	//写文件
	WriteFiletext($file,AddCheckViewTempCode().$indextext);
	//读取文件内容
    ob_start();
	include($file);
	$string=ob_get_contents();
	ob_end_clean();
	$string=RepExeCode($string);//解析代码
	return $string;
}


//列表模板分页函数
function msys_ShowListPage($num,$pagenum,$dolink,$dotype,$page,$lencord,$ok,$search="",$add){
	global $fun_r;
	//文件名
	if(empty($add['dofile']))
	{
		$add['dofile']='index';
	}
	//
	$repagenum=$add['repagenum'];
	//首页
	if($pagenum<>1)
	{
		$pagetop="<a href='".$dolink."'>".$fun_r['startpage']."</a>&nbsp;&nbsp;";
	}
	else
	{
		$pagetop=$fun_r['startpage']."&nbsp;&nbsp;";
	}
	//上一页
	if($pagenum<>1)
	{
		$pagepr=$pagenum-1;
		if($pagepr==1)
		{
			$prido='';
		}
		else
		{
			$prido=$add['dofile'].'_'.$pagepr.$dotype;
		}
		$pagepri="<a href='".$dolink.$prido."'>".$fun_r['pripage']."</a>&nbsp;&nbsp;";
	}
	else
	{
		$pagepri=$fun_r['pripage']."&nbsp;&nbsp;";
	}
	//下一页
	if($pagenum<>$page)
	{
		$pagenex=$pagenum+1;
		$nextpagelink=$repagenum&&$repagenum<$pagenex?eReturnRewritePageLink2($add,$pagenex):$dolink.$add['dofile'].'_'.$pagenex.$dotype;
		$pagenext="<a href='".$nextpagelink."'>".$fun_r['nextpage']."</a>&nbsp;&nbsp;";
	}
	else
	{
		$pagenext=$fun_r['nextpage']."&nbsp;&nbsp;";
	}
	//尾页
	if($pagenum==$page)
	{
		$pageeof=$fun_r['lastpage'];
	}
	else
	{
		$lastpagelink=$repagenum&&$repagenum<$page?eReturnRewritePageLink2($add,$page):$dolink.$add['dofile'].'_'.$page.$dotype;
		$pageeof="<a href='".$lastpagelink."'>".$fun_r['lastpage']."</a>";
	}
	$options="";
	//取得下拉页码
	if(empty($search))
	{
		for($go=1;$go<=$page;$go++)
		{
			if($go==1)
			{$file=$add['dofile'].$dotype;}
			else
			{$file=$add['dofile'].'_'.$go.$dotype;}
			$thispagelink=$repagenum&&$repagenum<$go?eReturnRewritePageLink2($add,$go):$dolink.$file;
			if($ok==$go)
			{$select=" selected";}
			else
			{$select="";}
			$myoptions.="<option value='".$thispagelink."'>".$fun_r['gotos'].$go.$fun_r['gotol']."</option>";
			$options.="<option value='".$thispagelink."'".$select.">".$fun_r['gotos'].$go.$fun_r['gotol']."</option>";
		}
	}
	else
	{
		$myoptions=$search;
		$options=str_replace("value='".$dolink.$add['dofile'].'_'.$ok.$dotype."'>","value='".$dolink.$add['dofile']."_".$ok.$dotype."' selected>",$search);
	}
	$options="<select name=select onchange=\"self.location.href=this.options[this.selectedIndex].value\">".$options."</select>";
	//分页
	$pagelink=$pagetop.$pagepri.$pagenext.$pageeof;
	//替换模板变量
	$pager['showpage']=ReturnListpageStr($pagenum,$page,$lencord,$num,$pagelink,$options);
	$pager['option']=$myoptions;
	return $pager;
}

//列表模板之列表式分页
function msys_ShowListMorePage($num,$page,$dolink,$type,$totalpage,$line,$ok,$search="",$add){
	global $fun_r,$public_r;
	if($num<=$line)
	{
		$pager['showpage']='';
		return $pager;
	}
	//文件名
	if(empty($add['dofile']))
	{
		$add['dofile']='index';
	}
	//静态页数
	$repagenum=$add['repagenum'];
	$page_line=$public_r['listpagelistnum'];
	if($page_line>3){$page_line=3;}
	$snum=1;
	$totalpage=ceil($num/$line);//取得总页数
	//$firststr='<a title="总页数">&nbsp;<b>'.$num.'</b> </a>&nbsp;&nbsp;';
	$firststr='<span class="nowpage">'.$page.'</span>/'.$totalpage;
	//上一页
	if($page<>1)
	{
		$toppage='<a href="'.$dolink.$add['dofile'].$type.'">'.$fun_r['startpage'].'</a>';
		$pagepr=$page-1;
		if($pagepr==1)
		{
			$prido=$add['dofile'].$type;
		}
		else
		{
			$prido=$add['dofile'].'_'.$pagepr.$type;
		}
		$prepage='<a href="'.$dolink.$prido.'">'.$fun_r['pripage'].'</a>';
	}
	else{
		$prepage='<a style="color: #b0afaf; background-color: #f5f7f8;">'.$fun_r['pripage'].'</a>';
		$toppage='<a style="color: #b0afaf; background-color: #f5f7f8;">首页</a>';
	}
	//下一页
	$nextpage='<a style="color: #b0afaf; background-color: #f5f7f8;">下一页</a>';
	$lastpage='<a style="color: #b0afaf; background-color: #f5f7f8;">'.$fun_r['lastpage'].'</a>';
	if($page!=$totalpage)
	{
		$pagenex=$page+1;
		$nextpagelink=$repagenum&&$repagenum<$pagenex?eReturnRewritePageLink2($add,$pagenex):$dolink.$add['dofile'].'_'.$pagenex.$type;
		$lastpagelink=$repagenum&&$repagenum<$totalpage?eReturnRewritePageLink2($add,$totalpage):$dolink.$add['dofile'].'_'.$totalpage.$type;
		$nextpage='<a href="'.$nextpagelink.'" class="linkpage">下一页</a>';
		$lastpage='<a href="'.$lastpagelink.'">尾页</a>';
	}
	$starti=$page-$snum<1?1:$page-$snum;
	$no=0;
	for($i=$starti;$i<=$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{
			$is_1="<a class=\"current\">";
			$is_2="</a>";
		}
		elseif($i==1)
		{
			$is_1='<a href="'.$dolink.$add['dofile'].$type.'">';
			$is_2="</a>";
		}
		else
		{
			$thispagelink=$repagenum&&$repagenum<$i?eReturnRewritePageLink2($add,$i):$dolink.$add['dofile'].'_'.$i.$type;
			$is_1='<a href="'.$thispagelink.'">';
			$is_2="</a>";
		}
		$returnstr.=''.$is_1.$i.$is_2;
	}
	$returnstr=$toppage.$prepage.$nextpage.$lastpage;
	$pager['showpage']=$returnstr;
	return $pager;
}

//返回内容分页
function msys_ShowTextPage($totalpage,$page,$dolink,$add,$type,$search=""){
	global $fun_r,$public_r;
	if($totalpage==1)
	{
		return '';
	}
	$page_line=$public_r['textpagelistnum'];
	if($page_line>3){$page_line=3;}
	$snum=1;
	//$totalpage=ceil($num/$line);//取得总页数
	$firststr='<span class="nowpage">'.$page.'</span>/'.$totalpage;
	//上一页
	$prepage='<a name="nolink" class="nolinkpage shpage">上一页</a>';
	$firstpage='';
	if($page<>1)
	{
		$toppage='';
		$pagepr=$page-1;
		if($pagepr==1)
		{
			$prido=$add[filename].$type;
		}
		else
		{
			$prido=$add[filename].'_'.$pagepr.$type;
		}
		$prepage='<a href="'.$prido.'" class="linkpage shpage">上一页</a>';
		$firstpage='<a href="'.$add[filename].$type.'">首页</a>';
	}
	//下一页
	$nextpage='<a name="nolink" class="nolinkpage">下一页</a>';
	$lastpage='';
	if($page!=$totalpage)
	{
		$pagenex=$page+1;
		$nextpage='<a href="'.$dolink.$add[filename].'_'.$pagenex.$type.'" class="linkpage">下一页</a>';
		$lastpage='<a href="'.$dolink.$add[filename].'_'.$totalpage.$type.'">尾页</a>';
	}
	$starti=$page-$snum<1?1:$page-$snum;
	$no=0;
	for($i=$starti;$i<=$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{
			$is_1="<b>";
			$is_2="</b>";
		}
		elseif($i==1)
		{
			$is_1='<a href="'.$dolink.$add[filename].$type.'">';
			$is_2="</a>";
		}
		else
		{
			$is_1='<a href="'.$dolink.$add[filename].'_'.$i.$type.'">';
			$is_2="</a>";
		}
		$returnstr.=$is_1.$i.$is_2;
	}
	$returnstr='';
	$returnstr=$toppage.$prepage.$firstpage.'<a name="allpage"  class="allpage">'.$firststr.'</a>'.$lastpage.$nextpage;
	$pager['showpage']=$returnstr;
	return $returnstr;
}

//返回下拉式内容分页导航
function msys_ShowTextPageSelect($thispagenum,$dolink,$add,$filetype,$n_r){
	if($thispagenum==1)
	{
		return '';
	}
	$titleselect='';
	for($j=1;$j<=$thispagenum;$j++)
	{
	    if($j==1)
		{
			$title=$add[title];
			$plink=$add[filename].$filetype;
		}
		else
		{
			$k=$j-1;
			$ti_r=explode('[/!--empirenews.page--]',$n_r[$k]);
		    if(count($ti_r)>=2&&$ti_r[0])
			{
				$title=$ti_r[0];
			}
		    else
			{
				$title=$add[title].'('.$j.')';
			}
			$plink=$add[filename].'_'.$j.$filetype;
		}
		$titleselect.='<option value="'.$dolink.$plink.'?'.$j.'">'.$title.'</option>';
	}
	$titleselect='<select name="titleselect" onchange="self.location.href=this.options[this.selectedIndex].value">'.$titleselect.'</select>';
	return $titleselect;
}

//广告标签
function msys_GetAd($adid){
	global $empire,$public_r,$dbtbpre;
	$r=$empire->fetch1("select * from {$dbtbpre}enewsad where adid='$adid'");
	//到期
	if($r['endtime']<>'0000-00-00'&&time()>to_time($r['endtime']))
	{
		echo addslashes($r[reptext]);
		return '';
	}
	if($r['ylink'])
	{
		$ad_url=$r['url'];
	}
	else
	{
		$ad_url=$public_r[newsurl]."e/public/ClickAd?adid=".$adid;//广告链接
	}
	//----------------------文字广告
	if($r[t]==1)
	{
		$r[titlefont]=$r[titlecolor].','.$r[titlefont];
		$picurl=DoTitleFont($r[titlefont],$r[picurl]);//文字属性
		$h="<a href='".$ad_url."' target=".$r[target]." title='".$r[alt]."'>".addslashes($picurl)."</a>";
		//普通显示
		if($r[adtype]==1)
		{
			$html=$h;
	    }
		//可移动透明对话框
		else
		{
			$html="<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_dialog.js></script> 
<div style='position:absolute;left:300px;top:150px;width:".$r[pic_width]."; height:".$r[pic_height].";z-index:1;solid;filter:alpha(opacity=90)' id=DGbanner5 onmousedown='down1(this)' onmousemove='move()' onmouseup='down=false'><table cellpadding=0 border=0 cellspacing=1 width=".$r[pic_width]." height=".$r[pic_height]." bgcolor=#000000><tr><td height=18 bgcolor=#5A8ACE align=right style='cursor:move;'><a href=# style='font-size: 9pt; color: #eeeeee; text-decoration: none' onClick=clase('DGbanner5') >关闭>>><img border='0' src='".$public_r[newsurl]."d/js/acmsd/close_o.gif'></a>&nbsp;</td></tr><tr><td bgcolor=f4f4f4 >&nbsp;".$h."</td></tr></table></div>";
	    }
    }
	//------------------html广告
	elseif($r[t]==2)
	{
		$h=addslashes($r[htmlcode]);
		//普通显示
		if($r[adtype]==1)
		{
			$html=$h;
		}
		//可移动透明对话框
		else
		{
			$html="<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_dialog.js></script>
<div style='position:absolute;left:300px;top:150px;width:".$r[pic_width]."; height:".$r[pic_height].";z-index:1;solid;filter:alpha(opacity=90)' id=DGbanner5 onmousedown='down1(this)' onmousemove='move()' onmouseup='down=false'><table cellpadding=0 border=0 cellspacing=1 width=".$r[pic_width]." height=".$r[pic_height]." bgcolor=#000000><tr><td height=18 bgcolor=#5A8ACE align=right style='cursor:move;'><a href=# style='font-size: 9pt; color: #eeeeee; text-decoration: none' onClick=clase('DGbanner5') >关闭>>><img border='0' src='".$public_r[newsurl]."d/js/acmsd/close_o.gif'></a>&nbsp;</td></tr><tr><td bgcolor=f4f4f4 >&nbsp;".$h."</td></tr></table></div>";
		}
    }
	//------------------弹出广告
	elseif($r[t]==3)
	{
		//打开新窗口
		if($r[adtype]==8)
		{
			$html="<script>window.open('".$r[url]."');</script>";
		}
		//弹出窗口
	    elseif($r[adtype]==9)
		{
			$html="<script>window.open('".$r[url]."','','width=".$r[pic_width].",height=".$r[pic_height].",scrollbars=yes');</script>";
		}
		//普能网页窗口
		else
		{
			$html="<script>window.showModalDialog('".$r[url]."','','dialogWidth:".$r[pic_width]."px;dialogHeight:".$r[pic_height]."px;scroll:no;status:no;help:no');</script>";
		}
    }
	//---------------------图片与flash广告
	else
	{
		$filetype=GetFiletype($r[picurl]);
		//flash
		if($filetype==".swf")
		{
			$h="<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0' name='movie' width='".$r[pic_width]."' height='".$r[pic_height]."' id='movie'><param name='movie' value='".$r[picurl]."'><param name='quality' value='high'><param name='menu' value='false'><embed src='".$r[picurl]."' width='".$r[pic_width]."' height='".$r[pic_height]."' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' id='movie' name='movie' menu='false'></embed><PARAM NAME='wmode' VALUE='Opaque'></object>";
		}
		else
		{
			$h="<a href='".$ad_url."' target=".$r[target]."><img src='".$r[picurl]."' border=0 width='".$r[pic_width]."' height='".$r[pic_height]."' alt='".$r[alt]."'></a>";
		}
		//普通显示
		if($r[adtype]==1)
		{
			$html=$h;
		}
		//满屏浮动显示
		elseif($r[adtype]==4)
		{
			$html="<script>ns4=(document.layers)?true:false;
ie4=(document.all)?true:false;
if(ns4){document.write(\"<layer id=DGbanner2 width=".$r[pic_width]." height=".$r[pic_height]." onmouseover=stopme('DGbanner2') onmouseout=movechip('DGbanner2')>".$h."</layer>\");}
else{document.write(\"<div id=DGbanner2 style='position:absolute; width:".$r[pic_width]."px; height:".$r[pic_height]."px; z-index:9; filter: Alpha(Opacity=90)' onmouseover=stopme('DGbanner2') onmouseout=movechip('DGbanner2')>".$h."</div>\");}</script>
<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_float_fullscreen.js></script>";
		}
		//上下浮动显示 - 右
		elseif($r[adtype]==5)
		{
			$html="<script>if (navigator.appName == 'Netscape')
{document.write(\"<layer id=DGbanner3 top=150 width=".$r[pic_width]." height=".$r[pic_height].">".$h."</layer>\");}
else{document.write(\"<div id=DGbanner3 style='position: absolute;width:".$r[pic_height].";top:150;visibility: visible;z-index: 1'>".$h."</div>\");}</script>
<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_float_upanddown.js></script>";
		}
		//上下浮动显示 - 左
		elseif($r[adtype]==6)
		{
			$html="<script>if(navigator.appName == 'Netscape')
{document.write(\"<layer id=DGbanner10 top=150 width=".$r[pic_width]." height=".$r[pic_height].">".$h."</layer>\");}
else{document.write(\"<div id=DGbanner10 style='position: absolute;width:".$r[pic_width].";top:150;visibility: visible;z-index: 1'>".$h."</div>\");}</script>
<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_float_upanddown_L.js></script>";
		}
		//全屏幕渐隐消失
		elseif($r[adtype]==7)
		{
			$html="<script>ns4=(document.layers)?true:false;
if(ns4){document.write(\"<layer id=DGbanner4Cont onLoad='moveToAbsolute(layer1.pageX-160,layer1.pageY);clip.height=".$r[pic_height].";clip.width=".$r[pic_width]."; visibility=show;'><layer id=DGbanner4News position:absolute; top:0; left:0>".$h."</layer></layer>\");}
else{document.write(\"<div id=DGbanner4 style='position:absolute;top:0; left:0;'><div id=DGbanner4Cont style='position:absolute;width:".$r[pic_width].";height:".$r[pic_height].";clip:rect(0,".$r[pic_width].",".$r[pic_height].",0)'><div id=DGbanner4News style='position:absolute;top:0;left:0;right:820'>".$h."</div></div></div>\");}</script> 
<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_fullscreen.js></script>";
		}
		//可移动透明对话框
		elseif($r[adtype]==3)
		{
			$html="<script language=javascript src=".$public_r[newsurl]."d/js/acmsd/ecms_dialog.js></script> 
<div style='position:absolute;left:300px;top:150px;width:".$r[pic_width]."; height:".$r[pic_height].";z-index:1;solid;filter:alpha(opacity=90)' id=DGbanner5 onmousedown='down1(this)' onmousemove='move()' onmouseup='down=false'><table cellpadding=0 border=0 cellspacing=1 width=".$r[pic_width]." height=".$r[pic_height]." bgcolor=#000000><tr><td height=18 bgcolor=#5A8ACE align=right style='cursor:move;'><a href=# style='font-size: 9pt; color: #eeeeee; text-decoration: none' onClick=clase('DGbanner5') >关闭>>><img border='0' src='".$public_r[newsurl]."d/js/acmsd/close_o.gif'></a>&nbsp;</td></tr><tr><td bgcolor=f4f4f4 >&nbsp;".$h."</td></tr></table></div>";
		}
		else
		{
			$html="<script>function closeAd(){huashuolayer2.style.visibility='hidden';huashuolayer3.style.visibility='hidden';}function winload(){huashuolayer2.style.top=109;huashuolayer2.style.left=5;huashuolayer3.style.top=109;huashuolayer3.style.right=5;}//if(document.body.offsetWidth>800){
				{document.write(\"<div id=huashuolayer2 style='position: absolute;visibility:visible;z-index:1'><table width=0  border=0 cellspacing=0 cellpadding=0><tr><td height=10 align=right bgcolor=666666><a href=javascript:closeAd()><img src=".$public_r[newsurl]."d/js/acmsd/close.gif width=12 height=10 border=0></a></td></tr><tr><td>".$h."</td></tr></table></div>\"+\"<div id=huashuolayer3 style='position: absolute;visibility:visible;z-index:1'><table width=0  border=0 cellspacing=0 cellpadding=0><tr><td height=10 align=right bgcolor=666666><a href=javascript:closeAd()><img src=".$public_r[newsurl]."d/js/acmsd/close.gif width=12 height=10 border=0></a></td></tr><tr><td>".$h."</td></tr></table></div>\");}winload()//}</script>";
		}
	}
	echo $html;
}

//投票标签
function msys_GetVote($voteid){
	global $empire,$public_r,$dbtbpre;
	$r=$empire->fetch1("select * from {$dbtbpre}enewsvote where voteid='$voteid'");
	if(empty($r[votetext]))
	{
		return '';
	}
	//模板
	$votetemp=ReturnVoteTemp($r[tempid],0);
	$votetemp=RepVoteTempAllvar($votetemp,$r);
	$listexp="[!--empirenews.listtemp--]";
	$listtemp_r=explode($listexp,$votetemp);
	$r_exp="\r\n";
	$f_exp="::::::";
	//项目数
	$r_r=explode($r_exp,$r[votetext]);
	$checked=0;
	for($i=0;$i<count($r_r);$i++)
	{
		$checked++;
		$f_r=explode($f_exp,$r_r[$i]);
		//投票类型
		if($r[voteclass])
		{$vote="<input type=checkbox name=vote[] value=".$checked.">";}
		else
		{$vote="<input type=radio name=vote value=".$checked.">";}
		$votetext.=RepVoteTempListvar($listtemp_r[1],$vote,$f_r[0]);
    }
	$votetext=$listtemp_r[0].$votetext.$listtemp_r[2];
	echo"$votetext";
}

//信息投票标签
function msys_GetInfoVote($classid,$id){
	global $empire,$public_r,$dbtbpre;
	$r=$empire->fetch1("select * from {$dbtbpre}enewsinfovote where id='$id' and classid='$classid' limit 1");
	if(empty($r[votetext]))
	{
		return '';
	}
	//模板
	$votetemp=ReturnVoteTemp($r[tempid],0);
	$votetemp=RepVoteTempAllvar($votetemp,$r);
	$listexp="[!--empirenews.listtemp--]";
	$listtemp_r=explode($listexp,$votetemp);
	$r_exp="\r\n";
	$f_exp="::::::";
	//项目数
	$r_r=explode($r_exp,$r[votetext]);
	$checked=0;
	for($i=0;$i<count($r_r);$i++)
	{
		$checked++;
		$f_r=explode($f_exp,$r_r[$i]);
		//投票类型
		if($r[voteclass])
		{$vote="<input type=checkbox name=vote[] value=".$checked.">";}
		else
		{$vote="<input type=radio name=vote value=".$checked.">";}
		$votetext.=RepVoteTempListvar($listtemp_r[1],$vote,$f_r[0]);
    }
	$votetext=$listtemp_r[0].$votetext.$listtemp_r[2];
	return $votetext;
}

//引用文件
function msys_IncludeFile($file){
	@include($file);
}

//读取远程文件
function msys_ReadFile($http){
	echo ReadFiletext($http);
}

//信息统计
function msys_TotalData($classid,$enews=0,$day=0,$totaltype=0){
	global $empire,$class_r,$class_zr,$dbtbpre,$fun_r,$class_tr;
	if(empty($classid))
	{
		return "";
    }
	//统计类型
	if($totaltype==1)//评论数
	{
		$totalfield='sum(plnum) as total';
	}
	elseif($totaltype==2)//点击数
	{
		$totalfield='sum(onclick) as total';
	}
	elseif($totaltype==3)//下载数
	{
		$totalfield='sum(totaldown) as total';
	}
	else//信息数
	{
		$totalfield='count(*) as total';
	}
	if($day)
	{
		if($day==1)//今日信息
		{
			$date=date("Y-m-d");
			$starttime=$date." 00:00:01";
			$endtime=$date." 23:59:59";
		}
		elseif($day==2)//本月信息
		{
			$date=date("Y-m");
			$starttime=$date."-01 00:00:01";
			$endtime=$date."-".date("t")." 23:59:59";
		}
		elseif($day==3)//本年信息
		{
			$date=date("Y");
			$starttime=$date."-01-01 00:00:01";
			$endtime=($date+1)."-01-01 00:00:01";
		}
		$and=" and newstime>=".to_time($starttime)." and newstime<=".to_time($endtime);
	}
	if($enews==1)//统计标题分类
	{
		if(empty($class_tr[$classid][tbname]))
		{
			echo $fun_r['BqErrorTtid']."=<b>".$classid."</b>".$fun_r['BqErrorNtb'];
			return "";
		}
		$query="select ".$totalfield." from {$dbtbpre}ecms_".$class_tr[$classid][tbname]." where ttid='$classid'".$and;
    }
	elseif($enews==2)//统计数据表
	{
		$query="select ".$totalfield." from {$dbtbpre}ecms_".$classid.(empty($and)?'':' where '.substr($and,5));
    }
	else//统计栏目数据
	{
		if(empty($class_r[$classid][tbname]))
		{
			echo $fun_r['BqErrorCid']."=<b>".$classid."</b>".$fun_r['BqErrorNtb'];
			return "";
		}
		if($class_r[$classid][islast])//终极栏目
		{
			$where="classid='$classid'";
		}
		else//大栏目
		{
			$where=ReturnClass($class_r[$classid][sonclass]);
		}
		$query="select ".$totalfield." from {$dbtbpre}ecms_".$class_r[$classid][tbname]." where ".$where.$and;
    }
	$num=$empire->gettotal($query);
	echo $num;
}

//搜索关键字
function msys_ShowSearchKey($line,$num,$classid=0,$enews=0){
	global $empire,$public_r,$dbtbpre;
	if($enews)
	{
		$order="searchid";
	}
	else
	{
		$order="onclick";
	}
	if($classid)
	{
		$add=" and classid='$classid'";
	}
	$sql=$empire->query("select searchid,keyboard from {$dbtbpre}enewssearch where iskey=0".$add." order by ".$order." desc limit ".$num);
	$i=0;
	$returnkey="";
	while($r=$empire->fetch($sql))
	{
		$i++;
		$keyurl=$public_r[newsurl]."e/search/result/?searchid=$r[searchid]";
		$br="";
		if($i%$line==0)
		{
			$br="<br>";
		}
		$jg="&nbsp;";
		if($br)
		{
			$jg="";
		}
		$returnkey.="<a href='".$keyurl."' target=_blank>".$r[keyboard]."</a>".$jg.$br;
	}
	echo $returnkey;
}

//留言调用
function msys_ShowLyInfo($line,$tempid,$bid=0){
	global $empire,$dbtbpre,$public_r,$mob_r;
	$a="";
	if($bid)
	{
		$a=" and bid='$bid'";
	}
	//取得模板
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	$sql=$empire->query("select lyid,name,email,lytime,lytext,retext from {$dbtbpre}enewsgbook where checked=0".$a." order by lyid desc limit ".$line);
	while($r=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceShowLyVars($no,$listvar,$r,$formatdate,$subnews);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
	}
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//替换留言标签
function mReplaceShowLyVars($no,$listtemp,$r,$formatdate,$subnews=0){
	global $public_r;
	if($subnews)
	{
		$r['lytext']=sub($r['lytext'],0,$subnews,false);
	}
	$listtemp=str_replace("[!--lyid--]",$r['lyid'],$listtemp);//id
	$listtemp=str_replace("[!--lytext--]",nl2br($r['lytext']),$listtemp);//留言内容
	$listtemp=str_replace("[!--retext--]",nl2br($r['retext']),$listtemp);//回复
	$listtemp=str_replace("[!--lytime--]",format_datetime($r['lytime'],$formatdate),$listtemp);
	$listtemp=str_replace("[!--name--]",$r['name'],$listtemp);
	$listtemp=str_replace("[!--email--]",$r['email'],$listtemp);
	//序号
	$listtemp=str_replace("[!--no--]",$no,$listtemp);
	return $listtemp;
}



//返回sql语句
function msys_ReturnBqQuery($classid,$line,$enews=0,$do=0,$ewhere='',$eorder=''){
	global $empire,$public_r,$class_r,$class_zr,$navclassid,$dbtbpre,$fun_r,$class_tr,$emod_r,$etable_r,$eyh_r;
	if($enews==24)//按sql查询
	{
		$query_first=substr($classid,0,7);
		if(!($query_first=='select '||$query_first=='SELECT '))
		{
			return "";
		}
		$classid=RepSqlTbpre($classid);
		$sql=$empire->query1($classid);
		if(!$sql)
		{
			echo"SQL Error: ".ReRepSqlTbpre($classid);
		}
		return $sql;
	}
	if($enews==0||$enews==1||$enews==2||$enews==9||$enews==12||$enews==15)//栏目
	{
		if(strstr($classid,','))//多栏目
		{
			$son_r=sys_ReturnMoreClass($classid,1);
			$classid=$son_r[0];
			$where=$son_r[1];
		}
		else
		{
			if($classid=='selfinfo')//显示当前栏目信息
			{
				$classid=$navclassid;
			}
			if($class_r[$classid][islast])
			{
				$where="classid='$classid'";
			}
			else
			{
				$where=ReturnClass($class_r[$classid][sonclass]);
			}
		}
		$tbname=$class_r[$classid][tbname];
		$mid=$class_r[$classid][modid];
		$yhid=$class_r[$classid][yhid];
    }
	elseif($enews==6||$enews==7||$enews==8||$enews==11||$enews==14||$enews==17)//专题
	{
		echo"Error：Change to use e:indexloop";
		return false;
	}
	elseif($enews==25||$enews==26||$enews==27||$enews==28||$enews==29||$enews==30)//标题分类
	{
		if(strstr($classid,','))//多标题分类
		{
			$son_r=sys_ReturnMoreTT($classid);
			$classid=$son_r[0];
			$where=$son_r[1];
		}
		else
		{
			$where="ttid='$classid'";
		}
		$mid=$class_tr[$classid][mid];
		$tbname=$emod_r[$mid][tbname];
		$yhid=$class_tr[$classid][yhid];
	}
	$query='';
	$qand=' and ';
	if($enews==0)//栏目最新
	{
		$query=' where ('.$where.')';
		$order='newstime';
		$yhvar='bqnew';
    }
	elseif($enews==1)//栏目热门
	{
		$query=' where ('.$where.')';
		$order='onclick';
		$yhvar='bqhot';
    }
	elseif($enews==2)//栏目推荐
	{
		$query=' where ('.$where.') and isgood>0';
		$order='newstime';
		$yhvar='bqgood';
    }
	elseif($enews==9)//栏目评论排行
	{
		$query=' where ('.$where.')';
		$order='plnum';
		$yhvar='bqpl';
    }
	elseif($enews==12)//栏目头条
	{
		$query=' where ('.$where.') and firsttitle>0';
		$order='newstime';
		$yhvar='bqfirst';
    }
	elseif($enews==15)//栏目下载排行
	{
		$query=' where ('.$where.')';
		$order='totaldown';
		$yhvar='bqdown';
    }
	elseif($enews==3)//所有最新
	{
		$qand=' where ';
		$order='newstime';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqnew';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==4)//所有点击排行
	{
		$qand=' where ';
		$order='onclick';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqhot';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==5)//所有推荐
	{
		$query=' where isgood>0';
		$order='newstime';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqgood';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==10)//所有评论排行
	{
		$qand=' where ';
		$order='plnum';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqpl';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==13)//所有头条
	{
		$query=' where firsttitle>0';
		$order='newstime';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqfirst';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==16)//所有下载排行
	{
		$qand=' where ';
		$order='totaldown';
		$tbname=$public_r[tbname];
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqdown';
		$yhid=$etable_r[$tbname][yhid];
    }
	elseif($enews==18)//各表最新
	{
		$qand=' where ';
		$order='newstime';
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqnew';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==19)//各表热门
	{
		$qand=' where ';
		$order='onclick';
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqhot';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==20)//各表推荐
	{
		$query=' where isgood>0';
		$order='newstime';
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqgood';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==21)//各表评论排行
	{
		$qand=' where ';
		$order='plnum';
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqpl';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==22)//各表头条信息
	{
		$query=' where firsttitle>0';
		$order="newstime";
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqfirst';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==23)//各表下载排行
	{
		$qand=' where ';
		$order='totaldown';
		$tbname=$classid;
		$mid=$etable_r[$tbname][mid];
		$yhvar='bqdown';
		$yhid=$etable_r[$tbname][yhid];
	}
	elseif($enews==25)//标题分类最新
	{
		$query=' where ('.$where.')';
		$order='newstime';
		$yhvar='bqnew';
    }
	elseif($enews==26)//标题分类点击排行
	{
		$query=' where ('.$where.')';
		$order='onclick';
		$yhvar='bqhot';
    }
	elseif($enews==27)//标题分类推荐
	{
		$query=' where ('.$where.') and isgood>0';
		$order='newstime';
		$yhvar='bqgood';
    }
	elseif($enews==28)//标题分类评论排行
	{
		$query=' where ('.$where.')';
		$order='plnum';
		$yhvar='bqpl';
    }
	elseif($enews==29)//标题分类头条
	{
		$query=' where ('.$where.') and firsttitle>0';
		$order='newstime';
		$yhvar='bqfirst';
    }
	elseif($enews==30)//标题分类下载排行
	{
		$query=' where ('.$where.')';
		$order='totaldown';
		$yhvar='bqdown';
    }
	//优化
	$yhadd='';
	if(!empty($eyh_r[$yhid]['dobq']))
	{
		$yhadd=ReturnYhSql($yhid,$yhvar);
		if(!empty($yhadd))
		{
			$query.=$qand.$yhadd;
			$qand=' and ';
		}
	}
	//不调用
	if(!strstr($public_r['nottobq'],','.$classid.','))
	{
		$notbqwhere=ReturnNottoBqWhere();
		if(!empty($notbqwhere))
		{
			$query.=$qand.$notbqwhere;
			$qand=' and ';
		}
	}
	//图片信息
	if(!empty($do))
	{
		$query.=$qand.'ispic=1';
		$qand=' and ';
    }
	//附加条件
	if(!empty($ewhere))
	{
		$query.=$qand.'('.$ewhere.')';
		$qand=' and ';
	}
	//中止
	if(empty($tbname))
	{
		echo $fun_r['BqErrorCid']."=<b>".$classid."</b>".$fun_r['BqErrorNtb']."(".$fun_r['BqErrorDo']."=".$enews.")";
		return false;
	}
	//排序
	$addorder=empty($eorder)?$order.' desc':$eorder;
	$query='select '.ReturnSqlListF($mid).' from '.$dbtbpre.'ecms_'.$tbname.$query.' order by '.ReturnSetTopSql('bq').$addorder.' limit '.$line;
	$sql=$empire->query1($query);
	if(!$sql)
	{
		echo"SQL Error: ".ReRepSqlTbpre($query);
	}
	return $sql;
}

//返回标签模板
function msys_ReturnBqTemp($tempid){
	global $empire,$dbtbpre,$fun_r;
	$r=$empire->fetch1("select tempid,modid,temptext,showdate,listvar,subnews,rownum,docode from ".dp_GetTemptb("enewsbqtemp")." where tempid='$tempid'");
	if(empty($r[tempid]))
	{
		echo $fun_r['BqErrorNbqtemp']."(ID=".$tempid.")";
	}
	return $r;
}

//替换栏目名
function mReplaceEcmsinfoClassname($temp,$enews,$classid){
	global $class_r,$class_zr;
	if(strstr($classid,","))
	{
		return $temp;
    }
	$thecdo=',0,1,2,9,12,15,';
	$thezdo=',6,7,8,11,14,17,';
	//栏目
	if(strstr($thecdo,",".$enews.","))
	{
		$classname=$class_r[$classid][classname];
		$r[classid]=$classid;
		$classurl=m_ReturnBqClassname($r['classid'],9);
    }
	//专题
	elseif(strstr($thezdo,",".$enews.","))
	{
		$r[ztid]=$classid;
		$classname=$class_zr[$classid][ztname];
		$classurl=m_ReturnBqZtname($r[ztid]);
    }
	else
	{}
	if($classname)
	{
		$temp=str_replace("[!--the.classname--]",$classname,$temp);
		$temp=str_replace("[!--the.classurl--]",$classurl,$temp);
		$temp=str_replace("[!--the.classid--]",$classid,$temp);
	}
	return $temp;
}

//带模板的标签
function msys_GetEcmsInfo($classid,$line,$strlen,$have_class=0,$enews=0,$tempid,$doing=0,$ewhere='',$eorder=''){
	global $empire,$public_r,$mob_r;
	$sql=msys_ReturnBqQuery($classid,$line,$enews,$doing,$ewhere,$eorder);
	if(!$sql)
	{return "";}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	//替换变量
	$listtemp=mReplaceEcmsinfoClassname($listtemp,$enews,$classid);
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		$r[oldtitle]=$r[title];
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$strlen,$formatdate,$url,$have_class,$r,$ret_r,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
    }
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//灵动标签：返回SQL内容函数
function msys_ReturnEcmsLoopBq($classid=0,$line=10,$enews=3,$doing=0,$ewhere='',$eorder=''){
	return msys_ReturnBqQuery($classid,$line,$enews,$doing,$ewhere,$eorder);
}

//灵动标签：返回特殊内容函数
function msys_ReturnEcmsLoopStext($r){
	global $class_r;
	$sr['titleurl']=dp_InfoToMLink($r['titleurl']);
	$sr['classname']=$class_r[$r[classid]][bname]?$class_r[$r[classid]][bname]:$class_r[$r[classid]][classname];
	$sr['classurl']=m_ReturnBqClassname($r['classid'],9);
	return  $sr;
}



//返回相关链接操作类型
function msys_OtherLinkQuery($classid,$line,$enews,$doing){
	global $empire,$public_r,$class_r,$class_zr,$navinfor,$dbtbpre,$eyh_r,$etable_r,$class_tr;
	if($enews==1)//按表
	{
		$tbname=$classid;
	}
	elseif($enews==2)//按栏目
	{
		if($classid=='selfinfo')//当前栏目
		{
			$classid=$navinfor['classid'];
		}
		$tbname=$class_r[$classid]['tbname'];
		if($class_r[$classid][islast])
		{
			$and="classid='$classid'";
		}
		else
		{
			$and=ReturnClass($class_r[$classid][sonclass]);
		}
	}
	elseif($enews==3)//按标题分类
	{
		$tbname=$class_tr[$classid]['tbname'];
		$and="ttid='$classid'";
	}
	else//默认
	{
		$tbname=$class_r[$navinfor[classid]]['tbname'];
	}
	//关键字
	$keys='';
	if(!empty($enews))
	{
		$repadd='';
		$keyr=explode(',',$navinfor['keyboard']);
		$count=count($keyr);
		for($i=0;$i<$count;$i++)
		{
			if($i==0)
			{
				$or='';
			}
			else
			{
				$or=' or ';
			}
			$repadd.=$or."[!--f--!] like '%".$keyr[$i]."%'";
		}
		//搜索范围
		if($public_r['newslink']==1)
		{
			$keys='('.str_replace('[!--f--!]','keyboard',$repadd).')';
		}
		elseif($public_r['newslink']==2)
		{
			$keys='('.str_replace('[!--f--!]','keyboard',$repadd).' or '.str_replace('[!--f--!]','title',$repadd).')';
		}
		else
		{
			$keys='('.str_replace('[!--f--!]','title',$repadd).')';
		}
	}
	else
	{
		$keys='id in ('.$navinfor['keyid'].')';
	}
	//当前信息
	if($tbname==$class_r[$navinfor[classid]][tbname])
	{
		$and.=empty($and)?"id<>'$navinfor[id]'":" and id<>'$navinfor[id]'";
	}
	//图片信息
	if($doing)
	{
		$and.=empty($and)?"ispic=1":" and ispic=1";
    }
	if($and)
	{
		$and.=' and ';
	}
	if(empty($line))
	{
		$line=$class_r[$navinfor[classid]]['link_num'];
	}
	//优化
	$yhvar='otherlink';
	$yhid=$etable_r[$tbname][yhid];
	$yhadd='';
	if($yhid)
	{
		$yhadd=ReturnYhSql($yhid,$yhvar,1);
	}
	$query="select * from {$dbtbpre}ecms_".$tbname." where ".$yhadd.$and.$keys." order by newstime desc limit $line";
	$sql=$empire->query1($query);
	if(!$sql)
	{
		echo"SQL Error: ".ReRepSqlTbpre($query);
	}
	return $sql;
}

//相关链接标签
function msys_GetOtherLinkInfo($tempid,$classid='',$line=0,$strlen=60,$have_class=0,$enews=0,$doing=0){
	global $empire,$navinfor,$public_r,$mob_r;
	if(empty($navinfor['keyboard'])||(empty($enews)&&!$navinfor['keyid']))
	{
		return '';
	}
	$sql=msys_OtherLinkQuery($classid,$line,$enews,$doing);
	if(!$sql)
	{return "";}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);

	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	//替换变量
	$listtemp=mReplaceEcmsinfoClassname($listtemp,$enews,$classid);
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		$r[oldtitle]=$r[title];
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$strlen,$formatdate,$url,$have_class,$r,$ret_r,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
    }
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//文字标签函数
function msys_GetClassNews($classid,$line,$strlen,$showdate=true,$enews=0,$have_class=0,$formatdate='(m-d)',$ewhere='',$eorder=''){
	global $empire;
	$sql=msys_ReturnBqQuery($classid,$line,$enews,0,$ewhere,$eorder);
	if(!$sql)
	{return "";}
	$record=0;
	while($r=$empire->fetch($sql))
	{
		$record=1;
		$oldtitle=$r[title];
		$title=sub($r[title],0,$strlen,false);
		//标题属性
		$title=DoTitleFont($r[titlefont],$title);
		//显示栏目
		$myadd=m_ReturnBqClassname($r['classid'],$have_class);
		//显示时间
        if($showdate)
		{
			$newstime=date($formatdate,$r[newstime]);
            $newstime="&nbsp;".$newstime;
        }
		//标题链接
		$titleurl=dp_InfoToMLink($r['titleurl']);
        $title="·".$myadd."<a href='".$titleurl."' target=_blank title='".$oldtitle."'>".$title."</a>".$newstime;
        $allnews.="<tr><td height=20>".$title."</td></tr>";
    }
	if($record)
	{
		echo"<table border=0 cellpadding=0 cellspacing=0>$allnews</table>";
	}
}

//图文信息调用
function msys_GetClassNewsPic($classid,$line,$num,$width,$height,$showtitle=true,$strlen,$enews=0,$ewhere='',$eorder=''){
	global $empire;
	$sql=msys_ReturnBqQuery($classid,$num,$enews,1,$ewhere,$eorder);
	if(!$sql)
	{return "";}
	//输出
	$i=0;
	while($r=$empire->fetch($sql))
	{
		$i++;
		if(($i-1)%$line==0||$i==1)
		{$class_text.="<tr>";}
		//标题链接
		$titleurl=dp_InfoToMLink($r['titleurl']);
		//------是否显示标题
		if($showtitle)
		{
			$oldtitle=$r[title];
			$title=sub($r[title],0,$strlen,false);
			//标题属性
			$title=DoTitleFont($r[titlefont],$title);
			$title="<br><span style='line-height:15pt'>".$title."</span>";
		}
		$r[titlepic]=dp_PicToMLink($r[titlepic]);
        $class_text.="<td align=center><a href='".$titleurl."' target=_blank><img src='".$r[titlepic]."' width='".$width."' height='".$height."' border=0 alt='".$oldtitle."'>".$title."</a></td>";
        //分割
        if($i%$line==0)
		{$class_text.="</tr>";}
    }
    if($i<>0)
	{
		$table="<table width=100% border=0 cellpadding=3 cellspacing=0>";$table1="</table>";
        $ys=$line-$i%$line;
		$p=0;
        for($j=0;$j<$ys&&$ys!=$line;$j++)
		{
			$p=1;
			$class_text.="<td></td>";
        }
		if($p==1)
		{
			$class_text.="</tr>";
		}
	}
    $text=$table.$class_text.$table1;
    echo"$text";
}

//带模板的标签显示-循环
function msys_GetEcmsInfoMore($classid,$line,$strlen,$have_class=0,$ecms=0,$tr,$doing=0,$field,$cr,$dofirstinfo=0,$fsubtitle=0,$fsubnews=0,$fdoing=0,$ewhere='',$eorder=''){
	global $empire,$public_r;
	//操作类型
	if($ecms==0)//栏目最新
	{
		$enews=0;
	}
	elseif($ecms==1)//栏目热门
	{
		$enews=1;
	}
	elseif($ecms==2)//栏目推荐
	{
		$enews=2;
	}
	elseif($ecms==3)//栏目评论排行
	{
		$enews=9;
	}
	elseif($ecms==4)//栏目头条
	{
		$enews=12;
	}
	elseif($ecms==5)//栏目下载排行
	{
		$enews=15;
	}
	elseif($ecms==6)//栏目评分
	{
		$enews=25;
	}
	elseif($ecms==7)//栏目投票
	{
		$enews=26;
	}
	else
	{
		$enews=0;
	}
	$sql=msys_ReturnBqQuery($classid,$line,$enews,$doing,$ewhere,$eorder);
	if(!$sql)
	{return "";}
	//取得模板
	$listtemp=$tr[temptext];
	$subnews=$tr[subnews];
	$listvar=$tr[listvar];
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	//替换变量
	$listtemp=mReplaceEcmsinfoClassname($listtemp,$enews,$classid);
	$listtemp=msys_ForSonclassDataFirstInfo($listtemp,$cr,$dofirstinfo,$fsubtitle,$fsubnews,$fdoing);
	if(empty($rownum))
	{$rownum=1;}
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		$r[oldtitle]=$r[title];
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$strlen,$formatdate,$url,$have_class,$r,$field,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
    }
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//循环子栏目显示头条信息
function msys_ForSonclassDataFirstInfo($temptext,$cr,$ecms=0,$subtitle=0,$subnews=0,$fdoing=0){
	global $empire,$class_r,$public_r,$dbtbpre;
	if($ecms==2||$ecms==3||$ecms==4)
	{
		$where=$class_r[$cr[classid]][islast]?"classid='$cr[classid]'":ReturnClass($class_r[$cr[classid]][sonclass]);
	}
	if($fdoing)
	{
		$add=" and ispic=1";
	}
	if($ecms==1)//栏目缩图
	{
		$id=$cr['classid'];
		$title=$cr['classname'];
		$titleurl=m_ReturnBqClassname($cr['classid'],9);
		$titlepic=$cr['classimg'];
		$smalltext=$cr['intro'];
	}
	elseif($ecms==2)//推荐信息
	{
		$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$cr[classid]][tbname]." where isgood>0 and (".$where.")".$add." order by newstime desc limit 1");
	}
	elseif($ecms==3)//头条信息
	{
		$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$cr[classid]][tbname]." where firsttitle>0 and (".$where.")".$add." order by newstime desc limit 1");
	}
	elseif($ecms==4)//最新信息
	{
		$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$cr[classid]][tbname]." where (".$where.")".$add." order by newstime desc limit 1");
	}
	else
	{
		return $temptext;
	}
	if($ecms!=1)
	{
		$id=$r['id'];
		$title=$r['title'];
		$titleurl=dp_InfoToMLink($r['titleurl']);
		$titlepic=$r['titlepic'];
		//简介
		if($r['smalltext'])
		{$smalltext=$r['smalltext'];}
		elseif($r['flashsay'])
		{$smalltext=$r['flashsay'];}
		elseif($r['softsay'])
		{$smalltext=$r['softsay'];}
		elseif($r['moviesay'])
		{$smalltext=$r['moviesay'];}
		elseif($r['picsay'])
		{$smalltext=$r['picsay'];}
	}
	$oldtitle=$title;
	if($subtitle)
	{$title=sub($title,0,$subtitle,false);}
	if(empty($titlepic))
	{$titlepic=$public_r[newsurl]."e/data/images/notimg.gif";}
	if(!empty($subnews))
	{$smalltext=sub($smalltext,0,$subnews,false);}
	$temptext=str_replace('[!--sonclass.id--]',$id,$temptext);
	$temptext=str_replace('[!--sonclass.title--]',$title,$temptext);
	$temptext=str_replace('[!--sonclass.oldtitle--]',$oldtitle,$temptext);
	$titlepic=dp_PicToMLink($titlepic);
	$temptext=str_replace('[!--sonclass.titlepic--]',$titlepic,$temptext);
	$temptext=str_replace('[!--sonclass.titleurl--]',$titleurl,$temptext);
	$temptext=str_replace('[!--sonclass.text--]',$smalltext,$temptext);
	return $temptext;
}

//循环子栏目数据
function msys_ForSonclassData($classid,$line,$strlen,$have_class=0,$enews=0,$tempid,$doing=0,$cline=0,$dofirstinfo=0,$fsubtitle=0,$fsubnews=0,$fdoing=0,$ewhere='',$eorder=''){
	global $empire,$public_r,$class_r,$class_zr,$navclassid,$dbtbpre,$mob_r;
	//多栏目
	if(strstr($classid,","))
	{
		$son_r=sys_ReturnMoreClass($classid);
		$classid=$son_r[0];
		$where=$son_r[1];
	}
	else
	{
		//当前栏目
		if($classid=="selfinfo")
		{
			$classid=$navclassid;
		}
		$where="bclassid='$classid'";
	}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$tr[temptext]=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$tr[listvar]=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);
	//限制条数
	if($cline)
	{
		$limit=" limit ".$cline;
	}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//栏目字段
	if($dofirstinfo==1)
	{
		$addclassfield=',classname,classimg,intro';
	}
	$csql=$empire->query("select classid".$addclassfield." from {$dbtbpre}enewsclass where ".$where." and wburl='' order by myorder,classid".$limit);
	while($cr=$empire->fetch($csql))
	{
		msys_GetEcmsInfoMore($cr[classid],$line,$strlen,$have_class,$enews,$tr,$doing,$ret_r,$cr,$dofirstinfo,$fsubtitle,$fsubnews,$fdoing,$ewhere,$eorder);
	}
}

//带模板的栏目导航标签
function msys_ShowClassByTemp($classid,$tempid,$show=0,$cline=0){
	global $navclassid,$empire,$class_r,$public_r,$dbtbpre,$mob_r;
	//当前栏目
	if($classid=="selfinfo")
	{
		if(empty($navclassid))
		{$classid=0;}
		else
		{
			$classid=$navclassid;
			//终极类别则显示同级类别
			if($class_r[$classid][islast]&&$class_r[$classid][bclassid])
			{
				$classid=$class_r[$classid][bclassid];
			}
			if($class_r[$classid][islast]&&empty($class_r[$classid][bclassid]))
			{$classid=0;}
		}
	}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);

	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	//限制条数
	if($cline)
	{
		$limit=" limit ".$cline;
	}
	//替换变量
	$bclassname=$class_r[$classid][classname];
	$br[classid]=$classid;
	$bclassurl=m_ReturnBqClassname($br['classid'],9);
	$listtemp=str_replace("[!--bclassname--]",$bclassname,$listtemp);
	$listtemp=str_replace("[!--bclassurl--]",$bclassurl,$listtemp);
	$listtemp=str_replace("[!--bclassid--]",$classid,$listtemp);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	$sql=$empire->query("select classid,classname,islast,sonclass,tbname,intro,classimg,infos from {$dbtbpre}enewsclass where bclassid='$classid' and showclass=0 order by myorder,classid".$limit);
	while($r=$empire->fetch($sql))
	{
		//显示类别数据数
		if($show)
		{
			$num=ReturnClassInfoNum($r);
		}
		//替换列表变量
		$repvar=mReplaceShowClassVars($no,$listvar,$r,$num,0,$subnews);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
	}
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//循环子栏目导航标签
function msys_ForShowSonClass($classid,$tempid,$show=0,$cline=0){
	global $navclassid,$empire,$class_r,$public_r,$dbtbpre,$mob_r;
	//多栏目
	if(strstr($classid,","))
	{
		$where='classid in ('.$classid.')';
	}
	else
	{
		if($classid=="selfinfo")//当前栏目
		{
			$classid=intval($navclassid);
		}
		$where="bclassid='$classid'";
	}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}

	$tr[temptext]=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$tr[listvar]=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);

	//限制条数
	if($cline)
	{
		$limit=" limit ".$cline;
	}
	$no=1;
	$sql=$empire->query("select classid,classname,islast,sonclass,tbname,intro,classimg,infos from {$dbtbpre}enewsclass where ".$where." and showclass=0 order by myorder,classid".$limit);
	while($r=$empire->fetch($sql))
	{
		//显示栏目数据数
		if($show)
		{
			$num=ReturnClassInfoNum($r);
		}
		msys_GetShowClassMore($r[classid],$r,$tr,$no,$num,$show);
		$no++;
	}
}

//栏目导航标签－循环
function msys_GetShowClassMore($bclassid,$bcr,$tr,$bno,$bnum,$show=0){
	global $empire,$class_r,$public_r,$dbtbpre;
	//取得模板
	$listtemp=$tr[temptext];
	$subnews=$tr[subnews];
	$listvar=$tr[listvar];
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	//替换变量
	$listtemp=str_replace("[!--bclassname--]",$bcr[classname],$listtemp);
	$bclassurl=m_ReturnBqClassname($bcr['classid'],9);//栏目链接
	$listtemp=str_replace("[!--bclassurl--]",$bclassurl,$listtemp);
	$listtemp=str_replace("[!--bclassid--]",$bclassid,$listtemp);
	$bclassimg=$bcr[classimg]?$bcr[classimg]:$public_r[newsurl]."e/data/images/notimg.gif";//栏目图片
	$listtemp=str_replace("[!--bclassimg--]",$bclassimg,$listtemp);
	$listtemp=str_replace("[!--bintro--]",nl2br($bcr[intro]),$listtemp);//栏目简介
	$listtemp=str_replace("[!--bno--]",$bno,$listtemp);
	$listtemp=str_replace("[!--bnum--]",$bnum,$listtemp);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	$sql=$empire->query("select classid,classname,islast,sonclass,tbname,intro,classimg,infos from {$dbtbpre}enewsclass where bclassid='$bclassid' and showclass=0 order by myorder,classid");
	while($r=$empire->fetch($sql))
	{
		//显示栏目数据数
		if($show)
		{
			$num=ReturnClassInfoNum($r);
		}
		//替换列表变量
		$repvar=mReplaceShowClassVars($no,$listvar,$r,$num,0,$subnews);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
	}
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//替换栏目导航标签
function mReplaceShowClassVars($no,$listtemp,$r,$num,$ecms=0,$subnews=0){
	global $public_r,$class_r;
	//栏目链接
	if($ecms==1)
	{
		$classurl=m_ReturnBqZtname($r[ztid]);
		$r['classname']=$r['ztname'];
		$r['classid']=$r['ztid'];
		$r['classimg']=$r['ztimg'];
	}
	else
	{
		$classurl=m_ReturnBqClassname($r['classid'],9);
	}
	if($subnews)
	{
		$r[intro]=sub($r[intro],0,$subnews,false);
	}
	$listtemp=str_replace("[!--classurl--]",$classurl,$listtemp);
	//栏目名称
	$listtemp=str_replace("[!--classname--]",$r[classname],$listtemp);
	//栏目id
	$listtemp=str_replace("[!--classid--]",$r[classid],$listtemp);
	//栏目图片
	if(empty($r[classimg]))
	{
		$r[classimg]=$public_r[newsurl]."e/data/images/notimg.gif";
	}
	$listtemp=str_replace("[!--classimg--]",$r[classimg],$listtemp);
	//栏目简介
	$listtemp=str_replace("[!--intro--]",nl2br($r[intro]),$listtemp);
	//记录数
	$listtemp=str_replace("[!--num--]",$num,$listtemp);
	//序号
	$listtemp=str_replace("[!--no--]",$no,$listtemp);
	return $listtemp;
}


//专题调用
function msys_ShowZtData($tempid,$zcid=0,$cline=0,$classid=0){
	global $empire,$dbtbpre,$public_r,$mob_r;
	$a='';
	if($zcid)
	{
		$a.=' and zcid in ('.$zcid.')';
	}
	if($classid)
	{
		$a.=' and classid in ('.$classid.')';
	}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}

	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);

	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	//限制条数
	if($cline)
	{
		$limit=" limit ".$cline;
	}
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	$sql=$empire->query("select ztid,ztname,intro,ztimg from {$dbtbpre}enewszt where showzt=0".$a." order by myorder,ztid desc".$limit);
	while($r=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=mReplaceShowClassVars($no,$listvar,$r,$num,1,$subnews);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
	}
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//显示TAGS
function msys_eShowTags($cid,$num=0,$line=0,$order='',$isgood='',$isgoodshow='',$showjg='',$shownum=0,$cs='',$vartype=''){
	global $empire,$dbtbpre,$public_r,$navinfor,$mob_r;
	$str='';
	if(empty($showjg))
	{
		$showjg=' &nbsp; ';
	}
	if($mob_r['ltp']){
		$uqz=$mob_r['msiteurl'];
	}else{
		$uqz="/";
	}
	$ln=0;
	if($cid=='selfinfo')
	{
		if(empty($navinfor['infotags']))
		{
			return '';
		}
		$jg='';
		$r=explode(',',$navinfor['infotags']);
		$count=count($r);
		for($i=0;$i<$count;$i++)
		{
			$ln++;
			$br='';
			if($line)
			{
				if($ln%$line==0)
				{
					$br='<br>';
				}
			}
			if(empty($cs))
			{
				$rewriter=m_eReturnRewriteTagsUrl(0,$r[$i],1);
				$tagsurl=$rewriter['pageurl'];
			}
			else
			{
				$tagsurl=$uqz.'e/tags/?tagname='.urlencode($r[$i]).$cs;
			}
			$str.=$jg.'<a href="'.$tagsurl.'" target="_blank">'.$r[$i].'</a>'.$br;
			$jg=$br?'':$showjg;
		}
	}
	else
	{
		$and='';
		$where='';
		if($cid)
		{
			$where=strstr($cid,',')?"cid in ($cid)":"cid='$cid'";
			$and=' and ';
		}
		if($isgood)
		{
			$where.=$and.'isgood=1';
		}
		if($where)
		{
			$where=' where '.$where;
		}
		$order=$order?' '.$order:' tagid desc';
		$limit='';
		if($num)
		{
			$limit=' limit '.$num;
		}
		//推荐标红
		$gfont1='';
		$gfont2='';
		if($isgoodshow)
		{
			if(strstr($isgoodshow,'r'))
			{
				$gfont1='<font color="red">';
				$gfont2='</font>';
			}
			if(strstr($isgoodshow,'s'))
			{
				$gfont1=$gfont1.'<b>';
				$gfont2='</b>'.$gfont2;
			}
		}
		$jg='';
		$snum='';
		$sql=$empire->query("select tagid,tagname,num,isgood from {$dbtbpre}enewstags".$where." order by".$order.$limit);
		while($r=$empire->fetch($sql))
		{
			if($shownum)
			{
				$snum='('.$r[num].')';
			}
			$font1='';
			$font2='';
			if($isgoodshow&&$r[isgood])
			{
				$font1=$gfont1;
				$font2=$gfont2;
			}
			$ln++;
			$br='';
			if($line)
			{
				if($ln%$line==0)
				{
					$br='<br>';
				}
			}
			if(empty($cs)&&$vartype<>'tagid')
			{
				$rewriter=m_eReturnRewriteTagsUrl($r['tagid'],$r['tagname'],1);
				$tagsurl=$rewriter['pageurl'];
			}
			else
			{
				$tagsurl=$uqz.'e/tags/?'.($vartype=='tagid'?'tagid='.$r[tagid]:'tagname='.urlencode($r[tagname])).$cs;
			}
			$str.=$jg.'<a href="'.$tagsurl.'" target="_blank">'.$font1.$r[tagname].$snum.$font2.'</a>'.$br;
			$jg=$br?'':$showjg;
		}
	}
	echo $str;
}

//索引灵动标签：返回SQL内容函数
function msys_ReturnEcmsIndexLoopBq($id=0,$line=10,$enews=3,$classid='',$mid='',$ewhere=''){
	global $navclassid;
	if($enews==1)//专题最新
	{
		$type='zt';
		$eorder='newstime desc';
		$selectf=',ztid,cid,isgood';
	}
	elseif($enews==2)//专题最早
	{
		$type='zt';
		$eorder='newstime asc';
		$selectf=',ztid,cid,isgood';
	}
	elseif($enews==3)//专题推荐
	{
		$type='zt';
		$eorder='newstime asc';
		$selectf=',ztid,cid,isgood';
		$where=' and isgood>0';
	}
	elseif($enews==4)//专题子类最新
	{
		$type='ztc';
		$eorder='newstime desc';
		$selectf=',ztid,cid,isgood';
	}
	elseif($enews==5)//专题子类最早
	{
		$type='ztc';
		$eorder='newstime asc';
		$selectf=',ztid,cid,isgood';
	}
	elseif($enews==6)//专题子类推荐
	{
		$type='ztc';
		$eorder='newstime asc';
		$selectf=',ztid,cid,isgood';
		$where=' and isgood>0';
	}
	elseif($enews==7)//TAGS最新
	{
		$type='sp';
		$eorder='newstime desc';
		$selectf='';
	}
	elseif($enews==8)//TAGS最早
	{
		$type='sp';
		$eorder='newstime asc';
		$selectf='';
	}
	elseif($enews==9)//碎片最新
	{
		$type='tags';
		$eorder='newstime desc';
		$selectf='';
	}
	elseif($enews==10)//碎片最早
	{
		$type='tags';
		$eorder='newstime asc';
		$selectf='';
	}
	elseif($enews==11)//SQL调用
	{
		$type='sql';
		$eorder='newstime asc';
		$selectf='';
	}
	if($id=='selfinfo')//显示当前ID信息
	{
		$id=$navclassid;
	}
	return msys_ReturnTogQuery($type,$id,$line,$classid,$mid,$ewhere,$eorder,$selectf);
}

//返回组合查询
function msys_ReturnTogQuery($type,$id,$line,$classid='',$mid='',$ewhere='',$eorder='',$selectf=''){
	global $empire,$public_r,$class_r,$class_zr,$navclassid,$dbtbpre,$class_tr,$emod_r;
	if($type=='tags')//TAGS
	{
		$idf='tagid';
		$orderf='newstime desc';
		$table=$dbtbpre.'enewstagsdata';
	}
	elseif($type=='zt')//专题
	{
		$idf='ztid';
		$orderf='newstime desc';
		$table=$dbtbpre.'enewsztinfo';
	}
	elseif($type=='ztc')//专题子类
	{
		$idf='cid';
		$orderf='newstime desc';
		$table=$dbtbpre.'enewsztinfo';
	}
	elseif($type=='sql')//SQL查询
	{
		$query_first=substr($id,0,7);
		if(!($query_first=='select '||$query_first=='SELECT '))
		{
			return '';
		}
		$id=RepSqlTbpre($id);
		$sql=$empire->query1($id);
		if(!$sql)
		{
			echo'SQL Error: '.ReRepSqlTbpre($id);
		}
		return $sql;
	}
	else//碎片
	{
		$idf='spid';
		$orderf='newstime desc';
		$table=$dbtbpre.'enewssp_2';
	}
	$where=strstr($id,',')?"$idf in ($id)":"$idf='$id'";
	//栏目
	if($classid)
	{
		if(strstr($classid,','))//多栏目
		{
			$son_r=sys_ReturnMoreClass($classid,1);
			$classid=$son_r[0];
			$add=$son_r[1];
		}
		else
		{
			if($classid=='selfinfo')//显示当前栏目信息
			{
				$classid=$navclassid;
			}
			if($class_r[$classid][islast])
			{
				$add="classid='$classid'";
			}
			else
			{
				$add=ReturnClass($class_r[$classid][sonclass]);
			}
		}
		$where.=' and ('.$add.')';
	}
	//模型
	if($mid)
	{
		$where.=strstr($mid,',')?" and mid in ($mid)":" and mid='$mid'";
	}
	//附加sql条件
	if(!empty($ewhere))
	{
		$where.=' and ('.$ewhere.')';
	}
	//排序
	if(!empty($eorder))
	{
		$orderf=$eorder;
	}
	$query='select classid,id'.$selectf.' from '.$table.' where '.$where.' order by '.$orderf.' limit '.$line;
	$sql=$empire->query1($query);
	if(!$sql)
	{
		echo'SQL Error: '.ReRepSqlTbpre($query);
	}
	return $sql;
}

//调用TAGS信息
function msys_eShowTagsInfo($tagid,$line,$strlen,$tempid,$classid='',$mid=''){
	global $empire,$dbtbpre,$public_r,$class_r,$emod_r,$mob_r;
	if(empty($tagid))
	{
		return '';
	}
	$sql=msys_ReturnTogQuery('tags',$tagid,$line,$classid,$mid);
	if(!$sql)
	{return "";}
	//取得模板
	$tr=msys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}

	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);



	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	$docode=$tr[docode];
	if(empty($rownum))
	{$rownum=1;}
	//字段
	$ret_r=ReturnReplaceListF($tr[modid]);
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	while($r=$empire->fetch($sql))
	{
		if(empty($class_r[$r[classid]][tbname]))
		{
			continue;
		}
		$infor=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$r[classid]][tbname]." where id='$r[id]' limit 1");
		if(empty($infor['id']))
		{
			continue;
		}
		$infor[oldtitle]=$infor[title];
		//替换列表变量
		$repvar=mReplaceListVars($no,$listvar,$subnews,$strlen,$formatdate,$url,$have_class,$infor,$ret_r,$docode);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
    }
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//flash幻灯图片信息调用
function msys_FlashPixpic($classid,$line,$width,$height,$showtitle=true,$strlen,$enews=0,$sec=5,$ewhere='',$eorder=''){
	global $empire,$public_r,$class_r,$class_zr;
	$sql=msys_ReturnBqQuery($classid,$line,$enews,1,$ewhere,$eorder);
	if(!$sql)
	{return "";}
	$i=0;
	while($r=$empire->fetch($sql))
	{
		//标题链接
		$titleurl=dp_InfoToMLink($r['titleurl']);
		//------是否显示标题
		if($showtitle)
		{
			$title=sub($r[title],0,$strlen,false);
			//标题属性
			$title=addslashes(DoTitleFont($r[titlefont],ehtmlspecialchars($title)));
		}
		$fh="|";
		if($i==0)
		{
			$fh="";
		}
		$r[titlepic]=dp_PicToMLink($r[titlepic]);
		$url.=$fh.$titleurl;
		$pic.=$fh.$r[titlepic];
		$subject.=$fh.$title;
		$i=1;
	}
	//显示标题
	if($showtitle)
	{
		$text_height=22;
	}
	else
	{
		$text_height=0;
	}
?>
<script type="text/javascript">
<!--
 var interval_time=<?=$sec?>;
 var focus_width=<?=$width?>;
 var focus_height=<?=$height?>;
 var text_height=<?=$text_height?>;
 var text_align="center";
 var swf_height = focus_height+text_height;
 var swfpath="<?=$public_r[newsurl]?>e/data/images/pixviewer.swf";
 var swfpatha="<?=$public_r[newsurl]?>e/data/images/pixviewer.swf";
 
 var pics="<?=urlencode($pic)?>";
 var links="<?=urlencode($url)?>";
 var texts="<?=ehtmlspecialchars($subject)?>";
 
 document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
 document.write('<param name="movie" value="'+swfpath+'"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
 document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
 document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'&text_align='+text_align+'&interval_time='+interval_time+'">');
 document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'&text_align='+text_align+'&interval_time='+interval_time+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
 document.write('</object>');
//-->
</script>
<?
}




//友情链接
function msys_GetSitelink($line,$num,$enews=0,$classid=0,$stats=0){
	global $empire,$public_r,$dbtbpre;
	//图片
	if($enews==1)
	{$a=" and lpic<>''";}
	//文字
	elseif($enews==2)
	{$a=" and lpic=''";}
	else
	{$a="";}
	//调用相应的栏目分类
	if(!empty($classid))
	{
		$whereclass=" and classid='$classid'";
	}
	$sql=$empire->query("select * from {$dbtbpre}enewslink where checked=1".$a.$whereclass." order by myorder,lid limit ".$num);
	//输出
	$i=0;
	while($r=$empire->fetch($sql))
	{
		//链接
		if(empty($stats))
		{
			$linkurl=$public_r[newsurl]."e/public/GotoSite/?lid=".$r[lid]."&url=".urlencode($r[lurl]);
		}
		else
		{
			$linkurl=$r[lurl];
		}
		$i++;
		if(($i-1)%$line==0||$i==1)
		{$class_text.="<tr>";}
		//文字
		if(empty($r[lpic]))
		{
			$logo="<a href='".$linkurl."' title='".$r[lname]."' target=".$r[target].">".$r[lname]."</a>";
		}
		//图片
		else
		{
			$logo="<a href='".$linkurl."' target=".$r[target]."><img src='".$r[lpic]."' alt='".$r[lname]."' border=0 width='".$r[width]."' height='".$r[height]."'></a>";
		}
		$class_text.="<td align=center>".$logo."</td>";
		//分割
		if($i%$line==0)
		{$class_text.="</tr>";}
	}
	if($i<>0)
	{
		$table="<table width=100% border=0 cellpadding=3 cellspacing=0>";$table1="</table>";
        $ys=$line-$i%$line;
		$p=0;
        for($j=0;$j<$ys&&$ys!=$line;$j++)
		{
			$p=1;
			$class_text.="<td></td>";
        }
		if($p==1)
		{
			$class_text.="</tr>";
		}
	}
	$text=$table.$class_text.$table1;
    echo"$text";
}


//图库模型分页标签
function msys_PhotoMorepage($tempid,$spicwidth=0,$spicheight=0){
	global $navinfor;
	$morepic=$navinfor['morepic'];
	if(empty($morepic))
	{
		return "";
	}
	//取得标签
	$tempr=sys_ReturnBqTemp($tempid);
	if(empty($tempr['tempid']))
	{return "";}
	$rexp="\r\n";
	$fexp="::::::";
	$gs="";
	if($spicwidth)
	{$gs=" width='".$spicwidth."'";}
	if($spicheight)
	{$gs.=" height='".$spicheight."'";}
	$rstr="";
	$sdh="";
	$firstpic="";
	$optionstr="";
	$titleoption="";
	$listpage="";
	$nbsp="";
	$rr=explode($rexp,$morepic);
	$count=count($rr);
	for($i=0;$i<$count;$i++)
	{
		$j=$i+1;
		$fr=explode($fexp,$rr[$i]);
		$smallpic=$fr[0];	//小图
		$bigpic=$fr[1];	//大图
		if(empty($bigpic))
		{
			$bigpic=$smallpic;
		}
		$picname=ehtmlspecialchars($fr[2]);	//名称
		$showpic=ReplaceMorePagelistvar($tempr['listvar'],$picname,$bigpic);
		$sdh.=$nbsp."<a href='#ecms' onclick='GotoPhPage(".$j.");' title='".$picname."'><img src='".$smallpic."' alt='".$picname."' border=0".$gs."></a>";
		if($i==0)
		{
			$firstpic=$showpic;
		}
		$rstr.="photosr[".$j."]=\"".addslashes($showpic)."\";
		";
		$optionstr.="<option value=".$j.">第 ".$j." 页</option>";
		$titleoption.="<option value=".$j.">".$j."、".$picname."</option>";
		$listpage.=$nbsp."<a href='#ecms' onclick='GotoPhPage(".$j.");' title='".$picname."'>".$j."</a>";
		$nbsp="&nbsp;";
	}
	echo ReplaceMorePagetemp($tempr['temptext'],$rstr,$sdh,$optionstr,$titleoption,$firstpic,$listpage);
}

//替换图片集分页模板
function mReplaceMorePagetemp($temp,$rstr,$sdh,$select,$titleselect,$showpic,$listpage){
	$temp=str_replace("[!--photor--]",$rstr,$temp);
	$temp=str_replace("[!--smalldh--]",$sdh,$temp);
	$temp=str_replace("[!--select--]",$select,$temp);
	$temp=str_replace("[!--titleselect--]",$titleselect,$temp);
	$temp=str_replace("[!--listpage--]",$listpage,$temp);
	$temp=str_replace("<!--list.var1-->",$showpic,$temp);
	return $temp;
}

//替换图片集listvar模板
function mReplaceMorePagelistvar($temp,$picname,$picurl){
	$temp=str_replace("[!--picname--]",$picname,$temp);
	$temp=str_replace("[!--picurl--]",$picurl,$temp);
	return $temp;
}

//输出复选框字段内容
function msys_EchoCheckboxFValue($f,$exp='<br>'){
	global $navinfor;
	$r=explode('|',$navinfor[$f]);
	$count=count($r);
	for($i=1;$i<$count-1;$i++)
	{
		if($i==1)
		{
			$str.=$r[$i];
		}
		else
		{
			$str.=$exp.$r[$i];
		}
	}
	echo $str;
}

//评论调用
function msys_ShowPlInfo($line,$tempid,$classid=0,$id=0,$isgood=0,$enews=0){
	global $empire,$dbtbpre,$class_r,$public_r,$mob_r;
	$a="";
	if($isgood)
	{
		$a.=" and isgood='$isgood'";
	}
	if($classid)
	{
		if($class_r[$classid][islast])
		{
			$where="classid='$classid'";
		}
		else
		{
			$where=ReturnClass($class_r[$classid][sonclass]);
		}
		$a.=" and ".$where;
	}
	if($id)
	{
		$a.=" and id='$id'";
	}
	//排序
	if($enews==1)//支持
	{
		$order='zcnum desc,plid desc';
	}
	elseif($enews==2)//反对
	{
		$order='fdnum desc,plid desc';
	}
	else//发布时间
	{
		$order='plid desc';
	}
	//取得模板
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',dp_mindexurl(),$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',dp_mindexurl(),$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	$sql=$empire->query("select plid,userid,username,saytime,id,classid,zcnum,fdnum,saytext from {$dbtbpre}enewspl_".$public_r['pldeftb']." where checked=0".$a." order by ".$order." limit ".$line);
	while($r=$empire->fetch($sql))
	{
		//替换列表变量
		$repvar=ReplaceShowPlVars($no,$listvar,$r,$formatdate,$subnews);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
			$changerow=1;
			$string.=$listtext;
			$listtext=$list_r[1];
		}
		$no++;
	}
	//多余数据
    if($changerow<=$rownum&&$listtext<>$list_r[1])
	{
		$string.=$listtext;
    }
    $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

//替换评论标签
function mReplaceShowPlVars($no,$listtemp,$r,$formatdate,$subnews=0){
	global $public_r,$empire,$dbtbpre,$class_r;
	//标题
	$infor=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$r[classid]][tbname]." where id='$r[id]' limit 1");
	$r['saytext']=stripSlashes($r['saytext']);
	if($subnews)
	{
		$r['saytext']=sub($r['saytext'],0,$subnews,false);
	}
	if($r['userid'])
	{
		$r['username']="<a href='".$public_r[newsurl]."e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	if(empty($r['username']))
	{
		$r['username']='匿名';
	}
	$titleurl=sys_ReturnBqTitleLink($infor);
	$titleurl=indextomurl($titleurl,$r[classid]);
	$listtemp=str_replace("[!--titleurl--]",$titleurl,$listtemp);
	$listtemp=str_replace("[!--title--]",$infor['title'],$listtemp);
	$listtemp=str_replace("[!--plid--]",$r['plid'],$listtemp);
	$listtemp=str_replace("[!--pltext--]",RepPltextFace($r['saytext']),$listtemp);
	$listtemp=str_replace("[!--id--]",$r['id'],$listtemp);
	$listtemp=str_replace("[!--classid--]",$r['classid'],$listtemp);
	$listtemp=str_replace("[!--pltime--]",date($formatdate,$r['saytime']),$listtemp);
	$listtemp=str_replace("[!--username--]",$r['username'],$listtemp);
	$listtemp=str_replace("[!--zcnum--]",$r['zcnum'],$listtemp);
	$listtemp=str_replace("[!--fdnum--]",$r['fdnum'],$listtemp);
	//序号
	$listtemp=str_replace("[!--no--]",$no,$listtemp);
	return $listtemp;
}

//显示单个会员信息
function msys_ShowMemberInfo($userid=0,$fields=''){
	global $empire,$dbtbpre,$public_r,$navinfor,$level_r;
	if(empty($userid)&&$navinfor[ismember]==0)
	{
		return '';
	}
	if(!defined('InEmpireCMSUser'))
	{
		include_once ECMS_PATH.'e/member/class/user.php';
	}
	$uid=$userid?$userid:$navinfor[userid];
	$uid=(int)$uid;
	if(empty($fields))
	{
		$fields='u.*,ui.*';
	}
	$r=$empire->fetch1("select ".$fields." from ".eReturnMemberTable()." u LEFT JOIN {$dbtbpre}enewsmemberadd ui ON u.".egetmf('userid')."=ui.userid where u.".egetmf('userid')."='$uid' limit 1");
	$field_groupid=egetmf('groupid');
	$r['groupname']=$level_r[$r[$field_groupid]][groupname];//会员组
	return $r;
}

//调用会员列表
function msys_ListMemberInfo($line=10,$ecms=0,$groupid=0,$userids=0,$fields=''){
	global $empire,$dbtbpre,$public_r,$navinfor,$level_r;
	if(!defined('InEmpireCMSUser'))
	{
		include_once ECMS_PATH.'e/member/class/user.php';
	}
	//操作类型
	if($ecms==1)//积分排行
	{
		$order='u.'.egetmf('userfen').' desc';
	}
	elseif($ecms==2)//资金排行
	{
		$order='u.'.egetmf('money').' desc';
	}
	elseif($ecms==3)//空间人气排行
	{
		$order='ui.viewstats desc';
	}
	else//用户ID排行
	{
		$order='u.'.egetmf('userid').' desc';
	}
	$where='';
	if($groupid)
	{
		$where.=' and u.'.egetmf('groupid').' in ('.$groupid.')';
	}
	if($userids)
	{
		$where.=' and u.'.egetmf('userid').' in ('.$userids.')';
	}
	if(empty($fields))
	{
		$fields='u.*,ui.*';
	}
	$sql=$empire->query("select ".$fields." from ".eReturnMemberTable()." u LEFT JOIN {$dbtbpre}enewsmemberadd ui ON u.".egetmf('userid')."=ui.userid where u.".egetmf('checked')."=1".$where." order by ".$order." limit ".$line);
	return $sql;
}

?>