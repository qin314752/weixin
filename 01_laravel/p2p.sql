/*
Navicat MySQL Data Transfer

Source Server         : lamp
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : p2p

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-11-29 15:44:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for p2p_configs
-- ----------------------------
DROP TABLE IF EXISTS `p2p_configs`;
CREATE TABLE `p2p_configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `webtitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `weixin_pic` varchar(255) DEFAULT NULL,
  `weibo_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_configs
-- ----------------------------
INSERT INTO `p2p_configs` VALUES ('1', '中皇太发（北京）投资基金管理有限公司1', '中皇太发2', '中皇太发3', '京ICP证232302308023023023234', '丰台科技园盈坤世纪C座5层2', '400-900-472392', 'zhonghuangtaifa@126.com', '/uploads/default/7bbda063696f2c144fa1d803cc164ce3.png', '/uploads/default/weixin.png', '/uploads/default/weibo_pic (1).png');

-- ----------------------------
-- Table structure for p2p_flink
-- ----------------------------
DROP TABLE IF EXISTS `p2p_flink`;
CREATE TABLE `p2p_flink` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL DEFAULT '未描述',
  `pic` varchar(255) NOT NULL DEFAULT '未添加',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_flink
-- ----------------------------
INSERT INTO `p2p_flink` VALUES ('5', '百度', 'http://www.baidu.com', '未描述', '/uploads/default/logo.png');
INSERT INTO `p2p_flink` VALUES ('6', '优酷', 'www.youku.com', '未描述', '/uploads/19b0c132acd132c076cf2f31da17e929.jpg');
INSERT INTO `p2p_flink` VALUES ('7', '淘宝', 'www.taobao.com', '未描述', '/uploads/default/logo.png');
INSERT INTO `p2p_flink` VALUES ('10', 'aaa', 'http://www.baidu.com', '未描述', '/uploads/19b0c132acd132c076cf2f31da17e929.jpg');
INSERT INTO `p2p_flink` VALUES ('11', '淘宝', 'www.taobao.com', '未描述', '/uploads/default/logo.png');
INSERT INTO `p2p_flink` VALUES ('12', 'qq', 'www.taobao.com', '未描述', '/uploads/19b0c132acd132c076cf2f31da17e929.jpg');
INSERT INTO `p2p_flink` VALUES ('13', 'ww', 'www.taobao.com', '未描述', '/uploads/default/logo.png');
INSERT INTO `p2p_flink` VALUES ('14', 'ee', 'www.taobao.com', '未描述', '/uploads/19b0c132acd132c076cf2f31da17e929.jpg');

-- ----------------------------
-- Table structure for p2p_gongsi
-- ----------------------------
DROP TABLE IF EXISTS `p2p_gongsi`;
CREATE TABLE `p2p_gongsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_gongsi
-- ----------------------------
INSERT INTO `p2p_gongsi` VALUES ('87', '89', '@-->创始团队-->Jame1', 'Jame1', '毕业于清华大学经济管理学院金融系。毕业后背包旅行8个多月，游历包括南极在内的30多个国家和地区。  \r\n                    ', '/uploads/8473f5bdd657111f59ddb6d1aebe2506.png', '2016-11-20');
INSERT INTO `p2p_gongsi` VALUES ('88', '89', '@-->创始团队-->Jame2', 'Jame2', '毕业于清华大学经济管理学院金融系。毕业后背包旅行8个多月，游历包括南极在内的30多个国家和地区。  \r\n                    ', '/uploads/9d4c06917650000bac90baefc20513d6.png', '2016-11-20');
INSERT INTO `p2p_gongsi` VALUES ('86', '89', '@-->创始团队-->Jame', 'Jame', '毕业于清华大学经济管理学院金融系。毕业后背包旅行8个多月，游历包括南极在内的30多个国家和地区。  \r\n                    ', '/uploads/qqqqqAE.png', '2016-11-20');
INSERT INTO `p2p_gongsi` VALUES ('89', '0', '@-->创始团队', '创始团队', '  \r\n                    ', null, '2016-11-20');
INSERT INTO `p2p_gongsi` VALUES ('84', '0', '@-->关于我们', '关于我们', '  \r\n                                      XX证券（集团）股份有限公司（以下简称“XX保险”）是在1991年5月13日成立的XX保险公司的基础上组建而成的保险集团公司，总部设在上海并且在上海证交所和香港联交所成功上市。XX保险以“做一家负责任的保险公司”为使命，以“诚信天下，稳健一生，追求卓越”为企业核心价值观，以“推动和实现可持续的价值增长”为经营理念，不断为客户、股东、员工、社会和利益相关者创造价值，为社会和谐做贡献', '/uploads/064e63fc9ccd2b3d074e8bcffb9547df.png', '2016-11-20');

-- ----------------------------
-- Table structure for p2p_gongyi
-- ----------------------------
DROP TABLE IF EXISTS `p2p_gongyi`;
CREATE TABLE `p2p_gongyi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT '/uploads/default/gongyi.jpg',
  `time` varchar(100) DEFAULT NULL,
  `zuzhi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_gongyi
-- ----------------------------
INSERT INTO `p2p_gongyi` VALUES ('74', '0', '@-->当我们在一起', '当我们在一起', '  \r\n                                                            \r\n                                        “月捐悦多”是招商银行联合多家公益机构推出的小额月度捐赠计划，我们倡导人人公益，践行可持续公益路径；我们鼓励更多的人加入公益大家庭，让世界因为您的加入而变得更加美好。每人每月一份爱，点滴行动，汇爱成海。 ', ' /uploads/default/gongyi.jpg', '2016-11-19', '深圳壹基金公益基金会');
INSERT INTO `p2p_gongyi` VALUES ('80', '0', '@-->我们', '我们', '“月捐悦多”是招商银行联合多家公益机构推出的小额月度捐赠计划，我们倡导人人公益，践行可持续公益路径；我们鼓励更多的人加入公益大家庭，让世界因为您的加入而变得更加美好。每人每月一份爱，点滴行动，汇爱成海。', '/uploads/default/gongyi.jpg', null, '深圳壹基金公益基金会');

-- ----------------------------
-- Table structure for p2p_jigou
-- ----------------------------
DROP TABLE IF EXISTS `p2p_jigou`;
CREATE TABLE `p2p_jigou` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lpic` varchar(255) DEFAULT NULL,
  `lurl` varchar(255) DEFAULT '未添加',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_jigou
-- ----------------------------
INSERT INTO `p2p_jigou` VALUES ('34', '/uploads/2d6990bb736b917b5c9b319bf5433812.jpg', '未添加');
INSERT INTO `p2p_jigou` VALUES ('33', '/uploads/5eb439060d9dd8cfb45675d8bb361749.jpg', '未添加');
INSERT INTO `p2p_jigou` VALUES ('36', '/uploads/36612c354b6de274807002b261f974ef.jpg', '未添加');
INSERT INTO `p2p_jigou` VALUES ('37', '/uploads/19b0c132acd132c076cf2f31da17e929.jpg', '未添加');
INSERT INTO `p2p_jigou` VALUES ('38', '/uploads/dcdaca97a2dd924605fa480fba3fee2f.jpg', '未添加');

-- ----------------------------
-- Table structure for p2p_licai
-- ----------------------------
DROP TABLE IF EXISTS `p2p_licai`;
CREATE TABLE `p2p_licai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_licai
-- ----------------------------
INSERT INTO `p2p_licai` VALUES ('66', '63', '@-->理财新资讯-->活用理财小公式 让财富轻松翻倍！', '活用理财小公式 让财富轻松翻倍！', '  \r\n                    ', null, '2016-11-08');
INSERT INTO `p2p_licai` VALUES ('64', '63', '@-->理财新资讯-->快速积攒财富 掌握这些省钱妙招就够了！', '快速积攒财富 掌握这些省钱妙招就够了！', '  \r\n                    ', null, '2016-11-08');
INSERT INTO `p2p_licai` VALUES ('65', '63', '@-->理财新资讯-->杜绝5种理财陋习 让你理财不伤心！', '杜绝5种理财陋习 让你理财不伤心！', '  \r\n                    　理财是门技术活，并不是所有的人都是通过理财实现财富梦想，这主要是因为不同人所使用的理财习惯，理财方法迥异导致最后理财结果的不同，虽然理财方法千千万各有各的好，但是以下理财坏习惯将影响你的理财收益。', '/uploads/a067e3593844bc156fd92b30ddbfc0b4.jpg', '2016-11-08');
INSERT INTO `p2p_licai` VALUES ('63', '0', '@-->理财新资讯', '理财新资讯', '  \r\n                    ', '/uploads/a067e3593844bc156fd92b30ddbfc0b4.jpg', '2016-11-08');
INSERT INTO `p2p_licai` VALUES ('67', '63', '@-->理财新资讯-->aaaaaaa', 'aaaaaaa', 'sssssssssssssssssssssssssssssssssssss  \r\n                    ', null, '2016-11-18');

-- ----------------------------
-- Table structure for p2p_lunbo
-- ----------------------------
DROP TABLE IF EXISTS `p2p_lunbo`;
CREATE TABLE `p2p_lunbo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lpic` varchar(255) DEFAULT NULL,
  `lurl` varchar(255) DEFAULT '未添加',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_lunbo
-- ----------------------------
INSERT INTO `p2p_lunbo` VALUES ('33', '/uploads/acb3c5cf6dfa8848c49a92145b33f294.jpg', '未添加');
INSERT INTO `p2p_lunbo` VALUES ('34', '/uploads/8792478d4827d0f224add1827e8385f7.jpg', '未添加');
INSERT INTO `p2p_lunbo` VALUES ('35', '/uploads/194a7054c404b3678b7920bbf671dcb5.jpg', '未添加');
INSERT INTO `p2p_lunbo` VALUES ('36', '/uploads/dc3935cca8d8412b69eeadababaadd98.jpg', '未添加');

-- ----------------------------
-- Table structure for p2p_shichang
-- ----------------------------
DROP TABLE IF EXISTS `p2p_shichang`;
CREATE TABLE `p2p_shichang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_shichang
-- ----------------------------
INSERT INTO `p2p_shichang` VALUES ('72', '62', '@--> 市场分析-->杜绝5种理财陋习 让你理财不伤心！', '杜绝5种理财陋习 让你理财不伤心！', '理财是门技术活，并不是所有的人都是通过理财实现财富梦想，这主要是因为不同人所使用的理财习惯，理财方法迥异导致最后理财结果的不同，虽然理财方法千千万各有各的好，但是以下理财坏习惯将影响你的理财收益。', null, '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('73', '62', '@--> 市场分析-->穷富差异大起底 不想做穷人就该学投资！', '穷富差异大起底 不想做穷人就该学投资！', '2016新的一年，你的目标是什么？很多人回答想从穷人变成富人，自由掌控自己的财富，实现经济财务自由。关于穷与富这个话题，为何穷人越发穷，而富人越来越穷，只因为它们之间存在的这些差异，是你所不知道的，如果懂得改变一下思维方式与做法，就可能越过“穷”这个坎。接下来小编为你揭秘穷富存在的差异。  \r\n                    ', null, '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('71', '62', '@--> 市场分析-->活用理财小公式 让财富轻松翻倍！', '活用理财小公式 让财富轻松翻倍！', '生活中人们总是疏忽与算计日常中的小钱小财，但是聚少成多，即使是每次小小的浪费，都将变成最后的漏财。都说吃不穷，穿不穷，不会算计就受穷，这都告诫着我们生活需要勤俭节约。那么生活中有哪些理财公式值得借鉴的呢？这些理财公式是如何帮投资者理财的呢？', null, '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('62', '0', '@--> 市场分析', '市场分析', '  \r\n                    ', '/uploads/e788e826865a31e819b7900eb62026df.jpg', '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('70', '62', '@--> 市场分析-->负利率时代！怎样负债也赚钱？', '负利率时代！怎样负债也赚钱？', '负利率时代如何盘活家庭资产？众所周知，今年以来央行几次降息，但物价却同比直线上升，存钱变亏钱，早已是个不争的事实。如何让自己的生活质量赶上物价上涨，一个可行的方式就是贷款，正如一位经济学家所说的那样：“银行负债率为0，屌丝一辈子”，可见负债也是改善生活的途径之', null, '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('74', '62', '@--> 市场分析-->快速积攒财富 掌握这些省钱妙招就够了！', '快速积攒财富 掌握这些省钱妙招就够了！', '如何快速积攒财富？很多人一生忙碌却没有收获，是因为没有好的方案，包括投资理财没有运用对方法也是很难积攒财富。生活中存在很多省钱妙计，虽然看似微不足道，但逐年累计也是笔很大的开销，理财是实现家庭财富增值保值，前提不能降低生活品质。接下来同小编一起看看这些省钱妙招如何快速攒出财富吧。  \r\n                    ', null, '2016-11-08');
INSERT INTO `p2p_shichang` VALUES ('75', '0', '@-->心态影响结果 90后应该如何理财？', '心态影响结果 90后应该如何理财？', '近期多个中国西部省区或城市到新加坡招商，成为令人关注的新动向。中国驻新加坡大使馆临时代办戴兵26日表示，商业嗅觉敏锐的新加坡企业已经察觉到了中国西部大开发带来的商机,地处中国西南部的贵州省政府26日在新加坡举办招商引资推介会。  \r\n                    ', null, '2016-11-08');

-- ----------------------------
-- Table structure for p2p_user
-- ----------------------------
DROP TABLE IF EXISTS `p2p_user`;
CREATE TABLE `p2p_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` char(11) NOT NULL,
  `qq` varchar(100) NOT NULL DEFAULT '/uploads/default/logo.png',
  `zhu` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_user
-- ----------------------------
INSERT INTO `p2p_user` VALUES ('9', 'admin', '$2y$10$ArU.iqgeXYNEt0X1onK41O.1rKbv7ixOtDy0VRT.XE72lDxbSuJdO', '', '', '超级管理员', '');

-- ----------------------------
-- Table structure for p2p_xinwen
-- ----------------------------
DROP TABLE IF EXISTS `p2p_xinwen`;
CREATE TABLE `p2p_xinwen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_xinwen
-- ----------------------------
INSERT INTO `p2p_xinwen` VALUES ('79', '75', '@-->新闻中心-->理财的四种方式-->工薪家庭如何展开小型投资？', '工薪家庭如何展开小型投资？', '工薪家庭如何展开小型投资？随着社会科技发展，投资理财方式不断多样化，无论富裕贫穷家庭都离不开理财，理财可以实现家庭资产的增值保值。因此家庭越来越重视做好这块，对于投资，家庭的主要想法是使资产增值，并且风险偏好程度偏向稳健型，那么，对于工薪家庭投资应以稳健为主，如何展开小型投资一起了解下吧。  \r\n                    ', '/uploads/a217d9de79f63b19447948d5b37c750b.png', '2016-11-08');
INSERT INTO `p2p_xinwen` VALUES ('78', '75', '@-->新闻中心-->理财的四种方式-->美国人的10个致富习惯轻松理好财！', '美国人的10个致富习惯轻松理好财！', '马云曾说，很多人赚钱的机会会经历四大步骤，“看不见、看不清、看不懂、没赶上”。那么，在你的投资理财道路上是否出现过这些困惑呢？也许很多人感同身受，甚至遭到蔑视眼光，但往往是经历各种挫败才能成长。当赚钱机会来临你把握住了吗？美国理财专家总结发现富人与穷人的最大差异就是“致富习惯”读懂这些对你的投资理财路很有帮助的。  \r\n                    ', '/uploads/d2fc7f238c680f39c6354614c61c9b3d.png', '2016-11-08');
INSERT INTO `p2p_xinwen` VALUES ('77', '75', '@-->新闻中心-->理财的四种方式-->心态影响结果 90后应该如何理财？', '心态影响结果 90后应该如何理财？', '有名人曾经说过：机会都是留给有所准备的人。这个就是告诉大家不管做任何事情，做好充分的准备，才可能获得成功。理财也是如此，如果你想在理财上有所收获，光说不练是很难有所成就的，那么在投资理财之前你需要做哪些准备呢？  \r\n                    ', '/uploads/3691c70d602d569b63cb25816ad0d18e.jpg', '2016-11-08');
INSERT INTO `p2p_xinwen` VALUES ('75', '74', '@-->新闻中心-->理财的四种方式', '理财的四种方式', '如何快速积攒财富？很多人一生忙碌没有收获，是因为没有好的方案。  \r\n                    ', '/uploads/e1a167464f09ef7f9c5cb3229b0ae17b.jpg', '2016-11-08');
INSERT INTO `p2p_xinwen` VALUES ('76', '75', '@-->新闻中心-->理财的四种方式-->外币理财的这四种方式 你看懂了吗？', '外币理财的这四种方式 你看懂了吗？', '近年来，随着国内很多理财市场的逐渐下调，很多投资者已开始向外币理财市场靠拢，如今较大数额外币的市民多了起来。外币理财也是个不错的选择，但很多人对外币理财产品的具体分类和模式还不甚了解，接下来，小编为大家梳理四种外币理财方式，看看自己适合哪一种吧。  \r\n                    ', '/uploads/69200bfda674dd1feb60bdd2509546cb.png', '2016-11-08');
INSERT INTO `p2p_xinwen` VALUES ('74', '0', '@-->新闻中心', '新闻中心', '  \r\n                    ', '', '2016-11-08');

-- ----------------------------
-- Table structure for p2p_zhaopin
-- ----------------------------
DROP TABLE IF EXISTS `p2p_zhaopin`;
CREATE TABLE `p2p_zhaopin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT '/uploads/0eba3bbd2110e5efbb66c6afdb53d9e7.png',
  `time` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL DEFAULT '北京丰台区丰台科技园 盈坤世纪C座5层',
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p2p_zhaopin
-- ----------------------------
INSERT INTO `p2p_zhaopin` VALUES ('80', '0', '@-->销售业务员', '销售业务员', '招聘销售业务员 ', '/uploads/0eba3bbd2110e5efbb66c6afdb53d9e7.png', '2016-11-20', '北京丰台区丰台科技园 盈坤世纪C座5层', null);
INSERT INTO `p2p_zhaopin` VALUES ('81', '0', '@-->经理', '经理', '从事金融行业5年的人员  ', '/uploads/0eba3bbd2110e5efbb66c6afdb53d9e7.png', '2016-11-20', '北京丰台区丰台科技园 盈坤世纪C座5层', null);
INSERT INTO `p2p_zhaopin` VALUES ('82', '0', '@-->主管', '主管', '有5年工作经验         ', '/uploads/0eba3bbd2110e5efbb66c6afdb53d9e7.png', '2016-11-20', '北京丰台区丰台科技园 盈坤世纪C座5层', null);
INSERT INTO `p2p_zhaopin` VALUES ('83', '0', '@-->程序员', '程序员', '老手优先  ', '/uploads/0eba3bbd2110e5efbb66c6afdb53d9e7.png', '2016-11-20', '北京丰台区丰台科技园 盈坤世纪C座5层', null);
