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

        // $('.dropdown-menu').addClass('animated fadeIn');

        $('#menu-primary-menu').append('<span class="searchBtn"><a href="#" title="Search"><img class="" src="/wp-content/uploads/2017/06/musica-searcher.svg"></a></span><span class="cartBtn"><a href="/cart" title="View your Cart"><img src="/wp-content/uploads/2017/06/shopping-store-cart-.svg"></a></span>');
        
        //logo center
        var center_el = $('.center-logo');
        var searchBtn = $('.searchBtn');  
        var closeBtn = $('<span class="closeBtn"><i class="fa fa-times" aria-hidden="true"></i></span>');        
        var el = $('<div class="searchOverlay animated fadeIn"><div class="container"><form action="/new-page/" method="POST"><input type="search" autofocus placeholder="Start Typing Here to Search..." /><input type="submit" class="overlaySearchBtn"></form></div></div>');
        
        searchBtn.on("click", function(){
          $('body').append(el, closeBtn).css('overflow','hidden');
          $(el).show();
          $(closeBtn).show();
          $(center_el).hide();
        });

        closeBtn.on("click", function(){
          $(el).hide();
          $('body').css('overflow','auto');
          $(closeBtn).hide();
          $(center_el).show();
        });    

          // Add icon to cart button 
          $('.cart button').addClass('hvr-icon-float-away');

          $(window).load(function() {
            $('#spinner-overlay').addClass('animated fadeOut');           
            $('.spinner-container').hide();    
                        $('#spinner-overlay').css('z-index','-1');           

            
     
       
          });


          // sticky back to top

          $(window).scroll(function(){
            var scrollPos = $(window).scrollTop();
            if(scrollPos >= 800){
              $('.back-to-top').addClass('fixed animated fadeInRight show');
                
            } else if(scrollPos < 800){
              $('.back-to-top').removeClass('fadeInRight show');
            }

            if(scrollPos <= 280){
              $('header').addClass('animated fadeInDown')
                .css('background','rgba(255,255,255, .11)')
                .css('box-shadow','0 0 1px #999999');
            }
              else {
                $('header').css('background','rgba(255,255,255, .91)');

              }
            // else if(scrollPos < 150){
            //   $('header').addClass('animated fadeInDown').css('background','rgba(255,255,255, 0)');
            // }
          });

          //  end sticky navigation

          $('.post-type-archive-product .woocommerce-breadcrumb').append('<span class="woocommerce-ad"><a href="http://mpcstuff.com" target="_blank"><img src="/wp-content/uploads/2017/07/mpcad2.png" /></a><img src="/wp-content/uploads/2017/07/mpcad.png" /><img src="/wp-content/uploads/2017/07/gotbeats-ad.png" /><img src="/wp-content/uploads/2017/07/bonitabasics-ad.png" /></span>');
          $('.woocommerce-ad').css('float','right').css('width','31%').css('height','0px');
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
          var sectionTwoBtn1 = document.querySelector('.sectionTwoBtn1');
          var sectionTwoBtn2 = document.querySelector('.sectionTwoBtn2');

          var sectionThreeBtn1 = document.querySelector('.sectionThreeBtn1');
          var sectionThreeBtn2 = document.querySelector('.sectionThreeBtn2');

          var sectionFourBtn1 = document.querySelector('.sectionFourBtn1');
          var sectionFourBtn2 = document.querySelector('.sectionFourBtn2');

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

          var sectionTwoHandler = function(event) {
            event.preventDefault();
           
            smoothScroll(sectionTwo, '1500');
          };
           
          sectionTwoBtn1.addEventListener('click', sectionTwoHandler);
          sectionTwoBtn2.addEventListener('click', sectionTwoHandler);


          var sectionThreeHandler = function(event){
            event.preventDefault();

            smoothScroll(sectionThree, '1500');
          } 
          sectionThreeBtn1.addEventListener('click', sectionThreeHandler);
          sectionThreeBtn2.addEventListener('click', sectionThreeHandler);


          var sectionFourHandler = function(event){
            event.preventDefault();

            smoothScroll(sectionFour, '1500');
          }

          sectionFourBtn1.addEventListener('click', sectionFourHandler);
          sectionFourBtn2.addEventListener('click', sectionFourHandler);

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
