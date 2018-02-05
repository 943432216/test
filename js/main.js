function startsd() {
	var flag = setInterval('AutoScroll("._con")', 1000)
	$('.new_s').on({
		touchstart: function() {
			clearInterval(flag);
		},
		touchmove: function() {
			clearInterval(flag);
		},
		touchend: function() {
			flag = setInterval('AutoScroll("._con")', 1000)
		}
	})
}

function cj(data) {
//	console.log(data);
	var sn = '<div class="new_s"><span class="new_left"><img src="" class="img"/></span><span class="new_right"><ul><li><a href=""></a></li><li><a href="" class="title"></a></li></ul></span></div>';
	$.each(data, function(a, b) {
		$('.new_boxs').append(sn);
	});
	for(var i = 0; i < $('.new_s').length; i++) {
		$('.new_s').eq(i).find('a').attr('href', data[i].state_url);
		$('.new_s').eq(i).children('.new_left').children('img').attr('src', data[i].ThumbPic);
		$('.new_s').eq(i).children('.new_right').find('li').eq(0).children('a').html(data[i].Title);
		$('.new_s').eq(i).children('.new_right').find('li').eq(1).children('a').html(data[i].BriefDescription);
	}
}

function AutoScroll(obj) {
	$(obj).find(".new_boxs:first").animate({
			marginTop: "-25px"
		},
		400,
		function() {
			$(this).css({
				marginTop: "0px"
			}).find(".new_s:first").appendTo(this);
		});
}

function linkages(html, id) {
	var urs = window.location.href;
	var a, b, c, d, f;
	a = urs.split('?')[1];
	b = a.split('=')[0];
	c = a.split('=')[1];
	switch(b) {
		case 'AId':
			d = 0;
			break;
		case 'CateId':
			d = 1;
			break;
	}
	if(d == 0) {
		switch(c) {
			case '3':
				f = '公司简介';
				break;
			case '4':
				f = '董事长致词';
				break;
			case '6':
				f = '发展历程';
				break;
			case '7':
				f = '企业文化';
				break;
			case '15':
				f = '企业荣誉';
				break;
		}
	}
	if(d == 1) {
		switch(c) {
			case '1':
				f = '公司动态';
				break;
			case '2':
				f = '行业动态';
				break;
			case '6':
				f = '视频中心';
				break;
			case '8':
				f = '心肾相交理论';
				break;
			case '9':
				f = '心宝丸的临床应用';
				break;
			case '11':
				f = '蒲地蓝消炎片';
				break;
			case '22':
				f = '蒲蓝地消炎胶囊';
				break;
			case '24':
				f = '心宝丸';
				break;
		}
	}
	if(html == 'products' && c == '10') {
		f = '龟鹿补肾片';
	}
	if(html == 'info' && c == '10') {
		f = '龟鹿补肾片健康手册';
	}
//	console.log(d)
//	console.log(b)
	$('.staOne').children('ul').slideUp();
	$(id).children('ul').slideDown();
	$(id).find('div').addClass('bgcolor');
	$('.i_ul').find('li').each(function() {
		if($(this).children('a').html() == f) {
			$(this).children('a').addClass('color');
		}
	})
	$('.header_nav').click(function() {
		$('.i_ul').toggle(500);
	})
	$('.staOne').click(function() {
//		$('.staOne').children('ul').slideUp();
		$(this).children('ul').slideToggle();
	})
	inc(f);
	headers()
}

function inc(num) {
//	console.log(num);
	$('.banner_nav').find('li').each(function() {
		if($(this).children('a').html() == num) {
			$(this).children('a').addClass('bor_bn');
		}
	})
	$('.banner_navs').find('li').each(function() {
//		console.log($(this).children('a').html());
		if($(this).children('a').html() == num) {
			$(this).children('a').addClass('bor_bn');
		}
	})
}

function headers() {
	var nx=$('.header_con').html();
	$('.i_ul').find('li').each(function() {
		if($(this).children('a').html() == nx) {
			$(this).children('a').addClass('color');
			$(this).css('background','#B60005');
		}
	})
}