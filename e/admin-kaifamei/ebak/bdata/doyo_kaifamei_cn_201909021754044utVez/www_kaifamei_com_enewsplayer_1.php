<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsplayer`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsplayer` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `player` varchar(30) NOT NULL DEFAULT '',
  `filename` varchar(20) NOT NULL DEFAULT '',
  `bz` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsplayer` values('1',0x5265616c506c61796572,0x7265616c706c617965722e706870,0x5265616c506c61796572e692ade694bee599a8);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('2',0x4d65646961506c61796572,0x6d65646961706c617965722e706870,0x4d65646961506c61796572e692ade694bee599a8);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('3',0x464c415348,0x666c61736865722e706870,0x464c415348e692ade694bee599a8);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('4',0x464c56e692ade694bee599a8,0x666c7665722e706870,0x464c56e692ade694bee599a8);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('5',0x48544d4c35566964656f,0x68746d6c766964656f2e706870,0x48544d4c35e79a84766964656fe692ade694bee6a087e7adbe);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('6',0x4a57506c61796572,0x6a77706c617965722e706870,0x4a57506c61796572e692ade694bee599a8);");
E_D("replace into `www_kaifamei_com_enewsplayer` values('7',0x48544d4c35417564696f,0x68746d6c617564696f2e706870,0x48544d4c35e79a84617564696fe692ade694bee6a087e7adbe);");

@include("../../inc/footer.php");
?>