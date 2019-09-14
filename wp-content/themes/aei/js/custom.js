$("nav.sticky-top").autoHidingNavbar();

AOS.init({
  once: true
});

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




 
 