/*
Navicat MySQL Data Transfer

Source Server         : localhost_database
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : usi-web

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-29 21:28:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_article
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE `tbl_article` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_mem_id` int(10) NOT NULL,
  `a_title` varchar(100) NOT NULL,
  `a_detail` text NOT NULL,
  `a_img` varchar(100) NOT NULL,
  `a_view` int(12) NOT NULL DEFAULT '0',
  `a_status` varchar(5) NOT NULL DEFAULT 'show',
  `a_vdo` text COMMENT 'youtube',
  `a_last_update` datetime DEFAULT NULL COMMENT 'วันที่อัพเดทล่าสุด',
  `a_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_article
-- ----------------------------
INSERT INTO `tbl_article` VALUES ('2', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '13', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 17:43:32');
INSERT INTO `tbl_article` VALUES ('3', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 17:49:18');
INSERT INTO `tbl_article` VALUES ('4', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:40:23');
INSERT INTO `tbl_article` VALUES ('5', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:48:55');
INSERT INTO `tbl_article` VALUES ('6', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:48:57');
INSERT INTO `tbl_article` VALUES ('7', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:49:00');
INSERT INTO `tbl_article` VALUES ('8', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:49:02');
INSERT INTO `tbl_article` VALUES ('9', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-23 17:29:17');
INSERT INTO `tbl_article` VALUES ('10', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'hide', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-23 17:29:17');
INSERT INTO `tbl_article` VALUES ('11', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'hide', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-25 16:17:19');
INSERT INTO `tbl_article` VALUES ('12', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-25 16:17:36');
INSERT INTO `tbl_article` VALUES ('13', '2', 'ทดสอบ', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-01-09 10:16:30', '2018-06-25 16:40:01');
INSERT INTO `tbl_article` VALUES ('16', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:18:44');
INSERT INTO `tbl_article` VALUES ('17', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:38:33');
INSERT INTO `tbl_article` VALUES ('18', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:50:19');
INSERT INTO `tbl_article` VALUES ('19', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-08 22:08:00');
INSERT INTO `tbl_article` VALUES ('20', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-07-12 17:34:34', '2018-07-08 22:10:22');
INSERT INTO `tbl_article` VALUES ('21', '6', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-08 22:20:51');
INSERT INTO `tbl_article` VALUES ('22', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:10:57');
INSERT INTO `tbl_article` VALUES ('23', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:16:27');
INSERT INTO `tbl_article` VALUES ('24', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:19:30');
INSERT INTO `tbl_article` VALUES ('25', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:45:14');
INSERT INTO `tbl_article` VALUES ('26', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:45:44');
INSERT INTO `tbl_article` VALUES ('27', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:48:00');
INSERT INTO `tbl_article` VALUES ('28', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:49:11');
INSERT INTO `tbl_article` VALUES ('29', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:51:03');
INSERT INTO `tbl_article` VALUES ('30', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:51:14');
INSERT INTO `tbl_article` VALUES ('31', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:08');
INSERT INTO `tbl_article` VALUES ('32', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:16');
INSERT INTO `tbl_article` VALUES ('33', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:30');
INSERT INTO `tbl_article` VALUES ('34', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:54:46');
INSERT INTO `tbl_article` VALUES ('35', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:59:32');
INSERT INTO `tbl_article` VALUES ('36', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:03:39');
INSERT INTO `tbl_article` VALUES ('37', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:09:22');
INSERT INTO `tbl_article` VALUES ('38', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '5', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:10:09');
INSERT INTO `tbl_article` VALUES ('39', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:11:58');
INSERT INTO `tbl_article` VALUES ('42', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:16:43');
INSERT INTO `tbl_article` VALUES ('43', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:20:00');
INSERT INTO `tbl_article` VALUES ('49', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '200076db4224e08174cff5cad1089a3b.png', '37', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-07-15 11:02:42', '2018-07-09 17:33:46');
INSERT INTO `tbl_article` VALUES ('142', '1', 'เจนจิรา กวิน', '<p>เจนจิรา กวินชวนชิด</p>\r\n', 'b43d9bdba4adb53ff2379116b8f0b49c.jpg', '0', 'show', 'เจนจิรา กวินชวนชิด', '2020-01-29 08:29:52', '2020-01-21 11:10:52');
INSERT INTO `tbl_article` VALUES ('144', '1', 'ทดสอบ', '<p>กกกก</p>\r\n', 'da9ec75c682c6b9ba73194c08093ab80.jpg', '0', 'show', 'กกก', '2020-01-21 05:43:42', '2020-01-21 11:42:47');
INSERT INTO `tbl_article` VALUES ('145', '1', 'XAAA', '<p>CAAA</p>\r\n', 'daf418d9eacfcd1befb187702fd55bf3.jpg', '0', 'show', 'CAAA', '2020-01-28 10:00:14', '2020-01-28 15:36:19');

-- ----------------------------
-- Table structure for tbl_counter
-- ----------------------------
DROP TABLE IF EXISTS `tbl_counter`;
CREATE TABLE `tbl_counter` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_ip` varchar(50) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=738 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_counter
-- ----------------------------
INSERT INTO `tbl_counter` VALUES ('1', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('2', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('3', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('4', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('5', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('6', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('7', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('8', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('9', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('10', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('11', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('12', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('13', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('14', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('15', '127.0.0.1', '2018-07-03 18:32:40');
INSERT INTO `tbl_counter` VALUES ('16', '127.0.0.1', '2018-07-03 18:33:09');
INSERT INTO `tbl_counter` VALUES ('17', '127.0.0.1', '2018-07-03 18:34:21');
INSERT INTO `tbl_counter` VALUES ('18', '127.0.0.1', '2018-07-03 18:34:52');
INSERT INTO `tbl_counter` VALUES ('19', '127.0.0.1', '2018-07-03 18:37:29');
INSERT INTO `tbl_counter` VALUES ('20', '127.0.0.1', '2018-07-03 18:37:30');
INSERT INTO `tbl_counter` VALUES ('21', '127.0.0.1', '2018-07-03 18:37:32');
INSERT INTO `tbl_counter` VALUES ('22', '127.0.0.1', '2018-07-03 18:37:32');
INSERT INTO `tbl_counter` VALUES ('23', '127.0.0.1', '2018-07-03 18:37:33');
INSERT INTO `tbl_counter` VALUES ('24', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('25', '127.0.0.1', '2018-07-03 18:39:16');
INSERT INTO `tbl_counter` VALUES ('26', '127.0.0.1', '2018-07-03 18:39:18');
INSERT INTO `tbl_counter` VALUES ('27', '127.0.0.1', '2018-07-03 18:39:19');
INSERT INTO `tbl_counter` VALUES ('28', '127.0.0.1', '2018-07-03 18:41:11');
INSERT INTO `tbl_counter` VALUES ('29', '127.0.0.1', '2018-07-03 18:41:14');
INSERT INTO `tbl_counter` VALUES ('30', '127.0.0.1', '2018-07-03 18:41:47');
INSERT INTO `tbl_counter` VALUES ('31', '127.0.0.1', '2018-07-03 18:42:24');
INSERT INTO `tbl_counter` VALUES ('32', '127.0.0.1', '2018-07-03 18:42:50');
INSERT INTO `tbl_counter` VALUES ('33', '127.0.0.1', '2018-07-03 18:58:19');
INSERT INTO `tbl_counter` VALUES ('34', '127.0.0.1', '2018-07-03 19:00:23');
INSERT INTO `tbl_counter` VALUES ('35', '127.0.0.1', '2018-07-03 19:03:30');
INSERT INTO `tbl_counter` VALUES ('36', '127.0.0.1', '2018-07-03 19:03:57');
INSERT INTO `tbl_counter` VALUES ('37', '127.0.0.1', '2018-07-03 19:07:22');
INSERT INTO `tbl_counter` VALUES ('38', '127.0.0.1', '2018-07-03 19:08:34');
INSERT INTO `tbl_counter` VALUES ('39', '127.0.0.1', '2018-07-03 19:31:52');
INSERT INTO `tbl_counter` VALUES ('40', '127.0.0.1', '2018-07-03 19:32:33');
INSERT INTO `tbl_counter` VALUES ('41', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('42', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('43', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('44', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('45', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('46', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('47', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('48', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('49', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('50', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('51', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('52', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('53', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('54', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('55', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('56', '127.0.0.1', '2018-07-03 20:11:25');
INSERT INTO `tbl_counter` VALUES ('57', '127.0.0.1', '2018-07-03 20:11:27');
INSERT INTO `tbl_counter` VALUES ('58', '127.0.0.1', '2018-07-03 20:11:35');
INSERT INTO `tbl_counter` VALUES ('59', '127.0.0.1', '2018-07-03 20:12:09');
INSERT INTO `tbl_counter` VALUES ('60', '127.0.0.1', '2018-07-03 20:12:10');
INSERT INTO `tbl_counter` VALUES ('61', '127.0.0.1', '2018-07-04 21:13:07');
INSERT INTO `tbl_counter` VALUES ('62', '127.0.0.1', '2018-07-05 16:38:11');
INSERT INTO `tbl_counter` VALUES ('63', '127.0.0.1', '2018-07-05 16:39:48');
INSERT INTO `tbl_counter` VALUES ('64', '127.0.0.1', '2018-07-05 16:40:47');
INSERT INTO `tbl_counter` VALUES ('65', '127.0.0.1', '2018-07-05 16:40:48');
INSERT INTO `tbl_counter` VALUES ('66', '127.0.0.1', '2018-07-05 16:40:59');
INSERT INTO `tbl_counter` VALUES ('67', '127.0.0.1', '2018-07-05 16:41:35');
INSERT INTO `tbl_counter` VALUES ('68', '127.0.0.1', '2018-07-05 16:44:48');
INSERT INTO `tbl_counter` VALUES ('69', '127.0.0.1', '2018-07-05 16:57:45');
INSERT INTO `tbl_counter` VALUES ('70', '127.0.0.1', '2018-07-05 17:03:15');
INSERT INTO `tbl_counter` VALUES ('71', '127.0.0.1', '2018-07-05 17:04:50');
INSERT INTO `tbl_counter` VALUES ('72', '127.0.0.1', '2018-07-05 17:05:13');
INSERT INTO `tbl_counter` VALUES ('73', '127.0.0.1', '2018-07-05 17:08:07');
INSERT INTO `tbl_counter` VALUES ('74', '127.0.0.1', '2018-07-05 17:08:23');
INSERT INTO `tbl_counter` VALUES ('75', '127.0.0.1', '2018-07-05 17:10:52');
INSERT INTO `tbl_counter` VALUES ('76', '127.0.0.1', '2018-07-05 17:17:43');
INSERT INTO `tbl_counter` VALUES ('77', '127.0.0.1', '2018-07-05 17:17:45');
INSERT INTO `tbl_counter` VALUES ('78', '127.0.0.1', '2018-07-05 17:17:46');
INSERT INTO `tbl_counter` VALUES ('79', '127.0.0.1', '2018-07-05 17:17:47');
INSERT INTO `tbl_counter` VALUES ('80', '127.0.0.1', '2018-07-05 17:17:59');
INSERT INTO `tbl_counter` VALUES ('81', '127.0.0.1', '2018-07-05 17:23:20');
INSERT INTO `tbl_counter` VALUES ('82', '127.0.0.1', '2018-07-05 17:23:40');
INSERT INTO `tbl_counter` VALUES ('83', '127.0.0.1', '2018-07-05 17:26:39');
INSERT INTO `tbl_counter` VALUES ('84', '127.0.0.1', '2018-07-05 17:31:24');
INSERT INTO `tbl_counter` VALUES ('85', '127.0.0.1', '2018-07-05 17:38:08');
INSERT INTO `tbl_counter` VALUES ('86', '127.0.0.1', '2018-07-05 17:39:04');
INSERT INTO `tbl_counter` VALUES ('87', '127.0.0.1', '2018-07-05 17:50:46');
INSERT INTO `tbl_counter` VALUES ('88', '127.0.0.1', '2018-07-05 17:51:02');
INSERT INTO `tbl_counter` VALUES ('89', '127.0.0.1', '2018-07-05 17:51:24');
INSERT INTO `tbl_counter` VALUES ('90', '127.0.0.1', '2018-07-05 17:51:37');
INSERT INTO `tbl_counter` VALUES ('91', '127.0.0.1', '2018-07-05 17:52:01');
INSERT INTO `tbl_counter` VALUES ('92', '127.0.0.1', '2018-07-05 17:52:18');
INSERT INTO `tbl_counter` VALUES ('93', '127.0.0.1', '2018-07-05 17:52:20');
INSERT INTO `tbl_counter` VALUES ('94', '127.0.0.1', '2018-07-05 17:54:01');
INSERT INTO `tbl_counter` VALUES ('95', '127.0.0.1', '2018-07-05 17:54:05');
INSERT INTO `tbl_counter` VALUES ('96', '127.0.0.1', '2018-07-05 17:54:25');
INSERT INTO `tbl_counter` VALUES ('97', '127.0.0.1', '2018-07-05 17:54:26');
INSERT INTO `tbl_counter` VALUES ('98', '127.0.0.1', '2018-07-05 17:56:33');
INSERT INTO `tbl_counter` VALUES ('99', '127.0.0.1', '2018-07-05 17:56:34');
INSERT INTO `tbl_counter` VALUES ('100', '127.0.0.1', '2018-07-05 17:58:06');
INSERT INTO `tbl_counter` VALUES ('101', '127.0.0.1', '2018-07-05 17:59:08');
INSERT INTO `tbl_counter` VALUES ('102', '127.0.0.1', '2018-07-07 11:27:43');
INSERT INTO `tbl_counter` VALUES ('103', '127.0.0.1', '2018-07-07 11:48:10');
INSERT INTO `tbl_counter` VALUES ('104', '127.0.0.1', '2018-07-07 11:48:18');
INSERT INTO `tbl_counter` VALUES ('105', '127.0.0.1', '2018-07-07 11:48:24');
INSERT INTO `tbl_counter` VALUES ('106', '127.0.0.1', '2018-07-08 22:06:35');
INSERT INTO `tbl_counter` VALUES ('107', '127.0.0.1', '2018-07-08 22:09:49');
INSERT INTO `tbl_counter` VALUES ('108', '127.0.0.1', '2018-07-08 22:10:48');
INSERT INTO `tbl_counter` VALUES ('109', '127.0.0.1', '2018-07-08 22:11:43');
INSERT INTO `tbl_counter` VALUES ('110', '127.0.0.1', '2018-07-08 22:12:42');
INSERT INTO `tbl_counter` VALUES ('111', '127.0.0.1', '2018-07-08 22:13:08');
INSERT INTO `tbl_counter` VALUES ('112', '127.0.0.1', '2018-07-08 22:21:19');
INSERT INTO `tbl_counter` VALUES ('113', '127.0.0.1', '2018-07-08 22:22:03');
INSERT INTO `tbl_counter` VALUES ('114', '127.0.0.1', '2018-07-08 22:23:52');
INSERT INTO `tbl_counter` VALUES ('115', '127.0.0.1', '2018-07-08 22:23:57');
INSERT INTO `tbl_counter` VALUES ('116', '127.0.0.1', '2018-07-08 22:32:32');
INSERT INTO `tbl_counter` VALUES ('117', '127.0.0.1', '2018-07-08 22:32:45');
INSERT INTO `tbl_counter` VALUES ('118', '127.0.0.1', '2018-07-08 23:03:15');
INSERT INTO `tbl_counter` VALUES ('119', '127.0.0.1', '2018-07-08 23:03:27');
INSERT INTO `tbl_counter` VALUES ('120', '127.0.0.1', '2018-07-08 23:19:53');
INSERT INTO `tbl_counter` VALUES ('121', '127.0.0.1', '2018-07-08 23:20:49');
INSERT INTO `tbl_counter` VALUES ('122', '127.0.0.1', '2018-07-09 17:23:53');
INSERT INTO `tbl_counter` VALUES ('123', '127.0.0.1', '2018-07-09 17:24:01');
INSERT INTO `tbl_counter` VALUES ('124', '127.0.0.1', '2018-07-09 17:24:42');
INSERT INTO `tbl_counter` VALUES ('125', '127.0.0.1', '2018-07-09 17:33:32');
INSERT INTO `tbl_counter` VALUES ('126', '127.0.0.1', '2018-07-09 17:35:42');
INSERT INTO `tbl_counter` VALUES ('127', '127.0.0.1', '2018-07-09 17:37:06');
INSERT INTO `tbl_counter` VALUES ('128', '127.0.0.1', '2018-07-09 17:37:08');
INSERT INTO `tbl_counter` VALUES ('129', '127.0.0.1', '2018-07-09 17:37:11');
INSERT INTO `tbl_counter` VALUES ('130', '127.0.0.1', '2018-07-09 17:37:32');
INSERT INTO `tbl_counter` VALUES ('131', '127.0.0.1', '2018-07-09 17:37:43');
INSERT INTO `tbl_counter` VALUES ('132', '127.0.0.1', '2018-07-09 17:39:56');
INSERT INTO `tbl_counter` VALUES ('133', '127.0.0.1', '2018-07-09 17:41:02');
INSERT INTO `tbl_counter` VALUES ('134', '127.0.0.1', '2018-07-09 17:41:26');
INSERT INTO `tbl_counter` VALUES ('135', '127.0.0.1', '2018-07-09 18:30:53');
INSERT INTO `tbl_counter` VALUES ('136', '127.0.0.1', '2018-07-09 18:33:02');
INSERT INTO `tbl_counter` VALUES ('137', '127.0.0.1', '2018-07-09 18:33:02');
INSERT INTO `tbl_counter` VALUES ('138', '127.0.0.1', '2018-07-09 18:33:06');
INSERT INTO `tbl_counter` VALUES ('139', '127.0.0.1', '2018-07-09 18:33:20');
INSERT INTO `tbl_counter` VALUES ('140', '127.0.0.1', '2018-07-09 18:34:55');
INSERT INTO `tbl_counter` VALUES ('141', '127.0.0.1', '2018-07-09 18:35:04');
INSERT INTO `tbl_counter` VALUES ('142', '127.0.0.1', '2018-07-09 18:43:53');
INSERT INTO `tbl_counter` VALUES ('143', '127.0.0.1', '2018-07-09 18:48:14');
INSERT INTO `tbl_counter` VALUES ('144', '127.0.0.1', '2018-07-09 18:48:15');
INSERT INTO `tbl_counter` VALUES ('145', '127.0.0.1', '2018-07-09 18:48:15');
INSERT INTO `tbl_counter` VALUES ('146', '127.0.0.1', '2018-07-09 18:50:12');
INSERT INTO `tbl_counter` VALUES ('147', '127.0.0.1', '2018-07-09 18:52:07');
INSERT INTO `tbl_counter` VALUES ('148', '127.0.0.1', '2018-07-11 11:11:34');
INSERT INTO `tbl_counter` VALUES ('149', '127.0.0.1', '2018-07-11 11:13:55');
INSERT INTO `tbl_counter` VALUES ('150', '127.0.0.1', '2018-07-12 22:20:21');
INSERT INTO `tbl_counter` VALUES ('151', '127.0.0.1', '2018-07-12 22:35:40');
INSERT INTO `tbl_counter` VALUES ('152', '127.0.0.1', '2018-07-12 22:38:33');
INSERT INTO `tbl_counter` VALUES ('153', '127.0.0.1', '2018-07-12 22:38:39');
INSERT INTO `tbl_counter` VALUES ('154', '127.0.0.1', '2018-07-14 12:48:56');
INSERT INTO `tbl_counter` VALUES ('155', '127.0.0.1', '2018-07-14 13:06:04');
INSERT INTO `tbl_counter` VALUES ('156', '127.0.0.1', '2018-07-14 16:28:13');
INSERT INTO `tbl_counter` VALUES ('157', '127.0.0.1', '2018-07-14 22:44:47');
INSERT INTO `tbl_counter` VALUES ('158', '127.0.0.1', '2018-07-15 15:54:10');
INSERT INTO `tbl_counter` VALUES ('159', '127.0.0.1', '2018-07-15 16:00:22');
INSERT INTO `tbl_counter` VALUES ('160', '127.0.0.1', '2018-07-15 16:02:51');
INSERT INTO `tbl_counter` VALUES ('161', '127.0.0.1', '2018-07-15 16:05:19');
INSERT INTO `tbl_counter` VALUES ('162', '127.0.0.1', '2018-07-15 16:07:07');
INSERT INTO `tbl_counter` VALUES ('163', '127.0.0.1', '2018-07-15 16:08:19');
INSERT INTO `tbl_counter` VALUES ('164', '127.0.0.1', '2018-07-15 16:08:22');
INSERT INTO `tbl_counter` VALUES ('165', '127.0.0.1', '2018-07-15 16:08:57');
INSERT INTO `tbl_counter` VALUES ('166', '127.0.0.1', '2018-07-15 16:08:59');
INSERT INTO `tbl_counter` VALUES ('167', '127.0.0.1', '2018-07-15 16:09:01');
INSERT INTO `tbl_counter` VALUES ('168', '127.0.0.1', '2018-07-15 16:09:19');
INSERT INTO `tbl_counter` VALUES ('169', '127.0.0.1', '2018-07-31 21:23:11');
INSERT INTO `tbl_counter` VALUES ('170', '127.0.0.1', '2018-07-31 21:23:28');
INSERT INTO `tbl_counter` VALUES ('171', '127.0.0.1', '2018-07-31 21:25:23');
INSERT INTO `tbl_counter` VALUES ('172', '127.0.0.1', '2018-07-31 21:26:04');
INSERT INTO `tbl_counter` VALUES ('173', '127.0.0.1', '2018-07-31 21:26:05');
INSERT INTO `tbl_counter` VALUES ('174', '127.0.0.1', '2018-07-31 21:26:05');
INSERT INTO `tbl_counter` VALUES ('175', '127.0.0.1', '2018-07-31 21:26:39');
INSERT INTO `tbl_counter` VALUES ('176', '127.0.0.1', '2018-07-31 21:26:51');
INSERT INTO `tbl_counter` VALUES ('177', '127.0.0.1', '2018-07-31 21:27:46');
INSERT INTO `tbl_counter` VALUES ('178', '127.0.0.1', '2018-07-31 21:31:09');
INSERT INTO `tbl_counter` VALUES ('179', '127.0.0.1', '2018-10-03 21:22:48');
INSERT INTO `tbl_counter` VALUES ('180', '127.0.0.1', '2018-10-03 21:23:26');
INSERT INTO `tbl_counter` VALUES ('181', '127.0.0.1', '2018-10-03 21:23:48');
INSERT INTO `tbl_counter` VALUES ('182', '127.0.0.1', '2018-10-03 21:24:01');
INSERT INTO `tbl_counter` VALUES ('183', '127.0.0.1', '2018-10-16 14:48:16');
INSERT INTO `tbl_counter` VALUES ('184', '127.0.0.1', '2018-10-16 14:48:19');
INSERT INTO `tbl_counter` VALUES ('185', '127.0.0.1', '2018-10-16 14:48:37');
INSERT INTO `tbl_counter` VALUES ('186', '127.0.0.1', '2018-10-16 14:48:38');
INSERT INTO `tbl_counter` VALUES ('187', '127.0.0.1', '2018-10-16 14:49:40');
INSERT INTO `tbl_counter` VALUES ('188', '127.0.0.1', '2018-11-04 19:43:57');
INSERT INTO `tbl_counter` VALUES ('189', '127.0.0.1', '2018-11-04 19:47:55');
INSERT INTO `tbl_counter` VALUES ('190', '127.0.0.1', '2018-11-04 19:50:31');
INSERT INTO `tbl_counter` VALUES ('191', '127.0.0.1', '2018-11-04 19:52:52');
INSERT INTO `tbl_counter` VALUES ('192', '127.0.0.1', '2018-11-04 19:53:24');
INSERT INTO `tbl_counter` VALUES ('193', '127.0.0.1', '2019-01-24 17:04:32');
INSERT INTO `tbl_counter` VALUES ('194', '127.0.0.1', '2019-01-24 17:07:18');
INSERT INTO `tbl_counter` VALUES ('195', '127.0.0.1', '2019-01-24 17:08:04');
INSERT INTO `tbl_counter` VALUES ('196', '127.0.0.1', '2019-01-29 19:30:35');
INSERT INTO `tbl_counter` VALUES ('197', '127.0.0.1', '2019-01-29 21:08:42');
INSERT INTO `tbl_counter` VALUES ('198', '127.0.0.1', '2019-01-29 21:09:03');
INSERT INTO `tbl_counter` VALUES ('199', '127.0.0.1', '2019-01-29 21:09:22');
INSERT INTO `tbl_counter` VALUES ('200', '127.0.0.1', '2019-01-29 21:09:39');
INSERT INTO `tbl_counter` VALUES ('201', '127.0.0.1', '2019-01-29 21:09:53');
INSERT INTO `tbl_counter` VALUES ('202', '127.0.0.1', '2019-01-29 21:11:58');
INSERT INTO `tbl_counter` VALUES ('203', '127.0.0.1', '2019-01-29 21:11:58');
INSERT INTO `tbl_counter` VALUES ('204', '127.0.0.1', '2019-01-29 21:11:59');
INSERT INTO `tbl_counter` VALUES ('205', '127.0.0.1', '2019-01-29 21:12:02');
INSERT INTO `tbl_counter` VALUES ('206', '127.0.0.1', '2019-01-29 21:12:04');
INSERT INTO `tbl_counter` VALUES ('207', '127.0.0.1', '2019-02-21 17:04:09');
INSERT INTO `tbl_counter` VALUES ('208', '127.0.0.1', '2019-03-05 19:28:19');
INSERT INTO `tbl_counter` VALUES ('209', '127.0.0.1', '2019-03-05 19:28:32');
INSERT INTO `tbl_counter` VALUES ('210', '127.0.0.1', '2019-03-05 19:28:39');
INSERT INTO `tbl_counter` VALUES ('211', '127.0.0.1', '2019-03-05 19:28:39');
INSERT INTO `tbl_counter` VALUES ('212', '127.0.0.1', '2019-03-05 19:29:44');
INSERT INTO `tbl_counter` VALUES ('213', '127.0.0.1', '2019-03-05 19:42:04');
INSERT INTO `tbl_counter` VALUES ('214', '127.0.0.1', '2019-03-05 19:42:14');
INSERT INTO `tbl_counter` VALUES ('215', '127.0.0.1', '2019-03-05 19:42:25');
INSERT INTO `tbl_counter` VALUES ('216', '127.0.0.1', '2019-03-05 19:43:24');
INSERT INTO `tbl_counter` VALUES ('217', '127.0.0.1', '2019-03-05 19:45:04');
INSERT INTO `tbl_counter` VALUES ('218', '127.0.0.1', '2019-03-05 19:45:11');
INSERT INTO `tbl_counter` VALUES ('219', '127.0.0.1', '2019-03-05 19:45:44');
INSERT INTO `tbl_counter` VALUES ('220', '127.0.0.1', '2019-03-05 19:48:53');
INSERT INTO `tbl_counter` VALUES ('221', '127.0.0.1', '2019-03-05 19:49:36');
INSERT INTO `tbl_counter` VALUES ('222', '127.0.0.1', '2019-03-06 16:25:31');
INSERT INTO `tbl_counter` VALUES ('223', '127.0.0.1', '2019-03-10 16:26:48');
INSERT INTO `tbl_counter` VALUES ('224', '127.0.0.1', '2019-03-10 16:26:48');
INSERT INTO `tbl_counter` VALUES ('225', '127.0.0.1', '2019-03-10 16:41:12');
INSERT INTO `tbl_counter` VALUES ('226', '127.0.0.1', '2019-03-10 16:41:13');
INSERT INTO `tbl_counter` VALUES ('227', '127.0.0.1', '2019-03-10 16:49:09');
INSERT INTO `tbl_counter` VALUES ('228', '127.0.0.1', '2019-03-18 11:18:38');
INSERT INTO `tbl_counter` VALUES ('229', '127.0.0.1', '2019-03-18 11:18:39');
INSERT INTO `tbl_counter` VALUES ('230', '127.0.0.1', '2019-03-18 11:18:43');
INSERT INTO `tbl_counter` VALUES ('231', '127.0.0.1', '2019-03-18 11:18:45');
INSERT INTO `tbl_counter` VALUES ('232', '127.0.0.1', '2019-03-18 11:19:11');
INSERT INTO `tbl_counter` VALUES ('233', '127.0.0.1', '2019-03-18 14:48:34');
INSERT INTO `tbl_counter` VALUES ('234', '127.0.0.1', '2019-03-18 14:48:34');
INSERT INTO `tbl_counter` VALUES ('235', '127.0.0.1', '2019-03-18 14:51:04');
INSERT INTO `tbl_counter` VALUES ('236', '127.0.0.1', '2019-03-18 14:51:07');
INSERT INTO `tbl_counter` VALUES ('237', '127.0.0.1', '2019-03-18 14:51:07');
INSERT INTO `tbl_counter` VALUES ('238', '127.0.0.1', '2019-03-18 14:53:12');
INSERT INTO `tbl_counter` VALUES ('239', '127.0.0.1', '2019-03-18 15:00:09');
INSERT INTO `tbl_counter` VALUES ('240', '127.0.0.1', '2019-03-18 15:01:22');
INSERT INTO `tbl_counter` VALUES ('241', '127.0.0.1', '2019-03-18 15:01:55');
INSERT INTO `tbl_counter` VALUES ('242', '127.0.0.1', '2019-03-18 15:01:56');
INSERT INTO `tbl_counter` VALUES ('243', '127.0.0.1', '2019-03-18 15:01:58');
INSERT INTO `tbl_counter` VALUES ('244', '127.0.0.1', '2019-03-18 15:02:04');
INSERT INTO `tbl_counter` VALUES ('245', '127.0.0.1', '2019-03-18 15:04:42');
INSERT INTO `tbl_counter` VALUES ('246', '127.0.0.1', '2019-03-18 15:04:50');
INSERT INTO `tbl_counter` VALUES ('247', '127.0.0.1', '2019-03-18 15:14:20');
INSERT INTO `tbl_counter` VALUES ('248', '127.0.0.1', '2019-03-18 15:20:23');
INSERT INTO `tbl_counter` VALUES ('249', '127.0.0.1', '2019-04-03 16:48:07');
INSERT INTO `tbl_counter` VALUES ('250', '127.0.0.1', '2019-04-28 08:29:46');
INSERT INTO `tbl_counter` VALUES ('251', '127.0.0.1', '2019-04-28 08:34:42');
INSERT INTO `tbl_counter` VALUES ('252', '127.0.0.1', '2019-04-28 10:00:38');
INSERT INTO `tbl_counter` VALUES ('253', '127.0.0.1', '2019-04-28 11:23:32');
INSERT INTO `tbl_counter` VALUES ('254', '127.0.0.1', '2019-07-10 18:44:04');
INSERT INTO `tbl_counter` VALUES ('255', '127.0.0.1', '2019-07-15 12:22:47');
INSERT INTO `tbl_counter` VALUES ('256', '127.0.0.1', '2019-08-11 11:32:06');
INSERT INTO `tbl_counter` VALUES ('257', '127.0.0.1', '2019-08-17 10:46:05');
INSERT INTO `tbl_counter` VALUES ('258', '127.0.0.1', '2019-08-17 10:46:34');
INSERT INTO `tbl_counter` VALUES ('259', '127.0.0.1', '2019-08-17 12:36:17');
INSERT INTO `tbl_counter` VALUES ('260', '127.0.0.1', '2019-08-17 12:36:27');
INSERT INTO `tbl_counter` VALUES ('261', '127.0.0.1', '2019-08-17 12:37:44');
INSERT INTO `tbl_counter` VALUES ('262', '127.0.0.1', '2019-08-17 12:37:45');
INSERT INTO `tbl_counter` VALUES ('263', '127.0.0.1', '2019-08-17 12:37:45');
INSERT INTO `tbl_counter` VALUES ('264', '127.0.0.1', '2019-08-17 12:37:46');
INSERT INTO `tbl_counter` VALUES ('265', '127.0.0.1', '2019-08-17 12:37:46');
INSERT INTO `tbl_counter` VALUES ('266', '127.0.0.1', '2019-08-17 12:37:46');
INSERT INTO `tbl_counter` VALUES ('267', '127.0.0.1', '2019-08-17 12:37:46');
INSERT INTO `tbl_counter` VALUES ('268', '127.0.0.1', '2019-08-17 12:45:58');
INSERT INTO `tbl_counter` VALUES ('269', '127.0.0.1', '2019-08-17 12:46:22');
INSERT INTO `tbl_counter` VALUES ('270', '127.0.0.1', '2019-08-17 15:30:14');
INSERT INTO `tbl_counter` VALUES ('271', '127.0.0.1', '2019-08-18 09:57:20');
INSERT INTO `tbl_counter` VALUES ('272', '127.0.0.1', '2019-08-18 09:58:18');
INSERT INTO `tbl_counter` VALUES ('273', '127.0.0.1', '2019-08-18 09:58:37');
INSERT INTO `tbl_counter` VALUES ('274', '127.0.0.1', '2019-08-22 14:22:55');
INSERT INTO `tbl_counter` VALUES ('275', '127.0.0.1', '2019-08-25 12:33:52');
INSERT INTO `tbl_counter` VALUES ('276', '127.0.0.1', '2019-09-05 12:46:16');
INSERT INTO `tbl_counter` VALUES ('277', '127.0.0.1', '2019-09-20 08:20:48');
INSERT INTO `tbl_counter` VALUES ('278', '127.0.0.1', '2019-09-20 08:20:54');
INSERT INTO `tbl_counter` VALUES ('279', '127.0.0.1', '2019-09-20 08:20:58');
INSERT INTO `tbl_counter` VALUES ('280', '127.0.0.1', '2019-09-20 08:21:47');
INSERT INTO `tbl_counter` VALUES ('281', '127.0.0.1', '2019-09-20 08:32:03');
INSERT INTO `tbl_counter` VALUES ('282', '127.0.0.1', '2019-09-20 08:32:21');
INSERT INTO `tbl_counter` VALUES ('283', '127.0.0.1', '2019-09-20 08:35:23');
INSERT INTO `tbl_counter` VALUES ('284', '127.0.0.1', '2019-09-20 08:38:07');
INSERT INTO `tbl_counter` VALUES ('285', '127.0.0.1', '2019-09-20 08:42:44');
INSERT INTO `tbl_counter` VALUES ('286', '127.0.0.1', '2019-10-03 18:34:07');
INSERT INTO `tbl_counter` VALUES ('287', '127.0.0.1', '2019-10-03 18:34:18');
INSERT INTO `tbl_counter` VALUES ('288', '127.0.0.1', '2019-10-08 14:54:47');
INSERT INTO `tbl_counter` VALUES ('289', '127.0.0.1', '2019-10-08 14:59:49');
INSERT INTO `tbl_counter` VALUES ('290', '127.0.0.1', '2019-10-08 15:00:42');
INSERT INTO `tbl_counter` VALUES ('291', '127.0.0.1', '2019-10-08 15:00:52');
INSERT INTO `tbl_counter` VALUES ('292', '127.0.0.1', '2019-10-08 15:01:05');
INSERT INTO `tbl_counter` VALUES ('293', '127.0.0.1', '2019-10-08 15:02:45');
INSERT INTO `tbl_counter` VALUES ('294', '127.0.0.1', '2019-10-08 15:02:45');
INSERT INTO `tbl_counter` VALUES ('295', '127.0.0.1', '2019-10-08 15:02:47');
INSERT INTO `tbl_counter` VALUES ('296', '127.0.0.1', '2019-10-08 15:02:47');
INSERT INTO `tbl_counter` VALUES ('297', '127.0.0.1', '2019-10-08 15:03:21');
INSERT INTO `tbl_counter` VALUES ('298', '127.0.0.1', '2019-10-08 15:03:46');
INSERT INTO `tbl_counter` VALUES ('299', '127.0.0.1', '2019-10-08 15:11:57');
INSERT INTO `tbl_counter` VALUES ('300', '127.0.0.1', '2019-10-08 15:12:22');
INSERT INTO `tbl_counter` VALUES ('301', '127.0.0.1', '2019-10-08 15:12:44');
INSERT INTO `tbl_counter` VALUES ('302', '127.0.0.1', '2019-10-08 15:13:34');
INSERT INTO `tbl_counter` VALUES ('303', '127.0.0.1', '2019-10-08 15:14:01');
INSERT INTO `tbl_counter` VALUES ('304', '127.0.0.1', '2019-10-08 15:15:04');
INSERT INTO `tbl_counter` VALUES ('305', '127.0.0.1', '2019-10-08 15:21:31');
INSERT INTO `tbl_counter` VALUES ('306', '127.0.0.1', '2019-10-08 15:26:23');
INSERT INTO `tbl_counter` VALUES ('307', '127.0.0.1', '2019-10-08 15:30:18');
INSERT INTO `tbl_counter` VALUES ('308', '127.0.0.1', '2019-10-12 19:58:46');
INSERT INTO `tbl_counter` VALUES ('309', '127.0.0.1', '2019-10-20 16:15:41');
INSERT INTO `tbl_counter` VALUES ('310', '127.0.0.1', '2019-10-20 16:15:53');
INSERT INTO `tbl_counter` VALUES ('311', '127.0.0.1', '2019-10-20 16:15:53');
INSERT INTO `tbl_counter` VALUES ('312', '127.0.0.1', '2019-10-20 16:15:54');
INSERT INTO `tbl_counter` VALUES ('313', '127.0.0.1', '2019-10-20 16:15:54');
INSERT INTO `tbl_counter` VALUES ('314', '127.0.0.1', '2019-10-20 16:17:38');
INSERT INTO `tbl_counter` VALUES ('315', '127.0.0.1', '2019-10-20 16:17:46');
INSERT INTO `tbl_counter` VALUES ('316', '127.0.0.1', '2019-10-20 16:17:47');
INSERT INTO `tbl_counter` VALUES ('317', '127.0.0.1', '2019-10-20 16:17:51');
INSERT INTO `tbl_counter` VALUES ('318', '::1', '2019-11-26 13:58:38');
INSERT INTO `tbl_counter` VALUES ('319', '::1', '2019-11-26 13:58:47');
INSERT INTO `tbl_counter` VALUES ('320', '::1', '2019-11-26 16:42:28');
INSERT INTO `tbl_counter` VALUES ('321', '::1', '2019-11-26 16:42:37');
INSERT INTO `tbl_counter` VALUES ('322', '::1', '2019-11-26 16:43:33');
INSERT INTO `tbl_counter` VALUES ('323', '::1', '2019-11-26 16:44:16');
INSERT INTO `tbl_counter` VALUES ('324', '::1', '2019-11-26 16:46:49');
INSERT INTO `tbl_counter` VALUES ('325', '::1', '2019-11-26 16:46:57');
INSERT INTO `tbl_counter` VALUES ('326', '::1', '2019-11-26 16:47:15');
INSERT INTO `tbl_counter` VALUES ('327', '::1', '2019-11-26 16:58:53');
INSERT INTO `tbl_counter` VALUES ('328', '::1', '2019-11-26 16:59:00');
INSERT INTO `tbl_counter` VALUES ('329', '::1', '2019-11-26 16:59:04');
INSERT INTO `tbl_counter` VALUES ('330', '127.0.0.1', '2019-11-26 16:59:56');
INSERT INTO `tbl_counter` VALUES ('331', '127.0.0.1', '2019-11-26 18:16:34');
INSERT INTO `tbl_counter` VALUES ('332', '127.0.0.1', '2019-11-26 18:18:47');
INSERT INTO `tbl_counter` VALUES ('333', '127.0.0.1', '2019-11-26 18:18:55');
INSERT INTO `tbl_counter` VALUES ('334', '127.0.0.1', '2019-11-26 18:19:00');
INSERT INTO `tbl_counter` VALUES ('335', '127.0.0.1', '2019-11-26 18:19:44');
INSERT INTO `tbl_counter` VALUES ('336', '127.0.0.1', '2019-11-26 18:19:52');
INSERT INTO `tbl_counter` VALUES ('337', '127.0.0.1', '2019-11-26 18:23:20');
INSERT INTO `tbl_counter` VALUES ('338', '127.0.0.1', '2019-11-26 18:23:57');
INSERT INTO `tbl_counter` VALUES ('339', '127.0.0.1', '2019-11-26 18:24:09');
INSERT INTO `tbl_counter` VALUES ('340', '127.0.0.1', '2019-11-26 18:24:54');
INSERT INTO `tbl_counter` VALUES ('341', '127.0.0.1', '2019-11-26 18:24:59');
INSERT INTO `tbl_counter` VALUES ('342', '127.0.0.1', '2019-11-26 20:33:22');
INSERT INTO `tbl_counter` VALUES ('343', '127.0.0.1', '2019-11-26 20:37:07');
INSERT INTO `tbl_counter` VALUES ('344', '127.0.0.1', '2019-11-26 20:37:13');
INSERT INTO `tbl_counter` VALUES ('345', '127.0.0.1', '2019-11-26 20:44:39');
INSERT INTO `tbl_counter` VALUES ('346', '127.0.0.1', '2019-11-26 20:58:09');
INSERT INTO `tbl_counter` VALUES ('347', '127.0.0.1', '2019-11-26 20:58:12');
INSERT INTO `tbl_counter` VALUES ('348', '127.0.0.1', '2019-11-26 20:58:14');
INSERT INTO `tbl_counter` VALUES ('349', '127.0.0.1', '2019-11-26 20:58:15');
INSERT INTO `tbl_counter` VALUES ('350', '127.0.0.1', '2019-11-26 20:59:41');
INSERT INTO `tbl_counter` VALUES ('351', '127.0.0.1', '2019-11-26 21:03:07');
INSERT INTO `tbl_counter` VALUES ('352', '127.0.0.1', '2019-11-26 21:03:14');
INSERT INTO `tbl_counter` VALUES ('353', '127.0.0.1', '2019-11-26 21:03:24');
INSERT INTO `tbl_counter` VALUES ('354', '127.0.0.1', '2019-11-27 18:12:44');
INSERT INTO `tbl_counter` VALUES ('355', '127.0.0.1', '2019-11-27 18:13:13');
INSERT INTO `tbl_counter` VALUES ('356', '127.0.0.1', '2019-11-27 18:14:39');
INSERT INTO `tbl_counter` VALUES ('357', '127.0.0.1', '2019-11-27 18:15:11');
INSERT INTO `tbl_counter` VALUES ('358', '127.0.0.1', '2019-11-27 18:18:34');
INSERT INTO `tbl_counter` VALUES ('359', '::1', '2019-12-04 21:18:51');
INSERT INTO `tbl_counter` VALUES ('360', '::1', '2019-12-06 20:09:20');
INSERT INTO `tbl_counter` VALUES ('361', '127.0.0.1', '2019-12-09 22:27:31');
INSERT INTO `tbl_counter` VALUES ('362', '127.0.0.1', '2019-12-09 22:27:49');
INSERT INTO `tbl_counter` VALUES ('363', '::1', '2019-12-10 09:39:32');
INSERT INTO `tbl_counter` VALUES ('364', '127.0.0.1', '2019-12-10 10:04:59');
INSERT INTO `tbl_counter` VALUES ('365', '127.0.0.1', '2019-12-10 14:14:14');
INSERT INTO `tbl_counter` VALUES ('366', '127.0.0.1', '2019-12-10 14:14:31');
INSERT INTO `tbl_counter` VALUES ('367', '127.0.0.1', '2019-12-10 14:21:31');
INSERT INTO `tbl_counter` VALUES ('368', '127.0.0.1', '2019-12-10 14:22:15');
INSERT INTO `tbl_counter` VALUES ('369', '127.0.0.1', '2019-12-10 14:23:37');
INSERT INTO `tbl_counter` VALUES ('370', '127.0.0.1', '2019-12-10 14:24:51');
INSERT INTO `tbl_counter` VALUES ('371', '127.0.0.1', '2019-12-10 14:25:51');
INSERT INTO `tbl_counter` VALUES ('372', '127.0.0.1', '2019-12-10 14:26:31');
INSERT INTO `tbl_counter` VALUES ('373', '127.0.0.1', '2019-12-10 14:26:39');
INSERT INTO `tbl_counter` VALUES ('374', '127.0.0.1', '2019-12-10 14:27:15');
INSERT INTO `tbl_counter` VALUES ('375', '127.0.0.1', '2019-12-10 14:27:19');
INSERT INTO `tbl_counter` VALUES ('376', '127.0.0.1', '2019-12-10 14:28:54');
INSERT INTO `tbl_counter` VALUES ('377', '127.0.0.1', '2019-12-10 14:30:14');
INSERT INTO `tbl_counter` VALUES ('378', '127.0.0.1', '2019-12-10 14:32:50');
INSERT INTO `tbl_counter` VALUES ('379', '127.0.0.1', '2019-12-10 14:33:30');
INSERT INTO `tbl_counter` VALUES ('380', '127.0.0.1', '2019-12-10 14:33:41');
INSERT INTO `tbl_counter` VALUES ('381', '127.0.0.1', '2019-12-10 14:35:24');
INSERT INTO `tbl_counter` VALUES ('382', '127.0.0.1', '2019-12-10 14:35:35');
INSERT INTO `tbl_counter` VALUES ('383', '127.0.0.1', '2019-12-10 14:36:00');
INSERT INTO `tbl_counter` VALUES ('384', '127.0.0.1', '2019-12-10 14:37:07');
INSERT INTO `tbl_counter` VALUES ('385', '127.0.0.1', '2019-12-10 14:38:27');
INSERT INTO `tbl_counter` VALUES ('386', '127.0.0.1', '2019-12-10 14:38:40');
INSERT INTO `tbl_counter` VALUES ('387', '127.0.0.1', '2019-12-10 14:38:40');
INSERT INTO `tbl_counter` VALUES ('388', '127.0.0.1', '2019-12-10 14:38:40');
INSERT INTO `tbl_counter` VALUES ('389', '127.0.0.1', '2019-12-10 14:38:40');
INSERT INTO `tbl_counter` VALUES ('390', '127.0.0.1', '2019-12-10 14:38:40');
INSERT INTO `tbl_counter` VALUES ('391', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('392', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('393', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('394', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('395', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('396', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('397', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('398', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('399', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('400', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('401', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('402', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('403', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('404', '127.0.0.1', '2019-12-10 14:38:41');
INSERT INTO `tbl_counter` VALUES ('405', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('406', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('407', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('408', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('409', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('410', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('411', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('412', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('413', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('414', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('415', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('416', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('417', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('418', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('419', '127.0.0.1', '2019-12-10 14:39:09');
INSERT INTO `tbl_counter` VALUES ('420', '127.0.0.1', '2019-12-10 14:39:10');
INSERT INTO `tbl_counter` VALUES ('421', '127.0.0.1', '2019-12-10 14:39:10');
INSERT INTO `tbl_counter` VALUES ('422', '127.0.0.1', '2019-12-10 14:39:10');
INSERT INTO `tbl_counter` VALUES ('423', '127.0.0.1', '2019-12-10 14:39:10');
INSERT INTO `tbl_counter` VALUES ('424', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('425', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('426', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('427', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('428', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('429', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('430', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('431', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('432', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('433', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('434', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('435', '127.0.0.1', '2019-12-10 14:39:36');
INSERT INTO `tbl_counter` VALUES ('436', '127.0.0.1', '2019-12-10 14:39:37');
INSERT INTO `tbl_counter` VALUES ('437', '127.0.0.1', '2019-12-10 14:39:37');
INSERT INTO `tbl_counter` VALUES ('438', '127.0.0.1', '2019-12-10 14:39:39');
INSERT INTO `tbl_counter` VALUES ('439', '127.0.0.1', '2019-12-10 14:39:47');
INSERT INTO `tbl_counter` VALUES ('440', '127.0.0.1', '2019-12-10 14:40:02');
INSERT INTO `tbl_counter` VALUES ('441', '127.0.0.1', '2019-12-10 14:40:15');
INSERT INTO `tbl_counter` VALUES ('442', '127.0.0.1', '2019-12-10 14:42:05');
INSERT INTO `tbl_counter` VALUES ('443', '127.0.0.1', '2019-12-10 14:42:21');
INSERT INTO `tbl_counter` VALUES ('444', '127.0.0.1', '2019-12-10 14:42:34');
INSERT INTO `tbl_counter` VALUES ('445', '127.0.0.1', '2019-12-10 14:42:41');
INSERT INTO `tbl_counter` VALUES ('446', '127.0.0.1', '2019-12-10 14:56:15');
INSERT INTO `tbl_counter` VALUES ('447', '127.0.0.1', '2019-12-10 14:56:38');
INSERT INTO `tbl_counter` VALUES ('448', '127.0.0.1', '2019-12-10 14:57:03');
INSERT INTO `tbl_counter` VALUES ('449', '127.0.0.1', '2019-12-10 21:54:36');
INSERT INTO `tbl_counter` VALUES ('450', '127.0.0.1', '2019-12-10 21:55:20');
INSERT INTO `tbl_counter` VALUES ('451', '127.0.0.1', '2019-12-10 21:55:20');
INSERT INTO `tbl_counter` VALUES ('452', '127.0.0.1', '2019-12-10 21:55:22');
INSERT INTO `tbl_counter` VALUES ('453', '127.0.0.1', '2019-12-10 21:55:23');
INSERT INTO `tbl_counter` VALUES ('454', '::1', '2019-12-10 21:57:23');
INSERT INTO `tbl_counter` VALUES ('455', '::1', '2019-12-10 21:57:23');
INSERT INTO `tbl_counter` VALUES ('456', '::1', '2019-12-10 21:57:30');
INSERT INTO `tbl_counter` VALUES ('457', '::1', '2019-12-10 22:00:03');
INSERT INTO `tbl_counter` VALUES ('458', '127.0.0.1', '2019-12-10 22:02:20');
INSERT INTO `tbl_counter` VALUES ('459', '127.0.0.1', '2019-12-10 22:02:41');
INSERT INTO `tbl_counter` VALUES ('460', '127.0.0.1', '2019-12-10 22:03:25');
INSERT INTO `tbl_counter` VALUES ('461', '127.0.0.1', '2019-12-10 22:08:13');
INSERT INTO `tbl_counter` VALUES ('462', '127.0.0.1', '2019-12-10 22:09:04');
INSERT INTO `tbl_counter` VALUES ('463', '127.0.0.1', '2019-12-10 22:09:18');
INSERT INTO `tbl_counter` VALUES ('464', '127.0.0.1', '2019-12-10 22:09:42');
INSERT INTO `tbl_counter` VALUES ('465', '127.0.0.1', '2019-12-10 22:09:52');
INSERT INTO `tbl_counter` VALUES ('466', '127.0.0.1', '2019-12-10 22:10:41');
INSERT INTO `tbl_counter` VALUES ('467', '::1', '2019-12-10 22:23:17');
INSERT INTO `tbl_counter` VALUES ('468', '::1', '2019-12-10 22:29:36');
INSERT INTO `tbl_counter` VALUES ('469', '::1', '2019-12-10 22:30:40');
INSERT INTO `tbl_counter` VALUES ('470', '127.0.0.1', '2019-12-10 22:32:09');
INSERT INTO `tbl_counter` VALUES ('471', '::1', '2019-12-10 22:33:30');
INSERT INTO `tbl_counter` VALUES ('472', '::1', '2019-12-10 22:33:31');
INSERT INTO `tbl_counter` VALUES ('473', '127.0.0.1', '2019-12-10 22:34:24');
INSERT INTO `tbl_counter` VALUES ('474', '127.0.0.1', '2019-12-10 22:34:37');
INSERT INTO `tbl_counter` VALUES ('475', '127.0.0.1', '2019-12-10 22:40:26');
INSERT INTO `tbl_counter` VALUES ('476', '127.0.0.1', '2019-12-10 22:51:56');
INSERT INTO `tbl_counter` VALUES ('477', '::1', '2019-12-10 22:56:24');
INSERT INTO `tbl_counter` VALUES ('478', '::1', '2019-12-10 22:56:24');
INSERT INTO `tbl_counter` VALUES ('479', '::1', '2019-12-11 15:32:03');
INSERT INTO `tbl_counter` VALUES ('480', '127.0.0.1', '2019-12-11 19:17:31');
INSERT INTO `tbl_counter` VALUES ('481', '127.0.0.1', '2019-12-11 19:21:42');
INSERT INTO `tbl_counter` VALUES ('482', '::1', '2019-12-11 21:51:15');
INSERT INTO `tbl_counter` VALUES ('483', '::1', '2019-12-16 23:40:02');
INSERT INTO `tbl_counter` VALUES ('484', '::1', '2019-12-17 00:01:52');
INSERT INTO `tbl_counter` VALUES ('485', '::1', '2019-12-17 02:20:13');
INSERT INTO `tbl_counter` VALUES ('486', '::1', '2019-12-17 09:29:53');
INSERT INTO `tbl_counter` VALUES ('487', '::1', '2019-12-17 11:57:21');
INSERT INTO `tbl_counter` VALUES ('488', '::1', '2019-12-17 11:57:22');
INSERT INTO `tbl_counter` VALUES ('489', '127.0.0.1', '2019-12-17 12:14:27');
INSERT INTO `tbl_counter` VALUES ('490', '::1', '2019-12-17 22:04:10');
INSERT INTO `tbl_counter` VALUES ('491', '::1', '2019-12-17 22:04:10');
INSERT INTO `tbl_counter` VALUES ('492', '::1', '2019-12-17 23:35:31');
INSERT INTO `tbl_counter` VALUES ('493', '::1', '2019-12-17 23:35:32');
INSERT INTO `tbl_counter` VALUES ('494', '::1', '2019-12-17 23:36:38');
INSERT INTO `tbl_counter` VALUES ('495', '::1', '2019-12-17 23:44:53');
INSERT INTO `tbl_counter` VALUES ('496', '127.0.0.1', '2019-12-17 23:47:33');
INSERT INTO `tbl_counter` VALUES ('497', '127.0.0.1', '2019-12-17 23:48:07');
INSERT INTO `tbl_counter` VALUES ('498', '127.0.0.1', '2019-12-17 23:53:11');
INSERT INTO `tbl_counter` VALUES ('499', '127.0.0.1', '2019-12-17 23:53:19');
INSERT INTO `tbl_counter` VALUES ('500', '::1', '2019-12-18 00:00:40');
INSERT INTO `tbl_counter` VALUES ('501', '::1', '2019-12-18 08:53:07');
INSERT INTO `tbl_counter` VALUES ('502', '::1', '2019-12-18 08:53:08');
INSERT INTO `tbl_counter` VALUES ('503', '::1', '2019-12-18 08:59:42');
INSERT INTO `tbl_counter` VALUES ('504', '::1', '2019-12-18 09:00:05');
INSERT INTO `tbl_counter` VALUES ('505', '::1', '2019-12-18 09:00:34');
INSERT INTO `tbl_counter` VALUES ('506', '::1', '2019-12-18 09:01:08');
INSERT INTO `tbl_counter` VALUES ('507', '::1', '2019-12-18 09:01:21');
INSERT INTO `tbl_counter` VALUES ('508', '::1', '2019-12-18 09:01:49');
INSERT INTO `tbl_counter` VALUES ('509', '::1', '2019-12-18 09:02:04');
INSERT INTO `tbl_counter` VALUES ('510', '::1', '2019-12-18 09:02:08');
INSERT INTO `tbl_counter` VALUES ('511', '::1', '2019-12-18 09:02:11');
INSERT INTO `tbl_counter` VALUES ('512', '::1', '2019-12-18 09:02:21');
INSERT INTO `tbl_counter` VALUES ('513', '::1', '2019-12-18 09:02:38');
INSERT INTO `tbl_counter` VALUES ('514', '::1', '2019-12-18 09:18:17');
INSERT INTO `tbl_counter` VALUES ('515', '::1', '2019-12-18 09:18:31');
INSERT INTO `tbl_counter` VALUES ('516', '127.0.0.1', '2019-12-18 09:19:07');
INSERT INTO `tbl_counter` VALUES ('517', '127.0.0.1', '2019-12-18 09:20:08');
INSERT INTO `tbl_counter` VALUES ('518', '127.0.0.1', '2019-12-18 09:20:26');
INSERT INTO `tbl_counter` VALUES ('519', '127.0.0.1', '2019-12-18 09:20:55');
INSERT INTO `tbl_counter` VALUES ('520', '127.0.0.1', '2019-12-18 10:23:59');
INSERT INTO `tbl_counter` VALUES ('521', '127.0.0.1', '2019-12-18 11:18:27');
INSERT INTO `tbl_counter` VALUES ('522', '127.0.0.1', '2019-12-18 11:43:06');
INSERT INTO `tbl_counter` VALUES ('523', '127.0.0.1', '2019-12-18 11:44:47');
INSERT INTO `tbl_counter` VALUES ('524', '127.0.0.1', '2019-12-18 11:46:02');
INSERT INTO `tbl_counter` VALUES ('525', '127.0.0.1', '2019-12-18 11:46:29');
INSERT INTO `tbl_counter` VALUES ('526', '127.0.0.1', '2019-12-18 12:02:20');
INSERT INTO `tbl_counter` VALUES ('527', '127.0.0.1', '2019-12-18 12:05:23');
INSERT INTO `tbl_counter` VALUES ('528', '127.0.0.1', '2019-12-18 12:06:54');
INSERT INTO `tbl_counter` VALUES ('529', '127.0.0.1', '2019-12-18 12:16:25');
INSERT INTO `tbl_counter` VALUES ('530', '127.0.0.1', '2019-12-18 12:16:55');
INSERT INTO `tbl_counter` VALUES ('531', '127.0.0.1', '2019-12-18 12:17:51');
INSERT INTO `tbl_counter` VALUES ('532', '127.0.0.1', '2019-12-18 12:17:59');
INSERT INTO `tbl_counter` VALUES ('533', '127.0.0.1', '2019-12-18 12:21:54');
INSERT INTO `tbl_counter` VALUES ('534', '127.0.0.1', '2019-12-18 12:22:05');
INSERT INTO `tbl_counter` VALUES ('535', '127.0.0.1', '2019-12-18 12:23:08');
INSERT INTO `tbl_counter` VALUES ('536', '127.0.0.1', '2019-12-18 12:26:42');
INSERT INTO `tbl_counter` VALUES ('537', '127.0.0.1', '2019-12-18 12:27:46');
INSERT INTO `tbl_counter` VALUES ('538', '127.0.0.1', '2019-12-18 12:27:55');
INSERT INTO `tbl_counter` VALUES ('539', '127.0.0.1', '2019-12-18 12:28:19');
INSERT INTO `tbl_counter` VALUES ('540', '127.0.0.1', '2019-12-18 12:29:14');
INSERT INTO `tbl_counter` VALUES ('541', '::1', '2020-01-07 16:37:40');
INSERT INTO `tbl_counter` VALUES ('542', '::1', '2020-01-07 19:42:40');
INSERT INTO `tbl_counter` VALUES ('543', '::1', '2020-01-07 19:51:46');
INSERT INTO `tbl_counter` VALUES ('544', '::1', '2020-01-07 19:51:47');
INSERT INTO `tbl_counter` VALUES ('545', '::1', '2020-01-07 19:52:41');
INSERT INTO `tbl_counter` VALUES ('546', '::1', '2020-01-07 22:03:20');
INSERT INTO `tbl_counter` VALUES ('547', '127.0.0.1', '2020-01-09 15:09:05');
INSERT INTO `tbl_counter` VALUES ('548', '::1', '2020-01-09 20:09:58');
INSERT INTO `tbl_counter` VALUES ('549', '::1', '2020-01-10 16:11:52');
INSERT INTO `tbl_counter` VALUES ('550', '::1', '2020-01-16 16:17:28');
INSERT INTO `tbl_counter` VALUES ('551', '::1', '2020-01-16 16:17:36');
INSERT INTO `tbl_counter` VALUES ('552', '::1', '2020-01-16 16:17:39');
INSERT INTO `tbl_counter` VALUES ('553', '::1', '2020-01-16 16:17:43');
INSERT INTO `tbl_counter` VALUES ('554', '127.0.0.1', '2020-01-16 17:58:09');
INSERT INTO `tbl_counter` VALUES ('555', '::1', '2020-01-16 19:16:18');
INSERT INTO `tbl_counter` VALUES ('556', '127.0.0.1', '2020-01-16 20:43:39');
INSERT INTO `tbl_counter` VALUES ('557', '127.0.0.1', '2020-01-16 20:45:27');
INSERT INTO `tbl_counter` VALUES ('558', '127.0.0.1', '2020-01-16 20:53:56');
INSERT INTO `tbl_counter` VALUES ('559', '127.0.0.1', '2020-01-16 20:55:26');
INSERT INTO `tbl_counter` VALUES ('560', '127.0.0.1', '2020-01-16 20:58:30');
INSERT INTO `tbl_counter` VALUES ('561', '127.0.0.1', '2020-01-16 21:00:57');
INSERT INTO `tbl_counter` VALUES ('562', '127.0.0.1', '2020-01-16 21:04:00');
INSERT INTO `tbl_counter` VALUES ('563', '127.0.0.1', '2020-01-16 21:04:11');
INSERT INTO `tbl_counter` VALUES ('564', '127.0.0.1', '2020-01-16 21:14:26');
INSERT INTO `tbl_counter` VALUES ('565', '127.0.0.1', '2020-01-16 21:14:34');
INSERT INTO `tbl_counter` VALUES ('566', '127.0.0.1', '2020-01-16 21:14:35');
INSERT INTO `tbl_counter` VALUES ('567', '127.0.0.1', '2020-01-16 21:14:36');
INSERT INTO `tbl_counter` VALUES ('568', '127.0.0.1', '2020-01-16 21:46:51');
INSERT INTO `tbl_counter` VALUES ('569', '127.0.0.1', '2020-01-16 22:06:50');
INSERT INTO `tbl_counter` VALUES ('570', '127.0.0.1', '2020-01-16 22:08:30');
INSERT INTO `tbl_counter` VALUES ('571', '127.0.0.1', '2020-01-16 22:26:18');
INSERT INTO `tbl_counter` VALUES ('572', '127.0.0.1', '2020-01-16 22:26:29');
INSERT INTO `tbl_counter` VALUES ('573', '127.0.0.1', '2020-01-16 22:27:56');
INSERT INTO `tbl_counter` VALUES ('574', '127.0.0.1', '2020-01-16 22:27:59');
INSERT INTO `tbl_counter` VALUES ('575', '127.0.0.1', '2020-01-16 22:28:14');
INSERT INTO `tbl_counter` VALUES ('576', '127.0.0.1', '2020-01-16 22:29:31');
INSERT INTO `tbl_counter` VALUES ('577', '127.0.0.1', '2020-01-16 22:57:20');
INSERT INTO `tbl_counter` VALUES ('578', '127.0.0.1', '2020-01-16 23:00:51');
INSERT INTO `tbl_counter` VALUES ('579', '127.0.0.1', '2020-01-16 23:00:53');
INSERT INTO `tbl_counter` VALUES ('580', '127.0.0.1', '2020-01-16 23:01:18');
INSERT INTO `tbl_counter` VALUES ('581', '127.0.0.1', '2020-01-16 23:01:36');
INSERT INTO `tbl_counter` VALUES ('582', '127.0.0.1', '2020-01-16 23:01:41');
INSERT INTO `tbl_counter` VALUES ('583', '127.0.0.1', '2020-01-16 23:03:40');
INSERT INTO `tbl_counter` VALUES ('584', '127.0.0.1', '2020-01-16 23:03:53');
INSERT INTO `tbl_counter` VALUES ('585', '127.0.0.1', '2020-01-16 23:07:00');
INSERT INTO `tbl_counter` VALUES ('586', '127.0.0.1', '2020-01-16 23:08:32');
INSERT INTO `tbl_counter` VALUES ('587', '127.0.0.1', '2020-01-16 23:13:22');
INSERT INTO `tbl_counter` VALUES ('588', '127.0.0.1', '2020-01-16 23:36:04');
INSERT INTO `tbl_counter` VALUES ('589', '127.0.0.1', '2020-01-16 23:54:24');
INSERT INTO `tbl_counter` VALUES ('590', '127.0.0.1', '2020-01-17 00:00:20');
INSERT INTO `tbl_counter` VALUES ('591', '127.0.0.1', '2020-01-17 00:04:10');
INSERT INTO `tbl_counter` VALUES ('592', '127.0.0.1', '2020-01-17 00:04:11');
INSERT INTO `tbl_counter` VALUES ('593', '::1', '2020-01-17 12:13:06');
INSERT INTO `tbl_counter` VALUES ('594', '127.0.0.1', '2020-01-17 12:17:31');
INSERT INTO `tbl_counter` VALUES ('595', '127.0.0.1', '2020-01-17 12:21:26');
INSERT INTO `tbl_counter` VALUES ('596', '127.0.0.1', '2020-01-17 12:28:52');
INSERT INTO `tbl_counter` VALUES ('597', '127.0.0.1', '2020-01-17 12:43:55');
INSERT INTO `tbl_counter` VALUES ('598', '127.0.0.1', '2020-01-17 12:44:01');
INSERT INTO `tbl_counter` VALUES ('599', '::1', '2020-01-21 09:55:36');
INSERT INTO `tbl_counter` VALUES ('600', '::1', '2020-01-21 10:48:49');
INSERT INTO `tbl_counter` VALUES ('601', '127.0.0.1', '2020-01-21 10:56:08');
INSERT INTO `tbl_counter` VALUES ('602', '127.0.0.1', '2020-01-21 11:09:36');
INSERT INTO `tbl_counter` VALUES ('603', '127.0.0.1', '2020-01-21 11:09:43');
INSERT INTO `tbl_counter` VALUES ('604', '127.0.0.1', '2020-01-21 11:46:31');
INSERT INTO `tbl_counter` VALUES ('605', '127.0.0.1', '2020-01-21 14:53:56');
INSERT INTO `tbl_counter` VALUES ('606', '127.0.0.1', '2020-01-21 15:29:28');
INSERT INTO `tbl_counter` VALUES ('607', '127.0.0.1', '2020-01-21 15:36:56');
INSERT INTO `tbl_counter` VALUES ('608', '127.0.0.1', '2020-01-21 15:37:07');
INSERT INTO `tbl_counter` VALUES ('609', '127.0.0.1', '2020-01-21 15:37:12');
INSERT INTO `tbl_counter` VALUES ('610', '127.0.0.1', '2020-01-21 15:37:24');
INSERT INTO `tbl_counter` VALUES ('611', '127.0.0.1', '2020-01-21 15:37:32');
INSERT INTO `tbl_counter` VALUES ('612', '127.0.0.1', '2020-01-21 15:37:38');
INSERT INTO `tbl_counter` VALUES ('613', '127.0.0.1', '2020-01-21 15:37:39');
INSERT INTO `tbl_counter` VALUES ('614', '127.0.0.1', '2020-01-21 15:37:52');
INSERT INTO `tbl_counter` VALUES ('615', '127.0.0.1', '2020-01-21 15:38:11');
INSERT INTO `tbl_counter` VALUES ('616', '127.0.0.1', '2020-01-21 15:38:22');
INSERT INTO `tbl_counter` VALUES ('617', '::1', '2020-01-21 15:39:22');
INSERT INTO `tbl_counter` VALUES ('618', '127.0.0.1', '2020-01-21 15:40:15');
INSERT INTO `tbl_counter` VALUES ('619', '127.0.0.1', '2020-01-21 15:40:39');
INSERT INTO `tbl_counter` VALUES ('620', '127.0.0.1', '2020-01-21 15:40:45');
INSERT INTO `tbl_counter` VALUES ('621', '127.0.0.1', '2020-01-21 15:41:26');
INSERT INTO `tbl_counter` VALUES ('622', '127.0.0.1', '2020-01-21 15:42:36');
INSERT INTO `tbl_counter` VALUES ('623', '127.0.0.1', '2020-01-21 15:43:46');
INSERT INTO `tbl_counter` VALUES ('624', '127.0.0.1', '2020-01-21 15:43:49');
INSERT INTO `tbl_counter` VALUES ('625', '127.0.0.1', '2020-01-21 15:43:50');
INSERT INTO `tbl_counter` VALUES ('626', '127.0.0.1', '2020-01-21 15:43:57');
INSERT INTO `tbl_counter` VALUES ('627', '127.0.0.1', '2020-01-21 15:44:01');
INSERT INTO `tbl_counter` VALUES ('628', '127.0.0.1', '2020-01-21 15:44:10');
INSERT INTO `tbl_counter` VALUES ('629', '127.0.0.1', '2020-01-21 17:55:07');
INSERT INTO `tbl_counter` VALUES ('630', '127.0.0.1', '2020-01-21 20:29:30');
INSERT INTO `tbl_counter` VALUES ('631', '127.0.0.1', '2020-01-21 20:29:41');
INSERT INTO `tbl_counter` VALUES ('632', '127.0.0.1', '2020-01-21 20:37:27');
INSERT INTO `tbl_counter` VALUES ('633', '127.0.0.1', '2020-01-22 00:44:55');
INSERT INTO `tbl_counter` VALUES ('634', '127.0.0.1', '2020-01-22 00:57:38');
INSERT INTO `tbl_counter` VALUES ('635', '127.0.0.1', '2020-01-22 00:58:11');
INSERT INTO `tbl_counter` VALUES ('636', '127.0.0.1', '2020-01-22 00:58:23');
INSERT INTO `tbl_counter` VALUES ('637', '127.0.0.1', '2020-01-22 01:21:28');
INSERT INTO `tbl_counter` VALUES ('638', '::1', '2020-01-22 01:52:38');
INSERT INTO `tbl_counter` VALUES ('639', '127.0.0.1', '2020-01-22 02:20:49');
INSERT INTO `tbl_counter` VALUES ('640', '127.0.0.1', '2020-01-22 02:20:57');
INSERT INTO `tbl_counter` VALUES ('641', '::1', '2020-01-28 12:14:49');
INSERT INTO `tbl_counter` VALUES ('642', '::1', '2020-01-28 12:14:56');
INSERT INTO `tbl_counter` VALUES ('643', '::1', '2020-01-28 12:18:29');
INSERT INTO `tbl_counter` VALUES ('644', '127.0.0.1', '2020-01-28 12:29:17');
INSERT INTO `tbl_counter` VALUES ('645', '127.0.0.1', '2020-01-28 12:43:36');
INSERT INTO `tbl_counter` VALUES ('646', '127.0.0.1', '2020-01-28 12:43:44');
INSERT INTO `tbl_counter` VALUES ('647', '127.0.0.1', '2020-01-28 12:43:56');
INSERT INTO `tbl_counter` VALUES ('648', '::1', '2020-01-28 12:46:49');
INSERT INTO `tbl_counter` VALUES ('649', '127.0.0.1', '2020-01-28 12:47:18');
INSERT INTO `tbl_counter` VALUES ('650', '127.0.0.1', '2020-01-28 12:47:37');
INSERT INTO `tbl_counter` VALUES ('651', '127.0.0.1', '2020-01-28 12:47:55');
INSERT INTO `tbl_counter` VALUES ('652', '::1', '2020-01-28 13:23:59');
INSERT INTO `tbl_counter` VALUES ('653', '127.0.0.1', '2020-01-28 13:29:21');
INSERT INTO `tbl_counter` VALUES ('654', '127.0.0.1', '2020-01-28 13:32:04');
INSERT INTO `tbl_counter` VALUES ('655', '::1', '2020-01-28 13:34:57');
INSERT INTO `tbl_counter` VALUES ('656', '127.0.0.1', '2020-01-28 13:37:27');
INSERT INTO `tbl_counter` VALUES ('657', '::1', '2020-01-28 13:39:17');
INSERT INTO `tbl_counter` VALUES ('658', '127.0.0.1', '2020-01-28 14:00:59');
INSERT INTO `tbl_counter` VALUES ('659', '127.0.0.1', '2020-01-28 14:01:40');
INSERT INTO `tbl_counter` VALUES ('660', '::1', '2020-01-28 14:02:19');
INSERT INTO `tbl_counter` VALUES ('661', '127.0.0.1', '2020-01-28 14:20:20');
INSERT INTO `tbl_counter` VALUES ('662', '127.0.0.1', '2020-01-28 14:23:50');
INSERT INTO `tbl_counter` VALUES ('663', '::1', '2020-01-28 14:46:42');
INSERT INTO `tbl_counter` VALUES ('664', '::1', '2020-01-28 14:57:20');
INSERT INTO `tbl_counter` VALUES ('665', '::1', '2020-01-28 15:01:39');
INSERT INTO `tbl_counter` VALUES ('666', '127.0.0.1', '2020-01-28 15:02:50');
INSERT INTO `tbl_counter` VALUES ('667', '::1', '2020-01-28 15:04:49');
INSERT INTO `tbl_counter` VALUES ('668', '::1', '2020-01-28 15:10:26');
INSERT INTO `tbl_counter` VALUES ('669', '::1', '2020-01-28 15:10:38');
INSERT INTO `tbl_counter` VALUES ('670', '127.0.0.1', '2020-01-28 15:12:44');
INSERT INTO `tbl_counter` VALUES ('671', '127.0.0.1', '2020-01-28 15:23:14');
INSERT INTO `tbl_counter` VALUES ('672', '::1', '2020-01-28 15:33:48');
INSERT INTO `tbl_counter` VALUES ('673', '127.0.0.1', '2020-01-28 15:35:09');
INSERT INTO `tbl_counter` VALUES ('674', '127.0.0.1', '2020-01-28 15:35:41');
INSERT INTO `tbl_counter` VALUES ('675', '127.0.0.1', '2020-01-28 15:49:17');
INSERT INTO `tbl_counter` VALUES ('676', '127.0.0.1', '2020-01-28 15:50:06');
INSERT INTO `tbl_counter` VALUES ('677', '::1', '2020-01-28 16:56:06');
INSERT INTO `tbl_counter` VALUES ('678', '127.0.0.1', '2020-01-28 17:14:41');
INSERT INTO `tbl_counter` VALUES ('679', '127.0.0.1', '2020-01-28 17:14:54');
INSERT INTO `tbl_counter` VALUES ('680', '127.0.0.1', '2020-01-28 17:23:24');
INSERT INTO `tbl_counter` VALUES ('681', '127.0.0.1', '2020-01-28 17:23:56');
INSERT INTO `tbl_counter` VALUES ('682', '127.0.0.1', '2020-01-28 17:30:05');
INSERT INTO `tbl_counter` VALUES ('683', '127.0.0.1', '2020-01-28 17:30:46');
INSERT INTO `tbl_counter` VALUES ('684', '127.0.0.1', '2020-01-28 17:32:35');
INSERT INTO `tbl_counter` VALUES ('685', '127.0.0.1', '2020-01-28 17:32:39');
INSERT INTO `tbl_counter` VALUES ('686', '127.0.0.1', '2020-01-28 17:50:19');
INSERT INTO `tbl_counter` VALUES ('687', '127.0.0.1', '2020-01-28 18:54:37');
INSERT INTO `tbl_counter` VALUES ('688', '127.0.0.1', '2020-01-28 18:54:43');
INSERT INTO `tbl_counter` VALUES ('689', '::1', '2020-01-28 18:55:52');
INSERT INTO `tbl_counter` VALUES ('690', '127.0.0.1', '2020-01-28 18:59:11');
INSERT INTO `tbl_counter` VALUES ('691', '127.0.0.1', '2020-01-28 19:01:44');
INSERT INTO `tbl_counter` VALUES ('692', '127.0.0.1', '2020-01-28 19:02:23');
INSERT INTO `tbl_counter` VALUES ('693', '127.0.0.1', '2020-01-28 19:02:48');
INSERT INTO `tbl_counter` VALUES ('694', '127.0.0.1', '2020-01-28 19:03:08');
INSERT INTO `tbl_counter` VALUES ('695', '127.0.0.1', '2020-01-28 19:03:35');
INSERT INTO `tbl_counter` VALUES ('696', '127.0.0.1', '2020-01-28 19:12:57');
INSERT INTO `tbl_counter` VALUES ('697', '127.0.0.1', '2020-01-28 19:13:03');
INSERT INTO `tbl_counter` VALUES ('698', '127.0.0.1', '2020-01-28 19:13:04');
INSERT INTO `tbl_counter` VALUES ('699', '127.0.0.1', '2020-01-28 19:13:11');
INSERT INTO `tbl_counter` VALUES ('700', '::1', '2020-01-28 20:24:30');
INSERT INTO `tbl_counter` VALUES ('701', '127.0.0.1', '2020-01-28 20:27:55');
INSERT INTO `tbl_counter` VALUES ('702', '127.0.0.1', '2020-01-28 20:29:18');
INSERT INTO `tbl_counter` VALUES ('703', '127.0.0.1', '2020-01-28 20:29:26');
INSERT INTO `tbl_counter` VALUES ('704', '127.0.0.1', '2020-01-28 20:36:35');
INSERT INTO `tbl_counter` VALUES ('705', '127.0.0.1', '2020-01-28 20:36:51');
INSERT INTO `tbl_counter` VALUES ('706', '127.0.0.1', '2020-01-28 20:37:33');
INSERT INTO `tbl_counter` VALUES ('707', '::1', '2020-01-28 20:39:30');
INSERT INTO `tbl_counter` VALUES ('708', '::1', '2020-01-28 20:39:30');
INSERT INTO `tbl_counter` VALUES ('709', '::1', '2020-01-28 20:39:56');
INSERT INTO `tbl_counter` VALUES ('710', '::1', '2020-01-28 20:39:56');
INSERT INTO `tbl_counter` VALUES ('711', '::1', '2020-01-28 20:40:14');
INSERT INTO `tbl_counter` VALUES ('712', '::1', '2020-01-28 20:40:14');
INSERT INTO `tbl_counter` VALUES ('713', '::1', '2020-01-28 20:50:33');
INSERT INTO `tbl_counter` VALUES ('714', '127.0.0.1', '2020-01-28 22:42:30');
INSERT INTO `tbl_counter` VALUES ('715', '127.0.0.1', '2020-01-28 23:00:58');
INSERT INTO `tbl_counter` VALUES ('716', '127.0.0.1', '2020-01-28 23:14:03');
INSERT INTO `tbl_counter` VALUES ('717', '127.0.0.1', '2020-01-28 23:17:37');
INSERT INTO `tbl_counter` VALUES ('718', '127.0.0.1', '2020-01-28 23:17:38');
INSERT INTO `tbl_counter` VALUES ('719', '127.0.0.1', '2020-01-28 23:17:39');
INSERT INTO `tbl_counter` VALUES ('720', '::1', '2020-01-28 23:26:13');
INSERT INTO `tbl_counter` VALUES ('721', '127.0.0.1', '2020-01-28 23:35:38');
INSERT INTO `tbl_counter` VALUES ('722', '127.0.0.1', '2020-01-28 23:35:53');
INSERT INTO `tbl_counter` VALUES ('723', '127.0.0.1', '2020-01-28 23:55:13');
INSERT INTO `tbl_counter` VALUES ('724', '127.0.0.1', '2020-01-28 23:55:19');
INSERT INTO `tbl_counter` VALUES ('725', '::1', '2020-01-29 00:19:21');
INSERT INTO `tbl_counter` VALUES ('726', '::1', '2020-01-29 01:10:09');
INSERT INTO `tbl_counter` VALUES ('727', '127.0.0.1', '2020-01-29 01:10:37');
INSERT INTO `tbl_counter` VALUES ('728', '127.0.0.1', '2020-01-29 01:15:39');
INSERT INTO `tbl_counter` VALUES ('729', '127.0.0.1', '2020-01-29 01:17:07');
INSERT INTO `tbl_counter` VALUES ('730', '127.0.0.1', '2020-01-29 01:17:14');
INSERT INTO `tbl_counter` VALUES ('731', '::1', '2020-01-29 01:17:21');
INSERT INTO `tbl_counter` VALUES ('732', '127.0.0.1', '2020-01-29 13:31:18');
INSERT INTO `tbl_counter` VALUES ('733', '127.0.0.1', '2020-01-29 13:31:27');
INSERT INTO `tbl_counter` VALUES ('734', '127.0.0.1', '2020-01-29 13:52:22');
INSERT INTO `tbl_counter` VALUES ('735', '::1', '2020-01-29 14:48:01');
INSERT INTO `tbl_counter` VALUES ('736', '127.0.0.1', '2020-01-29 19:38:08');
INSERT INTO `tbl_counter` VALUES ('737', '127.0.0.1', '2020-01-29 19:58:18');

-- ----------------------------
-- Table structure for tbl_doc
-- ----------------------------
DROP TABLE IF EXISTS `tbl_doc`;
CREATE TABLE `tbl_doc` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(300) NOT NULL,
  `doc_file` varchar(100) NOT NULL,
  `doc_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_doc
-- ----------------------------
INSERT INTO `tbl_doc` VALUES ('1', 'ประชาสัมพันธ์1', '9fb9e040bb9228574acc22927be19d04.pdf', '2019-03-13 20:27:12');
INSERT INTO `tbl_doc` VALUES ('2', 'ประชาสัมพันธ์2', '9fb9e040bb9228574acc22927be19d04.pdf', '2019-03-13 20:27:12');
INSERT INTO `tbl_doc` VALUES ('3', 'ประชาสัมพันธ์3', '9fb9e040bb9228574acc22927be19d04.pdf', '2019-03-13 20:27:12');
INSERT INTO `tbl_doc` VALUES ('4', 'ประชาสัมพันธ์4', '9fb9e040bb9228574acc22927be19d04.pdf', '2019-03-13 20:27:12');
INSERT INTO `tbl_doc` VALUES ('38', 'BBBBBBB', '3e56830b4bfd257b2673bbbd5ee81ce1.pdf', '2020-01-28 16:56:53');
INSERT INTO `tbl_doc` VALUES ('39', 'CCCC', 'b199f23b79306820bcad3ed0d751d414.pdf', '2020-01-28 17:50:36');
INSERT INTO `tbl_doc` VALUES ('40', 'AAAAA', 'd4fe7e9b8c3ef152b746e6241a5cac57.pdf', '2020-01-28 23:33:52');

-- ----------------------------
-- Table structure for tbl_img
-- ----------------------------
DROP TABLE IF EXISTS `tbl_img`;
CREATE TABLE `tbl_img` (
  `art_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_a_id` int(10) NOT NULL,
  `art_img` varchar(100) NOT NULL,
  `art_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_img
-- ----------------------------
INSERT INTO `tbl_img` VALUES ('1', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('2', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('3', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('4', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('5', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('6', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('7', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('8', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('9', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('10', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('11', '7', '1529549363photo1.png', '2018-06-21 09:59:16');
INSERT INTO `tbl_img` VALUES ('12', '7', '1529549363photo1.png', '2018-06-21 09:59:57');
INSERT INTO `tbl_img` VALUES ('13', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('14', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('15', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('16', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('17', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('18', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('21', '14', '1529549363photo1.png', '2018-06-26 16:08:21');
INSERT INTO `tbl_img` VALUES ('22', '14', '1529549363photo1.png', '2018-06-26 16:08:21');
INSERT INTO `tbl_img` VALUES ('26', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('28', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('29', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('30', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('32', '11', '1529549363photo1.png', '2018-06-26 16:26:28');
INSERT INTO `tbl_img` VALUES ('33', '11', '1529549363photo1.png', '2018-06-26 16:26:28');
INSERT INTO `tbl_img` VALUES ('34', '15', '1529549363photo1.png', '2018-07-05 16:53:10');
INSERT INTO `tbl_img` VALUES ('36', '13', '1529549363photo1.png', '2018-07-05 17:24:30');
INSERT INTO `tbl_img` VALUES ('37', '17', '1529549363photo1.png', '2018-07-05 17:57:39');
INSERT INTO `tbl_img` VALUES ('38', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('39', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('40', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('41', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('42', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('43', '21', '1529549363photo1.png', '2018-07-08 22:21:02');
INSERT INTO `tbl_img` VALUES ('44', '21', '1529549363photo1.png', '2018-07-08 22:21:02');
INSERT INTO `tbl_img` VALUES ('48', '48', '1529549363photo1.png', '2018-07-09 17:28:51');
INSERT INTO `tbl_img` VALUES ('49', '48', '1529549363photo1.png', '2018-07-09 17:29:43');
INSERT INTO `tbl_img` VALUES ('50', '48', '1529549363photo1.png', '2018-07-09 17:30:55');
INSERT INTO `tbl_img` VALUES ('51', '48', '1529549363photo1.png', '2018-07-09 17:32:33');
INSERT INTO `tbl_img` VALUES ('52', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('53', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('54', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('55', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('56', '46', '1576558932avatar.png', '2019-12-17 12:02:12');
INSERT INTO `tbl_img` VALUES ('57', '46', '1576558937avatar04.png', '2019-12-17 12:02:17');
INSERT INTO `tbl_img` VALUES ('58', '13', '15785566491529549363photo1.png', '2020-01-09 14:57:29');
INSERT INTO `tbl_img` VALUES ('59', '45', '15785757391529549363photo1.png', '2020-01-09 20:15:39');
INSERT INTO `tbl_img` VALUES ('60', '49', '15786634111529549363photo1.png', '2020-01-10 20:36:51');
INSERT INTO `tbl_img` VALUES ('62', '137', '15791527921529549363photo1.png', '2020-01-16 12:33:12');
INSERT INTO `tbl_img` VALUES ('66', '137', '1579240502face27.jpg', '2020-01-17 12:55:02');

-- ----------------------------
-- Table structure for tbl_level
-- ----------------------------
DROP TABLE IF EXISTS `tbl_level`;
CREATE TABLE `tbl_level` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(50) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_level
-- ----------------------------
INSERT INTO `tbl_level` VALUES ('1', 'admin');
INSERT INTO `tbl_level` VALUES ('2', 'member');
INSERT INTO `tbl_level` VALUES ('4', 'staff');
INSERT INTO `tbl_level` VALUES ('9', 'ZZZZ');

-- ----------------------------
-- Table structure for tbl_member
-- ----------------------------
DROP TABLE IF EXISTS `tbl_member`;
CREATE TABLE `tbl_member` (
  `mem_id` int(8) NOT NULL AUTO_INCREMENT,
  `l_id` int(11) NOT NULL,
  `mem_fname` varchar(30) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mem_lname` varchar(100) NOT NULL,
  `mem_tel` varchar(10) NOT NULL,
  `mem_username` varchar(20) NOT NULL,
  `mem_password` varchar(50) NOT NULL,
  `mem_email` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_member
-- ----------------------------
INSERT INTO `tbl_member` VALUES ('1', '1', 'Mr.', 'admin', 'devanban', '0999999999', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'aa@g.com', '08564bd48e42635a94d886f083b4ff4a.png', '2019-08-13 10:47:54');
INSERT INTO `tbl_member` VALUES ('20', '1', 'นาย', 'admin2', 'admin2', '0896039898', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'admin2@admin2.com', '93880b7c43ed89b6caadd4caf5bcb786.jpg', '2020-01-28 22:43:22');
INSERT INTO `tbl_member` VALUES ('21', '1', 'นาย', 'xxxxx', 'xxxxx', 'xxxxx', 'xxxxx', '9addbf544119efa4a64223b649750a510f0d463f', 'xxx@cccc.cc', '57e3c0d4db35f0c7f7943685ffe0cc92.jpg', '2020-01-28 23:15:28');
INSERT INTO `tbl_member` VALUES ('22', '1', 'นาย', 'YYYYY', 'YYYYY', '0896039898', 'YYYYY', 'd93c176ec1adf386e3b38cd81b833d06111b6626', 'YYY@YYYYY.yy', '092f5e3fd3d35570a0bc094f375b6fb0.jpg', '2020-01-28 23:19:06');
INSERT INTO `tbl_member` VALUES ('7', '4', 'นาย', 'zzzzz', 'zzzzzz', '0896039898', 'zzzzz', 'a2b7caddbc353bd7d7ace2067b8c4e34db2097a3', 'zzzzz@ssssa.kk', '23688865b16590c3048026e01969ef7f.png', '2019-12-12 23:33:04');
INSERT INTO `tbl_member` VALUES ('18', '4', 'นาย', 'staff1', 'staff', '0123456789', 'staff1', 'cbb9d0bd363a429d6d4bb85cdf509ee9b53e69fd', 'staff@fff.com', '70a72b337a3df1f021bab063a7137927.jpg', '2020-01-28 20:36:26');
INSERT INTO `tbl_member` VALUES ('19', '1', 'นาย', 'ddddsss', 'ssssssssssss', '0896039898', 'admin1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'chenchira9898@gmail.', 'eb1969138159b21587d61f95d21b5064.jpg', '2020-01-28 20:37:29');

-- ----------------------------
-- Table structure for tbl_pj_regis
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pj_regis`;
CREATE TABLE `tbl_pj_regis` (
  `pj_regis_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก ใบสมัครคูปองวิทย์เพื่อโอทอป',
  `ref_pj_id` int(10) NOT NULL COMMENT 'คีย์รอง tbl_project',
  `pj_regis_doc` varchar(100) NOT NULL COMMENT 'เก็บไฟล์เอกสารใบสมัครคูปองวิทย์เพื่อโอทอป',
  `pj_regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'เก็บวันที่อัพโหลด',
  PRIMARY KEY (`pj_regis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_pj_regis
-- ----------------------------
INSERT INTO `tbl_pj_regis` VALUES ('1', '7', '15803076641_-_Copy.pdf', '2020-01-29 21:21:04');

-- ----------------------------
-- Table structure for tbl_project
-- ----------------------------
DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE `tbl_project` (
  `pj_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_mem_id` int(10) NOT NULL COMMENT 'คีย์รอง tbl_member',
  `pj_title` varchar(100) NOT NULL COMMENT 'ชื่อโครงการ',
  `pj_last_update` datetime DEFAULT NULL COMMENT 'วันที่อัพเดทล่าสุด',
  `pj_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่อัพโหลด',
  PRIMARY KEY (`pj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_project
-- ----------------------------
INSERT INTO `tbl_project` VALUES ('4', '1', 'ทดสอบเพิ่มโครงการ', null, '2020-01-29 15:15:16');
INSERT INTO `tbl_project` VALUES ('7', '1', 'AAA', '2020-01-29 14:30:00', '2020-01-29 20:21:56');
INSERT INTO `tbl_project` VALUES ('8', '1', 'BBB', '2020-01-29 14:30:08', '2020-01-29 20:22:03');
INSERT INTO `tbl_project` VALUES ('9', '1', 'CCC', '2020-01-29 14:23:21', '2020-01-29 20:22:10');
