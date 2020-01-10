<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewslink`;");
E_C("CREATE TABLE `www_kaifamei_com_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewslink` values('1',0x6b616966616d6569e6ba90e7a081,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-15 22:12:53','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('2',0xe5b89de59bbd636d73e6ba90e7a081,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-15 22:13:03','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('3',0xe7bb9fe4b880e4b88be8bdbde7ab99,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:25:00','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('4',0xe7baa2e58ea8e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:25:17','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('5',0x425443313233e6ba90e7a081,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:25:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('6',0xe8b5a4e98193e993be,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:25:56','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('7',0xe6988ee6989fe7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:26:08','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('8',0x3037303733e9a1b5e6b8b8,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:26:22','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('9',0x373247e6898be6b8b8,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:26:37','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('10',0xe682a0e682a0e581a5e5bab7e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:26:50','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('11',0xe4ba91e68e8ce8b4a2e7bb8fe6ba90e7a081,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:27:02','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('12',0xe89684e88db7e581a5e5bab7e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:27:14','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('13',0x39317564e5b08fe7a88be5ba8fe6ba90e7a081,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:27:32','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('14',0xe5bc80e6b798e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:27:43','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('15',0x495442656172e7a791e68a80e8b584e8aeaf,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:28:55','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('16',0xe99293e9b1bce4baba,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:29:18','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('17',0xe5baa6e593a5e4b896e7958ce4b98be69c80,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:29:31','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('18',0xe799bee68898e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:29:43','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('19',0xe5878fe882a5e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:29:53','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('20',0xe696b0e78988e4b89ce696b9e5a4b4e69da1,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:30:05','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('21',0xe8b4a2e7bb8f333635,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:30:16','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('22',0xe7acace4b880505054,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:30:26','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('23',0xe589a7e68385e590a7,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:30:35','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('24',0xe8b685e4babae8bdafe4bbb6,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:30:46','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('25',0xe885bee7899be581a5e5bab7e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:00','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('26',0xe781abe6989fe8b4a2e7bb8f,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:11','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('27',0xe4bc98e6b8b8e7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:21','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('28',0xe7aea1e79086e8b584e6ba90e590a7,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('29',0xe4bbbfe7b3bbe7bb9fe4b98be5aeb6,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('30',0xe69c80e696b0e4bbbf426974636f696e3836,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('31',0xe68ea2e7a798e5bf97,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('32',0xe597a8e5aea2e6898be69cbae7ab99,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('33',0xe7bbbfe88cb6e8bdafe4bbb6e59bad,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('34',0xe585abe5ae9de7bd91,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-11-16 14:31:30','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_kaifamei_com_enewslink` values('35',0xe5a5b3e4babae8afb4,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-12-08 15:16:04','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `www_kaifamei_com_enewslink` values('36',0x5850e7b3bbe7bb9fe4b98be5aeb6,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-12-08 15:17:42','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `www_kaifamei_com_enewslink` values('37',0xe79c8be5a587e997bb,'',0x68747470733a2f2f7777772e6b616966616d65692e636f6d,'2018-12-08 15:17:55','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");

@include("../../inc/footer.php");
?>