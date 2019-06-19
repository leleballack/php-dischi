<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Best Albums</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="public/js/app.js" charset="utf-8"></script>
  </head>
  <body>

    <header>
      <div class="box">
        <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="">
      </div>
    </header>
    <div class="container">
    </div>

    <div class="find_artist">

    </div>
    <div class="find_date">

    </div>

    <script id="entry_template" type="text/x-handlebars-template">
      <div class="albums">
        <div class="album_pic">
          <img src="{{ cover }}">
          <div class="specifics">
            <h4>{{ title }}</h4>
            <p>{{ artist }}</p>
            <small>{{ year }}</small>
          </div>
        </div>
      </div>
    </script>

  </body>
</html>
