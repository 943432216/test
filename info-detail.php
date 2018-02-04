<?php
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');
include($site_root_path.'/inc/lib/info/detail.php');
$CateId=(int)$info_row['CateId'];
if($CateId){
	$cur_cate=$db->get_one('info_category',"CateId='$CateId'");
}
$pageName='info';
$banner=$db->get_one('ad',"AId='5'");
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/dome1.css" />
		<link rel="stylesheet" type="text/css" href="css/css.css"/>
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
				<h1 class="header_con">公司动态</h1>
				<div class="header_nav"></div>
			</header>
			<section class="float width ddd">
				<div class="float width logos"><img src="img/logol.png" class="img"/></div>
				<div class="detail_box float width">
					<?=$info_detail;?>
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
			$('.ddd').find('div').removeAttr('style');
			$('.ddd').find('span').css('width','100%')
			$('.ddd').find('strong').removeAttr('style');
			$('.ddd').find('img').removeAttr('style');
			$('.ddd').find('img').addClass('img');
//			$('.detail_box').children(':first').addClass('ts');
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
	</script>

</html>