# Host: localhost  (Version: 5.5.47)
# Date: 2016-07-31 18:16:04
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "guestbook"
#

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '���Ա��',
  `title` varchar(200) COLLATE gbk_bin NOT NULL DEFAULT '' COMMENT '��������',
  `content` varchar(400) COLLATE gbk_bin NOT NULL DEFAULT '' COMMENT '��������',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COLLATE=gbk_bin COMMENT='������Ϣ��';

#
# Data for table "guestbook"
#

/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
INSERT INTO `guestbook` VALUES (1,'我是阿三','阿帅啊hand那还�');
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;
