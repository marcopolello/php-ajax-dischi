new Vue ({
  el: '#app',
  data: {
    songs: [],
  },
  methods: {
    update: function(author) {
      //console.log(author);
      axios
        .get('data.php', {
          params: {
            "author": author
          }
        })
        .then(response => {
          // var dati = response.data;
          // this.songs = [];
          // for (var i = 0; i < dati.length; i++) {
          //   var song = dati[i];
          //   if (song.author == obj.author) {
          //     this.songs.push(song);
          //   }
          // }
          this.songs = response.data;
        });
    },
    clear: function () {
      this.update('');
    }
  },
  mounted: function () {
    this.clear();
  },
})
