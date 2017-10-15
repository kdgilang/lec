(function($) {
  "use strict"; // Start of use strict
	 // fungsi untuk sidebar
	$(document).ready(function(){
		//saat class treeview di click
		$(".treeview").click(function(e){		
			$( this ).find("ul").slideToggle();
			$( this).toggleClass("active");
			$( this ).find(".fa-angle-left").toggleClass("fa-angle-down");
		});
	});

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 48
  });

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });


  $(document).on('click', ".toggle-form", function(e) {
    var that = $(this),
        target = that.attr('href');
    $(target).fadeToggle(400);
    e.preventDefault();
  });
  $(document).on('click', ".btn-closeform", function() {
    $(this).parents(".c-form").fadeOut(200);
  });

  $(".form-ajax").submit(function (e) {
    var that = $(this),
        form = that.serialize(),
        uri = that.attr('action');
    that.parents('.c-form').find('.alert').removeClass().addClass('alert');
    $.ajax(uri, {
      type: "post",
      dataType: "json",
      data: form,
      success: function(res) {
        that.parents('.c-form').find('.alert').text(res.message).slideDown(300).addClass(res.class);
        if(res.url !== '') {
          setTimeout( () => {
            if(res.url !== undefined) {
              window.location = res.url;
            }
          }, 700);
        }
      }
    });
    e.preventDefault();
  });
})(jQuery); // End of use strict
