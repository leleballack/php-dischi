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
      <div class="find_details">
        <select class="name" name="artist">
          <option disabled selected hidden value="">Select Artist</option>
        </select>
        <button type="submit" name="button">Search</button>
        <select class="date" name="year">
          <option disabled selected hidden value="">Select Date</option>
        </select>
        <button type="submit" name="button">Search</button>
      </div>
    </div>



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
      <option value={{artist}}>{{artist}}</option>
    </script>

    <script id="year_template" type="text/x-handlebars-template">
      <option value={{year}}>{{year}}</option>
    </script>


  </body>
</html>
