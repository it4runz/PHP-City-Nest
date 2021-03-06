"use strict";



// Preloader
 function preloadFunction () {
   if ($('#loader').length) {
     $('#loader').fadeOut(); // will first fade out the loading animation
     $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
     $('body').delay(350).css({'overflow':'visible'});
  };
 }




// Language switcher
function languageSwitcher () {
	if ($("#polyglot-language-options").length) {
			$('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
				effect: 'fade',
                testMode: true,
                onChange: function(evt){
                    alert("The selected language is: "+evt.selectedItem);
                }
//                ,afterLoad: function(evt){
//                    alert("The selected language has been loaded");
//                },
//                beforeOpen: function(evt){
//                    alert("before open");
//                },
//                afterOpen: function(evt){
//                    alert("after open");
//                },
//                beforeClose: function(evt){
//                    alert("before close");
//                },
//                afterClose: function(evt){
//                    alert("after close");
//                }
			});
	};
}



// Home Page One Banner
function mainBanner () {
	if($("#main_slider").length) {
		$("#main_slider").vegas({
		    slides: [
		        { src: "images/home/slide-1.jpg" },
		        { src: "images/home/slide-2.jpg" },
		        { src: "images/home/slide-3.jpg" }
		    ],

		    transition: [ 'fade', 'zoomOut', 'swirlLeft' ]
		});

		$('button#previous').on('click', function () {
			    $("#main_slider").vegas('options', 'transition', 'zoomOut').vegas('previous');
			});

			$('button#next').on('click', function () {
			    $("#main_slider").vegas('options', 'transition', 'slideLeft2').vegas('next');
			});

	}
}




// Main-banner slider 
function mainRevBanner () {
		  if ($("#banner_rev_slider").length) {
		    $("#banner_rev_slider").revolution({
		      sliderType:"standard",
		      sliderLayout:"auto",
		      loops:false,
		      delay:9000,
		      navigation: {
		          arrows: {
		            style: "hades",
		            enable: true,
		            hide_onmobile: false,
		            hide_onleave: false,
		            tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div></div>',
		            left: {
		                h_align: "left",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            },
		            right: {
		                h_align: "right",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            }
		        },
		         bullets: {
		                  enable: true,
		                  hide_onmobile: false,
		                  style: "uranus",
		                  hide_onleave: false,
		                  direction: "horizontal",
		                  h_align: "center",
		                  v_align: "bottom",
		                  h_offset: 0,
		                  v_offset: 70,
		                  space: 10,
		                  tmp: '<span class="tp-bullet-inner"></span>'
		              }

		      },
		      responsiveLevels:[2220,1183,975,751],
		                gridwidth:[1170,970,770,580],
		                gridheight:[900,900,800,700],
		                shadow:0,
		                spinner:"off",
		                autoHeight:"off",
		                disableProgressBar:"on",
		                hideThumbsOnMobile:"off",
		                hideSliderAtLimit:0,
		                hideCaptionAtLimit:0,
		                hideAllCaptionAtLilmit:0,
		                debugMode:false,
		                fallbacks: {
		                  simplifyAll:"off",
		                  disableFocusListener:false,
		                }
		}); 
	};
}



// Main-banner slider Two
function mainRevBannerTwo () {
		  if ($("#banner_rev_slider_two").length) {
		    $("#banner_rev_slider_two").revolution({
		      sliderType:"standard",
		      sliderLayout:"auto",
		      loops:false,
		      delay:9000,
		      navigation: {
		          arrows: {
		            style: "hades",
		            enable: true,
		            hide_onmobile: false,
		            hide_onleave: false,
		            tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div></div>',
		            left: {
		                h_align: "left",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            },
		            right: {
		                h_align: "right",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            }
		        },
		         bullets: {
		                  enable: false,
		                  hide_onmobile: false,
		                  style: "uranus",
		                  hide_onleave: false,
		                  direction: "horizontal",
		                  h_align: "center",
		                  v_align: "bottom",
		                  h_offset: 0,
		                  v_offset: 70,
		                  space: 10,
		                  tmp: '<span class="tp-bullet-inner"></span>'
		              }

		      },
		      responsiveLevels:[2220,1183,975,751],
		                gridwidth:[1170,970,770,580],
		                gridheight:[900,900,900,900],
		                shadow:0,
		                spinner:"off",
		                autoHeight:"off",
		                disableProgressBar:"on",
		                hideThumbsOnMobile:"off",
		                hideSliderAtLimit:0,
		                hideCaptionAtLimit:0,
		                hideAllCaptionAtLilmit:0,
		                debugMode:false,
		                fallbacks: {
		                  simplifyAll:"off",
		                  disableFocusListener:false,
		                }
		}); 
	};
}

// Main-banner slider Three
function mainRevBannerThree () {
		  if ($("#banner_rev_slider_three").length) {
		    $("#banner_rev_slider_three").revolution({
		      sliderType:"standard",
		      sliderLayout:"auto",
		      loops:false,
		      delay:9000,
		      navigation: {
		          arrows: {
		            style: "hades",
		            enable: true,
		            hide_onmobile: false,
		            hide_onleave: false,
		            tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div></div>',
		            left: {
		                h_align: "left",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            },
		            right: {
		                h_align: "right",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            }
		        },
		         bullets: {
		                  enable: false,
		                  hide_onmobile: false,
		                  style: "uranus",
		                  hide_onleave: false,
		                  direction: "horizontal",
		                  h_align: "center",
		                  v_align: "bottom",
		                  h_offset: 0,
		                  v_offset: 70,
		                  space: 10,
		                  tmp: '<span class="tp-bullet-inner"></span>'
		              }

		      },
		      responsiveLevels:[2220,1183,975,751],
		                gridwidth:[1170,970,770,580],
		                gridheight:[900,900,900,900],
		                shadow:0,
		                spinner:"off",
		                autoHeight:"off",
		                disableProgressBar:"on",
		                hideThumbsOnMobile:"off",
		                hideSliderAtLimit:0,
		                hideCaptionAtLimit:0,
		                hideAllCaptionAtLilmit:0,
		                debugMode:false,
		                fallbacks: {
		                  simplifyAll:"off",
		                  disableFocusListener:false,
		                }
		}); 
	};
}

// Main-banner slider Four
function mainRevBannerFour () {
		  if ($("#banner_rev_slider_four").length) {
		    $("#banner_rev_slider_four").revolution({
		      sliderType:"standard",
		      sliderLayout:"auto",
		      loops:false,
		      delay:9000,
		      navigation: {
		          arrows: {
		            style: "hades",
		            enable: true,
		            hide_onmobile: false,
		            hide_onleave: false,
		            tmp: '<div class="tp-arr-allwrapper"> <div class="tp-arr-imgholder"></div></div>',
		            left: {
		                h_align: "left",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            },
		            right: {
		                h_align: "right",
		                v_align: "center",
		                h_offset: 10,
		                v_offset: 0
		            }
		        },
		         bullets: {
		                  enable: false,
		                  hide_onmobile: false,
		                  style: "uranus",
		                  hide_onleave: false,
		                  direction: "horizontal",
		                  h_align: "center",
		                  v_align: "bottom",
		                  h_offset: 0,
		                  v_offset: 70,
		                  space: 10,
		                  tmp: '<span class="tp-bullet-inner"></span>'
		              }

		      },
		      responsiveLevels:[2220,1183,975,751],
		                gridwidth:[1170,970,770,580],
		                gridheight:[900,900,900,900],
		                shadow:0,
		                spinner:"off",
		                autoHeight:"off",
		                disableProgressBar:"on",
		                hideThumbsOnMobile:"off",
		                hideSliderAtLimit:0,
		                hideCaptionAtLimit:0,
		                hideAllCaptionAtLilmit:0,
		                debugMode:false,
		                fallbacks: {
		                  simplifyAll:"off",
		                  disableFocusListener:false,
		                }
		}); 
	};
}



// Toggle Menu for index 5
function toggleMenuDesktop () {
	if($("#toggle_menu_wrapper").length) {
		$(".toggle_button").on('click', function() {
			$('.toggle_dropdown').addClass("open_toggle");
			$('.toggle_dropdown .main_menu').fadeIn(1300);
		});
		$(".toggle_button.dismiss").on('click', function() {
			$('.toggle_dropdown').removeClass("open_toggle");
			$('.toggle_dropdown .main_menu').fadeOut(100);
		});
	} 
}




// Select menu 
function selectDropdown () {
	if($(".selectmenu").length) {
		$( ".selectmenu" ).selectmenu();
	};
}

// Date Select
function dateSelect () {
	if($(".datepicker").length) {
		$( ".datepicker" ).datepicker();
	};
}

// Time Picker

function timeSelect () {
	if ($(".timepicker").length) {
		$(".timepicker").timepicker();
	}
}

// placeholder remove
function removePlaceholder () {
	if ($("input,textarea").length) {
		$("input,textarea").each(
            function(){
                $(this).data('holder',$(this).attr('placeholder'));
                $(this).focusin(function(){
                    $(this).attr('placeholder','');
                });
                $(this).focusout(function(){
                    $(this).attr('placeholder',$(this).data('holder'));
                });
                
        });
	}
}


// Counter Changer
function CounterNumberChanger () {
  var timer = $('.timer');
  if(timer.length) {
    timer.appear(function () {
      timer.countTo();
    })
  }
}


// Fancybox 
function FancypopUp () {
	if ($(".fancybox").length) {
		$(".fancybox").fancybox({
			openEffect	: 'elastic',
    		closeEffect	: 'elastic',
    		 helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(0, 0, 0, 0.6)'
		            }
		        }
		    }
		});
	};
}


// Fancybox Video
function FancypopUpVideo () {
	if ($(".fancy_video").length) {
			$(".fancy_video").fancybox({
			maxWidth	: 1080,
			maxHeight	: 720,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	};
}


//  Amenities of property 
function amenitiesProperty () {
	if ($("#amenities_slider").length) {
		  var owl = $('#amenities_slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                 600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              })
	};
}


// Customer Review Slider
function reviewSlider () {
	if ($("#review_slider").length) {
		 var owl = $('#review_slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                 768: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
	};
}


// Related Project Slider
function relatedProjectSlider () {
	if ($(".related_project_slider").length) {
		 var owl = $('.related_project_slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  992: {
                    items: 3
                  },
                  1200: {
                    items: 4
                  }
                }
              })
	};
}


// Testimonial Slider

function testimonialSlider () {
	if ($("#client-slider").length) {
		 var owl = $('#client-slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
	};
}

// Mixitup gallery
function mixitupGallery () {
	if ($("#mixitup_list").length) {
		$("#mixitup_list").mixItUp()
	};
}


// isoptop 
function masanory () {
	if ($("#isotop_wrapper").length) {
		var $grid = $('#isotop_wrapper').isotope({
		  // options
		  itemSelector: '.isotop_item',

		});

		// filter items on button click
		$('.gallery_menu').on( 'click', 'li', function() {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});

		 // change is-checked class on buttons
		  $('.gallery_menu').each( function( i, buttonGroup ) {
		    var $buttonGroup = $( buttonGroup );
		    $buttonGroup.on( 'click', 'li', function() {
		      $buttonGroup.find('.is-checked').removeClass('is-checked');
		      $( this ).addClass('is-checked');
		    });
		  });
	};
}



// accordion active class 
function accordion () {
	if ($("#accordion").length) {
		 $('#accordion > .panel').on('show.bs.collapse', function (e) {
		        var heading = $(this).find('.panel-heading');
		        heading.addClass("active-panel");
		        
		  });
		  
		  $('#accordion > .panel').on('hidden.bs.collapse', function (e) {
		      var heading = $(this).find('.panel-heading');
		        heading.removeClass("active-panel");
		        //setProgressBar(heading.get(0).id);
		  });
	};
}


// Mobile Navigation
function mobileNavToggler () {
	if ($('.main_menu').length) {
		$('.main_menu ul li.dropdown_holder').append(function () {
			return '<i class="fa fa-bars"></i>';
		});
		$('.main_menu ul li.dropdown_holder .fa').on('click', function () {
			$(this).parent('li').children('ul').slideToggle();
			$(this).parent('li').children('.video_gallery_menu').slideToggle();
		});

	}
}


//Contact Form Validation
function contactFormValidation () {
  if($('.form-validation').length){
    $('.form-validation').validate({ // initialize the plugin
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        message: {
          required: true
        },
        web: {
          required: true
        }
      },
      submitHandler: function(form) {
                $(form).ajaxSubmit({
                    success: function() {
                        $('.form-validation :input').attr('disabled', 'disabled');
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#alert_success').fadeIn();
                        });
                    },
                    error: function() {
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $('#alert_error').fadeIn();
                        });
                    }
                });
            }
        });
  }
}

// Close suddess Alret
function closeSuccessAlert () {
  if($('.closeAlert').length) {
    $(".closeAlert").on('click', function(){
      $(".alert_wrapper").fadeOut();
    });
    $(".closeAlert").on('click', function(){
      $(".alert_wrapper").fadeOut();
    })
  }
}

// Calendar
function cladendar () {
	if($('#appoinment_calendar').length) {
		$('#appoinment_calendar').monthly();
	}
}

// Custom Scroll
function customScrollbar () {
	if ($(".main_menu").length) {
		 $(".navbar-collapse").mCustomScrollbar();
	}
}

// Custom Scroll
function customScrollbarTwo () {
	if ($("#toggle_menu_wrapper").length) {
		 $(".mCustomScrollbar").mCustomScrollbar();
	}
}
// Tooggle Home page menu click Function 
function subMenuExpend () {
	if($(".dropdown-toggle").length) {
		$('.dropdown-toggle').on('click', function () {
			$(this).parent('li').children('ul').slideToggle(300);
		});
		$('.dropdown-toggle').on('click', function () {
			$(this).parent('li').children('.video_gallery_menu').slideToggle(300);
		});

		$('.toggle_dropdown .sub-menu li.dropdown_holder>a').append(function () {
			return '<i class="fa fa-angle-down"></i>';
		});
		$('.toggle_dropdown .sub-menu li.dropdown_holder .fa-angle-down').on('click', function () {
			$(this).parent('li').children('ul').slideToggle();
		});
	}
}
// Scroll to top
function scrollToTop () {
  if ($('.scroll-top').length) {

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
      if ($(this).scrollTop() > 400) {
        $('.scroll-top').fadeIn();
      } else {
        $('.scroll-top').fadeOut();
      }
    });
    
    //Click event to scroll to top
    $('.scroll-top').on('click', function(){
      $('html, body').animate({scrollTop : 0},1500);
      return false;
    });
  }
}


// DOM ready function
jQuery(document).on('ready', function() {
	languageSwitcher ();
	mainBanner ();
	mainRevBanner();
	mainRevBannerTwo ();
	mainRevBannerThree ();
	mainRevBannerFour ();
	toggleMenuDesktop ();
	selectDropdown();
	dateSelect();
	timeSelect ();
	removePlaceholder ();
	CounterNumberChanger ();
	FancypopUp();
	FancypopUpVideo ();
	amenitiesProperty ();
	reviewSlider ();
	contactFormValidation ();
	closeSuccessAlert ();
	relatedProjectSlider ();
	testimonialSlider ();
	mixitupGallery();
	accordion ();
	mobileNavToggler ();
	scrollToTop ();
	subMenuExpend ()
});



// Window load function
jQuery(window).on('load', function () {
   (function ($) {
    preloadFunction();
    masanory ();
    cladendar ();
    customScrollbar ();
    customScrollbarTwo ();
  })(jQuery);
 });