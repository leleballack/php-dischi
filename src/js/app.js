var $ = require("jquery");


$(function () {

  url_php = "http://localhost:8888/Boolean/18.06.19_php_dischi/data.php"

  var source_album = $(album_template).html();
  var template = Handlebars.compile(source_album);
  var source_artist = $(artist_template).html();
  var template_artist = Handlebars.compile(source_artist);

  $.ajax ({
    "url": url_php,
    "method": "GET",
    "success": function (data) {
      print_albums(data);
      fill_select(data);
    },
    "error": function() {
      alert("There is an error!")
    }
  });

  $("select.name").change(function() {
    var selected_artist = $("select.name").val();
    $("select.name").val("");

      $.ajax ({
        "url": url_php,
        "method": "GET",
        "success": function (data) {
          $(".albums").empty();
          var list_albums = JSON.parse(data);

        },
        "error": function() {
          alert("There is an error!")
        }
      }); /*fine ajax*/


  });/*fine jquery*/

  function print_albums(cover) {
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

  function fill_select(datum) {
    var list_albums = JSON.parse(datum);
    for (var i = 0; i < list_albums.length; i++) {
      var detail = list_albums[i];
      var select_artist = {
        "artist": detail.artist
      };
      var html_artist = template_artist(select_artist);
      $("select.name").append(html_artist);
    };/*fine for*/
  };/*fine function*/

});/*fine doc ready*/
