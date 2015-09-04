/* Daniel - Main JS */

$(window).load(function() {

	"use strict";
	vertAlign($('#countdown_block'));
	
	if( $('.section-content').length > 0 ) {
		$('.section-content').each(function(){
			vertAlign($(this));
		});
	}
});

$(document).ready(function() {
	"use strict";
	if( $('#countdown').length > 0 ) {
		$('#countdown').countdown({
			until: new Date(SiteStartDate),
			format: 'DHMS'
		});
	}

	if( $('#site_video_bg.youtube').length > 0 ) {
		$('#site_video_bg.youtube').tubular({
			videoId: YoutubeBgCode,
			start: 1
		});
	}

	if( $('#site_video_bg.local').length > 0 ) {
		$('#site_video_bg.local').vide({
			mp4: "video/bgvideo.mp4", /* Local Video File Path */
		}, {
			muted: true
		});
	}

	if( $('body').hasClass('snowflakes') ) {
		snow_init();
	}

	if( $('#gmap').length > 0 ) {
		var gmap = new GMaps({
			div: '#gmap',
			lat: 40.758611, /* Latitude */
			lng: -73.979167, /* Longtitude */
			disableDefaultUI: true,
			scrollwheel: false,
			styles: gmap_styles
		});

		GMaps.geocode({
		  address: gmap_address,
		  callback: function(results, status) {
		    if (status == 'OK') {
		      var latlng = results[0].geometry.location;
		      gmap.setCenter(latlng.lat(), latlng.lng());
		      gmap.addMarker({
		        lat: latlng.lat(),
		        lng: latlng.lng()
		      });
		    }
		  }
		});
	}

	if( $('#bg_slideshow').length > 0 ) {

		var mySwiper = new Swiper('#bg_slideshow',{
			loop : true,
			grabCursor: true,
			paginationClickable: false,
			keyboardControl: true,
			autoplay: false,
			speed: 1000
		});
	}

	/* Form Submiting */
	$('.form_submit').click(function(){
		var form = $(this).parents('form');
		form.find('.form_item').removeClass('error');
		form.find('.error_block').remove();
		var post_data;
		var errors = formValidation(form),
			output;
		if( Object.keys(errors).length > 0 ) {
			showErrors(form, errors);
		} else {

			$(this).addClass('loading');
			post_data = {
    		    'name'     : $('input[name=name]').val(),
    		    'email'    : $('input[name=email]').val(),
    		    'message'  : $('textarea[name=message]').val()
    		};

    		//Ajax post data to server
    		jQuery.post('contacts.html', post_data, function(response){	

    			$("#contacts_form .form_submit").removeClass('loading');

    		    if(response.type == 'error'){ //load json data from server and output message    
    		        output = '<div class="error_block">'+response.text+'</div>';
    		    } else{
    		        output = '<div class="success">'+response.text+'</div>';
    		        //reset values in all input fields
    		        $("#contacts_form .form_item").val('');
    		    }
    		    form.find('.form_row').slideUp();
    		    form.find(".form_results").hide().html(output).slideDown();
    		}, 'json');
		}
		return false;
	});

	if (!String.prototype.trim) {
		(function() {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call( document.querySelectorAll( '#contacts_form .form_item' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input-filled' );
		}

		// events:
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	} );

	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input-filled' );
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input-filled' );
		}
	}

});

/* Vertical Alignment */
function vertAlign(elem) {
	"use strict";
	if(elem) {
		elem.css({
			'marginTop' : - elem.outerHeight()/2
		}).fadeIn();
	}
}

function inputCheck( input ) {
	if( input.val() !== '' || input.is(':focus') ) {	
		alert('test');
	}
}

/* Forms Validation */
function formValidation(form) {

	var error = {};

	if(form) {
		form.find('.form_item').each(function(){
			var $th = $(this);

			if( $th.val() != '' ) {
				if( $th.attr('type') == 'email' ) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if( !emailReg.test( jQuery.trim($th.val()) ) ) {
						error[$th.attr('id')] = 'not_email';
					}
				}
			} else {				
				error[$th.attr('id')] = 'empty';
			}

		});
	}
	return error;
}

/* Validation Errors */
function showErrors(form, errors) {
	var error_message = ''
	for(var i in errors) {
		var form_item = form.find($('#'+i)),
			form_item_name = form_item.attr('name').replace('_', ' ');

		form_item.addClass('error');
		if( errors[i] == 'empty' )
			error_message += '<div class="error">Field '+form_item_name+' is required</div>';
		else
			error_message += '<div class="error">You entered an invalid email</div>';
	}
	if( form.find('.error_block').length > 0) {
		form.find('.error_block').html(error_message);
	} else {
		form.find('.form_results').html('<div class="error_block">'+error_message+'</div>');
	}
}

function slideControlsThumb( slider ) {
	"use strict";
	var cur_index = slider.currentSlide,
		prev_index = cur_index != 0 ? cur_index-1 : slider.slides.length - 1,
		prev_bg = $(slider.slides[prev_index]).css('background-image'),
		next_index = cur_index < slider.slides.length-1 ? cur_index+1 : 0,
		next_bg = $(slider.slides[next_index]).css('background-image');

		$('.flex-direction-nav li span').css({'backgroundImage': prev_bg});
		$('.flex-direction-nav li + li span').css({'backgroundImage': next_bg});
}