var $ = require("jquery");


$(function () {

  url_php = "http://localhost:8888/Boolean/18.06.19_php_dischi/"

  $.ajax ({
    "url": url_php + "data_json.php",
    "method": "GET",
    "success": function (data) {
      print_albums(data);
      fill_select(data);
    },
    "error": function() {
      alert("There is an error!")
    }
  }); /*fine ajax*/

  $("select.name").change(function() {
    var selected_artist = $(this).val();
    $("select.name").val("");

    $.ajax ({
      "url": url_php + "artist_filter.php",
      "method": "POST",
      "data": {
        "artist_name": selected_artist
      },
      "success": function (reply) {
        print_albums(reply);
      },
      "error": function() {
        alert("There is an error!")
      }
    }); /*fine ajax*/
  });/*fine jquery select*/

  $(".by_year").click(function() {
    $.ajax ({
      "url": url_php + "sort_by_year.php",
      "method": "GET",
      "success": function (info) {
        print_albums(info);
      },
      "error": function() {
        alert("There is an error!")
      }
    }); /*fine ajax*/
  }); /*fine jquery button*/

  function print_albums(cover) {
    var source_album = $(album_template).html();
    var template = Handlebars.compile(source_album);

    $(".container").html("");
    var list_albums = JSON.parse(cover);
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

    };/*fine for*/
  };/*fine function*/

  function fill_select(cover) {
    var source_artist = $(artist_template).html();
    var template_artist = Handlebars.compile(source_artist);

    var single_artists = [];
    var list_albums = JSON.parse(cover);
    for (var i = 0; i < list_albums.length; i++) {
      var detail = list_albums[i];
      /*check if artist is already in array, if not add it*/
      if (!single_artists.includes(detail.artist)) {
        single_artists.push(detail.artist);
      }; /*fine if*/
    };/*fine primo for*/

    for (var i = 0; i < single_artists.length; i++) {
      var select_artist = {
        "artist": single_artists[i]
      };
      var html_artist = template_artist(select_artist);
      $("select.name").append(html_artist);
    }; /*fine secondo for*/
  };/*fine function*/

});/*fine doc ready*/
