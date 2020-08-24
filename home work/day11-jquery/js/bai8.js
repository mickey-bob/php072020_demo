$(document).ready(function(){
	$('#menu  ul > li').mouseover(function(){
		// $('#menu > ul > li > a:hover .sub-menu').attr('display', 'block');
		// alert('the li dc hover');
		// var obj_test = $(this).attr('display');
		// console.log (obj_test);
		$('#id-jquery').html('noi dung h3 chih sua bang ham mouseover');
		// $('#sub-menu').attr('display','block');
		// console.log(obj_test);
		$(this).children('ul').attr('display','block');
		var abc = $(this).children('ul').attr('display');
		console.log(abc);

// 	});
// 	$('#id-a').attr('href', '#');
// 	// console.log(obj_id);
// 	// console.log('ban dang trong ham jsquery');
	});
	// var obj_li = $('.sub-menu li a').attr('href');
	// console.log(obj_li);
	// $('#id-jquery').mouseover(function(){
		// $(this).html('noi dung h3 chinh sua boi jquery');
	// });
});

