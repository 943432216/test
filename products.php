<?php
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');
include($site_root_path.'/inc/lib/product/list_lang_0.php');


$cate_nav = $db->get_all('product_category',"CateId in ('24','10','11','22')");
list($bushen,$pdpian,$pdjiao,$xbw) = $cate_nav;
$cate_nav_new[] = $xbw;
$cate_nav_new[] = $bushen;
$cate_nav_new[] = $pdpian;
$cate_nav_new[] = $pdjiao;
$pageName='pro';
$banner=$db->get_one('ad',"AId='6'");
//var_dump($cate_nav_new);exit;
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/dome1.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/css.css" />-->
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
				<h1 class="header_con">产品中心</h1>
				<div class="header_nav"></div>
			</header>
			<div class="banner float width">
				<div class="banner_navs">
					<ul>
						<?php  
							foreach ($cate_nav_new as $v) {
						?>
						<li>
							<a href="<?='products.php?CateId=' . $v['CateId']?>"><?=$v['Category']?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="banners float width">
				<img src="img/product.jpg" class="img" />
			</div>
			<section class="float width">
				<div class="stc_title"><img src="img/title_product_01.png" alt="" class="img" /></div>
				<div class="_con">
					<?php 
					for($i=0,$len=count($product_row);$i<$len;$i++){
						$item=$product_row[$i];
						$url=get_url('product',$item);
					?>
					<div class="product">
						<span><a href="<?=$url?>"><img src="<?=$item['PicPath_0']?>" class="img"/></a></span>
						<p>
							<a href="<?=$url?>"><?=$item['Name']?></a>
						</p>
					</div>
					<?php }?>
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
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
//			var  urs=window.location.href;
//			var ds=null;
//			urs=urs.split('=')[1];
//			if(urs==24){ds=0;} 
//			if(urs==10){ds=1;}
//			if(urs==11){ds=2;} 
//			if(urs==22){ds=3;}  
//			$('.staOne').children('ul').slideUp();
//			$('#t2').children('ul').slideDown();
//			$('#t2 div').addClass('bgcolor');
//			$('.banner_navs').find('li').children('a').eq(ds).addClass('bor_bn')
//			$('#t2').find('li').eq(ds).children('a').addClass('color');
//			$('.header_nav').click(function() {
//				$('.i_ul').toggle(500);
//			})
//			$('.staOne').click(function() {
//				$('.staOne').children('ul').slideUp();
//				$(this).children('ul').slideToggle();
//			})
			linkages('products','#t2');
		})
	</script>

</html>