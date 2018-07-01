$(document).ready(function(){
  search(getUrlParameter('query') || $('#searchQuery').val());
});

function getCover(cover){
  return (cover == null || cover == "") ?
          "./imgs/covers/no_image.png" :
          `./imgs/covers/${cover}`;
}

function outputIfPresent(title, field){
  return (field == null || field == '') ?
          "" :
          `<span class="field"><span class="sub-field">${title} </span>${field}</span>`;
}

function outputActionButton(typeOfBook){
  return (DIGITAL_BOOKS.indexOf(typeOfBook) > -1) ?
          "Access Online" :
          "Place Hold";
}

// Restricts the summary to 300 char and adds ... at end of needed
function getSummary(summary){
  return (summary.length > 200) ?
          summary.substr(0, summary.lastIndexOf(" ", 300)) + "..." :
          summary;
}

// We have gotten a click event, must initiate an AJAX request to look up the
// course id, course name, section, and instructor
function search(query){
  $.getJSON("search.php", { q: query }, function(data) {
		//This function outputs the results into the selection field
		$.each(data, function(i, field) {
      console.log(field.typeOfBook);
      html = `
        <div class="item row">
          <div class="col-md-2 cover text-center">
            <input class="item-checkbox" type="checkbox" value="${field.id}">
            <img class="cover" src="${getCover(field.cover)}" data-toggle="popover" title="${field.name}" data-content="${getSummary(field.summary)}" data-trigger="hover" data-placement="left"/>
            ${outputIfPresent('Available:', field.totalAvailable)}
          </div>
          <div class="col-md-10 item-content">
            <div class="row">
                <div class="col-md-12 item-title"><a href="#">${field.name}</a></div>
                <div class="col-md-8">
                  ${outputIfPresent('by', field.author)}
                  ${outputIfPresent('Publication Date:', field.pubDate)}
                  ${outputIfPresent('Description:', field.phyDescp)}
                  ${outputIfPresent('Format:', field.typeOfBook)}
                  ${outputIfPresent('Holds:', field.holds)}
                </div>
                <div class="col-md-4 text-right">
                  <button class="btn btn-default">${outputActionButton(field.typeOfBook)}</button>
                </div>
            </div>
          </div>
        </div>
      `;
      $('.main .container .results').append(html);
		});
    $('[data-toggle="popover"]').popover();
		// if (select == "") {
		// 	$("#error").html("ERROR: No courses found for that search, please try again");
		// } else {
		// 	$("#searchResults").html(select);
		// }
  });

}
