$(document).ready(function() {
	//Cool Nav Bar function
  $(".sub-about").hide();
  $(".sub-clients").hide();
  $(".sub-partners").hide();
  $(".has-dropdown").hover( function(){
    $(".header").stop().animate({"margin-top":"50px"});
  }, function() {
    $(".header").stop().animate({"margin-top":"0"});
  });
  $(".nav-clients").hover(
    function(){
      $(".sub-clients").stop().fadeToggle();
      $(".sub-bar").stop().slideToggle();
  });
  $(".nav-about").hover(
    function(){
      $(".sub-about").stop().fadeToggle();
      $(".sub-bar").stop().slideToggle();
  });
  $(".nav-partners").hover(
    function(){
      $(".sub-partners").stop().fadeToggle();
      $(".sub-bar").stop().slideToggle();
  });

// Magical smooth scroll function.
	$('.smooth_scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({scrollTop: target.offset().top -50}, 1000);
					return false;
				}
		}
	});
});
