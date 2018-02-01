function GoUp() {
	var sn = '<div class="new_s"><span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span><span class="new_right"><ul><li><a href="#">喜讯！喜讯！</a></li><li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li></ul></span></div>'
	var sot = parseFloat($('.new_s').height());
	var sod = parseFloat($(".new_boxs").css('margin-top'));
	var mh = sod * 2 - sot;
	console.log(mh);
	$(".new_s:first").animate({
		marginTop: mh + "px"
	}, 400, function() {
		//				$(".new_boxs").css('margin-top', sod);
		$('.new_s:nth-last-of-type(1)').after(sn);
		$('.new_boxs').children('div:nth-of-type(1)').remove();
	});
}

function startsd() {
	var flag = setInterval(GoUp, 2000);
	$('.new_boxs').on({
		touchstart: function() {
			clearInterval(flag);
		},
		touchmove: function() {
			clearInterval(flag);
		},
		touchend: function() {
			flag = setInterval(GoUp, 2000);
		}
	})
}