
// MAKE THE MAIN MENU WITH DROPDOWNS HOVERABLE AND CLICKABLE
jQuery(function($) {
	var windowWidth = $(window).width();
	if (windowWidth > 767){
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});
		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	} else {
		$('#menu-main-menu a').removeAttr('data-toggle');
	}
});



jQuery(document).ready(function($) {
	
	///FIX THE TOUCH DROPDOWNS
	var windowWidth = $(window).width();
	if (windowWidth > 767){
		$('.dropdown-toggle').on({ 'touchstart' : function(){
			if($(this).hasClass('touched')){
				$(this).removeClass('touched');
				return true;
			} else {
				$(this).addClass('touched');
				$(this).siblings('.dropdown-menu').toggle();
				return false;
			}
		} });
	}
	$('.dropdown').mouseover(function() {
		$(this).addClass('hovering');
	}).mouseout(function() {
		$(this).removeClass('hovering');
	});
	
	
	//required form fields
	$('#input_1_5, #input_1_8, #input_1_3').attr('required','required');
	
	
	
	
	
	//ANIMATION TARGETS AND EFFECTS
	$('.fx-fadeIn').addClass("fx-hidden").viewportChecker({
    	classToAdd: 'fx-visible animated fadeIn',
    	offset: 100,
		repeat: false
	});
	$('.fx-fadeInLeft').addClass("fx-hidden").viewportChecker({
    	classToAdd: 'fx-visible animated fadeInLeft',
		offset: 100,
		repeat: false
	});
	$('.fx-fadeInRight').addClass("fx-hidden").viewportChecker({
    	classToAdd: 'fx-visible animated fadeInRight',
		offset: 100,
		repeat: false
	});
	$('.fx-fadeInDown').addClass("fx-hidden").viewportChecker({
    	classToAdd: 'fx-visible animated fadeInDown',
		offset: 100,
		repeat: false
	});
	$('.fx-fadeInUp').addClass("fx-hidden").viewportChecker({
    	classToAdd: 'fx-visible animated fadeInUp',
		offset: 100,
		repeat: false
	});


	// BACK TO TOP
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});


	//SMOOTH SCROLL FOR ANCHOR LINKS
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			|| location.hostname == this.hostname) {
	
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 $('html,body').animate({
					 scrollTop: target.offset().top - 100
				}, 1000);
				return false;
			}
		}
	});
	
	if (document.location.hash) {
        setTimeout(function() {
            window.scrollTo(window.scrollX, window.scrollY - 100);
        }, 10);
    }
	
	
	
	
	
	//SCROLLSPY
	$('body').scrollspy({ target: '#navbar' });

});

////////// MORPHING MODAL WINDOW /////////////

(function(factory) {
    "use strict";
    if (typeof define === "function" && define.amd) {
        define([ "jquery", "bootstrap" ], factory);
    } else {
        factory(window.jQuery);
    }
})(function($) {
    "use strict";
    function updateCarouselTopMargin($carousel, height) {
        if (!height) {
            height = $carousel.height();
        }
        var $parent = $carousel.parents(".modal:first"), needHeadingHandle = !$parent.hasClass("force-fullscreen"), parentFreeSpace = $parent.height();
        if (needHeadingHandle) {
            parentFreeSpace = parentFreeSpace - $(".modal-header", $parent).height();
            parentFreeSpace = parentFreeSpace - $(".modal-footer", $parent).height();
        }
        if ($.support.transition && $carousel.hasClass("slide")) {
            $carousel.animate({
                marginTop: (parentFreeSpace - height) / 2
            });
        } else {
            $carousel.css({
                marginTop: (parentFreeSpace - height) / 2
            });
        }
    }
    $(document).on("shown.bs.modal", ".modal", function(event) {
        if ($(".carousel", this).length) {
            $(".carousel", this).data("bs.carousel").fit();
        }
    }).on("shown.bs.modal", ".modal.modal-fullscreen", function(event) {
        if ($(".carousel", this).length) {
            updateCarouselTopMargin($(".carousel", this).data("bs.carousel").$element);
        }
    }).on("fit.bs.carousel", ".modal.modal-fullscreen .carousel", function(event) {
        updateCarouselTopMargin($(this).data("bs.carousel").$element, event.height);
    }).on("replaced.bs.local", ".carousel", function(event) {
        $(this).css("margin-top", 0);
        if ($(this).hasClass("carousel-fit")) {
            $(this).data("bs.carousel").fit();
        }
    });
});




jQuery(window).load(function() {
	function isTouchDevice(){
		return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
	}
	if(isTouchDevice()===true) {
		//alert('Touch Device'); //your logic for touch device
		jQuery('body').addClass('touch');
	}
	else {
		//alert('Not a Touch Device'); //your logic for non touch device
		jQuery('body').addClass('non-touch');
	}
});