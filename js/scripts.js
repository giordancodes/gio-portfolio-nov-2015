$(function(){

// smoothScroll init
	$('a').smoothScroll();


// hides nav on load
	$( '.navLi' ).hide();


// animation for toggling nav

function navAnimation(elem){

	$( elem ).click(function() {
		$( '.navLi' ).animate({
			width:'toggle',
			height: 'toggle',
			duration: 10000,
			specialEasing: {
				width: 'linear',
				height: 'easeIn'
			}
		});
	});
}

navAnimation('.curly');
navAnimation('.navLi');




// scripts end
});