var DIGITAL_BOOKS = [ "Electronic Resources",
                      "eBook",
                      "eVideo",
                      "eAudioBook",
                      "Computer file"];



$(document).ready(function(){
  turnOnPopOver();

  $('.accessibility .show-hide').on('click', function(){
    if ($(this).hasClass('show')){
      $(this).removeClass('show').addClass('hide-section');
      $('.accessibility').animate({left: "0px"}, 500);
    } else {
      $(this).removeClass('hide-section').addClass('show');
      $('.accessibility').animate({left: "-45px"}, 500);
    }
  });

  // Instantiate the Bootstrap carousel
  $('.multi-item-carousel').carousel({
    interval: false
  });

  // for every slide in carousel, copy the next slide's item in the slide.
  // Do the same for the next, next item.
  $('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
    } else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
  });
});

function turnOnPopOver(){
  $('[data-toggle="popover"]').popover();
}

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');

    if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ? true : sParameterName[1];
    }
  }
};
