var script=jQuery.noConflict();
script(document).ready(function($) {
	function onAfter(curr, next, opts, fwd) {
		 var $ht = $(this).height();

		  //set the container's height to that of the current slide
		 $(this).parent().animate({height: $ht});
	}
						
    $(".imgLiquidFill").imgLiquid();

});

var menufix=jQuery.noConflict();
menufix(function($) {
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});