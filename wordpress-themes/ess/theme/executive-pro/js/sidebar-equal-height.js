<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	
	$( document ).ready(function() {
        console.log( "document loaded" );
	
		var content = $('.content');
		var sidebar = $('.sidebar');
		var myTimer;

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
		}, 50000);
    });
	
</script>