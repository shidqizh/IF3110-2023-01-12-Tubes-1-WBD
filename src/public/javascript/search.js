const searchInput = document.getElementById('searchInput');
const songList = document.getElementById('songList');

// Fungsi untuk memfilter daftar lagu berdasarkan input pencarian
function filterSongs(searchTerm) {
    // Mengubah daftar lagu menjadi array
    const songs = Array.from(songList.getElementsByClassName('items'));

    // Iterasi melalui setiap lagu dan menyembunyikan/menampilkan sesuai pencarian
    songs.forEach(song => {
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
    filterSongs(searchTerm);
});
