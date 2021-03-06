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
        console.log('ok');
        
        $(window).scroll(function(){
          var winTop = $(window).scrollTop();
          if(winTop >= 30){
            $("body").addClass("is-sticky");
          }else{
            $("body").removeClass("is-sticky");
          }//if-else
        });//win func.
        
        $(".menu-trigger").click(function(event) {
          
          event.preventDefault();
          
          $(this).toggleClass("is-open");
        });

        $(".menu-item-has-children > a").click(function(event) {
          
          event.preventDefault();

          $(this).parent().toggleClass("is-open");
          $(this).parent().find(".sub-menu").toggleClass("is-active");
        });

        var navLeft = $('.left-menu');
        var showLeft = $('.menu-trigger');
        
        $(showLeft).click(function(){
            $(navLeft).toggleClass("open-left");
            $(document.body).toggleClass("push-right");
                return false;
        });

        /* Serach input on main menu */

        /*  Search header */
        var $search = $( '.menu-search' ),
            $searchinput = $search.find('input.menu-search-input'),
            $body = $('html,body'),
            openSearch = function() {
              $search.data('open',true).addClass('menu-search-open');
              $searchinput.focus();
              return false;
            },
            closeSearch = function() {
              $search.data('open',false).removeClass('menu-search-open');
            };

          $searchinput.on('click',function(e) { e.stopPropagation(); $search.data('open',true); });

          $search.on('click',function(e) {
            e.stopPropagation();
            if( !$search.data('open') ) {

              openSearch();

              $body.off( 'click' ).on( 'click', function(e) {
                closeSearch();
              } );

            }
            else {
              if( $searchinput.val() === '' ) {
                closeSearch();
                return false;
              }
            }
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
