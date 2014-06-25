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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */
function init_style_chooser($) {
  var body_style = $.cookie('body_style');
  if (body_style) {
    // set before
    $('body').addClass(body_style);
  } else {
    // default color according by current time
    var currentTime = new Date().getHours();
    if (5 < currentTime && currentTime < 18) {
      $('body').addClass('light');
    } else {
      $('body').addClass('dark');
    }
  }

  // Switch to dark color scheme.
  $(".choose-dark").click(function (e)
  {
    e.preventDefault();
    $('body').removeClass('light');
    $('body').addClass('dark');
    $.cookie('body_style', 'dark', { expires: 365, path: '/' });
  });
  // Switch to light color scheme.
  $(".choose-light").click(function (e)
  {
    e.preventDefault();
    $('body').removeClass('dark');
    $('body').addClass('light');
    $.cookie('body_style', 'light', { expires: 365, path: '/'});
  });
}

function init_navbar($) {
  var div = $('.navbar');
  var start = $(div).offset().top;

  $.event.add(window, "scroll", function() {
    var p = $(window).scrollTop();
    //console.log('fixed'+start+'-'+p);
    $(div).css('position',((p)>start) ? 'fixed' : 'static');
    // $(div).css('top',((p)>start) ? '0px' : '');
  });
}

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      init_style_chooser($);
      init_navbar($);
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
