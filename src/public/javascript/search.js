const searchInput = document.getElementById('searchInput');
const songList = document.getElementById('songList');
let debounceTimer;

// Fungsi untuk memfilter daftar lagu berdasarkan input pencarian
function filterSongs(searchTerm) {
    // Mengubah daftar lagu menjadi array
    const songs = Array.from(songList.getElementsByClassName('items'));
    const albums = Array.from(songList.getElementsByClassName('item_album'));
    const artist = Array.from(songList.getElementsByClassName('item_artist'));

    // Iterasi melalui setiap lagu dan menyembunyikan/menampilkan sesuai pencarian
    songs.forEach(song => {
        const songTitle = song.querySelector('.judul').textContent.toLowerCase();

        if (songTitle.includes(searchTerm.toLowerCase())) {
            song.style.display = 'block';
        } else {
            song.style.display = 'none';
        }
    });

    albums.forEach(song => {
        const songTitle = song.querySelector('.judul').textContent.toLowerCase();

        if (songTitle.includes(searchTerm.toLowerCase())) {
            song.style.display = 'block';
        } else {
            song.style.display = 'none';
        }
    });

    artist.forEach(song => {
        const songTitle = song.querySelector('.judul').textContent.toLowerCase();

        if (songTitle.includes(searchTerm.toLowerCase())) {
            song.style.display = 'block';
        } else {
            song.style.display = 'none';
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
