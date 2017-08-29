<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$('.footer-widgets-1, .footer-widgets-2, .footer-widgets-3').wrapAll( $('<div>').addClass('wrap-footer-widgets') );

function myFunction() {
		var content = $('.content');
		var sidebar = $('.sidebar');
		var myTimer;
    if($(window).width() > 500)
    {   
		function setEqualContainer() {
			var getContentHeight = content.outerHeight();
			var getSidebarHeight = sidebar.outerHeight();

			if ( getContentHeight > getSidebarHeight ) {
				sidebar.css('min-height', getContentHeight);
			}

			if ( getSidebarHeight > getContentHeight ) {
				content.css('min-height', getSidebarHeight);
			}
		}

		myTimer = setInterval( function() {
			setEqualContainer();
		}, 500);
    }
    else
    {
		sidebar.css('max-height', '500');
    }
}

//initialize
myFunction();

//call when the page resizes.
$(window).resize(function() {
    myFunction();
});
</script>