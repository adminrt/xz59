<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewssearch`;");
E_C("CREATE TABLE `www_kaifamei_com_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewssearch` values('1',0xe585a8e6b091,'1567337975',0x7469746c65,'2',0x3139322e3136382e302e313130,'','1',0x6e65777374696d65,'0',0x3537393735636239376331383932653163343163643962326635366630383965,0x617070,'2','0',0x20616e642028287469746c65204c494b45202725e585a8e6b09125272929,'0');");
E_D("replace into `www_kaifamei_com_enewssearch` values('2',0xe585a8e6b091,'1567338008',0x7469746c65,'12',0x3139322e3136382e302e313130,'','2',0x6e65777374696d65,'0',0x3563356532383139396130646365366336343964396638616638623565343430,0x67616d65,'1','0',0x20616e642028287469746c65204c494b45202725e585a8e6b09125272929,'0');");
E_D("replace into `www_kaifamei_com_enewssearch` values('3',0xe6898be6b8b8,'1567344266',0x7469746c65,'168',0x3139322e3136382e302e313130,'','2',0x6e65777374696d65,'0',0x3335313230633431313266326434346531643833643237663566666130323562,0x67616d65,'1','0',0x20616e642028287469746c65204c494b45202725e6898be6b8b825272929,'0');");
E_D("replace into `www_kaifamei_com_enewssearch` values('4',0xe6898be6b8b8,'1567344183',0x7469746c65,'122',0x3139322e3136382e302e313130,'','1',0x6e65777374696d65,'0',0x3637396166343437346263666339373830363635623835323165643365623963,0x6e657773,'3','0',0x20616e642028287469746c65204c494b45202725e6898be6b8b825272929,'0');");
E_D("replace into `www_kaifamei_com_enewssearch` values('5',0xe6898be6b8b8,'1567344279',0x7469746c65,'5',0x3139322e3136382e302e313130,'','1',0x6e65777374696d65,'0',0x3065366664643065393363663734336130613239663363323238336531656661,0x617070,'2','0',0x20616e642028287469746c65204c494b45202725e6898be6b8b825272929,'0');");

@include("../../inc/footer.php");
?>