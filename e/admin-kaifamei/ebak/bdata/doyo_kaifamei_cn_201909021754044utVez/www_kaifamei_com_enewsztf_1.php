<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsztf`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsztf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsztf` values('1',0x7a7473656f7469746c65,0x53454fe6a087e9a298,0x74657874,0x0d0a3c696e707574206e616d653d5c227a7473656f7469746c655c2220747970653d5c22746578745c222069643d5c227a7473656f7469746c655c222076616c75653d5c223c3f3d2465636d736669727374706f73743d3d313f5c225c223a6568746d6c7370656369616c63686172732824616464725b7a7473656f7469746c655d293f3e5c222073697a653d5c2239305c223e0d0a,'','0',0x56415243484152,0x323535,'',0x3930);");

@include("../../inc/footer.php");
?>