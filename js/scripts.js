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
	
function checkDesktop(){
	if (is.desktop() === true){
		$('.aboutImg').addClass('slideInLeft');
		$('.aboutText').addClass('slideInRight');
		$('.worksImg').addClass('slideInLeft');
		$('.worksText').addClass('slideInRight');
		$('.skillsImg').addClass('animated');
	}
}

checkDesktop();

// scripts end
});