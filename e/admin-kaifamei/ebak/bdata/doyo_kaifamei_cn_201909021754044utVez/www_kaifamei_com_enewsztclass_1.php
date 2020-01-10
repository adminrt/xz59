<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsztclass`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsztclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsztclass` values('1',0xe6b8b8e6888fe4b893e9a298);");
E_D("replace into `www_kaifamei_com_enewsztclass` values('2',0xe5ba94e794a8e4b893e9a298);");

@include("../../inc/footer.php");
?>