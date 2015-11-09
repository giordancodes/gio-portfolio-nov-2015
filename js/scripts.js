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
		$('.aboutImg').removeClass('slideInLeft');
		$('.aboutText').removeClass('slideInRight');
		$('.worksText').removeClass('slideInRight');
		$('.worksImg').removeClass('slideInLeft');
		$('.skillsImg').removeClass('animated', 'wow');
	}
}

checkIos();

// scripts end
});