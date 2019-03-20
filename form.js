$(function() {

    $('#service-form-link').click(function(e) {
		$("#service-form").delay(100).fadeIn(100);
 		$("#bien-form").fadeOut(100);
		$('#bien-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#bien-form-link').click(function(e) {
		$("#bien-form").delay(100).fadeIn(100);
 		$("#service-form").fadeOut(100);
		$('#service-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
