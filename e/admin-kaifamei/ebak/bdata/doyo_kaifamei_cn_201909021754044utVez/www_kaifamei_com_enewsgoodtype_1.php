<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsgoodtype`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsgoodtype` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(60) NOT NULL DEFAULT '',
  `ttype` tinyint(1) NOT NULL DEFAULT '0',
  `levelid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `groupid` varchar(255) NOT NULL DEFAULT '',
  `showall` tinyint(1) NOT NULL DEFAULT '0',
  `showcid` text NOT NULL,
  `hiddencid` text NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `ttype` (`ttype`),
  KEY `levelid` (`levelid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('1',0xe4b880e7baa7e5a4b4e69da1,'1','1','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('2',0xe4ba8ce7baa7e5a4b4e69da1,'1','2','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('3',0xe4b889e7baa7e5a4b4e69da1,'1','3','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('4',0xe59b9be7baa7e5a4b4e69da1,'1','4','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('5',0xe4ba94e7baa7e5a4b4e69da1,'1','5','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('6',0xe585ade7baa7e5a4b4e69da1,'1','6','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('7',0xe4b883e7baa7e5a4b4e69da1,'1','7','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('8',0xe585abe7baa7e5a4b4e69da1,'1','8','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('9',0xe4b99de7baa7e5a4b4e69da1,'1','9','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('10',0xe4b880e7baa7e68ea8e88d90,'0','1','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('11',0xe4ba8ce7baa7e68ea8e88d90,'0','2','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('12',0xe4b889e7baa7e68ea8e88d90,'0','3','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('13',0xe59b9be7baa7e68ea8e88d90,'0','4','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('14',0xe4ba94e7baa7e68ea8e88d90,'0','5','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('15',0xe585ade7baa7e68ea8e88d90,'0','6','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('16',0xe4b883e7baa7e68ea8e88d90,'0','7','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('17',0xe585abe7baa7e68ea8e88d90,'0','8','0','','0','','');");
E_D("replace into `www_kaifamei_com_enewsgoodtype` values('18',0xe4b99de7baa7e68ea8e88d90,'0','9','0','','0','','');");

@include("../../inc/footer.php");
?>