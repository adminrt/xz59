<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//�汾
require_once ECMS_PATH.'e/class/EmpireCMS_version.php';
$version=EmpireCMS_VERSION;
$version=floatval($version)*10;
$dbchar=$version>66?$ecms_config['db']['dbchar']:$phome_db_dbchar;
$pagechar=$version>66?$ecms_config['sets']['pagechar']:$phome_ecms_charver;

?>