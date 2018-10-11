(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery

// ===== Fade on Scroll ===== //

var path = window.location.pathname;
var page = path.split('/').pop();

if (page !== 'index.php') {
  $('.navigation').css('background-color', 'rgba(43, 57, 61, 1)');
} else {

  /*
  fade-on-scroll.js
  Author: Roland Johansson
  Created: October 2018
  */

  //Definiera vid hur många pixlars bredd på viewporten vi vill ha vår brytpunkt
  var breakpoint = 960;

  //Definera den initiala bredden på viewporten
  var previousWidth = $(window).width();

  selectAlphaMode(previousWidth);

  $(window).resize(function() {
    let width = $(window).width();

    if ((width < breakpoint && previousWidth >= breakpoint) || (width >= breakpoint && previousWidth < breakpoint)) {
      selectAlphaMode(width);
    }

    previousWidth = width;

  });

  // Sätt alpha till 1 eller adaptiv baserat på viewportens bredd
  function selectAlphaMode(width) {

    if (width < breakpoint) {
      $(document).scroll().off();
      setAlpha(1);
    } else {
      setAlpha(calcAlpha());
      $(document).scroll(function() {
        setAlpha(calcAlpha());
      });
    }

  }

  function setAlpha(alpha) {
    $('.navigation, .nav-dropdown').css('background-color', 'rgba(43, 57, 61,' + alpha + ')');
  }

  function calcAlpha() {
    //Definiera variabel för alfa-värdet
    let alpha = 0;

    //Definiera en variabel för hur långt det är till toppen av HTML-dokumentet
    var scroll = $(document).scrollTop();

    //Vid vilken pixel ska toningen starta
    var fadeStart = 70;

    //Vid vilken pixel ska toningen sluta
    var fadeStop = 170;

    //Hur långt är det mellan start och stop
    var fadeLength = fadeStop - fadeStart;

    //Vi har tre cases, mellan 0 och fadeStart, mellan fadeStart och fadeStop, samt från fadeStop till oändligheten (och vidare)
    if (scroll < fadeStart) {
      alpha = 0;
    } else if (scroll < fadeStop) {
      alpha = (scroll - fadeStart) / fadeLength;
    } else {
      alpha = 1;
    }

    //Returnera vad alpha nu har blivit efter vår uträkning
    return alpha;
  }

}
