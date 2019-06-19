<!-- Stampare a schermo una decina di dischi musicali in due modi diversi:
1 - Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
2 - Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
A - Attraverso un’altra chiamata ajax, filtrare gli album per artista
B - Attraverso un’altra chiamata ajax, ordinare gli album per data di uscita.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php -->

<!-- http://localhost:8888/Boolean/18.06.19_php_dischi/ -->

<?
include "data.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Best Albums</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  </head>
  <body>

    <header>
      <div class="box">
        <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="">
      </div>
    </header>

    <div class="container">
      <? foreach ($albums as $print) { ?>
      <div class="albums">
        <div class="album_pic">
          <img src="<? echo $print["pic"]; ?>">
          <div class="specifics">
            <h4><? echo $print["title"]; ?></h4>
            <p><? echo $print["artist"]; ?></p>
            <small><? echo $print["year"]; ?></small>
          </div>
        </div>
      </div>
      <? };
      ?>
    </div>
  </body>
</html>
