// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

$(document).ready(function() {
/** Modal windows */
  $('.header-callback__button').click(function(event) {
    $('.vmodal-bg').fadeIn('400');
    $('body').addClass('modaled');
  });
  $('.vmodal .close').click(function(event) {
    $('.vmodal-bg').fadeOut('400');
    $('body').removeClass('modaled');
  });
  $('.vmodal-bg').click(function(event) {
    $('.vmodal-bg').fadeOut('400');
    $('body').removeClass('modaled');
  });
  /** FAQ page */
  $('.question').click(function(event) {
    /* Act on the event */
    $(this).toggleClass('question-o');
    var $thisAnser = $(this).parent('li').children('.answer');
    if ( $thisAnser.hasClass('anser-o') ) {
      $thisAnser.toggleClass('anser-o');
      $thisAnser.fadeOut('400');
    } else {
      $thisAnser.toggleClass('anser-o');
      $thisAnser.fadeIn('400');
    }
  });
  /** Header Search on frontpage */
  $('.header-search .dotted').click(function(event) {
    /* Act on the event */
    var searchValue = $(this).html();
    $('.header-search input').val(searchValue);
  });

});
