-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.53 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 shang 的数据库结构
CREATE DATABASE IF NOT EXISTS `shang` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shang`;

-- 导出  表 shang.admin_user 结构
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `admin_name` varchar(150) NOT NULL COMMENT '管理员账号',
  `admin_password` varchar(150) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`),
  KEY `admin_name` (`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- 正在导出表  shang.admin_user 的数据：14 rows
/*!40000 ALTER TABLE `admin_user` DISABLE KEYS */;
INSERT INTO `admin_user` (`id`, `admin_name`, `admin_password`) VALUES
	(1, '123', '123456'),
	(2, 'admin', '123456'),
	(3, 'user', '123456'),
	(5, 'sun', '1'),
	(6, 'sunadmin', 'c4ca4238a0b923820dcc509a6f75849b'),
	(7, 'sun2', 'c4ca4238a0b923820dcc509a6f75849b'),
	(8, 'sun11', 'c4ca4238a0b923820dcc509a6f75849b'),
	(9, 'sun', 'd41d8cd98f00b204e9800998ecf8427e'),
	(10, 'sun23', 'c4ca4238a0b923820dcc509a6f75849b'),
	(11, 'sun111', 'c4ca4238a0b923820dcc509a6f75849b'),
	(12, 'sun115', 'e4da3b7fbbce2345d7772b0674a318d5'),
	(13, 'sun55', 'e4da3b7fbbce2345d7772b0674a318d5'),
	(14, 'sun112', '6512bd43d9caa6e02c990b0a82652dca'),
	(15, 'sun123', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `admin_user` ENABLE KEYS */;

-- 导出  表 shang.auth_group 结构
CREATE TABLE IF NOT EXISTS `auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1启用 0禁用',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id 多个规则用","隔开',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- 正在导出表  shang.auth_group 的数据：5 rows
/*!40000 ALTER TABLE `auth_group` DISABLE KEYS */;
INSERT INTO `auth_group` (`id`, `title`, `status`, `rules`) VALUES
	(98, '管理员', 1, '13,14'),
	(99, '商品管理员', 1, '15'),
	(102, '大哥大', 1, '15,14,'),
	(101, '超级管理员', 1, '15,14'),
	(1, '超级管理员1', 1, '12,13,14,15,29,30,31,32,33,34');
/*!40000 ALTER TABLE `auth_group` ENABLE KEYS */;

-- 导出  表 shang.auth_group_access 结构
CREATE TABLE IF NOT EXISTS `auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

-- 正在导出表  shang.auth_group_access 的数据：3 rows
/*!40000 ALTER TABLE `auth_group_access` DISABLE KEYS */;
INSERT INTO `auth_group_access` (`uid`, `group_id`) VALUES
	(1, 1),
	(2, 98),
	(3, 99);
/*!40000 ALTER TABLE `auth_group_access` ENABLE KEYS */;

-- 导出  表 shang.auth_rule 结构
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `id` mediumint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` char(80) NOT NULL COMMENT '规则唯一标识',
  `title` char(80) NOT NULL COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 正常  2禁用',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `condition` char(100) NOT NULL COMMENT '规则表达式,为空标识存在就验证,补位空标识按照条件验证',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `title` (`title`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='权限控制规则表\r\n';

-- 正在导出表  shang.auth_rule 的数据：8 rows
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
INSERT INTO `auth_rule` (`id`, `name`, `title`, `status`, `type`, `condition`) VALUES
	(13, 'index/product_list', '产品查询管理', 1, 1, ''),
	(12, 'index/welcome', '主页查看1', 1, 1, ''),
	(29, 'index/product_brand', '主页查看2', 1, 1, ''),
	(30, 'index/product_category', '主页查看3', 1, 1, ''),
	(31, 'user/admin_role', '主页查看4', 1, 1, ''),
	(32, 'user/admin_permission', '主页查看5', 1, 1, ''),
	(33, 'user/admin_list', '主页查看7', 1, 1, ''),
	(34, 'index/index', '主页查看6', 1, 1, '');
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;

-- 导出  表 shang.goods_gouwuche 结构
CREATE TABLE IF NOT EXISTS `goods_gouwuche` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `vip_id` varchar(100) NOT NULL COMMENT '会员id',
  `s_id` varchar(100) NOT NULL COMMENT '商品id(不同商品用'',''隔开)',
  `d_id` varchar(100) NOT NULL COMMENT '店铺id(因为没有店铺,用分类替代)',
  `shuliang` varchar(100) NOT NULL COMMENT '商品数量',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `vip_id` (`vip_id`),
  KEY `s_id` (`s_id`),
  KEY `d_id` (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='购物车';

-- 正在导出表  shang.goods_gouwuche 的数据：2 rows
/*!40000 ALTER TABLE `goods_gouwuche` DISABLE KEYS */;
INSERT INTO `goods_gouwuche` (`id`, `vip_id`, `s_id`, `d_id`, `shuliang`, `create_time`, `update_time`) VALUES
	(1, '6', '2,11,7,14,16', '25,25,23,23,23', '161,4,3,2,2', 0, 0),
	(8, '3', '2', '25', '19', 1553108946, 1553108946);
/*!40000 ALTER TABLE `goods_gouwuche` ENABLE KEYS */;

-- 导出  表 shang.goods_jiezhang 结构
CREATE TABLE IF NOT EXISTS `goods_jiezhang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `vip_id` varchar(100) NOT NULL COMMENT '会员id',
  `s_id` varchar(100) NOT NULL COMMENT '商品id(不同商品用'',''隔开)',
  `d_id` varchar(100) NOT NULL COMMENT '店铺id(因为没有店铺,用分类替代)',
  `shuliang` varchar(100) NOT NULL COMMENT '商品数量',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `vip_id` (`vip_id`),
  KEY `s_id` (`s_id`),
  KEY `d_id` (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='结账';

-- 正在导出表  shang.goods_jiezhang 的数据：1 rows
/*!40000 ALTER TABLE `goods_jiezhang` DISABLE KEYS */;
INSERT INTO `goods_jiezhang` (`id`, `vip_id`, `s_id`, `d_id`, `shuliang`, `create_time`, `update_time`) VALUES
	(9, '6', '2,11', '25,25', '159,4', 1553164150, 1553164150);
/*!40000 ALTER TABLE `goods_jiezhang` ENABLE KEYS */;

-- 导出  表 shang.goods_shangpin 结构
CREATE TABLE IF NOT EXISTS `goods_shangpin` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `gt_name` varchar(100) NOT NULL COMMENT '商品名称',
  `gt_tid` int(4) unsigned NOT NULL COMMENT '分类id',
  `gt_tpid` int(4) unsigned NOT NULL COMMENT '分类父级id',
  `gt_unit` char(50) NOT NULL COMMENT '商品的单位',
  `gt_attributes` enum('1','2','3','4','5','6','7') NOT NULL COMMENT '商品属性1,推荐 2,新上3,热卖,4促销,5包邮,6限时卖,7不参与会员折扣',
  `gt_imagepath` varchar(250) NOT NULL COMMENT '商品轮播图',
  `gt_number` int(10) unsigned NOT NULL COMMENT '商品编号',
  `gt_barcode` int(10) unsigned NOT NULL COMMENT '条形码',
  `gt_curprice` int(10) unsigned NOT NULL COMMENT '现价',
  `gt_oriprice` int(10) unsigned NOT NULL COMMENT '市场价',
  `gt_cosprice` int(10) unsigned NOT NULL COMMENT '成本价',
  `gt_inventory` int(10) unsigned NOT NULL COMMENT '库存',
  `gt_restrict` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '限制购买量',
  `gt_already` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '已经购买量',
  `gt_freight` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '运费',
  `gt_status` int(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否上架0上架1下架,默认上架',
  `gt_reorder` int(4) unsigned NOT NULL COMMENT '商品排序',
  `gt_text` text NOT NULL COMMENT '商品详情描述',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `gt_tid` (`gt_tid`),
  KEY `gt_tpid` (`gt_tpid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- 正在导出表  shang.goods_shangpin 的数据：14 rows
/*!40000 ALTER TABLE `goods_shangpin` DISABLE KEYS */;
INSERT INTO `goods_shangpin` (`id`, `gt_name`, `gt_tid`, `gt_tpid`, `gt_unit`, `gt_attributes`, `gt_imagepath`, `gt_number`, `gt_barcode`, `gt_curprice`, `gt_oriprice`, `gt_cosprice`, `gt_inventory`, `gt_restrict`, `gt_already`, `gt_freight`, `gt_status`, `gt_reorder`, `gt_text`, `create_time`, `update_time`) VALUES
	(1, '刁娜星', 26, 25, '件', '3', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 1, 1, 1, 11, 1, 0, 0, 0, 0, '商品详情描述', 1551719612, 1551719612),
	(2, '螺蛳粉1', 25, 3, '件', '2', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 1, 0, '<p>商品详情描述水电费第三方&nbsp;水电费水电费是发</p>', 1551720360, 1551720360),
	(7, '螺蛳粉3', 23, 1, '件', '3', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 0, 0, '商品详情描述', 1551720360, 1551720360),
	(19, '中文', 24, 23, '中文', '1', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 111, 1111, 11, 1111, 1, 1111, 111, 111, 11, 0, 0, '<p>中文</p>', 1552575726, 1552575726),
	(9, '螺蛳粉5', 26, 25, '件', '4', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 0, 0, '商品详情描述', 1551720360, 1551720360),
	(21, '小裤子', 25, 3, '11111', '2', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1111, 1111, 1111, 1111, 1111, 1111, 1111, 1111, 1111, 0, 0, '<p>裤子咯</p>', 1552650811, 1552650811),
	(11, '风行车', 25, 3, '件', '1', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 1, 222, 222, 0, 0, '<p>是的冯绍峰打法<br/></p>', 1551727462, 1551727462),
	(12, '螺蛳粉5', 26, 25, '件', '4', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 0, 0, '商品详情描述', 1551720360, 1551720360),
	(13, '裤子4', 25, 3, '件', '2', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 1, 0, '<p>商品详情描述水电费第三方&nbsp;水电费水电费是发</p>', 1551720360, 1551720360),
	(14, '裤子2', 23, 1, '件', '3', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 0, 0, '商品详情描述', 1551720360, 1551720360),
	(16, '裤子3', 23, 1, '件', '3', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 0, 0, '商品详情描述', 1551720360, 1551720360),
	(20, '裤子4', 25, 4, '件', '2', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 1, 0, '<p>商品详情描述水电费第三方&nbsp;水电费水电费是发</p>', 1551720360, 1551720360),
	(18, '裤子1', 25, 3, '件', '2', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1234565, 123456, 22, 22, 22, 11, 22, 0, 0, 1, 0, '<p>商品详情描述水电费第三方&nbsp;水电费水电费是发</p>', 1551720360, 1551720360),
	(22, '大裤子', 21, 2, '1111', '1', '20190315\\47bd0abae94c3d6e635b6043cfab5301.jpg', 1111, 1111, 111, 11111, 222, 22, 22, 22, 222, 0, 0, '<p>222222</p>', 1552650924, 1552650924);
/*!40000 ALTER TABLE `goods_shangpin` ENABLE KEYS */;

-- 导出  表 shang.goods_sou 结构
CREATE TABLE IF NOT EXISTS `goods_sou` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '属性分类的名字',
  `pid` int(4) NOT NULL COMMENT '属性父级id',
  `path` varchar(255) NOT NULL COMMENT '路径',
  `level` int(4) NOT NULL COMMENT '等级',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='属性分类表';

-- 正在导出表  shang.goods_sou 的数据：6 rows
/*!40000 ALTER TABLE `goods_sou` DISABLE KEYS */;
INSERT INTO `goods_sou` (`id`, `name`, `pid`, `path`, `level`, `create_time`, `update_time`) VALUES
	(1, '顶级分类', 0, '0,0', 0, 0, 0),
	(2, '衣服', 1, '0,2', 1, 0, 0),
	(3, '西服', 2, '0,2,3', 2, 0, 0),
	(4, '车', 1, '0,4', 1, 0, 0),
	(5, '单车', 4, '0,4,5', 2, 0, 0),
	(6, '大车', 4, '0,4,6', 2, 0, 0);
/*!40000 ALTER TABLE `goods_sou` ENABLE KEYS */;

-- 导出  表 shang.goods_type 结构
CREATE TABLE IF NOT EXISTS `goods_type` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '分类的名字',
  `pid` int(4) NOT NULL COMMENT '父级id',
  `path` varchar(255) NOT NULL COMMENT '路径',
  `level` int(4) NOT NULL COMMENT '等级',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='无限分类表';

-- 正在导出表  shang.goods_type 的数据：28 rows
/*!40000 ALTER TABLE `goods_type` DISABLE KEYS */;
INSERT INTO `goods_type` (`id`, `name`, `pid`, `path`, `level`, `create_time`, `update_time`) VALUES
	(1, '顶级分类', 0, '0,0', 0, 0, 0),
	(2, '服装', 1, '0,2', 1, 0, 0),
	(3, '西服', 2, '0,2,3', 2, 0, 0),
	(4, '车', 1, '0,4', 1, 0, 0),
	(5, '单车', 4, '0,4,5', 2, 0, 0),
	(6, '大车', 4, '0,4,6', 2, 0, 0),
	(30, '中国', 24, '0,23,24,30', 3, 1552575776, 1552575776),
	(10, '货车', 4, '0,4,10', 2, 0, 0),
	(32, '真的和', 23, '0,23,32', 2, 1551631987, 1551631987),
	(12, '货车', 4, '0,4,12', 2, 0, 0),
	(13, '大车', 4, '0,4,13', 2, 0, 0),
	(14, '小服', 2, '0,2,14', 2, 0, 0),
	(29, '我也不知道啊', 14, '0,2,14,29', 3, 1552469573, 1552469573),
	(25, '裤子3', 3, '0,2,3,25', 3, 1551638273, 1551638273),
	(24, '真的和', 23, '0,23,24', 2, 1551631987, 1551631987),
	(23, '你吧', 1, '0,23', 1, 1551631970, 1551631970),
	(21, '水裤', 2, '0,2,15', 2, 1551631416, 1551631416),
	(26, '睡衣服', 25, '0,2,3,25,26', 4, 1551638495, 1551638495),
	(31, '英国', 24, '0,23,24,31', 3, 1552575784, 1552575784),
	(33, '真的和', 23, '0,23,33', 2, 1551631987, 1551631987),
	(34, '真的和', 23, '0,23,34', 2, 1551631987, 1551631987),
	(37, '裤子2', 3, '0,2,3,37', 3, 1551638273, 1551638273),
	(38, '裤子1', 3, '0,2,3,38', 3, 1551638273, 1551638273),
	(39, '单车', 5, '0,4,5,39', 2, 0, 0),
	(40, '大车', 6, '0,4,6,40', 2, 0, 0),
	(41, '小火车', 10, '0,4,10,41', 3, 1552578064, 1552578064),
	(42, '大货车', 10, '0,4,10,42', 3, 1552578075, 1552578075),
	(43, '睡衣裤', 21, '0,2,15,43', 3, 1552578098, 1552578098);
/*!40000 ALTER TABLE `goods_type` ENABLE KEYS */;

-- 导出  表 shang.think_auth_rule 结构
CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 正在导出表  shang.think_auth_rule 的数据：0 rows
/*!40000 ALTER TABLE `think_auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_auth_rule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
