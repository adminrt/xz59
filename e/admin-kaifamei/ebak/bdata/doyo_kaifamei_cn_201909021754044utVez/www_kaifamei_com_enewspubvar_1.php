<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewspubvar`;");
E_C("CREATE TABLE `www_kaifamei_com_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewspubvar` values('1',0x7777775f6b616966616d65695f636f6d5f6d,0xe6898be69cbae59f9fe5908d,0x687474703a2f2f6d2d646f796f2e6b616966616d65692e636e,'','0','0','1');");
E_D("replace into `www_kaifamei_com_enewspubvar` values('2',0x7777775f6b616966616d65695f636f6d5f6e616d65,0xe7bd91e7ab99e5908de7a7b0,0xe4bbbfe98097e6b8b8e7bd91,'','0','0','1');");
E_D("replace into `www_kaifamei_com_enewspubvar` values('3',0x7777775f6b616966616d65695f636f6d5f777777,0xe794b5e88491e59f9fe5908d,0x687474703a2f2f646f796f2e6b616966616d65692e636e,'','0','0','1');");
E_D("replace into `www_kaifamei_com_enewspubvar` values('4',0x7777775f6b616966616d65695f636f6d5f746f6e676a69,0xe7bd91e7ab99e7bb9fe8aea1,'','','0','0','1');");
E_D("replace into `www_kaifamei_com_enewspubvar` values('5',0x7777775f6b616966616d65695f636f6d5f7171,0x5151e58fb7,0x323038313135333635,'','0','0','1');");
E_D("replace into `www_kaifamei_com_enewspubvar` values('6',0x7777775f6b616966616d65695f636f6d5f626569616e,0xe5a487e6a188e58fb7,0xe6b998494350e5a4873138303232313838e58fb7,'','0','0','1');");

@include("../../inc/footer.php");
?>