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
switch ($_GET['AId']) {
	case '3': 
		$pic_name = 'title_about_01.png'; 
		$t_title  = '公司简介';
		break;
	case '6': 
		$pic_name = 'title_about_02.png'; 
		$t_title  = '发展历程';
		break;
	case '7': 
		$pic_name = 'title_about_03.png'; 
		$t_title  = '企业文化';
		break;
	case '15': 
		$pic_name = 'title_about_04.png'; 
		$t_title  = '企业荣誉';
		break;
	case '4': 
		$pic_name = 'title_about_05.png'; 
		$t_title  = '董事长致词';
		break;	
	default:  
		$pic_name = 'title_about_01.png'; 
		$t_title  = '公司简介';
		break;
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
				<h1 class="header_con"><?=$t_title?></h1>
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
				<?php
			    for($i=0;$i<5;$i++){
					if(!is_file($site_root_path.$banner['PicPath_'.$i]))continue;
				?>
				<div class="banners" style="background:url(<?=$banner['PicPath_'.$i]?>) no-repeat top center;<?=$i==0?'':'display:none;'?>"></div>
				<?php }?>
			</div>
			<section class="float width b1">
				<div class="stc_title"><img src="img/<?=$pic_name?>" alt=""  class="img"/></div>
				<div class="_con">
					<?php if ($_GET['AId'] == '4') {?>
						<img src="img/spend.png" alt="董事长致辞" class="img tcs"/>
					<?php } else {
						echo $article_row['Contents'];
					}
					?>					
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
			$('._con').find('*').removeAttr('style');
			$('._con').find('img').addClass('img');
			linkages('products','#t1');
		})
	</script>

</html>