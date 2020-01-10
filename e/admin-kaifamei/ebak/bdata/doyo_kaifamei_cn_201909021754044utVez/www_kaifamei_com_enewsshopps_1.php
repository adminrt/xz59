<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsshopps`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsshopps` (
  `pid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(60) NOT NULL DEFAULT '',
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `otherprice` text NOT NULL,
  `psay` text NOT NULL,
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsshopps` values('1',0xe98081e8b4a7e4b88ae997a8,'10.00','',0xe98081e8b4a7e4b88ae997a8,'0','0');");
E_D("replace into `www_kaifamei_com_enewsshopps` values('2',0xe789b9e5bfabe4b893e98092efbc88454d53efbc89,'25.00','',0xe789b9e5bfabe4b893e98092efbc88454d53efbc89,'0','0');");
E_D("replace into `www_kaifamei_com_enewsshopps` values('3',0xe699aee9809ae982aee98092,'5.00','',0xe699aee9809ae982aee98092,'0','1');");
E_D("replace into `www_kaifamei_com_enewsshopps` values('4',0xe982aee5b180e5bfabe982ae,'12.00','',0xe982aee5b180e5bfabe982ae,'0','0');");

@include("../../inc/footer.php");
?>