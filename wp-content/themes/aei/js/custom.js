// AOS Scroll Animation
AOS.init({
  once: true
});

// NAV
$("nav.sticky-top").autoHidingNavbar();

$('.menu-icon').on('click', function(){
	$('body').toggleClass('nav-active');
	setTimeout(function(){
		if ( $('body').hasClass( "nav-active" ) ) {
			bodyScrollLock.disableBodyScroll($('body'));
		}else{
			bodyScrollLock.enableBodyScroll($('body'));
			bodyScrollLock.clearAllBodyScrollLocks()
		}
	}, 50)
})

$(window).resize(function() {
  if ($(window).width() > 991.98) {
  	if ( $('body').hasClass( "nav-active" ) ) {
	    $('body').removeClass('nav-active');
	    bodyScrollLock.enableBodyScroll($('body'));
	    bodyScrollLock.clearAllBodyScrollLocks();
	}
  }
});
