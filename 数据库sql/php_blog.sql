-- phpMyAdmin SQL Dump


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `php_blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(500) default NULL,
  `content` varchar(10000) default NULL,
  `publish_time` datetime default NULL,
  `news_type_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 导出表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `publish_time`, `news_type_id`) VALUES
(3, '科比布朗认定湖人能争冠 加索尔:交易可能要来了', '<p>\r\n	网易体育2月7日报道：</p>\r\n<p>\r\n	今天，洛杉矶湖人继续着客场之旅，这一次他们来到费城，最终湖人以90-95败给76人。</p>\r\n<p>\r\n	当地时间周一，科比在接受采访的时候表示，他相信湖人依然可以成为总冠军竞争者。在科比看来，如果湖人在余下的赛季能打出自己的潜力或者是超常发挥，那么交易并非是必须要做的事情。</p>\r\n<p>\r\n	&ldquo;我们有能力去竞争冠军，&rdquo;科比说，&ldquo;我们必须打的非常稳定，甚至要接近于完美，尤其是我们的第二阵容。我们有能力去竞争冠军。与一些其他的球队相比，我们的问题没有那么大。&rdquo;</p>\r\n<p>\r\n	对此，湖人主帅迈克-布朗也表示了认同。</p>\r\n<p>\r\n	&ldquo;继续寻找办法提升球队是米奇（湖人总经理库普切克）的工作，&rdquo;布朗说，&ldquo;他过去的能力说明了一切。他在这方面能力超凡。我已经说过了，即使球队不做任何改变，我对现在的阵容也感到兴奋和满意。&rdquo;</p>\r\n<p>\r\n	&ldquo;我想如今的湖人阵容能竞争总冠军，我很同意科比所说的话。我们现在有伤兵，比如说现在，我们得依靠菜鸟来帮助我们，当你谈论的冠军的时候，这毫无疑问是艰难的形势。&rdquo;</p>\r\n<p>\r\n	&ldquo;但是，有其他的人在他们（菜鸟古德洛克和莫里斯）身边，我感觉我们有能力实现那个目标，是的，有能力做到。&rdquo;</p>\r\n<p>\r\n	不过，湖人今天又输掉了比赛，他们目前的客场战绩变为了3胜9负，十分的不理想。</p>\r\n<p>\r\n	众所周知，在休赛期的时候，湖人一度与黄蜂和火箭达成了三方交易，几乎就要得到保罗，加索尔也险些被送走。在今天的比赛中，他砍下了16分和11个篮板，但球队依然输了球。</p>\r\n<p>\r\n	赛后，有记者谈到，如果湖人在此次的客场之旅中依然没有变的更好，湖人是不是可能会在人员上进行改变，也就是进行交易，对此加索尔表示是有可能的。</p>\r\n<p>\r\n	&ldquo;这有可能发生。&rdquo;加索尔说，&ldquo;当然，我也不知道，这不是我能控制的事情。&rdquo;</p>\r\n<p>\r\n	&ldquo;但是，我总是感觉，如果之前（休赛期）就有事情发生了，那么我觉得在交易截止日之前，交易也是有可能发生的。&rdquo;</p>\r\n<p>\r\n	&ldquo;我们也无法确定，因此我们必须尝试忘掉这些，把这些事情放到一边，继续尽可能去打好比赛，不要受到这些东西的影响。&rdquo;</p>\r\n<p>\r\n	值得一提的是，本赛季的交易截止日是3月15日。</p>\r\n', '2012-02-07 14:20:50', 1),
(4, '广东1彩民中双色球头奖9668万元掏空奖池(图)', '<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20120208/o/DF0428626E2E9322B65C68D1C01E7634.jpg" type="0" /></p>\r\n<p align="center" class="pictext">\r\n	9668万大奖的转账回单</p>\r\n<p>\r\n	　　本报讯(记者周祚) 昨日，中国福利彩票双色球2009076期开奖传出重大喜讯，广州一位彩民喜中20注一等奖，共得奖金9668万多元，创下广东单人中奖金额最高纪录！仅次于甘肃省彩民中得的1.138亿元双色球巨奖，单人中奖金额全国第二。</p>\r\n<p>\r\n	　　2009076期双色球开奖号码为：红球28、31、18、09、25、19，蓝球为06，当期全国总销量为2.2亿元，全国共中出一等奖29注，分落9省市，由于中奖注数太多，当期一等奖奖池被全部分光，单注奖金为4834333元。其中广东中得20注，经检索，这20注一等奖由一位广州彩民独得。</p>\r\n<p>\r\n	　　该张中奖彩票为一张单式多倍投注的彩票，1注号码投注了20倍，投注额为40元，由位于广州市东风东路788号的44010028福利彩票投注站售出，该张彩票售出时间是7月2日18时52分左右。</p>\r\n<p>\r\n	　　【点击进入：</p>\r\n<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20111117/o/7ECC73768CEA5CFCF1C36DF271FDFDEE.gif" type="0" /></p>\r\n<p align="center" class="pictext">\r\n	彩票合买</p>\r\n<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20111117/o/ADBD3ECB3F691A544CB870B7FA3AFAA8.gif" type="0" /></p>\r\n<p align="center" class="pictext">\r\n	双色球追号</p>\r\n<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20111117/o/5949B8F9AE7F3301BCA63E44D4D491B1.gif" type="0" /></p>\r\n<p align="center" class="pictext">\r\n	竞彩足球胜负彩</p>\r\n<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20111117/o/29E9A6A3D0A4245519539B1363A7764E.gif" type="0" /></p>\r\n<p align="center">\r\n	<img src="http://img001.photo.21cn.com/photos/album/20111117/o/4E89F5034248063323CF7A89A947129F.gif" type="0" /></p>\r\n<p align="center" class="pictext">\r\n	11选5】</p>\r\n', '2012-02-08 16:08:09', 1),
(5, '湖人绿衫军酝酿地震级交易！ 加索尔隆多互换东家', '<div class="img_wrapper">\r\n	<img alt="加索尔和隆多有可能互换东家吗？" src="http://i1.sinaimg.cn/ty/k/2012-02-08/U4345P6T12D5934587F44DT20120208101607.jpg" /><span class="img_descr">加索尔和隆多有可能互换东家吗？</span></div>\r\n<p>\r\n	<!-- 显示图片 end --><!-- 显示附图 begin --><!-- 显示附图 end --><!-- 输出内容-新分页 begin --><!-- publish_helper name=''原始正文'' p_id=''6'' t_id=''12'' d_id=''5934587'' f_id=''41'' --></p>\r\n<p>\r\n	　　新浪体育讯　北京时间2月8日消息，就在加索尔公开声称自己可能被交易后半天，美媒《篮筐世界》传出消息，湖人<a __sina1328694205022="7" href="http://weibo.com/lakersnews?zw=sports" target="_blank">(微博)</a>队有可能和凯尔特人这个死敌达成转会协议，用加索尔换来对方的后卫隆多<a href="http://weibo.com/rajonrondo?zw=sports" target="_blank">(微博)</a>。</p>\r\n<p>\r\n	　　据悉，凯尔特人队总经理安吉已经确切的知道加内特<a href="http://weibo.com/kgarnett?zw=sports" target="_blank">(微博)</a>本赛季合同到期后不会再回来，他需要找一个可以顶替加内特的人，而加索尔正是这个人选。至于为什么选择隆多进行交易，从凯尔特人队的角度而言，安吉从未想过在皮尔斯<a href="http://weibo.com/paulpiercec?zw=sports" target="_blank">(微博)</a>退役之后围绕隆多来建设球队。而从湖人队方面考虑，库普切克已经明确表示了他们的态度，&ldquo;如果有办法获得一个25岁左右的全明星控球后卫，我们会乐于进行交易。只不过这看起来不太可能在二月发生，因为我们也会看看备选方案，看哪个更好。&rdquo;</p>\r\n<p>\r\n	　　隆多几乎完美符合湖人队的标准，作为控球后卫，他稍弱的一环就是正面面框的跳投能力，但湖人队并不需要他的得分。可以说，隆多完美契合湖人队的需求。</p>\r\n<p>\r\n	　　湖人队和凯尔特人这对死敌过往也有过交易记录，最近的一次发生在2004年，湖人队把加里-佩顿<a href="http://weibo.com/garypayton?zw=sports" target="_blank">(微博)</a>、福克斯等球员送往波士顿。</p>\r\n<p>\r\n	　　湖人队对于控卫需求众所周知，赛季开始前，他们就和黄蜂达成协议，交易来保罗<a href="http://weibo.com/chrispaul?zw=sports" target="_blank">(微博)</a>，只是斯特恩从中作梗。目前，湖人队还在转会市场上寻求控卫，包括阿里纳斯、弗林以及辛里奇在内的多人和湖人队传出过交易绯闻。而在洛杉矶当地有关湖人的球迷调查中，控球后卫被认为是湖人队当下最薄弱的一环。</p>\r\n<p>\r\n	　　加索尔合同2014年夏到期，未来两年薪金总计3800万美元。隆多合同2015年夏到期，未来三年合同总计3600万美元。(大脸猫)</p>\r\n<p>\r\n	<!-- publish_helper_end --><!-- 输出内容-新分页 end --><!-- 正文内容清除浮动 开始 --></p>\r\n', '2012-02-08 17:43:42', 1),
(6, '德克自嘲无全明星资格 称场均17分已老态龙钟', '<p>\r\n	<span class="infoMblog  "><a class="a-tips-Article-QQ" href="http://t.qq.com/qqsports#pref=qqcom.keyword" loaded="1" rel="qqsports" reltitle="腾讯体育" target="_blank"><!--/keyword-->腾讯体育<!--keyword--></a> </span></p>\r\n<div __curdisplay="block" class="mbSourceCardInfo" style="display: none;">\r\n	<div class="arrowBox">\r\n		<div calss="arrow">\r\n			&nbsp;</div>\r\n	</div>\r\n	<div __curdisplay="block" class="mbloading" style="display: none;">\r\n		&nbsp;</div>\r\n	<div class="mbCardUserDetail">\r\n		<div class="userPic">\r\n			<a bosszone="followalltx2" href="http://t.qq.com/qqsports?pref=qqcom.keywordtx2" rel="腾讯体育(@qqsports)" target="_blank" title="腾讯体育(@qqsports)"><img src="http://t2.qlogo.cn/mbloghead/47d88c5ad5d10ad57ac0/50" /></a></div>\r\n		<div class="userInfo">\r\n			<div class="nick">\r\n				<a bosszone="followallname" href="http://t.qq.com/qqsports?pref=qqcom.keywordname" target="_blank" title="腾讯体育(@qqsports)"><span>腾讯体育</span></a></div>\r\n			<div class="follower">\r\n				<a bosszone="followalltz" href="http://t.qq.com/qqsports/follower?pref=qqcom.keywordtz" target="_blank" title="听众：962145人"><span>听众：</span><span>962145人</span></a></div>\r\n			<div class="attentBoxWrap" follow="0" uid="qqsports">\r\n				<a bosszone="followallst" class="addAttention" href="http://sports.qq.com/a/20120207/000224.htm#" title="立即收听"><span>+收听</span></a><a class="delAttention" href="http://sports.qq.com/a/20120207/000224.htm#" style="display: none;" title="已收听"><span>已收听</span></a></div>\r\n		</div>\r\n		<div class="userNew">\r\n			<div class="titleBox">\r\n				<span>最新消息</span> <span class="timer" rel="1328694063" title="2012年2月8日 17:41">2012年2月8日 17:41</span></div>\r\n			<div class="news">\r\n				【腾讯独家揭秘2016里约奥运会赛场规划】北京时间2月8日，腾讯#奥运探营#记者团到达里约热内卢第二天，探访巴西奥委会和国家训练基地，并采访到了巴西著名跆拳道运动员纳塔莉娅。同时，独家揭秘了2016年里约奥运会赛场和运动员媒体村规划。跟腾讯体育一起提前感受奥运的魅力吧！http://url.cn/1dHrZp <a bosszone="followallmore" href="http://t.qq.com/qqsports?pref=qqcom.keywordmore" target="_blank">更多</a></div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<!--/keyword-->\r\n<p>\r\n	讯 北京时间2月7日，本周五本赛季NBA<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/nba#pref=qqcom.keyword" rel="nba" reltitle="NBA" target="_blank">微博</a></span>)<!--/keyword-->全明星替补阵容即将公布，<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3252" target="_blank"><!--/keyword-->德克-诺维茨基<!--keyword--></a><!--/keyword-->是否该被选入全明星。今天德克自己给出了答案，在接受ESPN采访时，<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3252" target="_blank"><!--/keyword-->诺维茨基<!--keyword--></a><!--/keyword-->自认没有进入全明星资格。</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-indent: 2em;">\r\n	&ldquo;不管怎样，场均15，16分的球员是没有资格成为全明星球员的，但是我们必须还得再等等看结果。我认为，这个联盟有很多有天赋的年轻球员更具资格，<a class="a-tips-Article-QQ" href="http://sports.qq.com/d/f_players/4/3437" target="_blank">拉马</a>库斯-奥尔德里奇在过去几个赛季里一直表现出色，他是年轻球员，他的比赛也很好看，还有众所周知的格里芬以及<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=4391" target="_blank"><!--/keyword-->乐福<!--keyword--></a><!--/keyword-->，他们都打得很好，在我的位置上有很多天才球员。&rdquo;</p>\r\n<p style="text-indent: 2em;">\r\n	<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=12" target="_blank"><!--/keyword-->洛杉矶快船<!--keyword--></a><!--/keyword-->的<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3741" target="_blank"><!--/keyword-->布雷克<!--keyword--></a><!--/keyword-->-格里芬被球迷们选为西部首发大前锋，还有<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=22" target="_blank"><!--/keyword-->开拓者<!--keyword--></a><!--/keyword-->的奥尔德里奇、<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=26" target="_blank"><!--/keyword-->犹他爵士<!--keyword--></a><!--/keyword-->的<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=4175" target="_blank"><!--/keyword-->保罗-米尔萨普<!--keyword--></a><!--/keyword-->、明尼苏达<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=16" target="_blank"><!--/keyword-->森林狼<!--keyword--></a><!--/keyword-->的乐福都是西部大前锋位置上的青年才俊，其中乐福已经在上赛季打过全明星比赛，他们当中任何一人表现都比上赛季总决赛MVP德克要出色。诺维茨基本赛季场均17.2分，这是他自1998-1999新秀赛季之后数据最低值。</p>\r\n<p style="text-indent: 2em;">\r\n	现役球员里只有<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=13" target="_blank"><!--/keyword-->洛杉矶湖人<!--keyword--></a><!--/keyword-->的<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3118" target="_blank"><!--/keyword-->科比-布莱恩特<!--keyword--></a><!--/keyword-->，<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=2" target="_blank"><!--/keyword-->波士顿凯尔特人<!--keyword--></a><!--/keyword-->的<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3007" target="_blank"><!--/keyword-->凯文-加内特<!--keyword--></a><!--/keyword-->，<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/team.aspx?id=24" target="_blank"><!--/keyword-->圣安东尼奥马刺<!--keyword--></a><!--/keyword-->的<!--keyword--><a class="a-tips-Article-QQ" href="http://nbadata.sports.qq.com/player.aspx?id=3173" target="_blank"><!--/keyword-->蒂姆-邓肯<!--keyword--></a><!--/keyword-->连续入选全明星的时间比德克长，从02年开始德克连续入选全明星，德国人不在乎是否能将这个纪录延续，&ldquo;对我来说，更重要的是身体能够找回节奏，熟悉场上的跑动和弹跳，现在这个比全明星要重要的多。我们希望在全明星之后能够有一个冲刺，这才是我的目标所在。&rdquo;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2012-02-08 19:16:21', 1),
(7, '我不该入选全明星赛', '<p>\r\n	□据新华社电<br />\r\n	<br />\r\n	本赛季揭幕以来状态低迷的小牛队当家球星诺维茨基昨日表示，他不会连续第11个赛季入选全明星阵容。<br />\r\n	<br />\r\n	这位在去年NBA总决赛上为小牛队史上首次夺冠立下头功、并捧得总决赛最有价值运动员奖杯的德国球星，进入本赛季以来因膝伤状态一直不佳，场均仅得17.2分，这是他自1998－1999赛季涉足NBA以来场均最低得分。<br />\r\n	<br />\r\n	他表示，在西部大前锋的位置上有许多才华横溢的年轻球员。 33岁的他就这个赛季的表现来看，不该占据这个全明星的位置。<br />\r\n	<br />\r\n	快船队的&ldquo;灌篮王&rdquo;格里芬今年第一次被球迷直接选入西部首发阵容，另外开拓者队的阿尔德里奇、爵士队的米尔萨普和森林狼队的洛夫均是西部大前锋位置上颇有竞争力的球手。<br />\r\n	<br />\r\n	NBA将于9日宣布今年全明星赛两个联盟的替补阵容。该阵容由NBA30支球队的主帅投票选出。<br />\r\n	<br />\r\n	&ldquo;场均只得15或16分，我认为不该成为一名全明星，&rdquo;诺维茨基剖析自己说，&ldquo;不过我们还是要拭目以待。我认为在这个联赛里有许多才华横溢的年轻球手，他们应该进入全明星阵容，比如阿尔德里奇就是其中之一，另外格里芬和洛夫也很出色，在我的位置上有许多优秀球员。 &rdquo;<br />\r\n	<br />\r\n	目前在NBA球员中，只有湖人队的科比、凯尔特人队的加内特和马刺队的邓肯在全明星赛上出现次数比诺维茨基多。<br />\r\n	&nbsp;</p>\r\n', '2012-02-08 13:14:21', 1),
(8, '阿巴斯兴奋首战CBA全明星 称胜广东锁定季后赛', '<p>\r\n	（搜狐体育 张仪 2月8日东莞报道）今天上午10点，福建泉州银行队在东莞市体育馆进行训练，备战今晚客场挑战广东东莞银行队的比赛。</p>\r\n<p>\r\n	　　福建队的阿巴斯将罩头衫的帽子戴了起来，出现在训练馆。而就在训练结束之后，阿巴斯得到了好消息，尽管没有入选CBA全明星赛的首发阵容，他还是入选了替补阵容，这意味着阿巴斯在CBA三年将首次征战CBA全明星赛。&ldquo;总经理刚才告诉我，我会参加CBA全明星赛。那将是很好的事情，我也很开心，感谢球迷支持我。&rdquo;阿巴斯接受搜狐CBA官网的采访时说，&ldquo;这将是我第一次参加CBA全明星，这次聚会会很盛大，有很多人，我在那里肯定玩得很开心。&rdquo;</p>\r\n<p>\r\n	　　不过，在CBA全明星周末之前，阿巴斯和他在福建队的队友还有更重要的任务：冲击季后赛。&ldquo;是的，季后赛已经离我们非常近了，我们需要再赢一场，再赢一场就行。&rdquo;阿巴斯说，&ldquo;我们也在说，让我们全力以赴去赢球，今晚是这样，接下来两场比赛都是这样，确保进入季后赛。我们整年都很努力，不能在最后三场比赛放松。&rdquo;</p>\r\n<p>\r\n	　　今晚对阵广东队，由于福建队本赛季主场击败过广东，阿巴斯知道，今晚卫冕冠军目标复仇。&ldquo;我知道他们今晚将是有备而来，我们上一次是在主场击败了他们，他们今晚肯定会想复仇。&rdquo;阿巴斯对搜狐CB官网说，&ldquo;不过，对于他们来说，赢球也不会容易，因为我们会全力以赴，我们需要这场胜利保证季后赛。最近几场比赛我们状态很好，所以今晚的比赛会非常激烈。&rdquo;</p>\r\n<p>\r\n	　　广东队是中国男篮国手和两大外援打造的强大阵容，阿巴斯清楚，今晚绝不轻松。&ldquo;他们有好几个球员来自国家队，这是很大的差别。他们的板凳深度很好，所以即使替换，上来的人实力也不弱。两名外援都很出色，詹姆斯（辛格尔顿）我们上赛季就交过手，他每场都很努力，篮板球抢得很凶。布鲁克斯真的非常快，他也是很好的投手。今晚将是一场非常困难的比赛，不会轻松。&rdquo;阿巴斯说。</p>\r\n', '2012-02-08 12:42:05', 1),
(9, '讯博网首发公布：（博彩论坛）成票王', '<p align="center">\r\n	&nbsp;</p>\r\n<p>\r\n	东部：德里克-罗斯、勒布朗-詹姆斯、德怀恩-韦德、卡梅隆-安东尼、德怀特-霍华德</p>\r\n<p>\r\n	西部：科比-布莱恩特、克里斯-保罗、安德鲁-拜纳姆、凯文-杜兰特、布莱克-格里芬</p>\r\n<p>\r\n	本次全明星赛的票王是本土作战的奥兰多魔术队中锋霍华德，他获得了1,600,390张选票，排名第二的科比获得了1,555,479张选票。罗斯获得了1,514,723张选票，位列第三位，他超越了勒布朗-詹姆斯。</p>\r\n<p>\r\n	全明星正赛将于北京时间2月27日早晨在奥兰多安利中心开打。值得一提的是，20年前的NBA全明星赛也是在奥兰多，当时现场球迷见证了魔术师约翰逊(微博</p>\r\n<p>\r\n	约翰逊Magic听众：836688人</p>\r\n<p>\r\n	+收听已收听最新消息 2012年1月31日 0.更多)的最后一届全明星赛。</p>\r\n<p>\r\n	<a href="http://%20www.xunbet.com/">讯博网 www.xunbet.com</a></p>\r\n<p>\r\n	布莱克-格里芬和安德鲁-拜纳姆都是第一次入选全明星先发阵容，而拜纳姆更是第一次成为全明星球员。</p>\r\n<p>\r\n	&ldquo;哥们，我早就说希望自己成为全明星球员，6年前我就对自己这么说，等了这么久，终于梦想成真。&rdquo;拜纳姆在洛杉矶接受采访时说，&ldquo;对我而言，这次的全明星实至名归，因为球迷将他们的票投给了我，这是对我的肯定。&rdquo;</p>\r\n<p>\r\n	科比第十四次入选全明星，这让他比迈克尔-乔丹还要多一次。拜纳姆谈到科比的成就时非常敬佩。</p>\r\n<p>\r\n	&ldquo;这真的是不可思议。但话说回来，他是比赛中最棒的球员，我想他每年都可以入选全明星。&rdquo;拜纳姆说。</p>\r\n<p>\r\n	全明星的替补球员将由东西部全明星教练选出，NBA官方将在下周这个时候公布结果。</p>\r\n', '2012-02-08 19:19:06', 1),
(10, '全明星首发 果然没悬念', '<p style="text-align: center;">\r\n	<img src="http://news.cnxianzai.com/upload_files/article/40/_xvkht__CJT12204C003_s.jpg" style="width: 329px; height: 329px;" title="全明星首发 果然没悬念" /></p>\r\n<p>\r\n	<b>长江商报消息</b> 麻雀虽小，五脏俱全。虽然NBA2011-2012赛季因为劳资纠纷，常规赛从82场缩水到66场，但每个赛季的重头戏全明星周末，还是如期保留。昨日，NBA官方正式公布了本赛季全明星投票结果，&ldquo;魔兽&rdquo;霍华德依靠东道主优势，领先湖人的科比4万多票，当选票王。根据投票结果，西部首发为科比、保罗、杜兰特、格里芬和拜纳姆，东部首发则是韦德、罗斯、詹姆斯、安东尼和霍华德，这份首发名单，和此前预测基本相同。本报记者 付恺</p>\r\n<p>\r\n	焦点一：洛城神话</p>\r\n<p>\r\n	西部首发五分之四来自洛杉矶</p>\r\n<p>\r\n	作为NBA历史上第61届全明星赛，洛杉矶的球队可谓威风八面。</p>\r\n<p>\r\n	在西部首发名单中，除了小前锋是来自雷霆的杜兰特外，保罗、科比、格里芬和拜纳姆，均是来自洛城的快船和湖人。从这一点上看，本赛季表现最抢眼的几位球星，基本集中在洛杉矶的球队中，特别是格里芬和保罗的组合，目前已经带领球队取得13胜7负的战绩，紧紧追赶排名第一的雷霆。要知道，在上赛季，快船还是一支连打季后赛都没资格的超级弱队。</p>\r\n<p>\r\n	而此前状态不佳的湖人，目前已经渐渐追上第一集团阵营，排名也不知不觉爬升到西部第六。湖人能够走出低迷，除了科比功不可没外，内线的拜纳姆在西部已经成为数一数二的中锋，场均16.5分，还能贡献全队最高的12.1个篮板，因此职业生涯第一次入选全明星首发，拜纳姆货真价实。</p>\r\n<p>\r\n	焦点二：票王成色</p>\r\n<p>\r\n	科比第14次入选现役球员第一</p>\r\n<p>\r\n	在NBA历史上，贾巴尔19次入选全明星阵容，恐怕是前无古人后无来者的纪录。紧随其后的是J博士的16次和奥尼尔的15次，因此科比第14次入选，不仅追平了乔丹的记录，也成为NBA入选全明星次数最多的现役球员。</p>\r\n<p>\r\n	不过，在本届全明星赛投票中，有一个争议点在于票王归属到底是谁。根据官方投票结果，霍华德仅仅领先排名第二的科比4万多票，因此对于很多人而言，第一感觉，如果不是奥兰多作为全明星周末举办地，那么票王肯定会是科比。毕竟，在本赛季又老了一岁的科比，连续几场砍下40+，场均得分目前也名列联盟第一，尤其值得一提的是，在湖人经历低迷时期，是科比用一己之力将这支球队带回正轨。</p>\r\n<p>\r\n	综上所述，虽然科比不是本赛季全明星周末的票王，但是从实际意义上而言，&ldquo;飞侠&rdquo;当之无愧是目前表现最棒的球星。</p>\r\n<p>\r\n	焦点三：替补名单</p>\r\n<p>\r\n	总冠军小牛无人入选最尴尬</p>\r\n<p>\r\n	根据NBA规则，全明星首发经过投票选出后，东西部球队各自剩下的7名替补，将由联盟30支球队主教练投票选出。如此一来，本赛季状态不佳的诺维茨基，很有可能落选，届时，作为上赛季总冠军得主，小牛没有一位球员入选全明星，将会面临无比尴尬的局面。</p>\r\n<p>\r\n	在替补的选择上，主教练挑选的标准，无外乎常规赛个人表现好坏以及所在球队战绩好坏。而这两项硬指标，诺维茨基均不被看好，因此其作为球队唯一获得投票资格的球员，不出意外将会无缘替补阵容。在西部剩下的替补7人大名单中，雷霆的威斯布鲁克、湖人的加索尔、森林狼的勒夫、开拓者的阿尔德里奇、掘金的加里纳利和灰熊的盖伊，最有希望入选。至于东部剩下的替补名单，热火波什、篮网德隆、76人的伊戈达拉、凯尔特人隆多和皮尔斯以及老鹰的约翰逊，则是热门人选。</p>\r\n<p>\r\n	焦点四：扣篮大赛</p>\r\n<p>\r\n	格里芬詹姆斯是否激情会战</p>\r\n<p>\r\n	每年的全明星周末，除了全明星大战，最受关注的，无疑是扣人心弦的扣篮大赛。</p>\r\n<p>\r\n	在上赛季的扣篮大赛中，状元格里芬凭借飞跃汽车成功暴扣，成功获得扣篮冠军称号。因此今年的扣篮大赛，球迷最为关心的，恐怕就是格里芬是否会继续参加扣篮大赛。不过遗憾的是，格里芬昨日表示不愿意继续参加扣篮大赛，原因是他想慢慢享受全明星周末。即便如此，在NBA官方宣布名单之前，格里芬还是有可能改变决定重返扣篮大赛。</p>\r\n<p>\r\n	另一个话题，就是詹姆斯是否会参加扣篮大赛。作为联盟最强壮的球员，詹姆斯在比赛中的扣篮，气势非凡，常常被人津津乐道，但是进入NBA以来，&ldquo;皇帝&rdquo;从未参加扣篮大赛，可谓吊足了球迷胃口。在过去几个赛季，喜欢在场边观看扣篮大赛的詹姆斯，多次公开表示有意参加，但每一次都在最后关头爽约。</p>\r\n<p>\r\n	因此在本届全明星扣篮大赛上，詹姆斯和格里芬是否出战扣篮大赛，将是全明星周末前最令人关注的话题。</p>\r\n', '2012-02-08 12:24:08', 1),
(11, '小布：广东夺冠不会轻松 CBA全明星赛愿打替补', '<p>\r\n	（搜狐体育 张仪 2月8日东莞报道）今天上午9点，广东宏远俱乐部东莞银行队在东莞市体育馆进行训练 ，备战今晚主场迎战福建泉州银行队的CBA比赛。</p>\r\n<p>\r\n	　　训练结束之后，广东队的两名入选CBA全明星首发阵容的球员，穿上了新出炉的全明星战袍拍宣传照。布 鲁克斯还特地仔细地看了看王仕鹏的7号全明星战袍，一脸的羡慕。虽然没有入选全明星的首发阵容，小布表示，如果自己入选替补阵容，也将非常乐意参赛。</p>\r\n<p>\r\n	　　&ldquo;CBA有不少出色的后卫，没有入选全明星首发阵容，也没关系，只要我的球队在赢球就行，这是最重要 的，希望可以拿到总冠军。&rdquo;小布对搜狐CBA官网说。&ldquo;如果我入选全明星的替补阵容，我也会上场的，我 很乐意打CBA的全明星赛。&rdquo;</p>\r\n<p>\r\n	　　因为布鲁克斯加盟，广东队展现了超出其他球队一筹的优势，今年的总冠军似乎已经是广东队的囊中之物，不过，小布提醒，广东队必须谨慎。&ldquo;一切皆有可能。不管谁在常规赛中领先，当季后赛开始的时候，大家都是0-0。我们知道，夺冠的道路上不会一帆风顺，都是狗咬狗的大战，所以我们必须提升自己的状态，必须打得比现在更好。&rdquo;小布说，&ldquo;不能出现任何大意，那样非常容易导致失败。&rdquo;</p>\r\n<p>\r\n	　　看上去，小布与广东队全队的融合非常好。&ldquo;是的，所有人都挺酷的，大家的性格都非常好，我们在一起打球很好玩。&rdquo;小布说。</p>\r\n<p>\r\n	　　对于与肯扬-马丁在与新疆队解约之后，利用春节期间的时间差，拿到了FIBA的澄清信，得以签约快船，小布不愿意过多评论。&ldquo;我不知道他的具体情况，那是他的状况，我不太了解。&rdquo;小布说。</p>\r\n', '2012-02-08 10:55:50', 1),
(12, 'JR史密斯：打不打CBA全明星未定 暂不考虑NBA', '<p>\r\n	2月7日讯（记者 张品<!--keyword-->(<span class="infoMblog "><a class="a-tips-Article-QQ" href="http://t.qq.com/zhangpin#pref=qqcom.keyword" loaded="1" rel="zhangpin" reltitle="张品" target="_blank">微博</a> </span></p>\r\n<div __curdisplay="block" class="mbSourceCardInfo" style="display: none;">\r\n	<div class="arrowBox">\r\n		<div calss="arrow">\r\n			&nbsp;</div>\r\n	</div>\r\n	<div __curdisplay="block" class="mbloading" style="display: none;">\r\n		&nbsp;</div>\r\n	<div class="mbCardUserDetail">\r\n		<div class="userPic">\r\n			<a bosszone="followalltx2" href="http://t.qq.com/zhangpin?pref=qqcom.keywordtx2" rel="张品(@zhangpin)" target="_blank" title="张品(@zhangpin)"><img src="http://t1.qlogo.cn/mbloghead/28cc561823c824cf9f02/50" /></a></div>\r\n		<div class="userInfo">\r\n			<div class="nick">\r\n				<a bosszone="followallname" href="http://t.qq.com/zhangpin?pref=qqcom.keywordname" target="_blank" title="张品(@zhangpin)"><span>张品</span></a></div>\r\n			<div class="follower">\r\n				<a bosszone="followalltz" href="http://t.qq.com/zhangpin/follower?pref=qqcom.keywordtz" target="_blank" title="听众：39624人"><span>听众：</span><span>39624人</span></a></div>\r\n			<div class="attentBoxWrap" follow="0" uid="zhangpin">\r\n				<a bosszone="followallst" class="addAttention" href="http://sports.qq.com/a/20120207/000639.htm#" title="立即收听"><span>+收听</span></a><a class="delAttention" href="http://sports.qq.com/a/20120207/000639.htm#" style="display: none;" title="已收听"><span>已收听</span></a></div>\r\n		</div>\r\n		<div class="userNew">\r\n			<div class="titleBox">\r\n				<span>最新消息</span> <span class="timer" rel="1328683161" title="2012年2月8日 14:39">2012年2月8日 14:39</span></div>\r\n			<div class="news">\r\n				2011年最忙的皇帝就是雍正，一会儿在湖南和怜儿玩乐，一会儿在浙江和若曦聊天，再一会在北京和甄嬛拜堂 一会儿又回湖南跟晴川弹琴&hellip;&hellip;雍正真吃香。<a bosszone="followallmore" href="http://t.qq.com/zhangpin?pref=qqcom.keywordmore" target="_blank">更多</a></div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>\r\n	）<!--/keyword-->）浙江队外援JR-<a class="a-tips-Article-QQ" href="http://sports.qq.com/d/f_players/5/4393" target="_blank">史密斯</a>知道自己入选了<!--keyword--><a class="a-tips-Article-QQ" href="http://sports.qq.com/cba/" target="_blank"><!--/keyword-->CBA<!--keyword--></a><!--/keyword-->全明星南区的首发阵容，不过JR却表示，目前还不确定自己是否会参加CBA全明星赛。</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-indent: 2em;">\r\n	日前，中国篮协公布了2012年全明星赛的南北区首发阵容，其中浙江队的外援JR-史密斯以其出色表现入选了南区的首发阵容。不过，在今天下午浙江队的日常训练结束之后，JR却表示自己还不能确定能否参加CBA全明星赛。&ldquo;是的，我知道自己入选了CBA全明星，但现在我也不知道自己能否参加这个比赛，我现在还需要再问一些人，等一些人的答复，然后才能决定是否参加CBA全明星。&rdquo;</p>\r\n<p style="text-indent: 2em;">\r\n	显然，JR能否参加CBA全明星赛，除了主观上的因素之外，还要考虑浙江队能否进入季后赛的客观因素。目前，浙江队位居联盟积分榜第8位，能否打入CBA季后赛还是一个未知数。如果浙江队未能打进季后赛，JR将会重返NBA<!--keyword-->(<span class="infoMblog"><a class="a-tips-Article-QQ" href="http://t.qq.com/nba#pref=qqcom.keyword" rel="nba" reltitle="NBA" target="_blank">微博</a></span>)<!--/keyword-->，而他也必须赶在3月1日NBA中期转会截止期之前确定新东家，并且尽快投入与球队的合练之中。现在有6支NBA球队对JR表示了兴趣，但JR却不愿意透露更多，&ldquo;现在球队（浙江队）还有几场比赛要打，我暂时不会去考虑NBA，我现在需要做的是全力以赴比赛，为球队提供足够的支持和帮助。&rdquo;</p>\r\n', '2012-02-08 19:21:53', 1),
(13, '诺天王亲承不够格入选全明星 钦点一人顶替其位置', '<p>\r\n	新浪体育讯　北京时间2月6日消息，全明星赛的替补名单将在美国当地时间本周四(北京时间周五)公布，而诺维茨基今天在接受采访时亲承，自己不够格打全明星。</p>\r\n<p>\r\n	　　诺维茨基在接受采访时说：&ldquo;就凭这场均15、16分的数据，我不认为够格当一个全明星。当然，最后结果我们还要等等看才知道。我认为，全明星是一个集结那些具备伟大天赋的球员的地方，我认为联盟中有太多有天赋的年轻球员够资格去那里。我认为阿尔德里奇<a href="http://weibo.com/lamarcusaldridge12?zw=sports" target="_blank">(微博)</a>就是其中之一，他是一个伟大的年轻球员，他的级赛极具观赏性。还有布雷克-格里芬<a href="http://weibo.com/blakegriffin?zw=sports" target="_blank">(微博)</a>和勒福，他们的比赛也很棒，总之，在我的位置上，有很多很好的选择。&rdquo;</p>\r\n<p>\r\n	　　目前，在西部前锋的候选中，阿尔德里奇是热门，勒福、米尔萨普、加索尔等人也有希望。截止本赛季，只有科比、加内特<a href="http://weibo.com/kgarnett?zw=sports" target="_blank">(微博)</a>、邓肯连续入选全明星的次数比诺维茨基多，诺维茨基截止今年已经是连续10年入选全明星阵容。</p>\r\n<p>\r\n	　　诺维茨基并不在乎这点，他说：&ldquo;对于我而言，当下最重要的事情就是找回比赛节奏，让我的身体找回对于比赛的感觉，让我找回投篮的感觉。我认为，这是比参加全明星重要得多的事情。我们(小牛队)希望在全明星之后发起冲锋，这也是为什么我如此考虑的原因。&rdquo;(大脸猫)</p>\r\n<p>\r\n	<!-- publish_helper_end --><!-- 输出内容-新分页 end --><!-- 正文内容清除浮动 开始 --></p>\r\n', '2012-02-08 19:22:32', 1),
(14, '方舟子称若败诉只赔钱不道歉：继续质疑韩寒', '<center>\r\n	<img src="http://pic.ahradio.com.cn/0/00/77/54/775446_920229.jpg" /></center>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	　　韩寒与方舟子(资料图)</p>\r\n<p>\r\n	　　<b>京华时报2月8日报道</b>昨天，方舟子在微博中贴出了他与天涯社区网友的交流实录，集中回答了近期&ldquo;方韩之争&rdquo;的诸多问题。有网友问及如果方舟子败诉将如何处置时，方舟子表示，如果法院判他败诉，他将做出赔偿，但是自己并没有做错事，因此不会道歉。</p>\r\n<p>\r\n	　　在与天涯社区网友的交流中，有网友问&ldquo;如果此案法院判你诽谤罪名成立，你还会不会继续打假，会不会继续放出新证据？&rdquo;对此，方舟子回应称法院最多只能判他侵犯名誉权，不会判诽谤罪，他说：&ldquo;因为这是民事案件，不是刑事案件。不管法院怎么判，不影响我继续质疑韩寒。&rdquo;</p>\r\n<div>\r\n	&nbsp;</div>\r\n<p>\r\n	　　当网友问到假如败诉后会不会做出赔偿和道歉时，方舟子说：&ldquo;如果法院判我败诉，赔偿不能不交，不然法院会强制执行，但我不会道歉，没做错事，怎能道歉？&rdquo;面对网友质疑其著作中出现的&ldquo;抄袭现象&rdquo;，比如把图表中的light翻译成白天，dark翻译成黑夜。方舟子称早在一年前他就解释过，是出版社的编辑翻译错了，&ldquo;韩家军现在来算这笔早算过的旧账，是要转移视线&rdquo;。</p>\r\n<p>\r\n	　　昨天下午辽宁卫视播出的《老梁观世界》节目中，主持人问及对韩寒提起诉讼的看法，方舟子称已被起诉了十几次了，已经无所谓，&ldquo;这恰恰说明韩寒已经没法跟我打笔墨官司了。&rdquo;同时他认为韩寒父子的起诉是败招，他说：&ldquo;韩寒应该对我列出的疑点进行一条一条的反驳，如果电视上有篇幅限制，只能解答一两个疑点，那么在网络上有的是篇幅，可以长长的反驳。如果你的反驳很有道理，不是胡搅蛮缠了，我就认可你的文章是你写的。&rdquo;</p>\r\n<p>\r\n	<!--function: content() parse end  0ms cost! --></p>\r\n', '2012-02-08 18:02:00', 2),
(15, '三亚宰客排档被吊销执照并最高额度罚款', '<p>\r\n	月5日，涉嫌&ldquo;宰客&rdquo;的三亚海岛渔村海鲜排档已停业。</p>\r\n<p>\r\n	　　信息时报记者调查发现：当地政府实行海鲜最高限价，但游客表示看不懂计算公式</p>\r\n<p>\r\n	　　□专题策划 廖卓斌</p>\r\n<p>\r\n	　　专题撰文 信息时报特派记者 彭博</p>\r\n<p>\r\n	　　专题摄影 信息时报特派记者 朱元斌</p>\r\n<p>\r\n	　　龙年春节，三亚&ldquo;宰客门&rdquo;事件引起广泛关注。连日来，信息时报记者调查三亚集贸市场及海鲜排档时发现，海鲜排档的海鲜售价几乎是海鲜零售价格的两三倍。而三亚物价部门规定的海鲜最高限价，几乎是海边海鲜排档的实际销售价格。</p>\r\n<p>\r\n	　　此外，信息时报记者昨天从三亚市方面获悉，三亚市工商部门经多方调查取证发现海岛渔村海鲜排档存在欺客宰客、误导消费行为，三亚市工商部门决定依法吊销其营业执照，并给予最高额度罚款。</p>\r\n<p>\r\n	　　<strong>&ldquo;宰客&rdquo;排档</strong></p>\r\n<p>\r\n	　　<strong>被吊销执照并最高额度罚款</strong></p>\r\n<p>\r\n	　　上月29日，网友罗迪在微博上实名反映他的朋友高先生在三亚海岛渔村海鲜排档点3个菜花掉近4000元，邻桌吃一条鱼花6000元的微博受到网友广泛关注。</p>\r\n<p>\r\n	　　据三亚市工商局有关负责人介绍，工商部门对全市海鲜排档春节期间的经营情况进行认真全面排查，尤其是对海岛渔村海鲜排档在春节期间使用四联点菜单等情况进行综合调查取证。经查实，海岛渔村海鲜排档在经营中使用实际上不存在的海鲜品名，如使用白帝螺、宝塔蟹等误导消费者。此类行为属于《消费者权益保护法》和《欺诈消费者行为处罚办法》所指的欺客宰客、误导消费行为。</p>\r\n<p>\r\n	　　在掌握其违法经营证据的基础上，三亚市工商局决定依法吊销海岛渔村海鲜排档的营业执照，依法给予最高额度罚款，将该店股东及负责人列入黑名单，并且三年内不得担任同行业经营单位的法定代表人(负责人)或股东。</p>\r\n<p>\r\n	　　<strong>政府限价</strong></p>\r\n<p>\r\n	　　<strong>普通游客难看懂计算公式</strong></p>\r\n<p>\r\n	　　信息时报记者从三亚市物价局了解到，2011年1月，三亚市开始实行餐饮海鲜品平均差价率管理。三亚海鲜品实行最高限价属全国首创。</p>\r\n<p>\r\n	　　连日来，信息时报记者调查三亚集贸市场及海鲜排档时发现，海鲜排档的海鲜售价几乎是海鲜零售价格的两三倍。而海边海鲜排档的海鲜售价与政府最高限价具体有多少差距？信息时报记者在三亚市物价局官方网站，查询到2月3日发布的《三亚市海鲜品社会平均批发参考价格和最高销售价格》，其中列出了2月3日的社会平均批发参考价格和2月4日的海鲜排档最高销售价格。</p>\r\n<p>\r\n	　　海鲜的最高销售价格为，龙胆石斑每斤271元，白鲳鱼每斤115元，墨鱼每斤128元，大花龙虾(2.0斤左右)每斤961元，富贵虾(8个左右)209元，红花蟹(大)每斤418元，红花蟹(中)每斤314元，海白螺每斤17元，扇贝26元。</p>\r\n<p>\r\n	　　信息时报记者对比发现，在物价部门限价的海鲜种类中，海边海鲜排档的海鲜售价与最高限价之间，大多数十分相近，有的甚至超过限价，比如扇贝等。</p>\r\n<p>\r\n	　　在三亚市物价局的网站上，有一条对海鲜最高限价的说明：</p>\r\n<p>\r\n	　　&ldquo;说明：1.当天公布的海鲜品社会平均批发参考价格，为次日海鲜排档制定实际销售价格的参考依据。实际销售价格不得超过最高销售价格。</p>\r\n<p>\r\n	　　2.2012年海鲜排档餐饮海鲜品平均差价率：鱼类190%；螺贝类160%；虾类90%；蟹类90%。</p>\r\n<p>\r\n	　　3.最高销售价格计算公式：</p>\r\n<p>\r\n	　　某海鲜品销售价格=某海鲜品购进价格&times;(1+平均差价率合理幅度)</p>\r\n<p>\r\n	　　如：剑曹鱼(鲈鱼)=36&times;(1+10%)&times;(1+190%)=115元。(注：10%为购进价格的最高幅度)</p>\r\n<p>\r\n	　　基围虾：25&times;(1+10%)&times;(1+90%)=52元。&rdquo;</p>\r\n<p>\r\n	　　平均差价率如何算出？为何鱼类与虾类的差价率不同？记者随即采访了几位来三亚旅游的游客，他们均表示&ldquo;看不懂&rdquo;。</p>\r\n<p>\r\n	　　&ldquo;在现价范围之内就不算宰客？我感觉政府的最高限价本身就很高。我不知道政府制定的最高限价是否合理，但现实是海鲜排档的菜价高得离谱，工薪阶层难以承受。&rdquo;游客黄先生说。</p>\r\n<p>\r\n	　　记者调查</p>\r\n<p>\r\n	　　<strong>排档海鲜价</strong></p>\r\n<p>\r\n	　　<strong>基本&ldquo;顶格&rdquo;标示</strong></p>\r\n<p>\r\n	　　2月4日上午，信息时报记者在三亚湾路的一家海鲜排档看到，芒果贝的售价为每斤114元，青花蟹每斤209元，花龙虾588元每斤，龙胆石斑一斤270元，大的红花蟹每斤售价290元，海白螺每斤17元。</p>\r\n<p>\r\n	　　在另一家档口，一名男子正在小心翼翼地称量一只青花蟹的重量。他说，按照物价部门的定价，大的青花蟹与小的售价不同。1斤以上的属于大的，最高限价为209元。所以，他要仔细称量每只青花蟹的重量，按不同类标价。</p>\r\n<p>\r\n	　　随后，该男子拿着一张手抄的当天海鲜最高限价，调整每种海鲜的价格标牌。调整后的价格，虽然都在最高限价范围内，但几乎与最高限价相差无几。</p>\r\n<p>\r\n	　　2月5日，记者又来到三亚大东海，查看东海龙宫、大东海渔村等几家海鲜排档的价格。在这里，记者还看到了几天来发现的最贵的一种海鲜&mdash;&mdash;苏眉鱼，每斤售价高达1688元。在这几家海鲜排档，除了海鲜，其他菜品的价格也不便宜。广式烧鹅98元一份，海南椰子饭58元一份，本地空心菜48元一份，凉拌黄瓜条58元一份。</p>\r\n<p>\r\n	　　信息时报专访三亚市物价局相关负责人：</p>\r\n<p>\r\n	　　&ldquo;海鲜品平均差价率管理还在探索中&rdquo;</p>\r\n<p>\r\n	　　三亚市海鲜品的平均差价率是否合理？具体如何制定？是否需要改进？2月6日上午，三亚市物价局副调研员陈金波接受信息时报专访，回答了以上疑问。</p>\r\n<p>\r\n	　　<strong>平均差价率经科学计算得出</strong></p>\r\n<p>\r\n	　　信息时报：差价率管理只针对海鲜排档吗？</p>\r\n<p>\r\n	　　陈金波：是的。目前三亚有近170家海鲜排档，均在管理范围之内。</p>\r\n<p>\r\n	　　信息时报：海鲜品的平均差价率是如何计算出来的？</p>\r\n<p>\r\n	　　陈金波：相关部门根据三亚市海鲜排档餐饮店的分布，分别在春园路片区、榆亚路片区、三亚湾路片区和友谊路片区，共选择24家具有代表性的监测点。利用一个月的时间，每5天对监测点主要海鲜品的进货价格和销售价格进行监测。</p>\r\n<p>\r\n	　　由市价格成本调查队在各片区监测点选择两家海鲜排档餐饮店开展价格成本监审，掌握其运营成本费用动态。</p>\r\n<p>\r\n	　　利用科学的方法测算出海鲜排档餐饮业各海鲜品的平均差价率。其中还扣除了虚高标价、旅游团队就餐不合理的回扣。</p>\r\n<p>\r\n	　　信息时报：有些游客认为，如今海鲜排档的海鲜售价虽未超过最高限价，但价格也非常高。有人觉得是因为最高限价定高了，甚至觉得最高限价反而帮助经营者&ldquo;合法宰客&rdquo;。</p>\r\n<p>\r\n	　　陈金波：平均差价率是使用科学的方法计算出来的。游客觉得海鲜价格高，可能是因为海鲜进价高，以及海鲜排档的经营成本高。</p>\r\n<p>\r\n	　　<strong>三亚春节前处罚9家排档</strong></p>\r\n<p>\r\n	　　信息时报：可现实是，海鲜的价格确实比其他海边城市高出许多。</p>\r\n<p>\r\n	　　陈金波：三亚旅游的承载率是一个关键问题。三亚有70多万人，春节期间来了50万游客。人来得多，海鲜就这么多。海产品供不应求，市场零售价格高了，海鲜排档的价格也随之增加。</p>\r\n<p>\r\n	　　信息时报：对于违规经营者，处罚力度如何？</p>\r\n<p>\r\n	　　陈金波：2012年春节前，我们在巡查过程中，共发现9家违规排档，对其进行了300元~1000元的处罚。</p>\r\n<p>\r\n	　　<strong>平均差价率可能作出调整</strong></p>\r\n<p>\r\n	　　信息时报：三亚海鲜品平均差价率是否还会调整，调整的趋势是什么？</p>\r\n<p>\r\n	　　陈金波：三亚实行海鲜品平均差价率管理属全国首创，我们还在探索中，我们也希望找到更加合理的平均差价率。</p>\r\n<p>\r\n	　　在下一步的改进中，我们主要想解决两个问题：一个是当市场供需矛盾突出时，平均差价率应如何随之改变，以达到更科学、更合理的目的。另一个是怎样更好地实行差价率管理，而不增加行政成本。对此，我们找了很多企业、经营者和游客座谈，也希望大家能为三亚的更好发展献计献策。</p>\r\n<p>\r\n	<!--/enpcontent--></p>\r\n', '2012-02-08 10:27:33', 2),
(16, '123213', '<p>\r\n	213213231231</p>\r\n', '2012-02-24 21:45:15', 3);

-- --------------------------------------------------------

--
-- 表的结构 `news_type`
--

CREATE TABLE `news_type` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `news_type`
--

INSERT INTO `news_type` (`id`, `name`) VALUES
(1, '体育文章'),
(2, '娱乐文章'),
(3, '文章类型1'),
(4, '文章类型2'),
(5, '文章类型3'),
(6, '文章类型4'),
(7, '文章类型5'),
(8, '文章类型6'),
(9, '文章类型8'),
(10, '123213');

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL auto_increment,
  `content` varchar(1000) default NULL,
  `news_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  `reply_time` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `reply`
--

INSERT INTO `reply` (`id`, `content`, `news_id`, `user_id`, `reply_time`) VALUES
(2, '评论内容评论内容评论内容评论内容评论内容评论内容评论内容评论内容评论内容', 3, 3, '2012-02-16 20:27:06'),
(3, '评论内容评论内容评论内容2', 3, 3, '2012-02-08 21:37:50'),
(4, '很看好他', 13, 1, '2012-02-08 14:02:41'),
(5, 'TEST', 9, 1, '2012-02-08 14:10:05'),
(6, '评论测试', 13, 1, '2012-02-08 14:13:41'),
(7, '测试测试', 13, 1, '2012-02-08 22:39:16'),
(8, 'asdsadsad', 13, 13, '2012-02-24 21:45:02'),
(9, '213321', 16, 16, '2012-02-24 21:54:50');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user', 'user'),
(3, 'user3', 'use3'),
(6, 'user', 'user'),
(8, 'user2', 'user2'),
(9, 'ztest', '123');
