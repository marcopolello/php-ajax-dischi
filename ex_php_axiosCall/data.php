<?php
  header("Content-Type:application/json");
  $database = [
      [
          'title' => 'New Jersey',
          'author' => 'Bon Jovi',
          'year' => 1988,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
      ],
      [
          'title' => 'Live at Wembley 86',
          'author' => 'Queen',
          'year' => 1992,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
      ],
      [
          'title' => 'Ten\'s Summoner\'s Tales',
          'author' => 'Sting',
          'year' => 1993,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
      ],
      [
          'title' => 'Steve Gadd band',
          'author' => 'Steve Gadd Band',
          'year' => 2018,
          'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
      ],
      [
          'title' => 'Brave new World',
          'author' => 'Iron Maiden',
          'year' => 2000,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81ll31VxLDL._AC_SY450_.jpg'
      ],
      [
          'title' => 'One more car, one more rider',
          'author' => 'Eric Clapton',
          'year' => 2002,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
      ]
  ];
  // array vuoto in cui andro a pushare info utili
  $useful = [];
  $author = $_GET['art'];
  //var_dump($author); die();

  // var dati = response.data;
  // this.songs = [];
  // for (var i = 0; i < dati.length; i++) {
  //   var song = dati[i];
  //   if (song.author == obj.author) {
  //     this.songs.push(song);
  //   }
  // }
  // for ($i=0; $i < count($database); $i++) {
  //   $data = $database[$i];
  //   // var_dump($data['author']); die();
  //   if ($data['author'] == $author) {
  //     $useful[] = $data;
  //   }
  // }


  echo json_encode($database);
  //echo json_encode($useful);
?>
