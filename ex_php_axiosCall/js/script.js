var app = new Vue ({
  el: '#app',
  data: {
    songs: [],
  },
  methods: {
    update: function(obj) {
      //console.log(obj.author);
      axios
        .get('data.php', {
          // params: {
          //   "author": "Bon Jovi"
          // }
        })
        .then(response => {
          var dati = response.data;
          this.songs = [];
          for (var i = 0; i < dati.length; i++) {
            var song = dati[i];
            if (song.author == obj.author) {
              this.songs.push(song);
            }
          }
          //this.songs = response.data;
        });
    },
  },
  mounted: function () {
    //console.log(index);
    axios
      .get('data.php', {})
      .then(response => {
        this.songs = response.data;
      });
  },
})
