$(function(){
	$("#header___button").click(function() {
		$(this).toggleClass("hamburger--open");
		$('body').toggleClass("light-bg");
		$('.header___title').fadeToggle('fast');
		$("nav").fadeToggle('fast');
	});
});