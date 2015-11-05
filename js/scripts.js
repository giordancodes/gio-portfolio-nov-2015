$(function(){

// smoothScroll init
	$('a').smoothScroll();


// hides nav on load
	$( '.navLi' ).hide();


// animation for toggling nav

function navAnimation(elem){

	$( elem ).click(function() {
		$( '.navLi' ).animate({
			width:['toggle', 'easeOutCirc'],
			height:[ 'toggle', 'easeInCirc'],
			duration: 800
		});
	});
}

navAnimation('.curly');
navAnimation('.navLi');




// scripts end
});