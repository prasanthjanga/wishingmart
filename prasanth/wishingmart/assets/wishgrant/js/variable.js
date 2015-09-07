/*=================================================
true = enable
false = disable
1000 = 1 second

be careful, each var must have ; at the end of the line
=================================================*/

/*=================================================
preloader
=================================================*/

var __preloaderFadeOut = 1200; // fadeout
var __preloaderDelay = 800; // delay

/*=================================================
fullpage
=================================================*/

var __desktopVersion = 1; // desktop scroll version, 1 = scrolling, 2 = normal

/*=================================================
countdown
=================================================*/

var __countdown = true; // enable countdown
var __countdownDate = "12/24/2015 23:59:59"; // 2015-12-24 23:59:59
var __countdownTimezone = "-8"; // timezone

/*=================================================
background, set one of below to true
the first true will be enable
=================================================*/

var __videoHeader = false; // video background toggle
var __slideshowHeader = true; // image background toggle

/*=================================================
background config
=================================================*/

var __imageNumber = 1; // how many slideshow image to show, 1 for static image background, please view document for more info about image name format
var __vegasStatic = false; // true for fade effect slideshow, false for css3 effect slideshow
var __vegasShuffle = false; // random image
var __vegasDelay = 8000; // slideshow delay
var __vegasTransitionDuration = 2500; // transition duration
var __vegasAnimationDuration = 12000; // animation duration, __vegasDelay + 2000 for better fadeout timing
var __vegasAnimationSet = [ // animation effect, read document for more info
        'kenburnsUp',
        'kenburnsDown',
        'kenburnsLeft',
        'kenburnsRight'
      ];
var __vegasTransitionSet = [ // transition effect, read document for more info
        'fade'
      ];

// video header setting
var __youtubeUrl = 'https://www.youtube.com/watch?v=59zjsmEABOE'; // youtube video url
var __videoStartTime = 70; // video start time, 70 mean 70 seconds
var __videoEndTime = 180; // video end time, 180 mean 180 seconds
var __videoMute = false; // mute video on start

/*=================================================
overlay and background music
=================================================*/

var __pattern = true; // png overlay
var __gradient = true; // gradient overlay
var __gradientAnimaton = true; // gradient animation overlay, need __gradient = true
var __audio = true; // audio background toggle

/*=================================================
firefly
=================================================*/

var __firefly = true; // firefly effect
var __fireflyColor = '#fff'; // firefly color
var __fireflyAmount = 30; // firefly amount, recommend set under 40

/*=================================================
mailchimp
=================================================*/

var __mailChimpVersion = false; // if false, php/sunscribe.php will do the subscribe job
var __mailChimpUrl = 'MAILCHIMP_POST_URL_HERE'; // if mailchimp enable above, set this to your mailchimp post url, for more info please read the document, if you enable mailchimp version but not set the post url, browser will receive a jquery error

  // ajax mailchimp custom message

  $.ajaxChimp.translations.eng = { // custom mailchimp message
    'submit': 'please wait',
    0: '<i class="fa fa-check"></i> we have sent you a confirmation email',
    1: '<i class="fa fa-close"></i> enter a valid e-mail address',
    2: '<i class="fa fa-close"></i> e-mail address is not valid',
    3: '<i class="fa fa-close"></i> e-mail address is not valid',
    4: '<i class="fa fa-close"></i> e-mail address is not valid',
    5: '<i class="fa fa-close"></i> e-mail address is not valid'
  }

  // dedault message for reference
  // Submit Message
  // 'submit': 'Submitting...'
  // Mailchimp Responses
  // 0: 'We have sent you a confirmation email'
  // 1: 'Please enter a value'
  // 2: 'An email address must contain a single @'
  // 3: 'The domain portion of the email address is invalid (the portion after the @: )'
  // 4: 'The username portion of the email address is invalid (the portion before the @: )'
  // 5: 'This email address looks fake or invalid. Please enter a real email address'

/*=================================================
***do not edit below code***
=================================================*/

if (__vegasStatic) {
  var __vegasAnimation = '';
  var __vegasTransition = 'fade';
} else {
  var __vegasAnimation = __vegasAnimationSet;
  var __vegasTransition = __vegasTransitionSet;
}