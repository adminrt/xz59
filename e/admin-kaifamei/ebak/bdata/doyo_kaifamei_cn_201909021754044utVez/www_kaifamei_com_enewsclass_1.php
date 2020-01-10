<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsclass`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsclass` values('1','0',0xe6898be69cbae6b8b8e6888f,'','0','30','10','10','0','9','','1',0x67616d65,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','9','1','10',0xe6898be69cbae6b8b8e6888f,'0','0','9',0x67616d65,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1800','1800','1567313019','0','','0','1567336773');");
E_D("replace into `www_kaifamei_com_enewsclass` values('2','0',0xe6898be69cbae8bdafe4bbb6,'','0','30','10','11','0','10','','1',0x736f6674,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','10','1','10',0xe6898be69cbae8bdafe4bbb6,'0','0','10',0x617070,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1399','1399','1567313019','0','','0','1567336781');");
E_D("replace into `www_kaifamei_com_enewsclass` values('3','0',0xe696b0e997bbe8b584e8aeaf,'','0','25','10','1','0','1','','1',0x6e657773,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe696b0e997bbe8b584e8aeaf,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','735','735','1567313019','0','','0','1567313019');");
E_D("replace into `www_kaifamei_com_enewsclass` values('4','0',0xe4b893e9a298e59088e99b86,0x7c,'0','25','10','1','0','1','','0',0x7a6875616e7469,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe4b893e9a298e59088e99b86,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','8','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567313020','0','','0','1567331771');");
E_D("replace into `www_kaifamei_com_enewsclass` values('5','0',0xe68e92e8a18ce6a69c,0x7c,'0','25','10','1','0','11','','0',0x72616e6b,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','0','10','10','10','','0','0','','10','1','1','10',0xe68e92e8a18ce6a69c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567313020','0','','0','1567329863');");
E_D("replace into `www_kaifamei_com_enewsclass` values('6','5',0xe6898be6b8b8e68e92e8a18ce6a69c,0x7c,'0','25','10','0','0','11',0x7c357c,'0',0x72616e6b2f67616d65,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe6898be6b8b8e68e92e8a18ce6a69c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567329929','0','','0','1567329929');");
E_D("replace into `www_kaifamei_com_enewsclass` values('7','5',0xe6898be6b8b8e68ea8e88d90e6a69c,0x7c,'0','25','10','0','0','11',0x7c357c,'0',0x72616e6b2f6867616d65,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe6898be6b8b8e68ea8e88d90e6a69c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','5','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567330216','0','','0','1567330216');");
E_D("replace into `www_kaifamei_com_enewsclass` values('8','5',0xe8bdafe4bbb6e68e92e8a18ce6a69c,0x7c,'0','25','10','0','0','11',0x7c357c,'0',0x72616e6b2f736f6674,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8bdafe4bbb6e68e92e8a18ce6a69c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','6','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567330256','0','','0','1567330329');");
E_D("replace into `www_kaifamei_com_enewsclass` values('9','5',0xe8bdafe4bbb6e68ea8e88d90e6a69c,0x7c,'0','25','10','0','0','11',0x7c357c,'0',0x72616e6b2f68736f6674,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8bdafe4bbb6e68ea8e88d90e6a69c,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','11','7','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1567330362','0','','0','1567330362');");

@include("../../inc/footer.php");
?>