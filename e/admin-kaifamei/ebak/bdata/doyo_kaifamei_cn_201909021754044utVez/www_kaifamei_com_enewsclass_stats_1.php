<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsclass_stats`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsclass_stats` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  `pvall` int(10) unsigned NOT NULL DEFAULT '0',
  `pvyear` int(10) unsigned NOT NULL DEFAULT '0',
  `pvhalfyear` int(10) unsigned NOT NULL DEFAULT '0',
  `pvquarter` int(10) unsigned NOT NULL DEFAULT '0',
  `pvmonth` int(10) unsigned NOT NULL DEFAULT '0',
  `pvweek` int(10) unsigned NOT NULL DEFAULT '0',
  `pvday` int(10) unsigned NOT NULL DEFAULT '0',
  `pvyesterday` int(10) unsigned NOT NULL DEFAULT '0',
  `ipall` int(10) unsigned NOT NULL DEFAULT '0',
  `ipyear` int(10) unsigned NOT NULL DEFAULT '0',
  `iphalfyear` int(10) unsigned NOT NULL DEFAULT '0',
  `ipquarter` int(10) unsigned NOT NULL DEFAULT '0',
  `ipmonth` int(10) unsigned NOT NULL DEFAULT '0',
  `ipweek` int(10) unsigned NOT NULL DEFAULT '0',
  `ipday` int(10) unsigned NOT NULL DEFAULT '0',
  `ipyesterday` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('2','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('3','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('4','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('5','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('6','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('7','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('8','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `www_kaifamei_com_enewsclass_stats` values('9','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");

@include("../../inc/footer.php");
?>