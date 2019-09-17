// AOS Scroll Animation
AOS.init({
  once: true
});

// NAV
$("nav.sticky-top").autoHidingNavbar({showOnBottom: false});


$('.menu-icon').on('click', function(){
	$('body').toggleClass('mobile__nav-active');
	setTimeout(function(){
		if ( $('body').hasClass( "mobile__nav-active" ) ) {
			bodyScrollLock.disableBodyScroll($('body'));
		}else{
			bodyScrollLock.enableBodyScroll($('body'));
			bodyScrollLock.clearAllBodyScrollLocks()
		}
	}, 50)
})

$(window).resize(function() {
  if ($(window).width() > 991.98) {
  	if ( $('body').hasClass( "mobile__nav-active" ) ) {
	    $('body').removeClass('mobile__nav-active');
	    bodyScrollLock.enableBodyScroll($('body'));
	    bodyScrollLock.clearAllBodyScrollLocks();
	}
  }
});


// Custom Carousel Trigger
$('#custom_carousel').on('slide.bs.carousel', function (evt) {
	$('#custom_carousel .controls li.active').removeClass('active');
	$('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
})

$('.carousel').each(function(){
	var items = $('.carousel-item', this);
      // reset the height
      items.css('min-height', 0);
      // set the height
      var maxHeight = Math.max.apply(null, 
      	items.map(function(){
      		return $(this).outerHeight()}).get() );
      items.css('min-height', maxHeight + 'px');
  })
