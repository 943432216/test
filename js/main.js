//function GoUp() {
//	var sn = '<div class="new_s"><span class="new_left"><img src="img/50f750d822.jpg" class="img"/></span><span class="new_right"><ul><li><a href="#">喜讯！喜讯！</a></li><li><a href="#" class="title">心宝药业获2017年度广东省工程技术研究中心认定</a></li></ul></span></div>'
//	var sot = parseFloat($('.new_s').height());
//	var sod = parseFloat($(".new_boxs").css('margin-top'));
//	var mh = sod * 2 - sot;
////	console.log(mh);
//	$(".new_s:first").animate({
//		marginTop: mh + "px"
//	}, 400);
//}
//
function startsd(){
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
	console.log(data);
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
