const sortSelect = document.getElementById('sort-song');
const sortButton = document.querySelector('.sort button');

// Fungsi untuk mengurutkan daftar lagu berdasarkan kriteria yang dipilih
function sortSongs() {
    const sortOption = sortSelect.value;
    const songs = Array.from(songList.getElementsByClassName('item_album'));

    // Mengurutkan daftar lagu berdasarkan kriteria yang dipilih
    songs.sort((a, b) => {
        const aText = a.querySelector(`.${sortOption}`).textContent.toLowerCase();
        const bText = b.querySelector(`.${sortOption}`).textContent.toLowerCase();
        
        if (aText < bText) {
            return -1;
        } else if (aText > bText) {
            return 1;
        } else {
            return 0;
        }
    });

    // Menghapus lagu-lagu yang ada di dalam daftar
    while (songList.firstChild) {
        songList.removeChild(songList.firstChild);
    }

    // Menambahkan lagu-lagu yang sudah diurutkan ke dalam daftar
    songs.forEach(song => {
        songList.appendChild(song);
    });
}

// Tambahkan penangan acara untuk saat tombol sort diklik
sortButton.addEventListener('click', function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir
    sortSongs();
});