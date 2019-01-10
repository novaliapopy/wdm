$(document).ready(function(){
	$('.sidenav')
	.sidenav()
	.on('click tap', 'li a', () => {
		$('.sidenav').sidenav('close');
	});
});

$(document).ready(function(){
	$('.parallax').parallax();
});

$(document).ready(function(){
	$('.tabs').tabs();
});

$(document).ready(function(){
	$('.carousel').carousel();
});

$(document).ready(function(){
	$('.tabs-wrapper .row').pushpin({ top: $('.tabs-wrapper').offset().top });
});

$(document).ready(function(){
	$('.sidenav').sidenav();
	$('#sidenav-1').sidenav({ edge: 'left' });
	$('#sidenav-2').sidenav({ edge: 'right' });
});

$(document).ready(function(){
	$('.collapsible').collapsible();
});
