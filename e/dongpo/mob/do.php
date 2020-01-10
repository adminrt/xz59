<?php
define('EmpireCMSAdmin','1');
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../class/functions.php');
require('../../data/dbcache/class.php');
require('dp_funs.php');
require("dp_other.php");
require('dp_extend.php');
require('dp_version.php');
require('config.php');
$link=db_connect();
$empire=new mysqlquery();
hReturnDPRHash();

$enews=$_POST['enews'];
if(empty($enews))
{
	$enews=$_GET['enews'];
}

if($enews=='setmoreclass'){
	dp_SetMoreClass($_POST);
}
elseif($enews=='cleartemp'){
	dp_GetClass(1);
}
elseif($enews=='setextend'){
	dp_SetExtend($_POST);
}
else
{
	exit();
}

db_close();
$empire=null;
?>