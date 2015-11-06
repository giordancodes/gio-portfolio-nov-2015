$(function(){

// smoothScroll init
	$('a').smoothScroll();


// hides nav on load
	$( '.navLi' ).hide();


// animation for toggling nav

function navAnimation(elem){

	$( elem ).click(function() {
		$( '.navLi' ).animate({
			width:['toggle', 'easeOutQuint'],
			height:[ 'toggle', 'easeInCubic'],
			complete: navOpacity()
		}, 350);
	});
}

function navOpacity(){
	$( '.navLi' ).css('opacity', 1);
}

navAnimation('.curly');
navAnimation('.navLi');




// scripts end
});