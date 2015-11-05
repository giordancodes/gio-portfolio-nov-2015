$(function(){

// smoothScroll init
	$('a').smoothScroll();


// hides nav on load
	$( '.navLi' ).hide();


// animation for toggling nav

function navAnimation(elem){

	$( elem ).click(function() {
		$( '.navLi' ).animate({
			width:['toggle', 'easeInQuint'],
			height:[ 'toggle', 'easeInCubic'],
			duration: 800,
			opacity: 1
		});
	});
}

navAnimation('.curly');
navAnimation('.navLi');




// scripts end
});