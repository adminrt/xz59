<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsadminstyle`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsadminstyle` (
  `styleid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `stylename` char(30) NOT NULL DEFAULT '',
  `path` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsadminstyle` values('1',0xe7aea1e79086e59198e5908ee58fb0e7958ce99da2,'1','1');");
E_D("replace into `www_kaifamei_com_enewsadminstyle` values('2',0xe7bc96e8be91e5908ee58fb0e7958ce99da2,'2','0');");

@include("../../inc/footer.php");
?>