<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Best Albums</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://kit.fontawesome.com/44a44cee3b.js"></script>
    <script src="public/js/app.js" charset="utf-8"></script>
  </head>
  <body>

    <header>
      <div class="box">
        <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="">
      </div>
    </header>
    <section>
      <div class="find_details">
        <select class="name" name="artist">
          <option selected hidden value="">Select Artist</option>
        </select>
        <button type="button" name="button">Sort by artist <i class="fas fa-arrow-up"></i><i class="fas fa-arrow-down"></i></button>
        <button type="button" name="button">Sort by title <i class="fas fa-arrow-up"></i><i class="fas fa-arrow-down"></i></button>
        <button type="button" name="button">Sort by year <i class="fas fa-arrow-up"></i><i class="fas fa-arrow-down"></i></button>
      </div>
    </section>

    <div class="container"></div>

    <script id="album_template" type="text/x-handlebars-template">
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

    <script id="artist_template" type="text/x-handlebars-template">
      <option value="{{artist}}">{{artist}}</option>
    </script>

  </body>
</html>
