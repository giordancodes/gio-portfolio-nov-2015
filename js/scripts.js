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

//call nav animations
	
navAnimation('.curly');
navAnimation('.navLi');

//remove wow animations on ios
	
function checkIos(){
	if (is.ios() === true){
		$('.aboutImg').removeClass('animated');
		$('.aboutText').removeClass('animated');
		$('.worksPair').removeClass('animated');
		$('.skillsImg').removeClass('animated');
	}
}

checkIos();

// scripts end
});