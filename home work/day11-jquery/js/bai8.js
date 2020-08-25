$(document).ready(function(){
	$('#menu > ul > li').mouseover(function(){
		// alert('the li dc hover');
		$(this).find('.sub-menu').attr('style', 'display:block');
		// $('#menu > ul > li > a:hover .sub-menu').attr('display', 'block');
		// $(this).find('a').attr('href','https://dantri.com.vn/');
		// console.log(obj_test);

// 	});
// 	$('#id-a').attr('href', '#');
// 	// console.log(obj_id);
// 	// console.log('ban dang trong ham jsquery');
	});
	$('#menu > ul > li').mouseout(function(){
		$(this).find('ul.sub-menu').attr('style', 'display:none');
	});
	// var obj_li = $('.sub-menu li a').attr('href');
	// console.log(obj_li);
	// $('#id-jquery').mouseover(function(){
		// $(this).html('noi dung h3 chinh sua boi jquery');
	// });
});

