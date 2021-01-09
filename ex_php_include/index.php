<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include "data.php" ?>
  </head>
  <body>

    <header>

      <img id="icona" src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="spotify">

    </header>

    <div id="app">

      <?php foreach ($database as $song) {  //var_dump($song);?>
        <div class="disco">

          <img src="<?php echo $song['poster'] ?>" alt="cover" />
          <h3>  <?php echo $song['title']  ?> </h3>
          <h6> <?php echo $song['author'] ?> </h6>
          <h6> <?php echo $song['year'] ?> </h6>

        </div>
        <?php
      } ?>

    </div>

  </body>
</html>
