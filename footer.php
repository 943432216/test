<div class="blogroll">
	<div class="blogroll_left">友情链接</div>
	<div class="blogroll_right">
		<?php 
		$link_row=$db->get_all('links','1','*','MyOrder desc,LId asc');
		foreach($link_row as $item){
		?>
		<a href="<?=$item['Url']?>"><?=$item['Name']?></a>
		<?php } ?>
	</div>
</div>