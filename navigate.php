<ul>
	<li style="background: #B60005;">
		<a href="index.php">首页</a>
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