$(document).ready(function(){
	var total = 0;

	$('.dias').change(function	(){
		total = 0;
		total += parseInt($('#qLu').val());
		total += parseInt($('#qMa').val());
		total += parseInt($('#qMi').val());
		total += parseInt($('#qJu').val());
		total *= 45;

		$("#total").val(total);
	});

});