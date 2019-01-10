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

$(window).scroll(function() {
	if ($(document).scrollTop() > 100) {
		$('.asu').addClass('asu2');
	} else {
		$('.asu').removeClass('asu2');
	}
});

$(document).ready(function(){
    $('.materialboxed').materialbox();
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
	$('.carousel').carousel(
	{
	}
	);
});

autoplay()   
function autoplay() {
	$('.carousel').carousel('next');
	setTimeout(autoplay, 4500);
}


