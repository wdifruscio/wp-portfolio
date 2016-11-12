$(window).on('load', function(){
	$("#header___button").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("hamburger--open");
		$('nav').toggleClass("light-bg");
		$('.header___title').fadeToggle('fast');
		$("nav").fadeToggle('fast');
	});
	$("nav li a").on('click', function(){		
		$("nav").fadeToggle(function(){
			$('#header___button').toggleClass("hamburger--open");
			$('.header___title').fadeToggle('fast');
			$('nav').toggleClass("light-bg");
		});
	});
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
				}, 500);
				return false;
				}
			}
		});
	});