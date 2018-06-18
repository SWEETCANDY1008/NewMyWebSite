function inputs(inputs) {
  $(function(){
    switch (inputs) {
      case "h1":
        var text = '<h1></h1>\n';
        break;
      case "ul":
        var text = '<ul><li></li></ul>\n';
        break;
      case "ol":
        var text = '<ol><li></li></ol>\n';
        break;
      case "p":
        var text = '<p></p>\n';
        break;
      case "br":
        var text = '<br>\n';
        break;
      case "div":
        var text = '<div></div>\n';
        break;
      case "script":
        var text = '<script></script>\n';
        break;
      default: break;
    }
    // $('#inputtext').val(text);
    $('#inputtext').val($('#inputtext').val() + text);
  });
}

function outputs() {
  $(".inner").html('');
  var a = $('#inputtext').val();
  alert(a);
  $(".inner").append(a);
}

function switchgrid(inputs) {
  $(inputs).css('display','grid');
  $(inputs).css('grid-template-columns','1fr 1fr');
}

function changecolor(color) {
  $("#testbutton").css('color',color);
}

function changebackground(color) {
  $("#testbutton").css('background-color',color);
}

function searchingonoff(switching) {
  var fadeFlag = switching;
  if(!fadeFlag) {
    fadeFlag = true;
    $("#search").fadeIn(1000);
    // $("#main").css("position","absolute");
  }
  else {
    fadeFlag = false;
    $("#search").fadeOut(1000);
    // $("#main").css("position","static");
  }
}

function search() {
  var searchsites = $("#searchingsite option:selected").val();
  var questionsentence = $('#searchtext').val();

  switch(searchsites) {
    case 'google': var urls = "https://www.google.com/search?q=" + questionsentence; break;
    case 'daum': var urls = "https://search.daum.net/search?w=tot&DA=YZR&t__nil_searchbox=btn&sug=&sugo=&sq=&o=&q=" + questionsentence; break;
    case 'nate': var urls = "https://search.daum.net/nate?thr=sbma&w=tot&q=" + questionsentence; break;
  }
  window.open(urls, "검색", "width=1000, height=500, toolbar=no, menubar=no, scrollbars=no, resizable=yes" );
}








// red
// blue
// backgroundcolor_yellow
// backgroundcolor_white
// backgroundcolor_black

// first
// maintext
// introduction
// History
// MarkUp
// CSS
// JavaScript
// html
// h
// list
// spacing
// div
// img
// script
// Sources

// html
// h
// ul
// ol
// li
// p
// br
// div
// script
