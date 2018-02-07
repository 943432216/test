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
		break;
	case '6': 
		$pic_name = 'title_about_02.png'; 
		break;
	case '7': 
		$pic_name = 'title_about_03.png'; 
		break;
	case '15': 
		$pic_name = 'title_about_04.png'; 
		break;
	case '4': 
		$pic_name = 'title_about_05.png'; 
		break;	
	default:  
		$pic_name = 'title_about_01.png'; 
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
				<a href="index.php" class="header_logo"></a>
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
				<?php
			    for($i=0;$i<5;$i++){
					if(!is_file($site_root_path.$banner['PicPath_'.$i]))continue;
				?>
				<div class="banners">
					<img src="<?=$banner['PicPath_'.$i]?>" class="img" style="<?=$i==0?'':'display:none;'?>"/>
				</div>
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
			<?php include('/footer.php'); ?>
		</div>
	</body>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/unslider.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function() {
			$('._con').find('*').removeAttr('style');
			$('._con').find('img').addClass('img');
			$('._con').find('div').addClass('ncd')
			linkages('products','#t1');
		})
	</script>

</html>