var $ = require("jquery");


$(function () {

  var source_album = $(album_template).html();
  var template = Handlebars.compile(source_album);
  var source_artist = $(artist_template).html();
  var template_artist = Handlebars.compile(source_artist);
  var source_year = $(year_template).html();
  var template_year = Handlebars.compile(source_year);

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

  $.ajax ({
    "url": "http://localhost:8888/Boolean/18.06.19_php_dischi/data.php",
    "method": "GET",
    "success": function (data) {
      fill_select(data);
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
  };

  function fill_select(dati) {
    var list_albums = JSON.parse(dati);
    for (var i = 0; i < list_albums.length; i++) {
      var detail = list_albums[i];
      var select_artist = {
        "artist": detail.artist
      };
      var select_year = {
        "year": detail.year
      };
      var html_artist = template_artist(select_artist);
      var html_year = template_year(select_year);
      $("select.name").append(html_artist);
      $("select.date").append(html_year);
    };
  };
});
