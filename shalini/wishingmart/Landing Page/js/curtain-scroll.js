jQuery(document).ready(function($){

	"use strict";
	//change this value if you want to change the speed of the scale effect
	var	scaleSpeed = 0.3,
	//change this value if you want to set a different initial opacity for the .section-half
		boxShadowOpacityInitialValue = 0.7,
		animating = false; 
	
	//check the media query 
	var MQ = window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "");
	$(window).on('resize', function(){
		MQ = window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "");
	});

	//bind the animation to the window scroll event
	triggerAnimation();
	$(window).on('scroll', function(){
		triggerAnimation();
	});
	
    $(document).keydown(function(event){
		if( event.which=='38' ) {
			prevSection();
			event.preventDefault();
		} else if( event.which=='40' ) {
			nextSection();
			event.preventDefault();
		}
	});

	function triggerAnimation(){
		"use strict";
		if(MQ.indexOf('desktop') >= 0) {
			//if on desktop screen - animate sections
			(!window.requestAnimationFrame) ? animateSection() : window.requestAnimationFrame(animateSection);
		} else {			
			//on mobile - remove the style added by jQuery 
			$('.screen-section').find('.section-inner').removeAttr('style').find('.section-half').removeAttr('style');
		}
	}
	
	function animateSection () {
		"use strict";

		var scrollTop = $(window).scrollTop(),
			windowHeight = $(window).height(),
			windowWidth = $(window).width();
		
		$('.screen-section').each(function(){
			var actualBlock = $(this),
				offset = scrollTop - actualBlock.offset().top,
				scale = 1,
				translate = windowWidth/2+'px',
				opacity,
				boxShadowOpacity;

			if( offset >= -windowHeight && offset <= 0 ) {
				//move the two .section-half toward the center - no scale/opacity effect
				scale = 1,
				opacity = 1,
				translate = (windowWidth * 0.5 * (- offset/windowHeight)).toFixed(0)+'px';

			} else if( offset > 0 && offset <= windowHeight ) {
				//the two .section-half are in the center - scale the .section-inner element and reduce the opacity
				translate = 0+'px',
				scale = (1 - ( offset * scaleSpeed/windowHeight)).toFixed(5),
				opacity = ( 1 - ( offset/windowHeight) ).toFixed(5);

			} else if( offset < -windowHeight ) {
				//section not yet visible
				scale = 1,
				translate = windowWidth/2+'px',
				opacity = 1;

			} else {
				//section not visible anymore
				opacity = 0;
			}
			
			boxShadowOpacity = parseInt(translate.replace('px', ''))*boxShadowOpacityInitialValue/20;
			
			//translate/scale section blocks
			scaleBlock(actualBlock.find('.section-inner'), scale, opacity);

			var directionFirstChild = ( actualBlock.is(':nth-of-type(even)') ) ? '-': '+';
			var directionSecondChild = ( actualBlock.is(':nth-of-type(even)') ) ? '+': '-';
			if(actualBlock.find('.section-half').length > 0) {
				translateBlock(actualBlock.find('.section-half').eq(0), directionFirstChild+translate, boxShadowOpacity);
				translateBlock(actualBlock.find('.section-half').eq(1), directionSecondChild+translate, boxShadowOpacity);	
			}
			//this is used to navigate through the sections
			( offset >= 0 && offset < windowHeight ) ? actualBlock.addClass('is-visible') : actualBlock.removeClass('is-visible');		
		});
	}

	function translateBlock(elem, value, shadow) {
		"use strict";
		var position = Math.ceil(Math.abs(value.replace('px', '')));
		
		if( position >= $(window).width()/2 ) {
			shadow = 0;	
		} else if ( position > 20 ) {
			shadow = boxShadowOpacityInitialValue;
		}

		elem.css({
		    '-moz-transform': 'translateX(' + value + ')',
		    '-webkit-transform': 'translateX(' + value + ')',
			'-ms-transform': 'translateX(' + value + ')',
			'-o-transform': 'translateX(' + value + ')',
			'transform': 'translateX(' + value + ')',
			'box-shadow' : '0px 0px 40px rgba(0,0,0,'+shadow+')'
		});
	}

	function scaleBlock(elem, value, opac) {
		"use strict";
		elem.css({
		    '-moz-transform': 'scale(' + value + ')',
		    '-webkit-transform': 'scale(' + value + ')',
			'-ms-transform': 'scale(' + value + ')',
			'-o-transform': 'scale(' + value + ')',
			'transform': 'scale(' + value + ')',
			'opacity': opac
		});
	}

	function nextSection() {
		"use strict";
		if (!animating) {
			if ($('.screen-section.is-visible').next().length > 0) smoothScroll($('.screen-section.is-visible').next());
		}
	}

	function prevSection() {
		"use strict";
		if (!animating) {
			var prevSection = $('.screen-section.is-visible');
			if(prevSection.length > 0 && $(window).scrollTop() != prevSection.offset().top) {
				smoothScroll(prevSection);
			} else if(prevSection.prev().length > 0 && $(window).scrollTop() == prevSection.offset().top) {
				smoothScroll(prevSection.prev('.screen-section'));
			}
		}
	}

	function smoothScroll(target) {
		"use strict";
		animating = true;
        $('body,html').animate({'scrollTop': target.offset().top}, 500, function(){ animating = false; });
	}
});