$(document).ready(function() {

	$('.fancybox').fancybox();

	$("#fancybox-manual-b").click(function() {
		$.fancybox.open({
			href : '',
			type : 'iframe',
			padding : 5
		});
	});

});