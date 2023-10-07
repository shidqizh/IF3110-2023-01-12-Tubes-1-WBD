const searchInput = document.getElementById('searchInput');
const songList = document.getElementById('songList');
let debounceTimer;

// Fungsi untuk memfilter daftar lagu berdasarkan input pencarian
function filterSongs(searchTerm) {
    // Mengubah daftar lagu menjadi array
    const songs = Array.from(songList.getElementsByClassName('items'));
    const albums = Array.from(songList.getElementsByClassName('item_album'));
    const artists = Array.from(songList.getElementsByClassName('item_artist'));

    // Iterasi melalui setiap lagu dan menyembunyikan/menampilkan sesuai pencarian
    songs.forEach(song => {
        const songTitle = song.querySelector('h5').textContent.toLowerCase();

        if (songTitle.includes(searchTerm.toLowerCase())) {
            song.style.display = 'block';
        } else {
            song.style.display = 'none';
        }
    });

    albums.forEach(album => {
        const albumTitle = album.querySelector('h5').textContent.toLowerCase();

        if (albumTitle.includes(searchTerm.toLowerCase())) {
            album.style.display = 'block';
        } else {
            album.style.display = 'none';
        }
    });

    artists.forEach(artist => {
        const artistTitle = artist.querySelector('h5').textContent.toLowerCase();

        if (artistTitle.includes(searchTerm.toLowerCase())) {
            artist.style.display = 'block';
        } else {
            artist.style.display = 'none';
        }
    });
}

// Tambahkan penangan acara untuk saat formulir pencarian diserahkan
searchInput.addEventListener('input', function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir

    const searchTerm = searchInput.value;
    clearTimeout(debounceTimer);

    // Set timer debounce baru
    debounceTimer = setTimeout(function () {
        filterSongs(searchTerm);
    }, 300);
});
