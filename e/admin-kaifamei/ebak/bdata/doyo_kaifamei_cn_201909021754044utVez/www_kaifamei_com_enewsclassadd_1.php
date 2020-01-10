<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsclassadd`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `eclasspagetext` mediumtext NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('1','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('2','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('3','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('4','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('5','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('6','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('7','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('8','','','');");
E_D("replace into `www_kaifamei_com_enewsclassadd` values('9','','','');");

@include("../../inc/footer.php");
?>