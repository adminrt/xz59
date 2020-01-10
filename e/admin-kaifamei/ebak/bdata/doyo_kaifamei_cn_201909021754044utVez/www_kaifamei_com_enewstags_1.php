<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewstags`;");
E_C("CREATE TABLE `www_kaifamei_com_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagtitle` char(60) NOT NULL DEFAULT '',
  `tagkey` char(100) NOT NULL DEFAULT '',
  `tagdes` char(255) NOT NULL DEFAULT '',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewstags` values('1',0xe4bb99e4bea0,'347','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('2',0xe8a792e889b2,'717','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('3',0x4d4d4f,'85','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('4',0xe594afe7be8e,'88','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('5',0xe9ad94e5b9bb,'92','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('6',0xe58692e999a9,'852','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('7',0xe58d8ee4b8bd,'397','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('8',0xe7bb8fe585b8,'555','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('9',0xe6a8aae78988,'30','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('10',0xe7ab9ee68a80,'307','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('11',0xe58da1e9809a,'184','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('12',0xe6a8a1e68b9f,'114','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('13',0xe4bfaee4bb99,'261','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('14',0xe5b084e587bb,'57','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('15',0xe8b59be8bda6,'17','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('16',0xe58aa8e6bcab,'15','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('17',0xe5a587e8bfb9,'18','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('18',0xe4bca0e5a587,'156','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('19',0xe78e84e5b9bb,'131','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('20',0xe6ada6e4bea0,'71','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('21',0xe59b9ee59088,'72','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('22',0xe8b6b3e79083,'8','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('23',0xe4bc91e997b2,'255','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('24',0xe6909ee7ac91,'20','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('25',0xe7a59ee8af9d,'83','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('26',0x3344,'140','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('27',0xe79b8ae699ba,'65','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('28',0xe68c82e69cba,'50','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('29',0xe4b889e59bbd,'86','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('30',0xe7ad96e795a5,'277','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('31',0xe68898e4ba89,'102','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('32',0xe585bbe68890,'65','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('33',0xe58699e5ae9e,'37','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('34',0xe58aa8e4bd9c,'106','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('35',0xe7abafe6b8b8,'27','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('36',0xe59bbde68898,'22','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('37',0xe7949fe5ad98,'67','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('38',0xe69a97e9bb91,'17','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('39',0xe6a0bce69697,'19','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('40',0xe8a197e69cba,'12','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('41',0xe58da1e7898c,'57','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('42',0xe99fb3e4b990,'55','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('43',0xe5b08fe8afb4,'25','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('44',0xe694bee7bdae,'33','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('45',0xe4ba8ce6aca1e58583,'38','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('46',0xe7bd91e69893,'5','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('47',0xe6b299e79b92,'13','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('48',0xe5b08fe6b8b8e6888f,'42','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('49',0xe68da2e8a385,'7','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('50',0xe6aca7e7be8e,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('51',0xe5a194e998b2,'12','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('52',0xe7a791e5b9bb,'19','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('53',0xe69eaae68898,'2','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('54',0xe5b9bbe683b3,'13','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('55',0xe59da6e5858b,'7','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('56',0x4d4f4241,'6','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('57',0xe885bee8aeaf,'2','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('58',0xe68898e6a38b,'4','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('59',0xe7ab96e78988,'2','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('60',0x726f6775656c696b65,'5','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('61',0xe59e83e59cbee58886e7b1bb,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('62',0xe794b5e8a786,'11','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('63',0xe4b999e5a5b3,'5','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('64',0xe6b5b7e68898,'3','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('65',0xe98d90e68e97e6ab93,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('66',0xe6b787ee86bbe7b2b0,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('67',0xe98d97e5ba9de99984,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('68',0xe5a8b4e9948be59eac,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('69',0xe6bf89e69788e6a7bb,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('70',0xe5a6afe28483e5ab99,'1','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('71',0xe7afaee79083,'2','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('72',0xe8a5bfe6b8b8,'12','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('73',0xe681b6e6909e,'2','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('74',0xe5a5b3e680a7e59091,'3','0','0','','','','0');");
E_D("replace into `www_kaifamei_com_enewstags` values('75',0xe69697e59cb0e4b8bb,'0','0','0','','','','1567391693');");

@include("../../inc/footer.php");
?>