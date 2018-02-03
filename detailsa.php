<?php
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');

$content=$db->get_one('info2_contents',"InfoId='29'");
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/dome1.css" />
		<script type="text/javascript">
			(function() {
				var html = document.documentElement;
				var w = html.getBoundingClientRect().width;
				html.style.fontSize = w / 15 + 'px';
			})();
		</script>
	</head>

	<body>
		<div class="xb_box">
			<div class="i_ul">
				<ul>
					<li>
						<a href="index.html">首页</a>
					</li>
					<li class="staOne" id="t1">
						<a href="javascript:;">关于心宝</a>
						<ul class="i_uls">
							<li>
								<a href="company_profile.html">公司简介</a>
							</li>
							<li>
								<a href="Development.html">发展历程</a>
							</li>
							<li>
								<a href="Culture.html">企业文化</a>
							</li>
							<li>
								<a href="honor.html">企业荣誉</a>
							</li>
							<li>
								<a href="speech.html" >董事长致词</a>
							</li>
						</ul>
					</li>
					<li class="staOne" id="t2">
						<div class="float width"><a href="javascript:;">产品中心</a></div>
						<ul class="i_uls">
							<li>
								<a href="product_01.html">心宝丸</a>
							</li>
							<li>
								<a href="product_02.html">龟鹿补肾片</a>
							</li>
							<li>
								<a href="product_03.html">蒲地蓝消炎片</a>
							</li>
							<li>
								<a href="product_04.html" >蒲地蓝消炎胶囊</a>
							</li>
						</ul>
					</li>
					<li class="staOne" id="t3">
						<a href="javascript:;">心肾同治</a>
						<ul class="i_uls">
							<li>
								<a href="heart.html">心肾相交理论</a>
							</li>
							<li>
								<a href="heart01.html">心宝丸的临床应用</a>
							</li>
							<li>
								<a href="heart02.html" >龟鹿补肾片健康手册</a>
							</li>
						</ul>
					</li>
					<li class="staOne" id="t4">
						<div class="float width">
							<a href="javascript:;">最新动态</a>
						</div>
						<ul class="i_uls">
							<li>
								<a href="company_new.html">公司动态</a>
							</li>
							<li>
								<a href="industry_new.html">行业动态</a>
							</li>
							<li>
								<a href="video.html" >视频中心</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">联系心宝</a>
					</li>
					<li>
						<a href="https://sso.jingoal.com/#/login">员工登录</a>
					</li>
				</ul>
			</div>
			<header>
				<div class="header_logo"></div>
				<h1 class="header_con">公司动态</h1>
				<div class="header_nav"></div>
			</header>
			<div class="float width ddd">
				<!--<div class="logob"><img src="img/logob.png"/></div>-->
				<div class="detail_box float">
					<!--<h1 class="detail_top">喜讯！心宝药业获2017年度广东省工程技术研究中心认定！</h1>
					<span class="detail_bn">
						<p class="ts">近日，经广东省科技厅认定，“广东省心宝名优中成药工程技术研究中心”正式在广东心宝药业科技有限公司挂牌。该工程技术研究中心的认定，是对心宝药业自主研发能力、创新能力、技术人才队伍、行业地位等方面的充分肯定。这标志着心宝药业科研创新能力达到了一个新的高度。</p>
						<span class="float width til">
							<h3 class="detail_title">工程中心,体系认定</h3>
						</span>
						<p>为深入贯彻落实广东省科技创新大会精神，推进规模以上企业建立研发机构，增强高校和科研院所的技术创新能力，加快科技成果转化，为建设国家科技产业创新中心提供支撑，广东省科技厅开展广东省工程技术研究中心（以下简称“工程中心”）的认定工作。</p>
						<p>工程中心主要围绕我省实施创新驱动发展战略的要求，依托省内行业、领域具有科技实力的规模以上创新型企业、特别是主营业务收入5亿元以上工业企业、高校和科研院所组建。</p>
						<p>从以上可以看得出，省科技厅对于企业申报工程技术研究中心要求是相当严格的，省级工程技术研究中心的认定，标志着公司在科技创新能力、销售规模等方面具有较大的优势，同时彰显了公司的科技投入的注重和技术创新方面的卓越成就。</p>
						<div class="width float">
							<img src="img/50f750d822.jpg" class="img"/>
						</div>
						<span class="float width til">
							<h3 class="detail_title">科研创新，中心先行</h3>
							<p>心宝药业凭借产品确切的疗效、良好的市场反应和持续创新的企业精神，加大科技投入和技术创新，顺利通过“广东省心宝名优中成药工程技术研究中心”的认定。</p>
							<p>心宝药业拥有良好的技术创新环境，并成立了研发中心。中心配备了专业的研发生产及检测分析设备，拥有一支高专业素质的人才创新队伍，建立了完善的研究开发组织管理制度及激励体系，对研发的整个过程进行有序又有效的管理。2016年，企业研发经费投入高达1215万，占销售收入的比例为6%，完成科技成果转化17项，拥有已授权的各项知识产权共26 项，并通过了国家知识产权规范化管理标准的认证。</p>
						</span>
					</span>-->
					<?=$db->get_value('info_contents', "InfoId='208'", 'Contents');?>
				</div>
			</div>
			<div class="blogroll">
				<div class="blogroll_left">友情链接</div>
				<div class="blogroll_right">
					<a href="http://www.360kad.com/product/575808.shtml">龟鹿补肾片-康爱多网上药店</a>
					<a href="http://www.gdda.gov.cn/publicfiles/business/htmlfiles/jsjzz/index.htm">广东省食品药品监督管理总局</a>
					<a href="http://www.sda.gov.cn/WS01/CL0001/">国家食品药品监督管理总局</a>
				</div>
			</div>
			<div class="width float">
				<iframe src="footer.html" width="100%" height="100px" frameborder="0" scrolling="no"></iframe>
			</div>

		</div>
	</body>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/unslider.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
			$('.staOne').children('ul').slideUp();
			$('.header_nav').click(function() {
				$('.i_ul').toggle(500);
			})
			$('.staOne').click(function() {
				$('.staOne').children('ul').slideUp();
				$(this).children('ul').slideToggle();
			})
			$('.ddd').find('p').removeAttr('style');
			$('.ddd').find('span').removeAttr('style');
			$('.ddd').find('span').css('width','100%')
			$('.ddd').find('strong').removeAttr('style');
			$('.ddd').find('img').removeAttr('style');
			$('.ddd').find('img').addClass('img');
			$('.detail_box').children(':first').addClass('ts');
			$('section').removeAttr('style');
			$('section').css('padding-bottom','0');
			console.log($('section').css('padding-bottom'))
			var dsxs=null;
			var dsx=$('.ddd').find('section').find('p').each(function(){
				dsxs=trim($(this).html());
				console.log(dsxs)
				if(dsxs=='nbps;'){
					$(this).remove();
				}
			});
			
			
		})
		function trim(str) {
 		 return str.replace(/(^\s+)|(\s+$)/g, "");
		}
	</script>
	<script type="text/javascript">
		
	</script>

</html>