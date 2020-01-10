<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsad`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsad` values('1','','','1200','110','0','1','1',0xe9a696e9a1b5e5b9bfe5918ae4bd8d31,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a3131393870783b6865696768743a31303870783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f31e5b9bfe5918ae4bd8d2d313230302a3131302020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('2','','','1200','110','0','1','1',0xe9a696e9a1b5e5b9bfe5918ae4bd8d32,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a3131393870783b6865696768743a31303870783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f32e5b9bfe5918ae4bd8d2d313230302a3131302020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('3','','','1200','110','0','1','1',0xe9a696e9a1b5e5b9bfe5918ae4bd8d33,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a3131393870783b6865696768743a31303870783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f33e5b9bfe5918ae4bd8d2d313230302a3131302020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('4','','','292','250','0','1','1',0xe9a696e9a1b5e5b9bfe5918ae4bd8d34,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a32393070783b6865696768743a32343870783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f34e5b9bfe5918ae4bd8d2d3239322a3235302020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('5','','','326','286','0','1','1',0xe58685e5aeb9e9a1b5e58fb3e5b9bfe5918ae4bd8d,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a33323470783b6865696768743a32383470783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f35e5b9bfe5918ae4bd8d2d3332362a3238363c62723e2020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('6','','','326','286','0','1','1',0xe58685e5aeb9e9a1b5e58fb3e5b9bfe5918ae4bd8d32,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a33323470783b6865696768743a32383470783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f36e5b9bfe5918ae4bd8d2d3332362a3238363c62723e2020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");
E_D("replace into `www_kaifamei_com_enewsad` values('7','','','326','286','0','1','1',0xe58685e5aeb9e9a1b5e5b9bfe5918ae4bd8d33,'','','2019-09-01','2039-10-01','','','',0x3c646976207374796c653d2277696474683a33323470783b6865696768743a32383470783b6f766572666c6f773a68696464656e3b6d617267696e3a6175746f3b626f726465723a3170782023663630206461736865643b746578742d616c69676e3a63656e7465723b6261636b67726f756e643a236666663b20223e69645f37e5b9bfe5918ae4bd8d2d3332362a3238363c62723e2020e594afe4b880e5ae98e7bd91efbc9a3c6120687265663d2268747470733a2f2f7777772e4b616946614d65692e636f6d22207461726765743d225f626c616e6b22207374796c653d22636f6c6f723a236564323532663b223e7777772e4b616946614d65692e636f6d3c2f613e3c2f6469763e,'2','0','');");

@include("../../inc/footer.php");
?>