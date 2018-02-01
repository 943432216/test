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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/global.css" />
<link rel="stylesheet" href="/css/lib.css" />
<link rel="stylesheet" href="/css/style.css" />
<?=seo_meta_as_lang($info_row)?>
</head>
<body>
<?php include($site_root_path.'/inc/header.php');?>
<div class="clear"></div>
<?php include($site_root_path.'/inc/banner.php');?>
<?php include($site_root_path.'/inc/infocate.php');?>
<div class="w1000 info-detail">
	<?=$info_detail;?>
</div>

<?php  include($site_root_path.'/inc/footer.php');?>
</body>
</html>