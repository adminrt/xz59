<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_ecms_game_check`;");
E_C("CREATE TABLE `www_kaifamei_com_ecms_game_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL DEFAULT '',
  `typei` varchar(255) NOT NULL DEFAULT '',
  `size` varchar(255) NOT NULL DEFAULT '',
  `morepic` mediumtext NOT NULL,
  `bb` varchar(255) NOT NULL DEFAULT '',
  `xtyq` varchar(255) NOT NULL DEFAULT '',
  `yy` varchar(255) NOT NULL DEFAULT '',
  `kfs` varchar(255) NOT NULL DEFAULT '',
  `yjh` varchar(255) NOT NULL DEFAULT '',
  `qx` varchar(255) NOT NULL DEFAULT '',
  `downurl` varchar(255) NOT NULL DEFAULT '',
  `downurli` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=1878 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_ecms_game_check` values('630','1','0','924','0','0','',0x363330,'1',0x6b616966616d6569,'0','0','1','0','0','0','0','1567336184','1575271348','1','0','0','',0x2f67616d652f3633302e68746d6c,'1','1','1','',0xe98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e5a893e5918ae59e99,'1567333581',0x2f642f66696c652f7469746c657069632f32303139303930312f6d316771337261357167622e6a7067,'0','',0xe98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e98f84ee8899e7abb4e5a886e683a7e58f8fe98f82e69dbfe6b597e6a48be5baa1ee9a8ce9aa9ee5a99aee9793e98f8de882a9e6ae91e98eb5e5acabe788b6e9949be5b1bde5b495e6b693e7958ce6ae91e5a893e5918ae59e99e98da6e78398e6ab99e9949be5b1bde6869fe9909ce69dbfe59aade6b787ee86bbe7b2b0e6b693e6a0abe699abe990a8e58bade6b493e6b693e6a0abe7ae92e98d97e5baafe7b49de98eade388a0e795afe690b4e782b2e38187e990a8e58baae7ac98e990a3e5b283ee9d87e9949be5b283e59a9ce990a2e8bea9e6ae91e98d90e68e97e6ab93e9949be5b1bce7b68be6a5a0e5b283e7b996e6b693ee8186e5abade99097e59cade6ae91e6b693e6a0abe699abe9949be5b1bde68bb0e6bf82e89789e5bcb8e6b693e282ace792a7e5b3b0e88b9fe991b2e29580e7b694e98eb4e6a988e7b49de6b693e282ace792a7e9a38ee584b9e7909be282ace98eb4e6a8bbe69e9fe98a86e5829ee6aab7e6b5bc3f2f3e20202020202020203c6d65746120687474702d65717569763d,'0','','','',0x2f642f66696c652f7469746c657069632f32303139303930312f6e357576326362666234322e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f6e357576326362666234322e6a70673a3a3a3a3a3ae98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e5a893e5918ae59e990d0a2f642f66696c652f7469746c657069632f32303139303930312f70656e7965797464316d6a2e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f70656e7965797464316d6a2e6a70673a3a3a3a3a3ae98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e5a893e5918ae59e990d0a2f642f66696c652f7469746c657069632f32303139303930312f70336275796e7a6a3478762e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f70336275796e7a6a3478762e6a70673a3a3a3a3a3ae98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e5a893e5918ae59e990d0a2f642f66696c652f7469746c657069632f32303139303930312f79696c753174356e6534692e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f79696c753174356e6534692e6a70673a3a3a3a3a3ae98d92e282ace98d93e688a0e6aba8e6a59de889b0ee9491e5a893e5918ae59e99,'','',0xe4b8ade69687,'','',0x3c7370616e20636c6173733d5c226e65745c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee99787e282ace79195e4bdbae7b689e7bc813f2f7370616e3e3c7370616e20636c6173733d5c22667265655c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee98d8fe5b688e59e823c2f7370616e3e3c7370616e20636c6173733d5c22676f6f676c655c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee98f83e78abbe6b8b6e7928be9948be79395e794afe5829ae6ba803c2f7370616e3e,0x68747470733a2f2f646f776e616c692e67616d652e75632e636e2f732f332f332f32303138303132393138303230333237373636395f616c6967616d65732e61706b3f782d6f73732d70726f636573733d7564662f75632d61706b2c5a424844684452304c6c786953734b3477704c436e673d3d63646464316431613334396663643733266469643d6638623266656161653631353434353038653361666331323230626638663566,'');");
E_D("replace into `www_kaifamei_com_ecms_game_check` values('655','1','0','794','0','0','',0x363535,'1',0x6b616966616d6569,'0','0','1','0','0','0','0','1567336190','1575271359','1','0','0','',0x2f67616d652f3635352e68746d6c,'1','1','1','',0xe98f80e8afb2e7898ee6a5a6e280b3e58fba,'1567333582',0x2f642f66696c652f7469746c657069632f32303139303930312f31767169317873776e35782e706e67,'0','',0xe98a86e5a983e695bee98dabefbfa0e6b5aee98d8fe782b9e282ace5acabe6a7b8e6b693e282ace5a886e683a7e5b484e98d92e59798e6b981e98d92e6b699e589b0e990a8e58babee9499e99783e88cace8a2abe5a893e5918ae59e99e9949be5b1bee788b6e98eb4e5bf8ee7ac82e98eb5e5acaae5b484e98d92e59797ee8690e98f84e69384e7b49de5a893e5918ae59e99e6b693ee85a0e5b8bae780b9e683b0ee9ba6e98da6e384a8e59a9ce5aeb8e8bea9e6ae91e99783e99d9be6b9b4e99783e7bb98e5b085e994a0e388a3e68293e994a0e388a3e68293e990a8e58babe79aace6a5a6e280b2e7b2a9e990a8e58baee7b998e98f80e4bc99e7b49de5a893e5918ae59e99e6b693e5b684e7b28ee98d99ee8899e4ba92e98d8fe384a7e296bc333630e68eb3e69d9eee8483ee9d8be79199e68e95e7b995e996b2e59ba9e695a4e98d97e4bdb8e59e8ee99099ee8482e5a392e98f88e5a48ee58faee990a8e58bade5a2bfe9909ee59797e7b4a9e98ebfe5baa2e6bdb5e5a6af3f2f3e20202020202020203c6d65746120687474702d65717569763d,'0','','','',0x2f642f66696c652f7469746c657069632f32303139303930312f6b70717230786e7066686e2e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f6b70717230786e7066686e2e6a70673a3a3a3a3a3ae98f80e8afb2e7898ee6a5a6e280b3e58fba0d0a2f642f66696c652f7469746c657069632f32303139303930312f776d7a776e6c77663134722e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f776d7a776e6c77663134722e6a70673a3a3a3a3a3ae98f80e8afb2e7898ee6a5a6e280b3e58fba0d0a2f642f66696c652f7469746c657069632f32303139303930312f686b687934716e346470302e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f686b687934716e346470302e6a70673a3a3a3a3a3ae98f80e8afb2e7898ee6a5a6e280b3e58fba0d0a2f642f66696c652f7469746c657069632f32303139303930312f756e687a64736d676576762e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f756e687a64736d676576762e6a70673a3a3a3a3a3ae98f80e8afb2e7898ee6a5a6e280b3e58fba0d0a2f642f66696c652f7469746c657069632f32303139303930312f77633066687a72697571312e6a70673a3a3a3a3a3a2f642f66696c652f7469746c657069632f32303139303930312f77633066687a72697571312e6a70673a3a3a3a3a3ae98f80e8afb2e7898ee6a5a6e280b3e58fba,'','',0xe4b8ade69687,'','',0x3c7370616e20636c6173733d5c226e65745c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee99787e282ace79195e4bdbae7b689e7bc813f2f7370616e3e3c7370616e20636c6173733d5c22667265655c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee98d8fe5b688e59e823c2f7370616e3e3c7370616e20636c6173733d5c22676f6f676c655c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693ee98f83e78abbe6b8b6e7928be9948be79395e794afe5829ae6ba803c2f7370616e3e,'','');");

@include("../../inc/footer.php");
?>