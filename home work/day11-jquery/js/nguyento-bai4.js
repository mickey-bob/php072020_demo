$(document).ready(function(){
	function so_nguyen (number){
		var check_number = true;
		if (number < 2) {
			check_number = false;
		}
		for (i = 2; i <= Math.sqrt(number); i++){
			if (number % i == 0) {
				check_number = false;
				break;
			}
		}
		return check_number;
	};
	$('#submit-form').submit(function(){
		// alert('inside submit form');
		var number = $('#id-input').val();
		// var i = '';
		var result = 'Cac so nguyen to tu 1 den '+ number + ' la:';
		// console.log(so_nguyen(number))
		var x = 1;
		for (i = 1; i <= number; i++){
			// console.log(i);
			var j = so_nguyen(i);
			if (j == true) {
				// console.log('inside if (true) {}');
				result += i + ',';
				// x += 1;
				// console.log(x);
			}
			
		};
		$('#result').html(result);
		event.preventDefault();
	});
	// $('#submit-button').click(function(){
		// alert('inside click button');
	// });
});