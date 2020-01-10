<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsingroup`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsingroup` (
  `gid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `gname` char(60) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>