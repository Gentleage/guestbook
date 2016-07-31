# Host: localhost  (Version: 5.5.47)
# Date: 2016-07-31 22:29:29
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "guestbook"
#

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言编号',
  `title` varchar(200) COLLATE gbk_bin NOT NULL DEFAULT '' COMMENT '留言主题',
  `content` varchar(400) COLLATE gbk_bin NOT NULL DEFAULT '' COMMENT '留言内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COLLATE=gbk_bin COMMENT='留言信息表';

#
# Data for table "guestbook"
#

/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;
