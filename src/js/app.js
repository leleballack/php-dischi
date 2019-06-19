var $ = require("jquery");


$(function () {

  var source = $(entry_template).html();
  var template = Handlebars.compile(source);

  $.ajax ({
    "url": "http://localhost:8888/Boolean/18.06.19_php_dischi/data.php",
    "method": "GET",
    "success": function (data) {
      var list_albums = JSON.parse(data);
      for (var d = 0; d < list_albums.length; d++) {
        var album = list_albums[d];
        var single = {
          "pic": album.pic,
          "title": album.title,
          "artist": album.artist,
          "year": album.year
          };
        var html = template(single);
        $(".container").append(html);
      }
    },
    "error": function() {
      alert("There is an error!")
    }
  });
});
