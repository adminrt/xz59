<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewszt`;");
E_C("CREATE TABLE `www_kaifamei_com_enewszt` (
  `ztid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ztname` varchar(60) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `ztnum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ztpath` varchar(255) NOT NULL DEFAULT '',
  `zttype` varchar(10) NOT NULL DEFAULT '',
  `zturl` varchar(200) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `ztimg` varchar(255) NOT NULL DEFAULT '',
  `zcid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `showzt` tinyint(1) NOT NULL DEFAULT '0',
  `ztpagekey` varchar(255) NOT NULL DEFAULT '',
  `classtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `usezt` tinyint(1) NOT NULL DEFAULT '0',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `usernames` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `pltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ztid`),
  KEY `classid` (`classid`),
  KEY `zcid` (`zcid`),
  KEY `usezt` (`usezt`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewszt` values('1',0xe68898e4ba89e6b8b8e6888f,'0','12','16',0x7a6875616e74692f7a68616e7a68656e67,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe68898e4ba89e6b8b8e6888fe698afe7bb8fe585b8e79a84e6b8b8e6888fe4b8bbe9a298efbc8ce68898e4ba89e6898be6b8b8e4b880e888ace4b8bbe8a681e79a84e78ea9e6b395e698afe7ad96e795a5e38081e59bbde68898e38081736c67e38081e58da1e7898ce7ad89e7ad89efbc8ce8bf99e4ba9be78ea9e6b395e6b7b1e58f97e78ea9e5aeb6e5969ce788b1efbc8ce59ca8e6b8b8e6888fe4b8ade69da5e4b880e59cbae985a3e79585e6b78be6bc93e79a84e68898e4ba89e58d81e58886e788bde5bfabefbc8ce68898e4ba89e6898be6b8b8e6af94e8be83e88083e9aa8ce78ea9e5aeb6e79a84e7ad96e795a5e690ade9858de883bde58a9befbc8ce8b083e585b5e981a3e5b086e983bde698afe4b880e997a8e889bae69cafefbc8ce5a682e69e9ce5969ce6aca2e8bf99e7a78de7a19de7839fe4b88ee68898e781abefbc8ce982a3e4b988e68898e4ba89e6898be6b8b8e698afe69c80e4bdb3e79a84e98089e68ba9efbc81,0x2f642f66696c652f702f323031392f30392d30312f32633739366239356436393635663236633131643934363038373561653663612e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567345788','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('2',0xe6b299e79b92e6b8b8e6888f,'0','12','16',0x7a6875616e74692f7368616865,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe6b299e79b92e7b1bbe59e8be6898be6b8b8e78bace789b9e79a84e9ad85e58a9be59ca8e4ba8ee68ba5e69c89e697a0e99990e58f91e5b195e79a84e58fafe883bde680a7efbc8ce78ea9e5aeb6e58fafe4bba5e59ca8e6b8b8e6888fe4b8ade58f91e68ca5e887aae5b7b1e79a84e6809de88083e5889be980a0e883bde58a9befbc8ce6b299e79b92e6898be6b8b8e4b880e888ace68ba5e69c89e5b9bfe99894e79a84e59cb0e59bbeefbc8ce5bcbae5a4a7e79a84e4baa4e4ba92e8aebee8aea1efbc8ce5908ce697b6e58c85e590abe4ba86e59084e7a78de6b8b8e6888fe58583e7b4a0efbc8ce58c85e68bace4bd86e4b88de99990e4ba8ee8a792e889b2e689aee6bc94e38081e58aa8e4bd9ce38081e5b084e587bbe38081e58692e999a9e7ad89e7ad89efbc8ce5889be980a0e680a7e698afe6b299e79b92e6898be6b8b8e79a84e69cace6ba90efbc8ce78bace4b880e697a0e4ba8ce79a84e5889be6848fe5b8a6e69da5e4ba86e697a0e99990e6b8b8e6888fe4b990e8b6a3e38082,0x2f642f66696c652f702f323031392f30392d30312f65316366336365653662363430333130303062313734633263313236343631372e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567346559','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('3',0x726f6775656c696b65e6b8b8e6888f,'0','12','16',0x7a6875616e74692f726f6775656c696b65,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0x726f6775656c696b65e6b8b8e6888fe79a84e9ad94e680a7e59ca8e4ba8ee6af8fe4b880e5b180e6b8b8e6888fe983bde58585e6bba1e4bd8de7bdaeefbc8c726f6775656c696b65e6898be6b8b8e585b7e69c89e99a8fe69cbae7949fe68890e79a84e59cb0e59bbee8a792e889b2e5b19ee680a7e7ad89e7ad89e789b9e5be81efbc8ce8808ce8bf99e7a78de99a8fe69cbae680a7e5b8a6e69da5e6af8fe4b880e6aca1e6b8b8e6888fe69caae79fa5e68ea2e7b4a2e79a84e4b990e8b6a3efbc8ce8bf99e7a78de78ea9e6b395e6b7b1e58f97e983a8e58886e78ea9e5aeb6e79a84e5969ce788b1efbc8ce5a682e69e9ce4bda0e5969ce5a5bde68c91e68898efbc8ce783ade788b1e68ea2e7b4a2e4b88ee58f91e78eb0efbc8ce982a3e4b988726f6775656c696b65e6b8b8e6888fe4bc9ae8aea9e4bda0e78ea9e5be97e6a0b9e69cace5819ce4b88de4b88be69da5efbc81,0x2f642f66696c652f702f323031392f30392d30312f33303036306566383738336536623337643766326333343234393962343934662e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347152','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('4',0xe5a5b3e680a7e59091e6b8b8e6888f,'0','12','16',0x7a6875616e74692f6e7678696e7869616e67,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe5a5b3e680a7e59091e6898be6b8b8e68ba5e69c89e7b2bee887b4e79a84e794bbe9a38eefbc8ce58d8ee4b8bde79a84e4babae8aebeefbc8ce7ad89e7ad89e58583e7b4a0e8aebee8aea1e983bde58d81e58886e688b3e4b8ade78ea9e5aeb6e79a84e5b091e5a5b3e5bf83efbc8ce5a5b3e680a7e59091e6b8b8e6888fe58c85e68bace4b999e5a5b3e38081e6ada3e5b8b8e59091e38081e5908ce680a7e59091e7ad89e7ad89efbc8ce4b88de7aea1e588b0e5ba95e698afe4bb80e4b9886370e59091e68896e88085e69c89e6b2a1e69c896370efbc8ce5a5b3e680a7e59091e6b8b8e6888fe79a84e7b2bee887b4e58d8ee4b8bde7a88be5baa6e4b880e888ace698afe585b6e4bb96e7b1bbe59e8be6b8b8e6888fe697a0e6b395e5819ae588b0e79a84efbc8ce9a29ce580bce6898de698afe5a5b3e680a7e59091e6b8b8e6888fe69c80e9878de8a681e79a84e4b880e782b9efbc8ce4b88de79fa5e98193e4bb8ae5a4a9e4bc9ae4b8bae8b081e5bf83e58aa8e591a2efbc9f,0x2f642f66696c652f702f323031392f30392d30312f36346338363333376438333730643838636534663565316332323664346439632e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347294','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('5',0xe69697e59cb0e4b8bb,'0','25','16',0x7a6875616e74692f646f7564697a6875,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe69697e59cb0e4b8bbe6b8b8e6888fe698afe4b880e7a78de7bab8e7898ce6b8b8e6888fefbc8ce5908ce697b6e698afe4b880e7a78de699bae58a9be4bd93e882b2e8bf90e58aa8e38082e9809ae5b8b8e69c89322d36e4babae8bf9be8a18ce6b8b8e6888fe38082e58db3e58886e4b8bae4ba8ce4babae38081e4b889e4babae38081e59b9be4babae38081e4ba94e4babae38081e585ade4babae69697e59cb0e4b8bbe38082e4bdbfe794a8312d34e589afe7898ce4b88de7ad89e38082e69697e59cb0e4b8bbe6b8b8e6888fe4b88de4bb85e883bde5a49fe5bc80e58f91e4babae79a84e6809de7bbb4efbc8ce8808ce4b894e994bbe782bce4babae79a84e5bf83e79086e7b4a0e8b4a8e38082e69697e59cb0e4b8bbe6b8b8e6888fe88081e5b091e79a86e5ae9cefbc8ce68890e4b8bae5b9bfe5a4a7e7bea4e4bc97e698afe7949fe6b4bbe4b8ade4b88de58fafe7bcbae5b091e79a84e4b880e9a1b9e5a8b1e4b990e9a1b9e79baee38082e99a8fe79d80e4babae4bbace699bae58a9be79a84e4b88de696ade68f90e58d87efbc8ce69697e59cb0e4b8bbe794b1e58e9fe5889de79a84e4b889e4b8aae4babae78ea9e4b880e589afe7898cefbc8ce98090e6b890e689a9,0x2f642f66696c652f702f323031392f30392d30312f34633936356437636633623063613531663062623033643531333230303639352e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347488','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('6',0xe9babbe5b086e6b8b8e6888f,'0','25','16',0x7a6875616e74692f6d616a69616e67,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe9babbe5b086e698afe6acbee5a8b1e4b990e4bc91e997b2e79a84e5a4a7e4bc97e6a38be7898ce6b8b8e6888fe38082e9babbe5b086e4b8bbe8a681e4b8bae59b9be4babae6b8b8e6888fefbc8ce99a8fe79d80e7a4bee4bc9ae79a84e8bf9be6ada5efbc8ce99a8fe79d80e8b68ae69da5e8b68ae5a49ae4babae79a84e5969ce5a5bdefbc8ce4ba8ce4babae9babbe5b086e5bc80e5a78be8b5b0e4b88ae4ba86e6b8b8e6888fe58fb0e99da2e38082e9babbe5b086e6b8b8e6888fe585b7e69c89e5be88e5bcbae79a84e8b6a3e591b3e680a7e38081e5a8b1e4b990e680a7e5928ce79b8ae699bae680a7efbc8ce59ba0e8808ce5be88e58f97e4babae4bbace79a84e5969ce788b1efbc8ce6b581e8a18ce5be88e5b9bfefbc8ce5bdb1e5938de5be88e5a4a7e380823230e5b9b4e4bba3e5889de69c9fefbc8ce9babbe5b086e7898ce4b88de4bb85e59ca8e4ba9ae6b4b2e79b9be8a18cefbc8ce8808ce4b894e8bf98e6b581e8a18ce6aca7e7be8ee38082,0x2f642f66696c652f702f323031392f30392d30312f66323665666332363438323032643038343031633133366239643633663961652e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347653','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('7',0xe4bc91e997b2e6b8b8e6888f,'0','12','16',0x7a6875616e74692f7869757869616e796f757869,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe59ca8e4bc97e5a49ae79a84e6b8b8e6888fe4b8adefbc8ce4bc91e997b2e7b1bbe6b8b8e6888fe58fafe4bba5e8afb4e698afe69c80e58f97e5a4a7e5aeb6e79a84e6aca2e8bf8ee4ba86e38082e4bc91e997b2e6b8b8e6888fe69cace8baabe4b88de4bb85e58da0e794a8e58685e5ad98e8be83e5b08fefbc8ce8808ce4b894e4b99fe698afe4babae4bbace697a0e8818ae697b6e5bf85e5a487e6b8b8e6888fe38082e4bc91e997b2e6b8b8e6888fe69c80e5aeb9e69893e8aea9e4babae78ea9e4b88de9878ae6898befbc8ce6b8b8e6888fe4b880e888ace6938de4bd9ce7ae80e58d95efbc8ce5b9b6e4b894e98082e59088e59084e4b8aae5b9b4e9be84e6aeb5e38082e5a5bde78ea9e79a84e4bc91e997b2e5b08fe6b8b8e6888fe68ea8e88d90e7bb99e5a4a7e5aeb6efbc8ce6849fe585b4e8b6a3e79a84e58fafe4bba5e69da5e4b88be8bdbde8af95e78ea9e38082,0x2f642f66696c652f702f323031392f30392d30312f32656662633530313133373130646135393938666665333839626164343930362e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347788','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('8',0xe7a59ee8af9de6b8b8e6888f,'0','12','16',0x7a6875616e74692f7368656e687561,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe7a59ee8af9de6b8b8e6888fe4b8ade69c89e59084e7a78de59084e6a0b7e79a84e7a59ee8af9de69585e4ba8befbc8ce8bf99e7a78de7b1bbe59e8be79a84e6b8b8e6888fe79a84e589a7e68385e698afe58d81e58886e4b8b0e5af8ce79a84efbc8ce6b8b8e6888fe4b8ade78ea9e5aeb6e883bde5928ce4b8bbe8a792e4bbace4b880e8b5b7e69da5e4bd93e9aa8ce6b8b8e6888fe79a84e589a7e68385e38082e59ca8e8bf99e7a78de7b1bbe59e8be6b8b8e6888fe4b8ade4bc9ae69c89e5b08fe8afb4e4b8ade79a84e5a4a7e88bb1e99b84efbc8ce4bb96e4bbace4bc9ae69c89e887aae5b7b1e594afe7be8ee8808ce58f88e6b5aae6bcabe788b1e68385e69585e4ba8be38082e7a59ee8af9de6b8b8e6888fe4b88be8bdbde5b0bde59ca8e7a59ee8af9de6b8b8e6888fe5a4a7e585a8e4b8ade38082,0x2f642f66696c652f702f323031392f30392d30312f34656632333365303136336461666165636134663833643532346135613133642e6a7067,'1','0','','1','0','0','0','0','0','0','1','','1567347910','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('9',0xe6898be69cbae694afe4bb98,'0','12','16',0x7a6875616e74692f7a68696675,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe4ba92e88194e7bd91e9a39ee9809fe58f91e5b195e697b6e4bba32ce6898be69cbae7a7bbe58aa8e694afe4bb98e4b99fe8b68ae69da5e8b68ae5b9bfe6b39befbc8ce587a0e4b98ee6b897e9808fe588b0e4ba86e7949fe6b4bbe59084e7a78de99c80e6b182efbc8ce6898be69cbae694afe4bb98e8bdafe4bbb6e69c89e593aae4ba9befbc9fe8baabe4b8ba3930e5908ee79a84e68891e4bbace6808ee883bd4f5554efbc8ce4b88be99da2e4b8bae5a4a7e5aeb6e68ea8e88d90e587a0e6acbee6898be69cbae694afe4bb98e8bdafe4bbb6e5b88ce69c9be5afb9e5a4a7e5aeb6e69c89e68980e5b8aee58aa9e38082,0x2f642f66696c652f702f323031392f30392d30312f35616232626665386431623562323139393161613139383366666233623261352e6a7067,'2','0','','1','0','0','0','0','0','0','1','','1567348302','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('10',0xe6898be69cbae8be93e585a5e6b395,'0','12','16',0x7a6875616e74692f73687572756661,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe6898be69cbae8be93e585a5e6b395e794a8e8b5b7e69da5e593aae4b8aae69bb4e9a1bae6898befbc9fe69bb4e98082e59088e4b8ade59bbde4babae4b9a0e683afefbc9fe8808ce4b894e58da0e58685e5ad98e5b08fefbc8ce58f8de5ba94e5bfabe38082e799bee5baa6efbc8ce6909ce78b97efbc8ce8aeafe9a39ee59084e69c89e58d83e7a78be38082e98097e6b8b8e7bd91e68ea8e88d90e4ba86e587a0e6acbee69c80e6b581e8a18ce79a84e4be9be59084e4bd8de4b88be8bdbde38082e78eb0e59ca8e8be93e585a5e6b395e58a9fe883bde8b68ae69da5e8b68ae5bcbae5a4a7efbc8ce58fafe4bba5e79bb4e68ea5e8aeb0e5bd95e4bda0e5b8b8e4bdbfe794a8e79a84e8af8de8afadefbc8ce5b9b6e4b894e8bf98e69c89e59084e7a78de696b0e9b29ce5a5bde78ea9e79a84e8a1a8e68385efbc8ce4b880e6acbee5a5bde79a84e8be93e585a5e6b395e79bb4e68ea5e5bdb1e5938de588b0e4bda0e79a84e68993e5ad97e9809fe5baa6e593a6e38082,0x2f642f66696c652f702f323031392f30392d30312f65383030306431613764343237653333396639386534323735336462623366332e6a7067,'2','0','','1','0','0','0','0','0','0','1','','1567348457','0');");
E_D("replace into `www_kaifamei_com_enewszt` values('11',0xe6898be69cbae6b58fe8a788e599a8,'0','25','16',0x7a6875616e74692f6c69756c616e7169,0x2e68746d6c,'','0','1','0',0x6e65777374696d652044455343,0xe68980e8b093e6898be69cbae6b58fe8a788e599a8efbc8ce698afe68c87e8bf90e8a18ce59ca8e6898be69cbae7ad89e7a7bbe58aa8e7bb88e7abafe4b88ae79a84e6b58fe8a788e599a8e8bdafe4bbb6efbc8ce58fafe4bba5e9809ae8bf87e8bf9ee68ea53247e7bd91e7bb9ce380813347e7bd91e7bb9ce3808157692d4669e697a0e7babfe7bd91e7bb9ce6b58fe8a788e4ba92e88194e7bd91e58685e5aeb9e38082e98097e6b8b8e7bd91e59ca8e7828ee7828ee5a48fe697a5e4b8bae5a4a7e5aeb6e5b8a6e69da5e79a84e6898be69cbae6b58fe8a788e599a8e4b893e9a298efbc8ce983bde698afe5b882e59cbae99da2e69c80e6b581e8a18ce79a84e587a0e6acbee7bb8fe585b8e6b58fe8a788e599a8e38082e8aea9e5a4a7e5aeb6e697a0e8aebae4bb8ee4b88ae7bd91e9809fe5baa6e8bf98e698afe6b58fe9878fe88a82e79c81e696b9e99da2e69c89e69bb4e585a8e696b9e4bd8de79a84e98089e68ba9efbc81,0x2f642f66696c652f702f323031392f30392d30312f34383030626532623165656465633036353534653234616639393431373138612e6a7067,'2','0','','1','0','0','0','0','0','0','1','','1567348549','0');");

@include("../../inc/footer.php");
?>