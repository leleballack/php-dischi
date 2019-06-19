var $ = require("jquery");


$(function () {

  var source = $(entry_template).html();
  var template = Handlebars.compile(source);

  $.ajax ({
    "url": "http://localhost:8888/Boolean/18.06.19_php_dischi/data.php",
    "method": "GET",
    "success": function (data) {
      print_albums(data);
    },
    "error": function() {
      alert("There is an error!")
    }
  });

  function print_albums(dischi) {
    var list_albums = JSON.parse(dischi);
    for (var d = 0; d < list_albums.length; d++) {
      var album = list_albums[d];
      var single = {
        "cover": album.pic,
        "title": album.title,
        "artist": album.artist,
        "year": album.year
        };
      var html = template(single);
      $(".container").append(html);
    }
  }
});
