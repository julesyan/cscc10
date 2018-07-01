var DIGITAL_BOOKS = [ "Electronic Resources",
                      "eBook",
                      "eVideo",
                      "eAudioBook",
                      "Computer file"];



$(document).ready(function(){
  turnOnPopOver();

  $('.accessibility .show-hide').on('click', function(){
    if ($(this).hasClass('show')){
      $(this).removeClass('show').addClass('hide');
      $('.accessibility').animate({left: "0px"}, 500);
    } else {
      $(this).removeClass('hide').addClass('show');
      $('.accessibility').animate({left: "-45px"}, 500);
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
