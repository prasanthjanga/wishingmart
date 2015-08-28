

(function($) {
	"use strict";

	/* ------------------------------------------------------------------------ */
	/*	1. BOOTSTRAP FIX FOR WINPHONE 8 AND IE10
	/* ------------------------------------------------------------------------ */
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement("style")
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport{width:auto!important}"
			)
		)
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
	}

	function detectIE() {
		var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
		var ieVersion			= navigator.appVersion;
		
		if (is_explorer){
			return true;
		}
		return false;
	}

	function getWindowWidth() {
		return Math.max( $(window).width(), window.innerWidth);
	}

	function getWindowHeight() {
		return Math.max( $(window).height(), window.innerHeight);
	}


	// BEGIN WINDOW.LOAD FUNCTION
	$(window).load(function() {

		/* ------------------------------------------------------------------------ */
		/*	2. PRELOADER
		/* ------------------------------------------------------------------------ */
		setTimeout(function(){
					$('#preload-content').fadeOut(900, function(){
					$('#preloadcontainer').fadeOut(900); 
					setTimeout(function(){
						$('.fade-in').each(function(index) {
							$(this).delay(600*index).animate({ top : 0, opacity: 1 }, 900);
						});
					}, 900);
				});
			}, 300);
			
		/* ------------------------------------------------------------------------ */
		/*	3. ANIMATED ELEMENTS
		/* ------------------------------------------------------------------------ */	
		if( !$('body').hasClass('mobile') ) {
		
			if( detectIE() ) {
				$('.animated').css({
					'display':'block',
					'visibility': 'visible'
				});
			} else {
				/* Starting Animation on Load */
					$('.animationonstart').each( function() {
						var elem = $(this);
						if ( !elem.hasClass('visible') ) {
							var animationDelay = elem.data('animation-delay');
							var animation = elem.data('animation');
							if ( animationDelay ) {
								setTimeout(function(){
									elem.addClass( animation + " visible" );
								}, animationDelay);
							} else {
								elem.addClass( animation + " visible" );
							}
						}
					});
			}
		}
			
			
	});

	//BEGIN DOCUMENT.READY FUNCTION
	jQuery(document).ready(function($) {
		
		var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
		var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
		var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
		var is_safari = navigator.userAgent.indexOf("Safari") > -1;
		var is_Opera = navigator.userAgent.indexOf("Presto") > -1;
		if ((is_chrome)&&(is_safari)) {is_safari=false;}	
		var browserVersion			= navigator.appVersion;
		

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('body').addClass('mobile');
		}
		
		if (is_chrome) {
			$('body').addClass('chrome');
		}
		
		if (is_safari) {
			$('body').addClass('safari');
		}

		
		/* ------------------------------------------------------------------------ */
		/*	4. NICE SCROLL
		/* ------------------------------------------------------------------------ */	
		$("html").niceScroll({
			cursorcolor: '#fff',
			cursoropacitymin: '0',
			cursoropacitymax: '1',
			cursorwidth: '3px',
			zindex: 10000,
			horizrailenabled: false,
			enablekeyboard: false
		});
		
		
		
		/* ------------------------------------------------------------------------ */
		/*	5. COUNT DOWN
		/* ------------------------------------------------------------------------ */		
			
		$('.countdown').downCount({
			date: '09/09/2016 12:00:00', //You need to update date and time only
			offset: +10
		}, function () {
			alert('WOOT WOOT, done!');
		});
		
		/* ------------------------------------------------------------------------ */
		/*	6. owlCarousel
		/* ------------------------------------------------------------------------ */
		
		var carousel = $("#owl-demo");
	  
		carousel.owlCarousel({
			slideSpeed : 900,
			paginationSpeed : 600,
			navigation: false,
			singleItem: true,
			transitionStyle: "goDown",
			responsive: true,
			responsiveRefreshRate: 200,
			responsiveBaseWidth: true,
			mouseDrag: false,
			touchDrag: true,
			addClassActive: false
		});
		
	  
		$('.homestart').click(function(){
			$('.navigation-dot li').removeClass('navcurrent').fadeIn(20);
			carousel.trigger('owl.goTo', 0);
			$('.homestart').toggleClass('navcurrent').fadeIn(120);
			
		});
	  
		$('.about').click(function(){
			$('.navigation-dot li').removeClass('navcurrent').fadeIn(20);
			carousel.trigger('owl.goTo', 1);
			$('.about').toggleClass('navcurrent').fadeIn(120);
		});
		
		$('.services').click(function(){
			$('.navigation-dot li').removeClass('navcurrent').fadeIn(20);
			carousel.trigger('owl.goTo', 2);
			$('.services').toggleClass('navcurrent').fadeIn(120);
		});
	  
		$('.contact').click(function(){
			$('.navigation-dot li').removeClass('navcurrent').fadeIn(20);
			carousel.trigger('owl.goTo', 3);
			$('.contact').toggleClass('navcurrent').fadeIn(120);
		});
		
		/* ------------------------------------------------------------------------ */
		/*	7. BACKGROUNDS
		/* ------------------------------------------------------------------------ */	
		
			if( $('body').hasClass('slideshow-background') ) { // SLIDESHOW BACKGROUND			
			
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();	
				
				$("body").backstretch([
					"background/image-1.jpg",
					"background/image-2.jpg",
					"background/image-3.jpg",
					"background/image-4.jpg",
					"background/image-5.jpg",
					"background/image-6.jpg",
					"background/image-7.jpg"
				], {duration: 3000, fade: 1200});
				
			
			} else if($('body').hasClass('image-background')) { // IMAGE BACKGROUND
			
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();	
				
				$("body").backstretch([
					"background/image-1.jpg"
				]);
			} else if($('body').hasClass('star-background')) { // SPACE BACKGROUND
			
				$(".pageoverlay").addClass('particles');
				$( ".videoicon" ).remove();					
				
				var i,
					size,
					color,
					width = $(window).width(),
					height = $(window).height();
				
				for (i = 1; i <= 150; i++) {
					size = Math.ceil(3*Math.random());
					$('.particles').append('<div class="star" data-parallaxify-range="' + Math.round(100*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px;"></div>');
				}
				
				for (i = 1; i <= 30; i++) {
					size = Math.ceil(5*Math.random()) + 2;
					$('.particles').append('<div class="star" data-parallaxify-range="' + Math.round(400*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px;"></div>');
				}
				
				for (i = 1; i <= 15; i++) {
					size = Math.ceil(5*Math.random()) + 5;
					color = 'rgba(' + Math.round(256*Math.random()) + ', ' + Math.round(256*Math.random()) + ', ' + Math.round(256*Math.random()) + ', ' + (Math.round(100*Math.random())/100) + ')';
					$('.particles').append('<div class="star" data-parallaxify-range="' + Math.round(600*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px; background: ' + color + '; box-shadow: 0px 0px 10px ' + color + ';"></div>');
				}
				$("body").backstretch([
					"../assets/wishing/background/star-bg-image.jpg"
				]);
				
				$(".particles").parallaxify({
					positionProperty: 'transform',
					responsive: true,
					motionType: 'natural',
					mouseMotionType: 'gaussian',
					motionAngleX: 30,
					motionAngleY: 30,
					alphaFilter: 0.5,
					adjustBasePosition: true,
					alphaPosition: 0.0025
				});
				
				
				
			} else if($('body').hasClass('parallax-background')) { // PARALLAX BACKGROUND
			
				$(".parallax-wallpaper").backstretch([
					"background/parallax-image-1.jpg"
				]);
				
				$.parallaxify({
					positionProperty: 'transform',
					responsive: true,
					motionType: 'natural',
					mouseMotionType: 'gaussian',
					motionAngleX: 30,
					motionAngleY: 30,
					alphaFilter: 0.5,
					adjustBasePosition: true,
					alphaPosition: 0.0025
				});
				
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				
				
				var i,
					size,
					color,
					width = $(window).width(),
					height = $(window).height();
				
				for (i = 1; i <= 150; i++) {
					size = Math.ceil(3*Math.random());
					$('.morestars').append('<div class="star" data-parallaxify-range="' + Math.round(100*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px;"></div>');
				}
				
				for (i = 1; i <= 30; i++) {
					size = Math.ceil(5*Math.random()) + 2;
					$('.morestars').append('<div class="star" data-parallaxify-range="' + Math.round(400*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px;"></div>');
				}
				
				for (i = 1; i <= 15; i++) {
					size = Math.ceil(5*Math.random()) + 5;
					color = 'rgba(' + Math.round(256*Math.random()) + ', ' + Math.round(256*Math.random()) + ', ' + Math.round(256*Math.random()) + ', ' + (Math.round(100*Math.random())/100) + ')';
					$('.morestars').append('<div class="star" data-parallaxify-range="' + Math.round(600*Math.random()) + '" style="top: ' + Math.round(height*Math.random()) + 'px; left: ' + Math.round(width*Math.random()) + 'px; width: ' + size + 'px; height: ' + size + 'px; background: ' + color + '; box-shadow: 0px 0px 10px ' + color + ';"></div>');
				}
				
				
			} else if($('body').hasClass('pattern-background')) { // PATTERN BACKGROUND
			
				$(".pageoverlay").addClass('patternbackground');
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();	
				
			} else if($('body').hasClass('pattern1-background')) { // PATTERN BACKGROUND
			
				$(".pageoverlay").addClass('patternbackground1');
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				
			} else if($('body').hasClass('pattern2-background')) { // PATTERN BACKGROUND
			
				$(".pageoverlay").addClass('patternbackground2');
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				
			} else if($('body').hasClass('pattern3-background')) { // PATTERN BACKGROUND
			
				$(".pageoverlay").addClass('patternbackground3');
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				
			} else if($('body').hasClass('pattern4-background')) { // PATTERN BACKGROUND
			
				$(".pageoverlay").addClass('patternbackground4');
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				
			} else if($('body').hasClass('youtube-background')) { // YOUTUBE VIDEO BACKGROUND
				
				$(".morestars").removeClass('star');
								
				$("#youtube_background").css('display','block');
							
				
				var bgVideo = $('.player');
				
				bgVideo.each(function() {
					bgVideo.mb_YTPlayer();
				});
				
				$('#bg-video-volume').click(function(e){
					var bgVideoVol = $(this);
					e.preventDefault();
					if( bgVideoVol.hasClass('fa-volume-off') ) {
						bgVideoVol.removeClass('fa-volume-off tubular-mute').addClass('fa-volume-up tubular-volume-up').attr('title', 'Mute');
						bgVideo.unmuteYTPVolume();
								bgVideo.setYTPVolume(5);
					} else {
						bgVideoVol.removeClass('fa-volume-up tubular-volume-up').addClass('fa-volume-off  tubular-mute').attr('title', 'Unmute');
						bgVideo.muteYTPVolume();
					}
				});
				$('#bg-video-play').click(function(e){
					var bgVideoPlay= $(this);
					e.preventDefault();
					if( bgVideoPlay.hasClass('fa-pause') ) {
							
						bgVideoPlay.removeClass('fa-pause tubular-play').addClass('fa-play tubular-pause').attr('title', 'Play');
						bgVideo.pauseYTP();
					} else {
						
						bgVideoPlay.removeClass('fa-play tubular-pause').addClass('fa-pause tubular-play').attr('title', 'Pause');
						bgVideo.playYTP();
					}
				});
				
				$(".vcontroll").css('visibility','visible');
				
				
			} else if($('body').hasClass('video-background')) { // VIDEO VIDEO BACKGROUND
				
				$(".morestars").removeClass('star');
				$( ".videoicon" ).remove();
				$("#video_background").css('display','block');
				
				if($('body').hasClass('mobile')) {
					
					// Default background on mobile devices
					$("body").backstretch([
						"video/video.jpg"
					]);
					
				}
			} else if($('body').hasClass('mobile')) { // MOBILE BACKGROUND - Image background instead of video on mobile devices
				if($('body').hasClass('video-background')) {
					
					// Default background on mobile devices
					$("body").backstretch([
						"video/video.jpg"
					]);
					
				}	
			}
		
		$('.particles').particleground({
			minSpeedX: 0.1,
			maxSpeedX: 0.7,
			minSpeedY: 0.1,
			maxSpeedY: 0.7,
			density: 14000,
			dotColor: '#414141',
			lineColor: '#2b2b2b',
			curvedLines: true,
			particleRadius: 5,
			proximity: 133,
			parallax: false,
			parallaxMultiplier: 5,
			opacity: .5
		});
		
		
		
		/* ------------------------------------------------------------------------ */
		/*	8. PAGE HEIGHT
		/* ------------------------------------------------------------------------ */	
		function setSectionHeight() {
			var navigationHeight = $(".site-nav").height();
			var section = $('section');
			var windowHeight = getWindowHeight();
				
			if ( section.hasClass('fullscreen') ) {
				$('section.fullscreen').css( 'min-height', windowHeight - 0 );
			}
		}
		
		setSectionHeight();

		$(window).on('resize', function () { 
			setSectionHeight();    
		});

		
		/* ------------------------------------------------------------------------ */
		/*	9. IOS
		/* ------------------------------------------------------------------------ */
		function iosdetect() {
			var deviceAgent = navigator.userAgent.toLowerCase();
			var $iOS = deviceAgent.match(/(iphone|ipod|ipad)/);
		 
			if ($iOS) {
				var divs = $('#home');
				var vid = $('#video_background');
				var h = window.innerHeight;
				var divh = $("#home").height();
				divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
				vid.css({ "display": "none"});
				$(window).resize(function() {
					var divs = $('#home');
					var h = window.innerHeight;
					var divh = $("#home").height();
					divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
				});
		 
				// use fancy CSS3 for hardware acceleration
			}
		}
		
		iosdetect();
		
		/* ------------------------------------------------------------------------ */
		/*	10. RESPONSIVE VIDEO - FITVIDS
		/* ------------------------------------------------------------------------ */
		$(".video-container").fitVids();
		
		
		/* ------------------------------------------------------------------------ */
		/*	11. PLACEHOLDER
		/* ------------------------------------------------------------------------ */
		$('input, textarea').placeholder();
		
		
		/* ------------------------------------------------------------------------ */
		/*	12. AJAX SUBSCRIBE
		/* ------------------------------------------------------------------------ */
		$("#subscribe_form").submit(function(e){
    	e.preventDefault();
        var error = false;
        var email = $('#email').val();		
		if(email.length === 0 || email.indexOf('@') === -1){
                error = true;
		}else{                   
			error = false;
		}
		
		
		if(error === true)
		{
			if(email==='')
			{
				$(".subscriberesponse").html("<i class=\"fa fa-exclamation-triangle\"> Sorry , please enter a valid e-mail address.");
				$('#email').addClass('formerror');
			}
			else
			{
			$(".subscriberesponse").html("<i class=\"fa fa-exclamation-triangle\"> Sorry , <span class=\"highlight\">" + email + "</span> is not a valid e-mail address. Try again with valid email.");
			$('#email').focus();
			$('#email').addClass('formerror');
			
			}
    		
			$('.subscriberesponse').addClass('fadeInDown').fadeIn('slow');
			$('#subscribe_form').addClass('animate fadeInDown').fadeIn('slow');
			
		}
		
		if(error === false){
			$('#subscribesubmit').attr({'disabled' : 'true'});
			$('#subscribesubmit').val('Please Wait...');			

            $.post("php/send_email.php", $("#subscribe_form").serialize(),function(result){
				if(result === 'sent'){
					$(".subscribesuccess").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
    				$('.subscribesuccess').addClass('fadeInDown').fadeIn('slow');
					$('#subscribesubmit').val('Subscribed');
                }else{
					$(".subscriberesponse").html("<i class=\"fa fa-exclamation-triangle\"> Network connection error!! Please try again later");
    				$('.subscriberesponse').addClass('fadeInDown').fadeIn('slow');
					if ($('#subscribesubmit').attr('disabled')) $('#subscribesubmit').removeAttr('disabled');
                    $('#subscribesubmit').val('Subscribe');
					$('#email').addClass('formerror');
                }
            });
        }							
    		
    	});
		
		$('#email').focus(function(){
			$('.subscriberesponse').fadeOut();
			$('.subscribesuccess').fadeOut();
		});
		
		$('#email').keydown(function(){
			$('.subscriberesponse').fadeOut();
			$('.subscribesuccess').fadeOut();
		});
		
		
		/* ------------------------------------------------------------------------ */
		/*	13. AJAX CONTACT
		/* ------------------------------------------------------------------------ */
		 $("#contacts_form").submit(function(e){
    	e.preventDefault();
        var error = false;
		var name = $('#name').val();
        var email = $('#useremail').val();
		var message = $('#usermessage').val();		
		
		if(name.length === 0 || email.length === 0 || email.indexOf('@') === -1 || message.length === 0){
                error = true;
				$(".contactresponse").html("");
		}
		else
		{                   
			error = false;
		}
		
		if(error === true)
		{
			
			if(name==='')
			{
				$(".contactresponse").html("<i class=\"fa fa-exclamation-triangle\"> Please enter your name. ");
				$('#name').addClass('formerror');
			}
			
			if(email==='')
			{
				
				$(".contactresponse").append(" <i class=\"fa fa-exclamation-triangle\"> Please enter a valid e-mail address. ");
				$('#useremail').addClass('formerror');
				
			} else{
				if(email.indexOf('@') === -1)
				{
					$(".contactresponse").append(" <i class=\"fa fa-exclamation-triangle\"> Sorry <span class=\"highlight\">" + email + "</span> is not a valid e-mail address. Try again with valid email.");
					$('#useremail').focus();
					$('#useremail').addClass('formerror');
				}
			}
			
			if(message==='')
			{
				$(".contactresponse").append(" <i class=\"fa fa-exclamation-triangle\"> Please enter some message.");
				$('#usermessage').addClass('formerror');
			}
    		
			$('.contactresponse').addClass('fadeInDown').fadeIn('slow');
			$('#contacts_form').addClass('animate fadeInDown').fadeIn('slow');
			
		}
		
		if(error === false){
			$('#contactsubmit').attr({'disabled' : 'true'});
			$('#contactsubmit').val('Please Wait...');		
			

            $.post("php/send_contact.php", $("#contacts_form").serialize(),function(result){
				if(result === 'sent'){
					$(".contactsuccess").html("<i class=\"fa fa-check-circle-o\"> Successfully Sent!!");
    				$('.contactsuccess').addClass('fadeInDown').fadeIn('slow');
					$('#contactsubmit').val('Email Sent');
                }else{
					$(".contactresponse").html("<i class=\"fa fa-exclamation-triangle\"> Network connection error!! Please try again later");
    				$('.contactresponse').addClass('fadeInDown').fadeIn('slow');
					if ($('#contactsubmit').attr('disabled')) $('#contactsubmit').removeAttr('disabled');
                    $('#contactsubmit').val('Send Email');
                }
            });
        }							
    		
    	});
		
		$('#name').focus(function(){
			$('.contactresponse').fadeOut();
			$('.contactsuccess').fadeOut();
			//$('#contactsubmit').attr({'disabled' : 'true'});
		});
		
		$('#useremail').focus(function(){
			$('.contactresponse').fadeOut('slow');
			$('.contactsuccess').fadeOut();
		});
		
		$('#usermessage').focus(function(){
			$('.contactresponse').fadeOut('slow');
			$('.contactsuccess').fadeOut();
		});
		
		$('#name').keydown(function(){
			$('.contactresponse').fadeOut('slow');
			$('.contactsuccess').fadeOut();
		});
		
		$('#useremail').keydown(function(){
			$('.contactresponse').fadeOut('slow');
			$('.contactsuccess').fadeOut();
		});
		
		$('#usermessage').keydown(function(){
			$('.contactresponse').fadeOut('slow');
			$('.contactsuccess').fadeOut();
		});
		
		
		
		
	});
	//END DOCUMENT.READY FUNCTION

})(jQuery);