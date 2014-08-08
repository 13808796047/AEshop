/*
Navicat MySQL Data Transfer

Source Server         : webGame
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : aeshop

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2014-08-08 16:55:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ae_brand_category
-- ----------------------------
DROP TABLE IF EXISTS `ae_brand_category`;
CREATE TABLE `ae_brand_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '品牌分类名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ae_brand_category
-- ----------------------------
INSERT INTO `ae_brand_category` VALUES ('1', '数码产品');
INSERT INTO `ae_brand_category` VALUES ('2', '女装');
INSERT INTO `ae_brand_category` VALUES ('3', '阿玛尼');
INSERT INTO `ae_brand_category` VALUES ('4', '阿诗玛');
INSERT INTO `ae_brand_category` VALUES ('5', '李宁');

-- ----------------------------
-- Table structure for ae_category
-- ----------------------------
DROP TABLE IF EXISTS `ae_category`;
CREATE TABLE `ae_category` (
  `cid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL DEFAULT '',
  `pid` smallint(6) NOT NULL,
  `sort` smallint(6) NOT NULL,
  `pagetitle` varchar(100) NOT NULL DEFAULT '',
  `pagekeywords` varchar(100) NOT NULL DEFAULT '',
  `pagedesc` varchar(255) NOT NULL DEFAULT '',
  `display` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:是\r\n0:否\r\n',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ae_category
-- ----------------------------
INSERT INTO `ae_category` VALUES ('1', ' 潮流女人', '0', '1', ' 潮流女人', ' 潮流女人', '\r\n潮流女人', '1');
INSERT INTO `ae_category` VALUES ('2', '精品男人', '0', '2', '精品男人', '精品男人', '精品男人', '1');
INSERT INTO `ae_category` VALUES ('3', '美容美体', '0', '3', '美容美体', '美容美体', '美容美体', '1');
INSERT INTO `ae_category` VALUES ('4', '生活家居', '0', '4', '生活家居', '生活家居', '生活家居', '1');
INSERT INTO `ae_category` VALUES ('5', '母婴玩具', '0', '5', '母婴玩具', '母婴玩具', '母婴玩具', '1');
INSERT INTO `ae_category` VALUES ('6', '数码家电', '0', '6', '数码家电', '数码家电', '数码家电', '1');
INSERT INTO `ae_category` VALUES ('7', '美食特产', '0', '7', '美食特产', '美食特产', '美食特产', '1');
INSERT INTO `ae_category` VALUES ('8', '上装', '1', '8', '上装', '上装', '上装', '1');

-- ----------------------------
-- Table structure for ae_cate_goods
-- ----------------------------
DROP TABLE IF EXISTS `ae_cate_goods`;
CREATE TABLE `ae_cate_goods` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` smallint(5) unsigned DEFAULT NULL COMMENT '商品分类ID',
  `goods_id` smallint(5) unsigned DEFAULT NULL COMMENT '商品ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ae_cate_goods
-- ----------------------------

-- ----------------------------
-- Table structure for ae_goods
-- ----------------------------
DROP TABLE IF EXISTS `ae_goods`;
CREATE TABLE `ae_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `name` varchar(50) DEFAULT NULL COMMENT '商品名称',
  `model_id` int(11) DEFAULT NULL,
  `goods_no` varchar(20) DEFAULT NULL COMMENT '商品编号',
  `sell_price` decimal(15,0) DEFAULT NULL COMMENT '销售价格',
  `market_price` decimal(15,0) DEFAULT NULL COMMENT '市场价格',
  `cost_price` decimal(15,0) DEFAULT NULL COMMENT '成本价格',
  `up_time` int(11) DEFAULT NULL COMMENT '上架时间',
  `down_time` int(11) DEFAULT NULL COMMENT '下架时间',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `store_nums` int(11) DEFAULT NULL COMMENT '库存数',
  `img` varchar(255) DEFAULT NULL COMMENT '商品图片',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '删除 0未删除 1已删除 2下架',
  `description` text COMMENT '商品描述',
  `keywords` varchar(255) DEFAULT NULL COMMENT '商品关键字',
  `descr` varchar(255) DEFAULT NULL COMMENT 'SEO描述',
  `search_words` text COMMENT '产品搜索词库,逗号分隔',
  `weight` decimal(15,0) DEFAULT NULL COMMENT '重量',
  `point` int(11) DEFAULT NULL COMMENT '积分',
  `unit` varchar(255) DEFAULT NULL COMMENT '计量单位',
  `brand_id` int(11) DEFAULT NULL COMMENT '品牌ID',
  `visit` int(11) DEFAULT NULL COMMENT '浏览次数',
  `favorite` int(11) DEFAULT NULL COMMENT '收藏次数',
  `sort` smallint(5) DEFAULT '99' COMMENT '排序',
  `spec_array` text COMMENT '序列化存储规格,key值为规则ID，value为此商品具有的规格值',
  `exp` int(11) DEFAULT NULL COMMENT '经验值',
  `comments` int(11) DEFAULT NULL COMMENT '评论次数',
  `sale` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL COMMENT '评分总数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ae_goods
-- ----------------------------
