/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

         $(window).resize(function() {
          /*If browser resized, check width again */
          if ($(window).width() < 514) {
           $('#menu-primary-menu li').removeClass('hvr-underline-reveal');
          }
          else { 
            $('#menu-primary-menu li').addClass('hvr-underline-reveal');
         }
        });

        // Add 'active' class to navigation list item when anchor clicked
        $('#menu-main-menu li').on('click', function(e) {
          $('#menu-main-menu li').removeClass('active')
          $(this).addClass('active')
        });

        $(window).scroll(function() {
          var distanceY = $(window).scrollTop();
          var header = $('header');
          var collapsePoint = 38;
          if(distanceY > collapsePoint) {            
            
            // Swap out header logo with white and green logo        
            var img_src = $('img.logo').replaceWith('<img class="logo" src="/sp/wordpress/bonitabasics/wp-content/uploads/2018/11/bonitabasics-white-green.svg" />');
                      
            header.removeClass('sticky-nav--visible');
              $('.nav-link').css('color', 'rgba(255,255,255, 1)')
              $('header.fixed-top')
                .css('background','rgba(0,0,0, 1)');
                $('.navbar-light .navbar-nav .active > .nav-link').css('color','#485c5b');
                

          }  else {

            // put logo back to the original 
            var img_src = $('img.logo').replaceWith('<img class="logo"src="/sp/wordpress/bonitabasics/wp-content/uploads/2018/11/bonitabasics-green.svg" />');
            
            header.addClass('sticky-nav--visible');
            $('.nav-link').css('color', 'rgba(0,0,0, .5)')

                $('header.fixed-top')
                  .css('background','rgba(0,0,0, 0)');
          }
          //sticky back to top
          $(window).scroll(function(){
            var scrollPos = $(window).scrollTop();
            if(scrollPos >= 800){
              $('.back-to-top').addClass('fixed animated fadeInRight show');
                
            } else if(scrollPos < 800){
              $('.back-to-top').removeClass('fadeInRight show');
            }
          });
           //end sticky navigation
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {

        // JavaScript to be fired on the home page, after the init JS
          var sectionOneBtn = document.querySelector('.sectionOneBtn');

          var sectionTwoBtn1nav = document.querySelector('.sectionTwoBtn1nav');
          var sectionTwoBtn1mid = document.querySelector('.sectionTwoBtn1mid');

          var sectionThreeBtn1nav = document.querySelector('.sectionThreeBtn1nav');
          var sectionThreeBtn2mid = document.querySelector('.sectionThreeBtn2mid');

          var sectionFourBtn1nav = document.querySelector('.sectionFourBtn1nav');
          var sectionFourBtn2mid = document.querySelector('.sectionFourBtn2mid');

          var sectionOne = document.querySelector('.section-1');
          var sectionTwo = document.querySelector('.section-2');
          var sectionThree = document.querySelector('.section-3');
          var sectionFour = document.querySelector('.section-4');

          var backToTopBtn = document.querySelector('.backtotopBtn');

          var backToTopHandler = function(event){
            event.preventDefault();
            smoothScroll(sectionOne, '800');
          };
          backToTopBtn.addEventListener('click', backToTopHandler);

          sectionOneBtn.addEventListener('click', sectionOneHandler);

          var sectionOneHandler = function(event) {
            event.preventDefault();
            smoothScroll(sectionOne, '1500');
          }           

          var sectionTwoHandler = function(event) {
            event.preventDefault();
           
            smoothScroll(sectionTwo, '1500');

          };
      
          sectionTwoBtn1nav.addEventListener('click', sectionTwoHandler);
          sectionTwoBtn1mid.addEventListener('click', sectionTwoHandler);


          var sectionThreeHandler = function(event){
            event.preventDefault();

            smoothScroll(sectionThree, '1500');
          } 
          sectionThreeBtn1nav.addEventListener('click', sectionThreeHandler);
          sectionThreeBtn2mid.addEventListener('click', sectionThreeHandler);


          var sectionFourHandler = function(event){
            event.preventDefault();

            smoothScroll(sectionFour, '1500');
          }

          sectionFourBtn1nav.addEventListener('click', sectionFourHandler);
          sectionFourBtn2mid.addEventListener('click', sectionFourHandler);

      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
