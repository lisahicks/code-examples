$(window).on('load', function() {
	/*Innerpages - move breadcrumbs*/
		$("div.breadcrumbs").prependTo("div#main");
		
	/*Innerpages - move icons in front of title*/
		$("img.header-icon").prependTo("h1#post-title");
		$("h1#post-title").wrap( "<div class='title-wrapper'></div>" );
		$(".ax-fa").prependTo("h1#post-title");
		$(".rx-fa").prependTo("h1#post-title");
		$(".op-fa").prependTo("h1#post-title");
		$(".about-fa").prependTo("h1#post-title");
		
	/*add active class to current link in sidebar so we can style it*/
			$(".sidebar [href]").each(function() {
			if (this.href == window.location.href) {
				$(this).addClass("selected");
				}
			});
			
	//Add post content link to featured image
/*		$('div.thumb-wrapper').html(function(i,html) {
			console.log("working");
			return $(this).next('div.text-holder').find('a').clone().html( html );
			console.log($(this).next('div.text-holder').html);
		});*/		
	//Change main blog page title
		if(window.location.href.indexOf("squeal-blog") > -1 )
			{
				$( "h1.section-title-right" ).text('News');	
			}
			
	//style search results page - hide everything but title short descrip
		if(window.location.href.indexOf("?s=") > -1 || window.location.href.indexOf("event") > -1 )
			{
				$('div.image-holder, i, div.meta, div.post-single img').hide();	
			}

		/*check div for content next/previous then hide container if found*/
/*          		if(window.location.href.indexOf("event") > -1 || 
   					window.location.href.indexOf("calendar") > -1)
	            {
	            	$('#collapsed_archives_widget-3').hide();
					$(".sidebar-frame:contains(Next)").hide(); 

	            }*/
				
	//Remove Back to Autocross button from all pages EXCEPT the Autocross Beginner's Guide pages (so it only appears on pages where the Beginner's Guide menu appears
	//Remove Back to Rallycross button from all pages EXCEPT the Rallycross Beginner's Guide pages (so it only appears on pages where the Beginner's Guide menu appears
		$(".page-template-AX-page-right-sidebar .button, .page-template-RX-page-right-sidebar .button").hide();
		if( $(".sidebar span").text().indexOf('Beginner') >= 0) {
			$(".page-template-AX-page-right-sidebar .button, .page-template-RX-page-right-sidebar .button").show();
		}
		
	//Remove the "Archive" side menu from all pages EXCEPT blog pages
		if ($("body").hasClass("page")) {
    		$('#collapsed_archives_widget-3').hide();
		}	
	// This is for tables on events results pages to make them scrollable
	// Run on window load instead of on DOM Ready in case images or other scripts affect element widths
	// Check all tables. You may need to be more restrictive.
		$('table').each(function() {
			var element = $(this);
			// Create the wrapper element
			var scrollWrapper = $('<div />', {
				'class': 'scrollable',
				'html': '<div />' // The inner div is needed for styling
			}).insertBefore(element);
			// Store a reference to the wrapper element
			element.data('scrollWrapper', scrollWrapper);
			// Move the scrollable element inside the wrapper element
			element.appendTo(scrollWrapper.find('div'));
			// Check if the element is wider than its parent and thus needs to be scrollable
			if (element.outerWidth() > element.parent().outerWidth()) {
				element.data('scrollWrapper').addClass('has-scroll');
			}
			// When the viewport size is changed, check again if the element needs to be scrollable
			$(window).on('resize orientationchange', function() {
				if (element.outerWidth() > element.parent().outerWidth()) {
					element.data('scrollWrapper').addClass('has-scroll');
				} else {
					element.data('scrollWrapper').removeClass('has-scroll');
				}
			});
	});
});