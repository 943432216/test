<?php  
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');

$banner = $db->get_one('ad',"AId='7'");
$CateId = $_GET['CateId'];
$cur_cate = $db->get_one('info2_category',"CateId='$CateId'");
if ($CateId == 9) {
	$xs_state = $db->get_all('info2', 'CateId=9', 'InfoId,ThumbPic,Title,BriefDescription', 'InfoId desc limit 20');
} elseif ($CateId == 10) {
	$xs_state = $db->get_all('info2', 'CateId=10', 'InfoId,ThumbPic,Title,BriefDescription', 'InfoId desc limit 20');
}
for ($i=0; $i<20; $i++) {
	$xs_state[$i]['state_url'] = '/info2-detail.php?InfoId=' . $xs_state[$i]['InfoId'];
}
$xs_state = json_encode($xs_state, JSON_UNESCAPED_UNICODE);

switch ($_GET['CateId']) {
	case '8': 
		$pic_name = 'title_heart.png'; 
		break;
	case '9': 
		$pic_name = 'title_heart_01.png'; 
		break;
	case '10': 
		$pic_name = 'title_heart_02.png'; 
		break;
	default:  
		$pic_name = 'title_heart.png'; 
		break;
}
//var_dump($xs_state);exit;
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
				<?php include('navigate.php'); ?>
			</div>
			<header>
				<div class="header_logo"></div>
				<h1 class="header_con">心肾同治</h1>
				<div class="header_nav"></div>
			</header>
			<div class="banner float width">
				<div class="banner_nav">
					<ul>
						<?php foreach((array)$info2_cate as $item){?>
						<li><a href="<?=get_url('info2_category',$item)?>"><?=$item['Category']?></a></li>
						<?php }?>
					</ul>
				</div>
				<div class="banners">
					<?php
				    for($i=0;$i<5;$i++){
					if(!is_file($site_root_path.$banner['PicPath_'.$i]))continue;
					?>
					<img src="<?=$banner['PicPath_'.$i]?>" class="img" style="<?=$i==0?'':';display:none;'?>"/>
					<?php }?>
				</div>
			</div>
			<?php if ($CateId != 8) { ?>
				<section class="float width sectionh">
				<div class="stc_title"><img src="img/<?=$pic_name?>" alt=""  class="img"/></div>
				<div class="_con">
					<div class="logol"><img src="img/logos.png" class="img"/></div>
					<div class="new_boxs float">
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
			<?php }else{ ?>
			<section class="float width">
				<div class="stc_title"><img src="img/<?=$pic_name?>" alt=""  class="img"/></div>
				<div class="_con">
					<span class="company_bn float" style="font-size: 13px;">
						<?=$db->get_value('info2_category_description', "CateId='{$cur_cate['CateId']}'", 'Description');?>
					</span>
				</div>
			</section>
			<?php }?>
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
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
			$('.staOne').children('ul').slideUp();
			$('#t3').children('ul').slideDown();
			$('#t3 div').addClass('bgcolor');
			$('.banner_nav').find('li').children('a').eq(0).addClass('bor_bn')
			$('#t3').find('li').eq(0).children('a').addClass('color');
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