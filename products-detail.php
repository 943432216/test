<?php  
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');

$ProId = htmlentities($_GET['ProId']);
$cate_nav = $db->get_all('product_category',"CateId in ('24','10','11','22')");
$product = $db->get_one('product',"ProId='$ProId'");
$CateId = $product['CateId'];
$product_description=$db->get_one('product_description',"ProId='$ProId'",'Description');
$ad_position = $db->get_one('product_category',"CateId='$CateId'",'Category');
$ad_position = $ad_position['Category'];
$banner=$db->get_one('ad',"AdPosition='$ad_position'");
//var_dump($banner);exit;
//$pic_top = $db->get_one('ad',"AId='6");
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/dome1.css"/>
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
						<div class="float width"><a href="javascript:;">心肾同治</a></div>
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
						<div class="float width"><a href="javascript:;">最新动态</a></div>
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
				<h1 class="header_con">心宝丸</h1>
				<div class="header_nav"></div>
			</header>
			<div class="banner float width">
				<div class="banner_navs">
					<ul>
						<li><a href="product_01.html">心宝丸</a></li>
						<li><a href="product_02.html">龟鹿补肾片</a></li>
						<li><a href="product_03.html">蒲地蓝消炎片</a></li>
						<li><a href="product_04.html">蒲地蓝消炎胶囊</a></li>
					</ul>
				</div>
				<div class="banner_box">
					<div class="banner_ts">
						<div id="marquee" style="width: 100%;">
							<ul>
								<?php  
								for($i=0;$i<5;$i++){
									if(!is_file($site_root_path.$banner['PicPath_'.$i]))continue;
								?>
								<li>
									<a href="<?=get_url('product',$product_row[$i])?>"><img src="<?=$banner['PicPath_'.$i]?>" class="img"></a>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="product_name">
						<h5><?=$product['Name']?></h5>
						<p><?=$product['BriefDescription']?></p>
					</div>
				</div>
			</div>
			<section class="float width">
				<div class="stc_title"><img src="img/sms.png" alt=""  class="img"/></div>
				<div class="_con position">
					
					<div class="float sd">
						<div class="det"><img src="img/logod.png" class="img"/></div>
						<pre style="margin-top: 0px; margin-bottom: 0px; padding: 0px; border: none; font-size: 14px; font-family: arial, tahoma; white-space: pre-wrap; word-wrap: break-word; word-break: normal; line-height: 1.7; color: rgb(112, 112, 112);">
						<?=$product_description['Description']?>
						</pre>
					</div>
				</div>
			</section>
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
			var unslider06 = $('#marquee').unslider({
					dots: true,
					fluid: true
			});
				data06 = unslider06.data('unslider');
//-----------------------------------------------------------------			
			
			$('.staOne').children('ul').slideUp();
			$('#t2').children('ul').slideDown();
			$('#t2 div').addClass('bgcolor');
			$('.banner_navs').find('li').children('a').eq(0).addClass('bor_bn')
			$('#t2').find('li').eq(0).children('a').addClass('color');
			$('.header_nav').click(function() {
				$('.i_ul').toggle(500);
			})
			$('.staOne').click(function() {
				$('.staOne').children('ul').slideUp();
				$(this).children('ul').slideToggle();
			})
		})
	</script>

</html>