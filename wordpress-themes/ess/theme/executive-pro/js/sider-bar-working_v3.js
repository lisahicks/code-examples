<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(function() {
//console.log( "ready, apply wrapper div now" );
	
	//move search
    $(".search-form").prependTo("div.header-social").show();
	
	//move heading 1 page titles 
    $("h1.entry-title").prependTo("div.above-content-hero").show();
	
	//on document load wrap widgets in div
	$('.footer-widgets-1, .footer-widgets-2, .footer-widgets-3').wrapAll( $('<div>').addClass('wrap-footer-widgets') );
	
	//fix hero img on news section
	//1. find all news pages
	if (window.location.href.indexOf("news") >= 0) {
    		var getImageSrc = $('.imageDiv img').attr('src');
			// 2. add div background image using the variable above
			$('.above-content-hero').css('background-image', 'url(' + getImageSrc + ')');
			
			//3. set all headllines
			$('h1.entry-title').prependTo("main.content article.post");
		
				if(window.location.href === "http://essintial.com/news/" || "http://essintial.com/company-news/" || "http://essintial.com/industry-news/"){
			$('div.above-content-hero').append('<h1 class="entry-title-news" itemprop="headline" style="display: block;">News</h1>');
				}
			//$('h1.entry-title').text('News');
	}
	//hide hero on front
	if(window.location.href === "http://essintial.com/"){
		$('div.above-content-hero').remove();
	}

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
	}, 500);
	
	//on document load run function to adjust sidebar height
	setEqualContainer();
	
	function myFunction() {
    if($(window).width() > 500)
    {   
		setEqualContainer();
//		console.log("window is larger than 500px");
    }
}

//initialize
myFunction();

	//call when the page resizes.
	$(window).resize(function() {
//		console.log("window has been resized");
		myFunction();
	});//window resize doc
});//doc ready func
</script>