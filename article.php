<?php  
include('inc/site_config.php');
include($site_root_path.'/inc/set/ext_var.php');
include($site_root_path.'/inc/fun/mysql.php');
include($site_root_path.'/inc/function.php');
include($site_root_path.'/inc/common.php');

if(!isset($article_row)){
	$AId=(int)$_GET['AId'];
	$article_row=$db->get_one('article',"AId='$AId'");
	$GroupId=(int)$article_row['GroupId'];
}
$group_txt=array(
	1=>	array('A','bout us','关于心宝'),
	2=>	array('C','ontent us','联系心宝'),
	3=>	array('H','eart Tongzhi','心肾同治')
);
$pageName='art';
if($GroupId==1){
	$banner=$db->get_one('ad',"AId='3'");
}elseif($GroupId==2){
	$banner=$db->get_one('ad',"AId='8'");
}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,user-scalable=no" />
		<title>心宝药业</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/dome.css"/>
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
				<h1 class="header_con">关于心宝</h1>
				<div class="header_nav"></div>
			</header>
			<div class="banner float width">
				<div class="banner_nav">
					<ul>
						<?php foreach((array)$art_group[$GroupId] as $item){?>
						<li class="b1"><a href="<?=get_url('article',$item)?>"><?=$item['Title']?></a></li>
						<?php }?>
					</ul>
				</div>
				<div class="banners"></div>
			</div>
			<section class="float width b1">
				<div class="stc_title"><img src="img/title_about_01.png" alt=""  class="img"/></div>
				<div class="_con">
					<?=$article_row['Contents']?>					
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
			$('#t1').children('ul').slideDown();
			$('#t1 div').addClass('bgcolor');
			$('.banner_nav').find('li').children('a').eq(0).addClass('bor_bn')
			$('#t1').find('li').eq(0).children('a').addClass('color');
			$('.header_nav').click(function() {
				$('.i_ul').toggle(500);
			})
			$('.staOne').click(function() {
				$('.staOne').children('ul').slideUp();
				$(this).children('ul').slideToggle();
			})
			$('._con').find('*').removeAttr('style');
			$('._con').find('img').addClass('img');
		})
	</script>

</html>