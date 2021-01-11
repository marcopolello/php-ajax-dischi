<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>
  <body>

    <header>

      <a href="http://localhost/php-axiosCall-dischi/"><img id="icona" src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="spotify"></a>

    </header>

    <div id="app">

      <div class="bottoni">

        <button @click="clear">Clear</button>

        <button @click="update(song.author)" v-for="(song, index) in songs" type="button" name="button">{{song.author}}</button>

      </div>

      <div class="container">

        <div v-for="song in songs" class="disco">

          <img :src="song.poster" alt="">
          <h3>{{song.title}}</h3>
          <h6>{{song.author}}</h6>
          <h6>{{song.year}}</h6>

        </div>

      </div>

    </div>
    <script src="js/script.js" charset="utf-8"></script>

  </body>
</html>
