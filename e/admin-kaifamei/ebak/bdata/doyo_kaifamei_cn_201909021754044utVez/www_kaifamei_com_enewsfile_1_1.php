<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsfile_1`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsfile_1` values('1','1000010000000086',0x66643932356166303966326335363935383231643435663266323637323334362e6a7067,'128950',0x323031392f30392d3031,0x6b616966616d6569,'1567345051','3',0x31333134313635346c6f30642e6a7067,'1','0','86','0','1','0');");
E_D("replace into `www_kaifamei_com_enewsfile_1` values('2','1000010000000654',0x34326536326138303532376661633161636635323239373333306262653863332e6a7067,'38381',0x323031392f30392d3031,0x6b616966616d6569,'1567345164','3',0x65616139383331356461323137623331376263623566313239623639373132612e6a7067,'1','0','654','0','1','0');");
E_D("replace into `www_kaifamei_com_enewsfile_1` values('3','1000010000000156',0x33366230303330633630656339353661366331313539363532323061323033342e6a7067,'83011',0x323031392f30392d3031,0x6b616966616d6569,'1567345325','3',0x30393039333435336d6a616b2e6a7067,'1','0','156','0','1','0');");
E_D("replace into `www_kaifamei_com_enewsfile_1` values('4','1000010000000585',0x66363133346361306361346636633661316239646562666463643866343230382e6a7067,'157452',0x323031392f30392d3031,0x6b616966616d6569,'1567345428','3',0x3131313635323331797168712e6a7067,'1','0','585','0','1','0');");
E_D("replace into `www_kaifamei_com_enewsfile_1` values('5','1000010000000570',0x32663731393834333164306163316430306566633238303664613033336366352e6a7067,'108528',0x323031392f30392d3031,0x6b616966616d6569,'1567345449','3',0x3132303932373230617a7a772e6a7067,'1','0','570','0','1','0');");

@include("../../inc/footer.php");
?>