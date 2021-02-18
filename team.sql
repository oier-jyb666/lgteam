-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-02-18 16:48:29
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `luogu`
--

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `memberCount` int(11) NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `joinPermission` int(11) NOT NULL,
  `master` json NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`id`, `name`, `memberCount`, `description`, `joinPermission`, `master`, `time`) VALUES
(1000, '洛谷官方团队', 36, '****洛谷OnlineJudge官方团队。\r\n所有官方信息，以此团队的名义发布。\r\n\r\n\r\n### 月赛征求题目\r\n\r\n<https://www.luogu.com.cn/blog/kkksc03/luogu-call-for-contest-2>', 2, '{\"uid\": 1, \"name\": \"kkksc03\", \"badge\": \"吉祥物\", \"color\": \"Purple\", \"slogan\": \"洛谷吉祥物 DA✩ZE\", \"isAdmin\": true, \"ccfLevel\": 6, \"isBanned\": false}', '2021-02-18 15:52:30'),
(1001, '福建省厦门第一中学', 227, '福建省厦门第一中学创建于1906年，当时称厦门中学堂。厦门中学堂前身是玉屏书院，建于1751年，是厦门最早的中学，1951年定为现名。厦门第一中学是一所全日制完全中学，是福建省首批办好的重点中学、福建省普通中学一级达标学校。学校先后被授予省、市文明单位、青少年体育工作先进集体、中小学现代教育技术实验学校、省科技教育重点示范点、省先进基层党组织、省模范职工之家等荣誉称号，现为第八届省级文明单位。', 1, '{\"uid\": 14, \"name\": \"xmyzwls\", \"badge\": null, \"color\": \"Green\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 15:57:23'),
(1002, '四川省绵阳中学实验学校', 16, '自己选择的路，跪着也要走完', 1, '{\"uid\": 293, \"name\": \"IceZero\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 15:57:25'),
(1003, '福建省龙岩市武平县第二中学', 29, '暂无', 0, '{\"uid\": 316, \"name\": \"lyx96\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 15:57:27'),
(1004, '福建省厦门双十中学', 61, '福建省厦门双十中学，其高中部是全国五十强中学，福建省文明学校，福建省示范性学校，全国现代教育技术实验学校评估“成果突出学校。\n福建省厦门双十中学创办于1919年，为纪念辛亥革命，取名“双十”。于1957年成为福建省首批省重点中学。在21世纪初成功入选清华大学“新百年领军计划”与北京大学“校长实名推荐制”，在厦门被誉为“清北的摇篮”。', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:00:23'),
(1005, '福建省厦门第六中学', 50, '暂无', 1, '{\"uid\": 334, \"name\": \"ginkgo\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:00:50'),
(1006, '湖南省长沙市第一中学', 69, 'CSSYZ团队又复活啦！欢迎各位神犇加入！\n\n欢迎市一中的同学及直升的大佬们加入哦~~\n\n请大家在申请加入之前与自己对应的管理员联系后再申请，未先联系的申请有一定几率被直接拒绝\n\n管理员分组：\n\n- 发起人：$zty$\n- 高三组：$abs,yzh$\n- 高二组：$zyn,cyj$\n- 高一组：$yxt$\n\n初一初二的学弟学妹们麻烦先移步子团队：[青竹湖](https://www.luogu.org/team/show?teamid=1194)~', 1, '{\"uid\": 492, \"name\": \"Keavil\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:05'),
(1007, '浙江省湖州市德清高级中学', 33, '暂无', 1, '{\"uid\": 270, \"name\": \"违规用户名H9z3*Ge\", \"badge\": \"\", \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:05'),
(1008, '福建省厦门一中海沧附属学校', 22, '暂无', 1, '{\"uid\": 508, \"name\": \"dfzhuang\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:05'),
(1009, '江西省萍乡市萍乡中学', 78, '暂无', 0, '{\"uid\": 408, \"name\": \"jxpxcsh\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:06'),
(1010, '陕西省西安市西北工业大学附中', 36, '暂无', 1, '{\"uid\": 415, \"name\": \"xatiantian\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:06'),
(1011, '山东省烟台市第一中学', 102, '暂无', 0, '{\"uid\": 541, \"name\": \"kingshao\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:07'),
(1012, '厦门英才学校', 30, '暂无', 1, '{\"uid\": 673, \"name\": \"fds119\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:07'),
(1013, '福建省厦门外国语学校', 22, '暂无', 0, '{\"uid\": 693, \"name\": \"xmflswang\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:08'),
(1014, '福建省同安第一中学', 39, 'N/A', 1, '{\"uid\": 727, \"name\": \"TAYZ\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:08'),
(1015, '安徽省芜湖市第二十七中学', 331, '芜湖市第二十七中学的oier萌加油！\n加入者请告知年级和姓名，谢谢！\n                                        by 萌萌哒的学姐（划掉）学长zzy\n', 0, '{\"uid\": 203, \"name\": \"JOHNKRAM\", \"badge\": null, \"color\": \"Red\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 10, \"isBanned\": false}', '2021-02-18 16:02:09'),
(1016, '安徽省合肥市第五十中学', 22, '壮哉我大五十！NOIP RP++！', 1, '{\"uid\": 450, \"name\": \"zz_ylolita\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:09'),
(1017, '宁波镇海蛟川书院', 156, '我们组合的人虽然不逗逗逗逗逗。。但还是很逗逗的嘛~', 1, '{\"uid\": 1433, \"name\": \"YYMHL\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:10'),
(1018, '上海市卢湾中学', 2, '暂无', 1, '{\"uid\": 507, \"name\": \"zhouyiran2\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:10'),
(1019, '河南省焦作市第一中学', 4, '暂无', 1, '{\"uid\": 306, \"name\": \"shhybj\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:11'),
(1020, '浙江省金华市艾青中学', 4, '艾青中学拿到了信息化特色学校却没有一只OI队伍真的是太说不过去了。#(滑稽)', 1, '{\"uid\": 401, \"name\": \"soha\", \"badge\": \"空气\", \"color\": \"Purple\", \"slogan\": \"洛谷爆炸的时候，10%是因为开发组，90%是因为阿里云。\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:11'),
(1021, '安徽省淮南市实验中学', 274, '立志 明礼 勤学 奋进\n诚信 务实 团结 奉献', 1, '{\"uid\": 74, \"name\": \"lkmcfj\", \"badge\": null, \"color\": \"Orange\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 10, \"isBanned\": false}', '2021-02-18 16:02:11'),
(1022, '山东省泰安第一中学', 30, 'RP++', 1, '{\"uid\": 953, \"name\": \"liusiyu\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:12'),
(1023, '厦门科技中学', 11, '暂无', 1, '{\"uid\": 174, \"name\": \"你若安好，便是晴天\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:12'),
(1024, '山东省东营市胜利第二中学', 13, '博学善思，明辨慎言。', 1, '{\"uid\": 487, \"name\": \"Catch_22\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:13'),
(1025, '江苏南京金陵中学河西分校', 61, '', 0, '{\"uid\": 1056, \"name\": \"英明神武的熊\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:13'),
(1026, '唐山市第一中学', 80, 'TSOI2016  在TSOI2015的光辉下前进！  NOIP加油！\n\nTSOI2017  在TSOI2016的光辉下前进！  NOIP加油！\n\nTSOI2018  在TSOI2017的光辉下前进！  CSP-S加油！', 1, '{\"uid\": 11829, \"name\": \"Leowner\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:14'),
(1027, '湖南省长沙市麓山国际实验学校', 91, '进团队请加上班级姓名', 1, '{\"uid\": 4228, \"name\": \"hnsfdxlsy\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:14'),
(1028, '陕西省西安市铁一中学', 178, '暂无', 0, '{\"uid\": 3432, \"name\": \"dlhham\", \"badge\": null, \"color\": \"Green\", \"slogan\": \"年老，体衰，精力差\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:14'),
(1029, '黑龙江省哈尔滨师范大学附属中学', 29, '暂无', 0, '{\"uid\": 550, \"name\": \"Midori\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:15'),
(1030, '合肥市第四十五中学', 86, '头脑风暴 思维体操', 0, '{\"uid\": 30245, \"name\": \"合月巴人\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:15'),
(1031, '郑州外国语学校（分校）', 49, '无暴力不骗分', 1, '{\"uid\": 755, \"name\": \"我是真CS\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:16'),
(1032, '广东北江中学', 23, '暂无', 0, '{\"uid\": 1109, \"name\": \"bearx\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:16'),
(1033, '安徽省淮南师范附属小学', 51, '暂无', 0, '{\"uid\": 1399, \"name\": \"汪欣然\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:16'),
(1034, '南京师范大学附属中学', 40, '...........', 0, '{\"uid\": 1423, \"name\": \"taophee\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:17'),
(1035, '广州六中珠江中学', 2, '暂无', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:17'),
(1036, '厦门一中小号军团', 58, '2016级小学弟请注意素质', 1, '{\"uid\": 125, \"name\": \"魁拔\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:18'),
(1037, '山东省沂源县第一中学', 16, '暂无', 0, '{\"uid\": 1637, \"name\": \"江英\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:18'),
(1041, '杭州市建兰中学', 167, '0', 0, '{\"uid\": 1652, \"name\": \"lyx613\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:20'),
(1042, '福建省莆田第一中学', 35, '福建省莆田第一中学团队\n\n要加入团队请联系学校信息学奥赛指导老师', 1, '{\"uid\": 354, \"name\": \"linziyu2008\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:20'),
(1043, '河南省安阳市第七中学', 5, '暂无', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:21'),
(1044, '山东省东营市胜利第一中学', 63, '暂无', 1, '{\"uid\": 1848, \"name\": \"handsomeJian\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:21'),
(1045, '江西省九江第一中学', 20, '暂无', 0, '{\"uid\": 1854, \"name\": \"wood3xuxu\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:21'),
(1046, '安徽省蚌埠市第六中学', 12, '欢迎加入！', 1, '{\"uid\": 995, \"name\": \"2014robin\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:22'),
(1047, '绍兴市第一中学', 49, '我们的目标是？浙江的一等', 1, '{\"uid\": 1655, \"name\": \"Steam\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:22'),
(1048, '陕西师范大学附属中学', 72, ' 陕西师范大学附属中学地处日新月异的曲江新区，紧邻驰名中外的大雁塔，与大唐芙蓉园隔路相望，是人文南郊的基础教育中心，既有厚重的文化底蕴，又充满时尚光鲜的现代元素。\n', 1, '{\"uid\": 4171, \"name\": \"TobyYang\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:23'),
(1049, '广东实验中学', 36, '让hmh更帅![](https://www.luogu.com.cn/api/auth/logout?uid=29840)', 1, '{\"uid\": 1969, \"name\": \"richardlee\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:23'),
(1050, '石家庄二中', 24, '# 申请时请注明年级、班级、姓名\n\n# 实名！！！！！！！！！！！！！！！！\n', 2, '{\"uid\": 1977, \"name\": \"zrts\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:23'),
(1051, '湖南省常德市第二中学', 35, '暂无', 1, '{\"uid\": 2071, \"name\": \"oier\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:24'),
(1052, '南京市金陵中学', 20, '大江滔滔东入海，我居江东，\n \n石城虎踞山蟠龙，我当其中。\n \n钟楼嵯峨，教育之宫，桃李坐春风，\n \n思如潮，气如虹，永为南国雄。', 1, '{\"uid\": 1492, \"name\": \"HansBug\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:24'),
(1055, '曲阜师范大学附属中学', 4, '暂无', 1, '{\"uid\": 393, \"name\": \"xym6336\", \"badge\": null, \"color\": \"Green\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 6, \"isBanned\": false}', '2021-02-18 16:02:26'),
(1056, '广州市中山大学附属中学', 8, '暂无', 1, '{\"uid\": 2228, \"name\": \"MSASYSU_LZH\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:26'),
(1058, '广州市铁一中学', 27, '广州市铁一中学OI', 1, '{\"uid\": 2716, \"name\": \"gtyztjw\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:27'),
(1059, '浙江金华第一中学', 45, '暂无', 1, '{\"uid\": 2855, \"name\": \"chkb123456\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:27'),
(1060, '成都市第七中学', 82, '暂无', 0, '{\"uid\": 2967, \"name\": \"laekov\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:28'),
(1061, '淮安市开明中学', 30, '进德修业，弘毅笃行\n', 1, '{\"uid\": 3049, \"name\": \"bbbbbb\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:28'),
(1062, '山东省东营市第一中学', 54, '我们可能会不定时的举办比赛（ACM赛制可能会偏多），欢迎各大神来虐场ヾ(。◕ฺ∀◕ฺ)ノ', 0, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:29'),
(1063, '河南省安阳市第一中学', 82, '请各位同学更改昵称，格式依照机房标准', 1, '{\"uid\": 1886, \"name\": \"changke\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:29'),
(1064, '上海市曹杨第二中学', 135, '爱与和平', 1, '{\"uid\": 1456, \"name\": \"wwqk4444\", \"badge\": null, \"color\": \"Green\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:29'),
(1065, '南宁市第三中学', 46, '新团队', 0, '{\"uid\": 3213, \"name\": \"韦索宇韦\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:30'),
(1066, '安徽省蚌埠市第二中学', 19, '冲击ioi', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:30'),
(1067, '山东省莱芜第一中学', 57, 'LOI', 0, '{\"uid\": 3124, \"name\": \"Diend\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:30'),
(1068, '山东省济南市历城第二中学', 158, '$2019$ 年是历城二中信息奥赛团队所向披靡的一年。参加 $\rm NOIP$ 学生共 $31$人：获提高组省一 $16$ 人、普及一等奖 $5$ 人、任清宇同学获得NOI金牌（rank4），省一获奖率近 $70\\%$ ,学校获得山东省金牌学校 排名第一名!  \n\n$2018$ 年历城二中信息学奥赛蒸蒸日上。在 $\rm NOIP2018$ 中，获省一 $8$ 人、省二 $20$ 人、省三 $1$ 人\n。其中有 $54.3\\%$ 的具有省一同等实力的同学在全国一等奖基准线以上。同时，在 $\rm NOI2018$ 中，任清宇同学取得了银牌，创造了历城二中的历史最好成绩。\n\n几十个日夜的拼搏，几十位同学的共同努力，一步一个脚印，从一个蹒跚学步的孩子，经过几年扎实刻苦拼搏努力，历城二中成为了山东省信息学奥赛圈中十分具有话语权、十分令人向往的学校。这一切都离不开一代又一代信竞学子的努力与付出，离不开一代又一代信竞学子对初心的坚守。\n\n我们一直相信，要踏实走好自己的路，要用自己的双手创造未来！\n\n不忘初心，方得始终；人生在勤，志达天下！', 1, '{\"uid\": 3501, \"name\": \"xxas2020\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"力拔山兮气盖世\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:31'),
(1069, '山东省昌邑市实验中学', 47, 'Fighting—撞在我大实验 不 壮哉我大实验\n\n好好编程  天天向上\n\n乖乖打卡 次次AC\n\n为伟大的OI事业 艰苦创业 奋斗终生', 0, '{\"uid\": 1538, \"name\": \"ws_fx0\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:31'),
(1070, '安徽省淮北市第一中学', 74, '暂无', 0, '{\"uid\": 3265, \"name\": \"Knight\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:32'),
(1071, '安徽合肥寿春中学', 22, '暂无', 0, '{\"uid\": 3575, \"name\": \"Chuck__\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:32'),
(1073, '河北衡水中学', 3, '吾之前方，绝无敌手！\r\n                                         ——For HZOIer', 1, '{\"uid\": 3351, \"name\": \"loveoj1997\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:33'),
(1074, '山东省临清市第一中学', 91, '壮哉我大一中!', 1, '{\"uid\": 3698, \"name\": \"joe_teemo\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:33'),
(1075, '浙江省台州市路桥中学', 43, '暂无', 1, '{\"uid\": 2834, \"name\": \"qq924675986\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:34'),
(1076, '成都外国语学校', 4, 'CWOI', 1, '{\"uid\": 3756, \"name\": \"Volcano\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:34'),
(1078, '石家庄市第一中学', 79, '石家庄市第一中学，学校前身是1947年石门市建立的第一所中学——“石门联中”，1948年3月，石门联中更名为“市立中学”。9月，“市立中学”更名为“石家庄市第一中学”并分出部分师生组建石家庄市第二中学，1953年被省政府命名为河北省首批重点中学。', 1, '{\"uid\": 3944, \"name\": \"D042412\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:35'),
(1079, '山东省昌邑市第一中学', 28, '搜！', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:35'),
(1080, '东莞中学松山湖学校', 16, '暂无', 1, '{\"uid\": 3535, \"name\": \"qleonardo\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:35'),
(1081, '成都东软学院', 104, '精勤博学，学以致用', 1, '{\"uid\": 4055, \"name\": \"prajna\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:36'),
(1083, '山西省运城市康杰中学', 25, 'Live long and prosper', 0, '{\"uid\": 3968, \"name\": \"氢氧化神\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:36'),
(1085, '南京外国语学校', 98, '泉岭精神不朽，汉中诸球永生', 0, '{\"uid\": 4131, \"name\": \"diamond_duke\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:37'),
(1088, '四川省泸县第二中学', 135, '不求最好，只做更好！', 1, '{\"uid\": 5109, \"name\": \"泸县二中李波\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:39'),
(1089, '广州六中珠江中学', 33, '暂无', 1, '{\"uid\": 3, \"name\": \"洛谷\", \"badge\": \"\", \"color\": \"Purple\", \"slogan\": \"\", \"isAdmin\": true, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:39'),
(1091, '余姚市舜水中学', 20, 'pascal noip!', 1, '{\"uid\": 5439, \"name\": \"slush\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:40'),
(1092, '浙江省衢州市实验学校', 64, 'Welcome OIers from all over the world！', 0, '{\"uid\": 5422, \"name\": \"CHNFTQ\", \"badge\": null, \"color\": \"Gray\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:40'),
(1093, '南海外国语学校', 79, '暂无', 1, '{\"uid\": 3107, \"name\": \"youchengyuanzhi\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:02:41'),
(23975, 'CJ-team', 17, '努力！坚持！', 1, '{\"uid\": 49930, \"name\": \"z100627\", \"badge\": null, \"color\": \"Red\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:45:12'),
(28936, '星期五编程 C3-2', 1, '暂无', 1, '{\"uid\": 344358, \"name\": \"liuqu1990717\", \"badge\": null, \"color\": \"Blue\", \"slogan\": \"\", \"isAdmin\": false, \"ccfLevel\": 0, \"isBanned\": false}', '2021-02-18 16:46:29');

--
-- 转储表的索引
--

--
-- 表的索引 `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
