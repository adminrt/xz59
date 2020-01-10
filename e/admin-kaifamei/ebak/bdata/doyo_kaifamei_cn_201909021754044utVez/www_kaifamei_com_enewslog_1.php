<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewslog`;");
E_C("CREATE TABLE `www_kaifamei_com_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewslog` values('1',0x6b616966616d6569,'2019-09-01 12:41:20',0x3139322e3136382e302e313130,'1','','0',0x3535333330);");
E_D("replace into `www_kaifamei_com_enewslog` values('2',0x6b616966616d6569,'2019-09-01 21:15:24',0x3139322e3136382e302e313130,'1','','0',0x3533343833);");
E_D("replace into `www_kaifamei_com_enewslog` values('3',0x6b616966616d6569,'2019-09-02 00:57:17',0x3139322e3136382e302e313130,'1','','0',0x3533323931);");
E_D("replace into `www_kaifamei_com_enewslog` values('4',0x6b616966616d6569,'2019-09-02 10:18:49',0x3139322e3136382e302e313130,'1','','0',0x3530303831);");
E_D("replace into `www_kaifamei_com_enewslog` values('5',0x6b616966616d6569,'2019-09-02 15:11:15',0x3139322e3136382e302e313130,'1','','0',0x3630373636);");

@include("../../inc/footer.php");
?>