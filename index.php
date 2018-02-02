<?php
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');
$pageName='index';
$company_state = $db->get_all('info', 'CateId=1', 'InfoId,ThumbPic,Title,BriefDescription,PageUrl', 'InfoId desc limit 20');
// $industry_state = $db->get_all('info', 'CateId=2', 'InfoId,ThumbPic,Title,BriefDescription,PageUrl', 'InfoId desc');
// $clinic_use = $db->get_all('info2', 'CateId=9', 'InfoId,ThumbPic,Title,BriefDescription,PageUrl', 'InfoId desc');
// $health_bushen = $db->get_all('info2', 'CateId=10', 'InfoId,ThumbPic,Title,BriefDescription,PageUrl', 'InfoId desc');
$company_state = json_encode($company_state, JSON_UNESCAPED_UNICODE);
//var_dump($company_state);exit;
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
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
					<li style="background: #B60005;">
						<a href="index.html">首页</a>
					</li>
					<li class="staOne">
						<a href="javascript:;">关于心宝</a>
						<ul class="i_uls">
							<?php
							if(!empty($art_group[1])){
								foreach((array)$art_group[1] as $item){
							?>
							<li>
								<a href="<?=get_url('article',$item)?>"><?=$item['Title']?></a>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li class="staOne">
						<a href="javascript:;">产品中心</a>
						<ul class="i_uls">
							<?php
							if(!empty($product_cate)){
								foreach((array)$product_cate as $item){
							?>
							<li>
								<a href="<?=get_url('product_category',$item)?>"><?=$item['Category']?></a>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li class="staOne">
						<a href="javascript:;">心肾同治</a>
						<ul class="i_uls">
							<?php
							if(!empty($info2_cate)){
								foreach((array)$info2_cate as $item){
							?>
							<li>
								<a href="<?=get_url('info2_category',$item)?>"><?=$item['Category']?></a>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li class="staOne">
						<a href="javascript:;">最新动态</a>
						<ul class="i_uls">
							<?php
							if(!empty($info_cate)){
								foreach((array)$info_cate as $item){
									if($item['CateId'] == 7){continue;}
							?>
							<li>
								<a href="<?=get_url('info_category',$item)?>"><?=$item['Category']?></a>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li>
						<a href="/contact.php?AId=11">联系心宝</a>
					</li>
					<li>
						<a href="https://sso.jingoal.com/#/login">员工登录</a>
					</li>
				</ul>
			</div>
			<header>
				<div class="header_logo"></div>
				<h1 class="header_con">首页</h1>
				<div class="header_nav"></div>
			</header>
			<div class="banner float width">
				<div id="marquee">
					<ul>
						<?php
						if($pageName=='index'){
							$banner=$db->get_one('ad',"AId='1'");
							for($i=0;$i<5;$i++){
								if(!is_file($site_root_path.$banner['PicPath_'.$i]))continue;
						?>
						<li>
							<a href="<?=get_url('product',$product_row[$i])?>"><img src="<?=$banner['PicPath_'.$i]?>" class="img"></a>
						</li>
						<?php }}?>
					</ul>
				</div>
			</div>
			<div class="nav width float">
				<div class="nav_icon">
					<span>
						<p><a href="company_profile.html"><img src="img/nav_01.png" class="img"/></a></p>
						<p><a href="company_profile.html">关于心宝</a></p>
					</span>
					<span>
						<p><a href="product_01.html"><img src="img/nav_02.png" class="img"/></a></p>
						<p><a href="product_01.html">产品中心</a></p>
					</span>
					<span>
						<p><a href="heart.html"><img src="img/nav_03.png" class="img"/></a></p>
						<p><a href="heart.html">心肾同治</a></p>
					</span>
				</div>
				<div class="nav_icon">
					<span>
						<p><a href="company_new.html"><img src="img/nav_04.png" class="img"/></a></p>
						<p><a href="company_new.html">最新动态</a></p>
					</span>
					<span>
						<p><a href="contact.html"><img src="img/nav_05.png" class="img"/></a></p>
						<p><a href="contact.html">联系心宝</a></p>
					</span>
					<span>
						<p><a href="https://sso.jingoal.com/#/login"><img src="img/nav_06.png" class="img"/></a></p>
						<p><a href="https://sso.jingoal.com/#/login">员工登录</a></p>
					</span>
				</div>
			</div>
			<!--<div class="stc_title"><img src="img/title.png" alt=""  class="img"/></div>-->
			<section class="float width sectionh">
				<div class="stc_title"><img src="img/title.png" alt="" class="img" /></div>
				<div class="_con">
					<div class="logol"><img src="img/logos.png" class="img"/></div>
					<div class="new_boxs float">
						<div class="new_s">
							<span class="new_left"><img src=<?= "'" . $news_data[0]['ThumbPic'] . "'"?> class="img"/></span>
							<span class="new_right">
								<ul>
									<li><a href="#">喜讯！喜讯！</a></li>
									<li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li>
								</ul>
							</span>
						</div>
						<div class="new_s">
							<span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span>
							<span class="new_right">
								<ul>
									<li><a href="#">喜讯！喜讯！</a></li>
									<li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li>
								</ul>
							</span>
						</div>
						<div class="new_s">
							<span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span>
							<span class="new_right">
								<ul>
									<li><a href="#">喜讯！喜讯！</a></li>
									<li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li>
								</ul>
							</span>
						</div>
						<div class="new_s">
							<span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span>
							<span class="new_right">
								<ul>
									<li><a href="#">喜讯！喜讯！</a></li>
									<li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li>
								</ul>
							</span>
						</div>
						<div class="new_s">
							<span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span>
							<span class="new_right">
								<ul>
									<li><a href="#">喜讯！喜讯！</a></li>
									<li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li>
								</ul>
							</span>
						</div>
						
					</div>
				</div>
			</section>
			<div class="width float new_bt">
				<div class="moreNew">
					<a href="company_new.html">了解更多企业动态</a>
				</div>
			</div>
			<?php include('/footer.php'); ?>
		<div class="width float">
			<iframe src="footer.html" width="100%" height="100px" frameborder="0" scrolling="no"></iframe>
		</div>

		</div>
	</body>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/unslider.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
			$('.sy').children('div').addClass('bgcolor')
			$('.staOne').children('ul').slideUp();
			$('#marquee ul li').height($('.img').height());
			var unslider06 = $('#marquee').unslider({
					dots: true,
					fluid: true
			});
				data06 = unslider06.data('unslider');
			$('.header_nav').click(function() {
				$('.i_ul').toggle(500);
			})
			$('.staOne').click(function() {
				$('.staOne').children('ul').slideUp();
				$(this).children('ul').slideToggle();
			})
			startsd();
		})
	</script>
	<script>
		var company_state = <?=$company_state?>;
		// for(var i=0; i< company_state.length; i++){
		// 	console.log(company_state[i]);
		// }
//		console.log(company_state)
		
	</script>

</html>