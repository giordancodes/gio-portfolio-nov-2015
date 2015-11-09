$(function(){

// smoothScroll init
	$('a').smoothScroll();

// animation for toggling nav

function navAnimation(elem){

	$( elem ).click(function() {
		$( '.navLi' ).animate({
			width:['toggle', 'easeOutQuint'],
			height:[ 'toggle', 'easeInCubic']
		}, 350);
	});
}


navAnimation('.curly');
navAnimation('.navLi');




// scripts end
});