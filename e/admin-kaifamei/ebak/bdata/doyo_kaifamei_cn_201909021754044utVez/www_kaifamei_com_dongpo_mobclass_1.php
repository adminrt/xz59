<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_dongpo_mobclass`;");
E_C("CREATE TABLE `www_kaifamei_com_dongpo_mobclass` (
  `classid` int(10) unsigned NOT NULL,
  `listtempid` int(10) unsigned NOT NULL DEFAULT '0',
  `classtempid` int(10) unsigned NOT NULL DEFAULT '0',
  `newstempid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>