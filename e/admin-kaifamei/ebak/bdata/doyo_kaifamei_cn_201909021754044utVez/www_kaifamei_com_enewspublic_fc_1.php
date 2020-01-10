<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewspublic_fc`;");
E_C("CREATE TABLE `www_kaifamei_com_enewspublic_fc` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `fclastindex` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewspublic_fc` values('1','1567392261');");

@include("../../inc/footer.php");
?>