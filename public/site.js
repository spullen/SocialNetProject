
function pageStart() {
  var url = document.URL.split('//');
  var path = url[1];
  var pathParts = path.split('/');
  var page = pathParts[pathParts.length - 1]

  if(page != 'index.html') {
    if(page.substring(0, 7) == 'project') {
      $('projects').show();
    }
  }
}

/******************************

Expand Down or Up

*******************************/
function expand_div(element) {
  var e = $(element);
  if(e.style.display == 'none') {
    Effect.BlindDown(element);
  }
  else {
    Effect.BlindUp(element);
  }  
}

/******************************

Change the content of a page

*******************************/
function changeContent(page) {
}

